"""Static site cleanup script. Each function handles one commit's work."""
import os
import re
import glob

def find_html_files():
    """Find all HTML files recursively, including dotfiles."""
    files = glob.glob('**/*.html', recursive=True)
    # glob doesn't match dotfiles like .html — add them manually
    for root, dirs, filenames in os.walk('.'):
        for name in filenames:
            if name == '.html':
                path = os.path.join(root, name)
                if path not in files:
                    files.append(path)
    return files

def commit1_remove_codepress(dry_run=False):
    """Remove CodePress script tag from all HTML files."""
    pattern = '<script src="/codepress/codepress.js" type="text/javascript"></script>\r?\n'
    count = 0
    for f in find_html_files():
        with open(f, 'r', encoding='utf-8', errors='replace') as fh:
            content = fh.read()
        new = re.sub(pattern, '', content)
        if new != content:
            count += 1
            if not dry_run:
                with open(f, 'w', encoding='utf-8', newline='') as fh:
                    fh.write(new)
    print(f"{'Would modify' if dry_run else 'Modified'}: {count} files")

def bulk_replace(pattern, replacement, dry_run=False, files=None):
    """Apply a regex replacement across all HTML files."""
    count = 0
    for f in (files or find_html_files()):
        with open(f, 'r', encoding='utf-8', errors='replace') as fh:
            content = fh.read()
        new = re.sub(pattern, replacement, content)
        if new != content:
            count += 1
            if not dry_run:
                with open(f, 'w', encoding='utf-8', newline='') as fh:
                    fh.write(new)
    print(f"{'Would modify' if dry_run else 'Modified'}: {count} files")

def commit2_remove_analytics(dry_run=False):
    """Remove Google Analytics ga.js block."""
    # <!-- Analytics --> through </script>\n
    pattern = r'<!-- Analytics -->\r?\n<script type="text/javascript">\r?\n[^<]*</script>\r?\n'
    bulk_replace(pattern, '', dry_run)

def commit4_remove_adsense(dry_run=False):
    """Remove all AdSense show_ads.js blocks."""
    count = 0
    for f in find_html_files():
        with open(f, 'r', encoding='utf-8', errors='replace') as fh:
            content = fh.read()
        # Remove entire <div id="ad">...</div> <!-- ad --> block
        new = re.sub(
            r'\r?\n<div id="ad">.*?</div> <!-- ad -->',
            '', content, flags=re.DOTALL)
        # Remove standalone ad config script blocks (in <head> or inline)
        # Pattern: <script...>..google_ad_client..</script>\r?\n<script..show_ads.js..></script>
        new = re.sub(
            r'<script[^>]*>\r?\n?(?:<!--\r?\n)?google_ad_client[^<]*</script>\r?\n'
            r'<script[^>]*\r?\n?\s*src="[^"]*show_ads\.js"[^>]*>\r?\n</script>',
            '', new)
        # Remove head-area ad channel config scripts (no show_ads pair)
        new = re.sub(
            r'<script language="JavaScript" type="text/javascript">\r?\n<!--\r?\ngoogle_ad_channel[^<]*</script>\r?\n',
            '', new)
        if new != content:
            count += 1
            if not dry_run:
                with open(f, 'w', encoding='utf-8', newline='') as fh:
                    fh.write(new)
    print(f"{'Would modify' if dry_run else 'Modified'}: {count} files")

    # Final check
    import subprocess
    result = subprocess.run(['grep', '-rl', 'google_ad_client', '--include=*.html'], capture_output=True, text=True)
    remaining = [f for f in result.stdout.strip().split('\n') if f]
    if remaining:
        print(f"WARNING: {len(remaining)} files still have google_ad_client:")
        for f in remaining:
            print(f"  {f}")
    else:
        print("Verified: 0 files contain google_ad_client")

def commit5_remove_amazon(dry_run=False):
    """Remove Amazon Associates script and noscript tags."""
    # Script tag - handles fullspeed-20, insane-20, and malformed fullspeed> variants
    script_pattern = r'<script type="text/javascript" src="https?://www\.assoc-amazon\.com/s/link-enhancer\?tag=[^<]*</script>\r?\n'
    # Noscript tag - handles fullspeed-20 and insane-20
    noscript_pattern = r'<noscript><img src="https?://www\.assoc-amazon\.com/s/noscript\?tag=[^"]*" alt="" /></noscript>\r?\n'
    count = 0
    for f in find_html_files():
        with open(f, 'r', encoding='utf-8', errors='replace') as fh:
            content = fh.read()
        new = re.sub(script_pattern, '', content)
        new = re.sub(noscript_pattern, '', new)
        if new != content:
            count += 1
            if not dry_run:
                with open(f, 'w', encoding='utf-8', newline='') as fh:
                    fh.write(new)
    print(f"{'Would modify' if dry_run else 'Modified'}: {count} files")

if __name__ == '__main__':
    import sys
    cmd = sys.argv[1] if len(sys.argv) > 1 else ''
    dry = '--dry-run' in sys.argv
    if cmd == 'commit1':
        commit1_remove_codepress(dry_run=dry)
    elif cmd == 'commit2':
        commit2_remove_analytics(dry_run=dry)
    elif cmd == 'commit4':
        commit4_remove_adsense(dry_run=dry)
    elif cmd == 'commit5':
        commit5_remove_amazon(dry_run=dry)
