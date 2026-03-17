# Static Site Cleanup Plan

## Status

**NOT STARTED** — The repo is at the commit "chaos control 2", which is the last known good state. You will have to find the hash for this commit on your own, but I'll refer to it as cccccc2 going forward. A previous attempt (commit `576456a`) was force-pushed but broke 709+ HTML files due to unsafe regex patterns. That commit was reverted with `git reset --hard cccccc2`. The remote (origin/main) still has `576456a` and potentially others — a force push will be needed after completing this work.

## Background

The full-speed.org blog (~1,691 HTML files) was migrated from Movable Type to static HTML for GitHub Pages hosting. The pages retain dead scripts, obsolete markup, and broken third-party references that generate 404s on every page load. This plan removes all dead code and modernizes markup while preserving visual appearance. The plan references primitive tooling for making the fixes; however, you are encouraged to use bun or python3.14t.exe at your disposal to run more advanced scripting.

## Critical Lessons from Previous Failed Attempt

### 1. CRLF line endings
All HTML files have Windows-style `\r\n` line endings. Every regex pattern that matches newlines MUST use `\r?\n`, not just `\n`. Patterns that use `\n` will silently fail to match.

### 2. NEVER use `[\s\S]*?` to match within a single `<script>` block
The non-greedy `[\s\S]*?` will cross `</script>` boundaries and eat entire page content. In the previous attempt, this destroyed 709 files — it matched from a `<script>` tag in `<head>` all the way through `</head>`, `<body>`, nav, content, to a `show_ads.js` script in the sidebar.

**Safe alternatives:**
- Use `[^<]*` to match content that doesn't contain HTML tags
- Match SPECIFIC known content (exact variable names, exact strings)
- Remove each `<script>...</script>` element individually rather than trying to match pairs

### 3. Always verify after each step
After each bulk edit, verify that key structural elements survive:
```bash
for f in about/index.html search/index.html contact/index.html archives/index.html index.html; do
  echo "$f: nav=$(grep -c '<div id="nav">' $f) body=$(grep -c '<div id="body">' $f) html=$(grep -c '</html>' $f)"
done
```
All counts should be 1. If any are 0, the step broke files — restore and fix the pattern.

### 4. Test on a single file first
Before running `find | xargs perl`, test on one file:
```bash
cp about/index.html /tmp/test.html
perl -0777 -pi -e '...' /tmp/test.html
diff about/index.html /tmp/test.html
```

---

## Execution Steps

All steps use `find . -name "*.html" | xargs perl ...` unless noted. Use `-0777` (slurp mode) for multi-line patterns. Commit after completing ALL steps, not after each one.

### Step 1: Remove CodePress script tag (~1,665 files)

```bash
find . -name "*.html" | xargs perl -pi -e 's|<script src="/codepress/codepress\.js" type="text/javascript"></script>\r?\n||g'
```

**Verify:** `grep -rl 'codepress' --include="*.html" .` should return only `archives/2006/05/17/new_feature_related_entries.html` (which mentions CodePress in article content, not as a script tag).

### Step 2: Remove Google Analytics ga.js block (~1,673 files)

The block looks like:
```html
<!-- Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-134264-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script');
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' :
        'http://www') + '.google-analytics.com/ga.js';
    ga.setAttribute('async', 'true');
    document.documentElement.firstChild.appendChild(ga);
  })();
</script>
```

```bash
find . -name "*.html" | xargs perl -0777 -pi -e "s/<!-- Analytics -->\r?\n<script type=\"text\/javascript\">\r?\n  var _gaq = _gaq \\|\\| \\[\\];\r?\n  _gaq\\.push\\(\\['_setAccount', 'UA-134264-6'\\]\\);\r?\n  _gaq\\.push\\(\\['_trackPageview'\\]\\);\r?\n\r?\n  \\(function\\(\\) \\{\r?\n    var ga = document\\.createElement\\('script'\\);\r?\n    ga\\.src = \\('https:' == document\\.location\\.protocol \\? 'https:\\/\\/ssl' : \r?\n        'http:\\/\\/www'\\) \\+ '\\.google-analytics\\.com\\/ga\\.js';\r?\n    ga\\.setAttribute\\('async', 'true'\\);\r?\n    document\\.documentElement\\.firstChild\\.appendChild\\(ga\\);\r?\n  \\}\\)\\(\\);\r?\n<\\/script>\r?\n//g"
```

