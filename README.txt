=== Vertex Solutions ===
Version: 2.0.0

A Full Site Editing WordPress block theme converted from the supplied Vertex Solutions HTML design.

EDITABLE CONTENT
-----------------
The homepage is a registered block pattern. Open Appearance > Editor > Patterns > Theme Patterns > Vertex Solutions > Homepage to edit the homepage content. All major headings, paragraphs, buttons, links, statistics, service cards, about content, projects, testimonials and contact copy are Core Blocks and can be edited in the Site Editor.

Header and footer are also block patterns/template parts. Edit them from Appearance > Editor > Patterns or by editing the corresponding template part.

Navigation is the native WordPress Navigation block. Set the links from Appearance > Editor > Navigation.

LOGO
----
Use the native Site Logo block. Site title is the native Site Title block.

CONTACT FORM 7
--------------
Contact Form 7 is optional. Install it separately and replace the contact placeholder with a Shortcode block containing your CF7 shortcode. The theme does not process form submissions itself.

LOCAL ASSETS
------------
Inter font files are bundled locally. No Google Fonts, Tailwind CDN, Font Awesome CDN, jsDelivr, unpkg or other external CDN is required.

TEMPLATES
---------
front-page.html, home.html, page.html, single.html, archive.html, search.html, 404.html and index.html are included.

TRANSLATION
-----------
The PHP-generated pattern strings use the vs text domain. The theme calls load_theme_textdomain() and is structured for translation tooling. Core Block content can also be edited/transformed by site owners through the editor.

LICENSE
-------
Theme code: GPL-2.0-or-later. Inter is distributed under its applicable open-source license; see licenses/Inter-OFL.txt.


IMPORTANT HOMEPAGE / FSE
This is a Full Site Editing theme. The front page is rendered by templates/front-page.html, not homepage.php directly.
The homepage content is loaded from patterns/homepage.php using the vs/homepage block pattern.
Header/footer are template parts in parts/header.html and parts/footer.html.
If the Site Editor has previously saved a customized template, that database version takes precedence over the theme file.


HOMEPAGE SECTIONS
-----------------
The homepage is organized into separate reusable block patterns in the patterns/ directory:

- section-hero.php
- section-services.php
- section-about.php
- section-projects.php
- section-testimonials.php
- section-contact.php

The homepage pattern (patterns/homepage.php) assembles these six section patterns in order.
Each section can be inserted separately from the block inserter and edited with WordPress blocks.
Code formatting has been cleaned up with consistent indentation and spacing for easier maintenance.


ABOUT SECTION TABS
------------------
The About section includes three interactive tabs: Our Mission, Our Vision, and Our Values.
Tab styles are in style.css and tab behavior is in assets/js/theme.js.
To change the tab labels or content, edit the matching markup in patterns/section-about.php.


HEADER, FOOTER, AND SOCIAL ICONS
- The Header and Footer are registered template parts in theme.json and are editable in Appearance > Editor > Design > Template Parts (wording can vary by WordPress version).
- The footer includes editable WordPress Social Icons blocks for LinkedIn, Facebook, Instagram, and X. Select each icon in the Site Editor to replace its URL or remove it; use the plus button to add other social services. The URLs currently point to the general social platforms and should be replaced with your own profile URLs.
- If an old saved template still overrides the theme files, open Appearance > Editor > Templates, select the Front Page template, use the three-dot menu and choose Clear customizations/Reset (if available), then save. Also check the Header and Footer template parts in the Site Editor.
About tabs: the tab labels, headings, paragraphs, and lists are standard Gutenberg blocks. Open Appearance > Editor, open the Front Page template, and edit each tab label/content directly. All three panels remain visible in the editor; only one is shown at a time on the front end.
