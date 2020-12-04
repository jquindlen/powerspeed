=== PowerSpeed ===
Contributors: blacklodgegames
Donate link: https://learnonline.shop/powerspeed-free-wordpress-theme/
Requires at least: 5.0.0
Tested up to: 5.6
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A Completely Free & Open Source WordPress Theme Using Bootstrap 4.5

== Description ==

https://learnonline.shop/powerspeed-free-wordpress-theme/

Goals for this theme:
 * Above 95 on Google PageSpeed Insights for desktop and mobile (on a fast host)
 * Minimal Javascript and CSS, but when used, positioned in the footer instead of the header
 * Custom fonts self hosted
 * Provide high-end premium theme functionality in a free open source theme that is optimized for performance
 * No plugin dependencies

 == Installation ==

 1. In the WordPress admin panel, click on the Appearance menu, then the "Add New" button.
 1. Click the "Upload Theme" button.
 1. Click the Browse button and find the `powerspeed.zip` file that you downloaded.
 1. Upload `powerspeed.zip` to the `/wp-content/themes/` directory
 1. Preview, customize and/or activate the theme.

PowerSpeed comes with a library of open source fonts.  This makes the theme over 20MB in size currently, which means you may need to increase your maximum upload size or use this alternate install method:

1. Use FTP, SSH or your cpanel or alternative hosting interface to upload files to WordPress installation.
1. Use 7zip or another file archiver, unzip the `powerspeed.zip` to a directory on your computer.
1. Upload the extracted contents of the `powerspeed.zip` archive to the `/wp-content/themes/` directory.
1. Activate the theme through the 'Appearance' menu in WordPress admin panel.
1. Click on the Appearance > Customize menu item to configuring
1. Full documentation here: [ https://learnonline.shop/powerspeed-free-wordpress-theme/]( https://learnonline.shop/powerspeed-free-wordpress-theme/ "https://learnonline.shop/powerspeed-free-wordpress-theme/")

== Frequently Asked Questions ==

= Ask some questions! =

You can leave questions and comments in the documentation page located here: https://learnonline.shop/powerspeed-free-wordpress-theme/ or on the GitHub page here: https://github.com/jquindlen/powerspeed

### Q. If this theme is 100% free, how is it supported and will it be supported long-term?
A. I made this theme for myself, my clients, and my websites so that I had only 1 theme to maintain and support for dozens of websites.  I have been updating this theme for months prior to the first public release and am using it for all new websites as well as converting existing websites that I run to use the theme.  This means that I will continue to update this theme to correct issues, introduce new features and to implement best practices for years to come, regardless of if the theme finds a community outside of my own use.  My free theme is already financially supported through the clients who hire me to build and maintain their websites.

### Q. PowerSpeed is based on Bootstrap 4.5.  What happens when Bootstrap 5, 6, 7, etc are released?
A. Future versions of Bootstrap will be taken on a case by case basis.  Any future versions of Bootstrap that are made accessible through PowerSpeed will be optional, since new major Bootstrap versions have a tendency to break compatibility with previous versions.  That means you can expect Bootstrap 4.x support for the lifetime of this theme unless I'm forced to migrate to a newer version due to security, technical, or compliance issues.

== Changelog ==

= 0.9.113 =
* Fixed: [#21](https://github.com/jquindlen/powerspeed/issues/21) Links in comments were not respecting the settings. It now uses the Customizer settings in Colors > Default Link Color and Colors > Default Link Hover Color for the color of the links in the comments.
* Fixed: [#23](https://github.com/jquindlen/powerspeed/issues/23) The problem was that clicking on any WooCommerce product image in the product page opens the image instead of using the image area.  A number of things were deployed to fix this.  Zoom or Lightbox still don't work, but this is progress.
* Added: [#25](https://github.com/jquindlen/powerspeed/issues/25) The ability to disable author box was added for pages.

= 0.9.112 =
* Fixed: [#17](https://github.com/jquindlen/powerspeed/issues/17) Left sidebar is now mobile friendly, displays after main content not before

= 0.9.111 =
* Fixed: [#18](https://github.com/jquindlen/powerspeed/issues/18) The title of the site now respects the color selected in the Customizer when there is no logo image and the title is turned on.
* Fixed: spelling error in functions.php corrected

= 0.9.110 =
* Fixed: the Featured Posts frontpage display didn't handle improperly sized featured images.  It now enforces the site's thumbnail width.
* Fixed: the search widget was not displaying properly in some configurations
* Updated: Added an approval list to the internal function which loads custom fonts.
* Added: this readme.txt file was severely lacking in sections and full content.  I have added in this changelog, along with installation instructions and other minor detailed\
* Added: screenshot.png was added

= 0.9.109 =
* Initial beta release.
