=== Shortcode for Current Date ===
Contributors: imtiazrayhan, un_rick, wpcdplugin, ultimateblocks, wpleaders1, wptb, istiakrayhan
Donate Link: https://www.paypal.me/imtiazrayhan/
Tags: shortcode, current date, month, year
Requires at least: 4.0
Tested up to: 6.0
Stable tag: 2.1.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Insert current Date, Month or Year anywhere in your WordPress site with a simple shortcode.

== Description ==

**Shortcode for Current Date** enables you to put current date, current month or current year anywhere in your WordPress site with a simple shortcode.

Just use the shortcode **[current_date]** and when the post or page is displayed, **[current_date]** will be replaced by the current date. And the date will be translated according to your site settings.

By default it will show a date like this: 7th May 2017

But you can customize it to your needs. To do that, you'll need to pass the date format using an attribute with the shortcode.
Here are some examples:

**[current_date format='d/m/Y']** will show the date like this: **07/05/2017**
**[current_date format='F d, Y']** will show the date like this: **May 07, 2017**

If you don't understand how this formatting works, that's totally okay.

## Gutenberg Block

If you are using Gutenberg editor, there's a Current Date block you can use to insert the current date in your posts/pages. 

If you use the block, you will not have to use the shortcode.

When you insert the block, on the right sidebar under block options you will see a field to put the format for the date.

## Styling

You can use 'size' and 'color' attributes to style the date.

For example, [current_date format='d/m/Y' size='20px' color='#FF0000']


= What's Next =

If you like this plugin, then consider checking out our other plugins:

* <a href="https://wordpress.org/plugins/wp-table-builder/" target="_blank">WP Table Builder</a> - Drag and Drop Table Builder Plugin. Build Responsive Tables insanely easily.
* <a href="https://wordpress.org/plugins/ultimate-blocks/" title="Ultimate Blocks">Ultimate Blocks</a> - Create Better Content with Gutenberg + Ultimate Blocks. Essential Collection of Blocks for Bloggers and Affiliate Marketers.
* <a href="https://wordpress.org/plugins/wp-coupons-and-deals/" title="WP Coupons and Deals">WP Coupons and Deals</a> - Make More Money from Your Affiliate Coupons and Deals.

Visit <a href="http://www.wpleaders.com/" rel="friend" title="WPLeaders">WPLeaders</a> to learn more about WordPress, WordPress themes and plugins.

== Installation ==
This is one way you can install the plugin:

1. Download the plugin from WordPress plugin repository and upload the zip file in 'Add New' under 'Plugins'.
2. Activate the plugin.

Another way :

1. From WordPress dashboard, go to Add New under Plugins section.
2. Search for  'Shortcode for Current Date'
3. From search results, click on  'Shortcode for Current Date'.
4. Click on Install button and activate the plugin.

== Changelog ==

= 2.1.7 =

* Security updates.

= 2.1.5 = 

* Security issue fix.

= 2.1.4 =

* FIX: Style.css not found issue.

= 2.1.3 =

* FIX: Dependency missing issue.
* FIX: Error when Gutenberg is not available.
* FIX: Deprecated PHP notice.

= 2.1.2 =

* ADD: Gutenberg Block for Adding Current Date.

= 2.1.1 =

* FIX: Preserving old shortcode output.

= 2.1.0 =

* ADD: Option to Control Font Size.
* ADD: Option to Control Font Color.
* ADD: CSS Class to Control Style Globally.

= 2.0.8 =

* Tested with WordPress 5.4.

= 2.0.7 =

* Tested with latest WordPress version.
* Removed admin notice about other plugin.

= 2.0.6 =

* Tested with WordPress 5.2.

= 2.0.5 =
* Tested with WordPress 5.1.

= 2.0.4 =

* Tested with WordPress 5.0.3.
* Updated some links.

= 2.0.3 =

* Used date_i18n() function to make the date translated according to site settings. Thanks to @themezee

= 2.0.1 = 

* Tested with WordPress 5.0.
* Settings and Welcome page Changes.

= 2.0.0 =

* Tested with WordPress 5.0.

= 1.2.5 = 

* Fix - Day Number of the Year bug.

= 1.2.4 =

* Add - Shortcode execution in Post Title.

= 1.2.3 =

* Fixed a bug.
* Added WP current_time funtion instead of date function to retrieve WP time instead of server time. Thanks to Rick Carter.

= 1.2.2 =

* Tested with WordPress 4.9

= 1.2.1 =

* Fixed a bug.

= 1.2 =

* Added a Menu item to quickly access the date formats.

= 1.1 =

* Added a welcome page.

= 1.0 =

* Initial Release
