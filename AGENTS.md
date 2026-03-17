# Full Speed (full-speed.org)

## Overview

This is the document root for **https://full-speed.org/**, a personal blog by Scott Johnson. The site has been active since 2003.

## History

1. **MovableType era** — Originally a MovableType blog
2. **Standalone PHP era** — Converted to a standalone PHP site with static HTML/PHP pages (current state of the repo)
3. **Static site / GitHub Pages** — Next iteration, beginning 2026-03-17. Goal is to convert to a fully static site hosted on GitHub Pages.

## Current Site Structure

- **`index.php`** — Homepage; hand-written HTML with PHP includes, shows recent posts and an "Older Entries" list
- **`archives/`** — Blog posts organized by date (`YYYY/MM/DD/slug.php`) and by category. ~1,667 PHP files spanning 2003–2012.
- **`css/speed.css`** — Main stylesheet
- **`js/speed.js`** — Main JS file
- **`about/`**, **`contact/`**, **`search/`**, **`links/`** — Static section pages
- **`images/`**, **`files/`**, **`misc/`** — Static assets and miscellaneous content
- **`v3/`** — An older CSS version
- **`fsrss2-p.xml`** — RSS feed
- **`robots.txt`**, **`speedsitemap.xml`** — SEO files

## Key Details

- Posts are XHTML 1.0 Transitional with inline PHP includes
- URL structure: `/archives/YYYY/MM/DD/slug.php` (date-based) and `/archives/category/` (category-based)
- The site uses Google AdSense and Google Analytics (legacy `ga.js`)
- Copyright is Creative Commons BY-ND 3.0
- Amazon Associates affiliate tag: `fullspeed-20`

## Conversion Notes

When converting to a static site for GitHub Pages:
- All `.php` files need to become `.html` (or be processed by a static site generator)
- PHP includes (e.g., `<?php include("links/index.html"); ?>`) must be resolved
- The date-based archive URL structure (`/archives/YYYY/MM/DD/slug`) should be preserved for link compatibility
- Category archive pages also exist under `/archives/` (e.g., `/archives/css/`, `/archives/design/`)
- Legacy ad scripts and analytics can be removed or updated