**Note:** Shell quoting is tricky here. If the above doesn't work, write the regex to a file and use `perl -0777 -pi $(cat pattern.txt)`. Or use a simpler approach: match `<!-- Analytics -->` through the next `</script>` using `[^<]*` (safe because the block contains no HTML tags inside):

```bash
find . -name "*.html" | xargs perl -0777 -pi -e 's/<!-- Analytics -->\r?\n<script type="text\/javascript">\r?\n[^<]*<\/script>\r?\n//g'
```

This is safe because the Analytics block contains NO `<` characters between `<script>` and `</script>`.

**Verify:** `grep -rl '_gaq' --include="*.html" . | wc -l` should return 0. Also check `grep -c '||' about/index.html` returns 0 (no artifacts).

### Step 3: Remove Ad Manager and AdSense blocks (root index.html only)

Read `index.html` and use targeted edits to remove:

1. The `<!-- Ad Manager -->` block:
```html
<!-- Ad Manager -->
<script type="text/javascript" src="https://partner.googleadservices.com/gampad/google_service.js">
</script>
<script type="text/javascript">
  window.google_analytics_uacct = "UA-134264-6";
  GS_googleAddAdSenseService("ca-pub-3036646830213868");
  GS_googleEnableAllServices();
</script>
```

2. The adsbygoogle block (if present):
```html
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- speed-top -->
<ins class="adsbygoogle" ...></ins>
<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
```

**Note:** Check if these blocks still exist in the 82fcb64 version of index.html — they may have been cleaned up in an earlier commit.

### Step 4: Remove AdSense show_ads.js blocks (~1,676 files)

**THIS IS THE MOST DANGEROUS STEP. Follow sub-steps exactly.**

There are two script elements that always appear together as a pair in the sidebar:

**Element 1 — Inline config script:**
```html
<script language="JavaScript" type="text/javascript">
<!--
google_ad_channel ="1620876311";
google_ad_client = 'pub-3036646830213868';
...
// -->
</script>
```

**Element 2 — External show_ads.js script:**
```html
<script language="JavaScript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js"
  type="text/javascript">
</script>
```

Remove them separately:

```bash
# 4a: Remove the show_ads.js external script tag (3 lines)
find . -name "*.html" | xargs perl -0777 -pi -e 's/<script language="JavaScript"\r?\n  src="http:\/\/pagead2\.googlesyndication\.com\/pagead\/show_ads\.js"\r?\n  type="text\/javascript">\r?\n<\/script>\r?\n//g'

# 4b: Remove the inline ad config script (uses [^<]* which is SAFE)
find . -name "*.html" | xargs perl -0777 -pi -e 's/<script language="JavaScript" type="text\/javascript">\r?\n<!--\r?\ngoogle_ad_channel[^<]*?\/\/ -->\r?\n<\/script>\r?\n//sg'

# 4c: Remove alternate inline pattern (about page, single-line comments)
find . -name "*.html" | xargs perl -0777 -pi -e 's/<script type="text\/javascript"><!--\r?\ngoogle_ad_client[^<]*?\/\/--><\/script>\r?\n//sg'
```

**Verify after EACH sub-step:**
```bash
for f in about/index.html search/index.html contact/index.html archives/index.html; do
  echo "$f: nav=$(grep -c '<div id="nav">' $f) body=$(grep -c '<div id="body">' $f)"
done
```
All must show `nav=1 body=1`.

**Verify completion:**
- `grep -rl 'show_ads' --include="*.html" .` — may return one file referencing auctionads.com (not Google), which is fine
- `grep -rl 'google_ad_client' --include="*.html" .` — should only return files in `archives/1970/` (being deleted in a later step)

### Step 5: Remove Amazon Associates script (~1,667 files)

Two patterns exist with variations (`https`/`http`, `fullspeed-20`/`insane-20`, one file has malformed `fullspeed>`):

