"""Static site cleanup script. Each function handles one commit's work."""
import os
import re
import glob

def find_html_files():
    """Find all HTML files recursively."""
    return glob.glob('**/*.html', recursive=True)

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

if __name__ == '__main__':
    import sys
    cmd = sys.argv[1] if len(sys.argv) > 1 else ''
    dry = '--dry-run' in sys.argv
    if cmd == 'commit1':
        commit1_remove_codepress(dry_run=dry)