```bash
# Script tag
find . -name "*.html" | xargs perl -pi -e 's|<script type="text/javascript" src="[^"]*assoc-amazon\.com/s/link-enhancer[^"]*"></script>\r?\n||g'

# Noscript tag
find . -name "*.html" | xargs perl -pi -e 's|<noscript><img src="[^"]*assoc-amazon\.com/s/noscript[^"]*" alt="" /></noscript>\r?\n||g'
```

**Note:** One file may have a malformed tag with `tag=fullspeed>` (missing closing quote). Check for stragglers:
```bash
grep -rl 'assoc-amazon' --include="*.html" .
```

### Step 6: Remove OpenID link tags

Only in root `index.html` and `v3/index.html`. Use targeted edits:
```html
<!-- OpenID -->
<link rel="openid.server" href="/openid/" />
<link rel="openid.delegate" href="/openid/" />
```

Also remove TypeKey openid.delegate lines in other files (~21 files):
```bash
find . -name "*.html" | xargs perl -pi -e 's|<link rel="openid\.delegate"[^>]*/>\r?\n||g'
```

### Step 7: Remove RSD/EditURI link tag

```bash
find . -name "*.html" | xargs perl -pi -e 's|<link rel="EditURI"[^>]*/>\r?\n||g'
```

Also delete `rsd.xml`:
```bash
rm -f rsd.xml
```

### Step 8: Remove commented RDF blocks (~971 files)

```bash
find . -name "*.html" | xargs perl -0777 -pi -e 's/<!--\r?\n<rdf:RDF.*?<\/rdf:RDF>\r?\n-->\r?\n//sg'
```

**Verify:** `grep -rl 'rdf:RDF' --include="*.html" . | wc -l` should return 0.

### Step 9: Upgrade DOCTYPE and meta charset (~1,675 files)

```bash
# DOCTYPE
find . -name "*.html" | xargs perl -pi -e 's|<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">|<!DOCTYPE html>|'

# Fix W4C typo in one file
find . -name "*.html" | xargs perl -pi -e 's|<!DOCTYPE html PUBLIC "-//W4C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">|<!DOCTYPE html>|'

# Meta charset
find . -name "*.html" | xargs perl -pi -e 's|<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />|<meta charset="utf-8">|'

# Simplify html tag (two variants)
find . -name "*.html" | xargs perl -pi -e 's|<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" id="fullspeed">|<html lang="en" id="fullspeed">|'
find . -name "*.html" | xargs perl -pi -e 's|<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">|<html lang="en">|'
```

### Step 10: Remove inline onload handlers (~1,675 files)

```bash
find . -name "*.html" | xargs perl -pi -e 's|<body onload="individualArchivesOnLoad\(commenter_name\)">|<body>|'
```

### Step 11: Fix CSS absolute URLs

Edit `css/speed.css` to replace:
- `url(http://full-speed.org/images/pat_20050222151926.gif)` with `url(/images/pat_20050222151926.gif)`
- `url(http://full-speed.org/images/fullspeed2.png)` with `url(/images/fullspeed2.png)`

### Step 12: Delete products.xml

```bash
rm -f products.xml
```

### Step 13: Clean up speed.js

Replace the entire contents of `js/speed.js` with:

```javascript
function setCookie (name, value, expires, path, domain, secure) {
    var curCookie = name + "=" + encodeURIComponent(value) + (expires ? "; expires=" + expires : "") +
        (path ? "; path=" + path : "") + (domain ? "; domain=" + domain : "") + (secure ? "secure" : "");
    document.cookie = curCookie;
}
function getCookie (name) {
    var prefix = name + '=';
    var c = document.cookie;
    var nullstring = '';
    var cookieStartIndex = c.indexOf(prefix);
    if (cookieStartIndex == -1)
        return nullstring;
    var cookieEndIndex = c.indexOf(";", cookieStartIndex + prefix.length);
    if (cookieEndIndex == -1)
        cookieEndIndex = c.length;
    return decodeURIComponent(c.substring(cookieStartIndex + prefix.length, cookieEndIndex));
}
function deleteCookie (name, path, domain) {
    if (getCookie(name))
        document.cookie = name + "=" + ((path) ? "; path=" + path : "") +
            ((domain) ? "; domain=" + domain : "") + "; expires=Thu, 01-Jan-70 00:00:01 GMT";
}
function popUp(URL,NAME) {
	amznwin= window.open(URL, NAME, 'location=yes,scrollbars=yes,status=yes,toolbar=yes,resizable=yes,width=380,height=450,screenX=10,screenY=10,top=10,left=10');
	amznwin.focus();
}
```

The original file contains IE5/Netscape6 browser detection, TypeKey authentication, and comment form code — all non-functional on a static site.

### Step 14: Remove IE6 CSS hacks from speed.css

Read `css/speed.css` and:

1. **Remove `* html` rules** — these target only IE6.
2. **Merge `html>body` override values into base rules** — `html>body` was used to target non-IE6 browsers with correct values while IE6 got fallback values. Since we no longer support IE6, the `html>body` values should become the base values.

Known `html>body` overrides to merge:
- `#left` width → `519px`
- `#right` margin-left → `520px` (or whatever the `html>body` value is)
- `#ad` width → `129px`
- `#blogroll` width → `129px`
- `#links` width → `129px`
- `.rightbox` width → `128px`
- `.rTitle` width → `129px`

After merging, remove all `html>body` and `* html` rule blocks.

---

## Additional Cleanup

### Delete .htaccess files
```bash
find . -name ".htaccess" -delete
```
Apache-specific; useless on GitHub Pages.

### Delete archives/1970/ directory
```bash
rm -rf archives/1970/
```
These pages were created by mistake (epoch timestamp) and are not linked from anywhere.

### Handle .fs files
The site originally used `.fs` file extensions. Some `.fs` files remain. For each:
- If a corresponding `.html` file exists → delete the `.fs` file
- If no `.html` counterpart exists → rename `.fs` to `.html`

```bash
# Find all .fs files and check for .html counterparts
find . -name "*.fs" | while read f; do
  html="${f%.fs}.html"
  if [ -f "$html" ]; then
    rm "$f"
  else
    mv "$f" "$html"
  fi
done
```

---

## Final Verification

```bash
# Dead scripts removed
grep -rl 'codepress/codepress.js' --include="*.html" . | wc -l  # expect 0
grep -rl '_gaq' --include="*.html" . | wc -l                      # expect 0
grep -rl 'pagead2.googlesyndication.com' --include="*.html" . | wc -l  # expect 0 (or 1 for auctionads)
grep -rl 'assoc-amazon' --include="*.html" . | wc -l              # expect 0
grep -c 'full-speed.org' css/speed.css                             # expect 0

# Key pages intact
for f in index.html about/index.html search/index.html contact/index.html archives/index.html; do
  nav=$(grep -c '<div id="nav">' "$f")
  body=$(grep -c '<div id="body">' "$f")
  html=$(grep -c '</html>' "$f")
  echo "$f: nav=$nav body=$body html=$html"
done
# All should show nav=1 body=1 html=1

# Deleted files
test -f rsd.xml && echo "FAIL: rsd.xml exists" || echo "OK: rsd.xml deleted"
test -f products.xml && echo "FAIL: products.xml exists" || echo "OK: products.xml deleted"
test -d archives/1970 && echo "FAIL: 1970 dir exists" || echo "OK: 1970 dir deleted"
find . -name ".htaccess" | wc -l  # expect 0
find . -name "*.fs" | wc -l       # expect 0
```

## Commit and Push

After all steps pass verification:

```bash
git add -A
git commit -m "Remove dead scripts, obsolete markup, and legacy files

- Remove CodePress, Google Analytics, AdSense, and Amazon Associates scripts
- Remove OpenID, RSD/EditURI link tags and commented RDF blocks
- Upgrade to HTML5 DOCTYPE and meta charset
- Remove onload handlers for non-functional comment forms
- Clean up speed.js (remove IE5/TypeKey/comment code, keep cookies + popUp)
- Remove IE6 CSS hacks from speed.css, fix absolute URLs
- Delete rsd.xml, products.xml, .htaccess files, archives/1970/
- Convert/remove legacy .fs files"

git push --force origin main
```

The force push is needed because the remote has the broken commit `576456a`.
