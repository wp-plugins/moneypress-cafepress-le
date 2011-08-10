=== MoneyPress : CafePress LE ===
Plugin Name: MoneyPress : CafePress LE
Contributors: cybersprocket
Donate link: http://www.cybersprocket.com/products/wpquickcafepress/
Tags: plugin,post,page,cafepress,affiliate,shirts,pod,print-on-demand,store,products,ecommerce,revenue sharing,storefront,cj,commission-junction
Requires at least: 2.6
Tested up to: 3.2.1
Stable tag: 3.56

Display CafePress products on your pages and posts with a simple short code. Affiliate enabled.  This is our FREE light edition (LE) release.

== Description ==

This plugin allows you to quickly and easily display products from CafePress on any page or post via a simple shortcode.  Install the plugin and you can add products to your existing blog posts or pages just be entering a shortcode. Multiple configuration options allow you to customize the display.  If you are a CafePress retailer, this plugin is for you!

Note: This is our light edition (LE) product which is free with no license or license keys required.  The standard edition product, MoneyPress : CafePress Edition version 4 is in development and will be out soon.  You can learn more about at the [MoneyPress CafePress Edition](http://www.cybersprocket.com/products/wpquickcafepress/) product page.

= Features =

* Uses your own API key.
* No revenue sharing, you keep 100% of your sales.
* Built in affiliate tracking for Commission Junction affiliates.

= Want More? Try Our Standard Edition =

Version 3.8 of [MoneyPress CafePress Edition](http://www.cybersprocket.com/products/wpquickcafepress/) has just been released with a dozen new updates. 

Some of the features in the standard edition that are not found in the LE version include:

* [Theme System](http://redmine.cybersprocket.com/projects/wpcafepress/wiki/Themes) : Use one of our basic themes including multi-column output or easily create and add your own.
* [More Settings](http://redmine.cybersprocket.com/projects/wpcafepress/wiki/Setttings) : You can now set which product lookup method is used to retrieve listings from CafePress.
* Bug Fixes: Latest bug fixes come out on the standard edition first, LE is 2-4 weeks behind.


= We Can Customize This Plugin For You! =

Cyber Sprocket can provide modifications to the plugin to make it the perfect solution for your site.  
We charge $60/hour to create custom additions that we roll into the next product release. 
You get exactly the plugin you want and will have the benefit of having a mainstream product release.
You get the benefit of getting our future upgrades without having to re-apply your patches.

Learn more at: http://www.cybersprocket.com/services/wordpress-developers/

= Related Links =

* [MoneyPress CafePress Standard Edition](http://www.cybersprocket.com/products/wpquickcafepress/)
* [Other Cyber Sprocket Plugins](http://wordpress.org/extend/plugins/profile/cybersprocket/) 
* [Our Facebook Page](http://www.facebook.com/cyber.sprocket.labs)

== Installation ==

= Requirements =

* PHP 5.1+
* SimpleXML enabled

= How To Install =

The best way to install and update is to search "MoneyPress CafePress LE" in WordPress and install or update from there.

To do it manually:

* Download the zip file from the WordPress Extensions site.
* Upload the zip file into WordPress via "upload plugins".
* Get your API key from the CafePress developer site.
* Enter your CafePress Developer API key in the CafePress settings page in WordPress.

== Frequently Asked Questions ==

= What percentage of my sales does Cyber Sprocket keep? =

None.  Everything you earn through this plugin is yours, we don't siphon off 
any of your sales or earn anything outside of our one-time license fee.

= How do I get my CafePress API Key? =

Sign up at <a href="http://developer.cafepress.com/">Developer.cafepress.com</a> 
and fill out the Register My Application form.  It takes less than 5 minutes and 
is easier than setting up your original CafePress store.

= What type of support do I get? =

Our light edition (LE) plugins are unsupported.   Paid support options are
available.  Support rates are $120/hour prepaid.

= Will you customize the plugin for me? =

If you want a modification and need it in a hurry, contact us for a quote on
getting this done.  Any work we can re-use and share with the communinty as
part of main plugin can usually be completed in a few weeks.  We charge $60/hr
for this work with most projects running 6-10 hours.    If you want a private
modification we charge $120/hr for the work.

= Who Is Cyber Sprocket Labs? =

Cyber Sprocket Labs is a software consulting firm.  We develop custom complex
web applications, mobile applications, and desktop applications for our clients.
If you are looking for help developing and deploying your application, contact
us for a quote.

= How can i translate the plugin into my language? =

* Find on internet the free program POEDIT, and learn how it works.
* Use the .pot file located in the languages directory of this plugin to create or update the .po and .mo files.
* Place these file in the languages subdirectory.
* If everything is ok, email the files to lobbyjones@cybersprocket.com and we will add them to the next release.
* For more information on POT files, domains, gettext and i18n have a look at the I18n for WordPress developers Codex page and more specifically at the section about themes and plugins.

== Screenshots ==

1. The plugin in action.
2. The settings menu in the admin panel.
3. Entering a license key and API key via admin panel.
4. The email you will receive upon purchasing the plugin.
5. Getting a CafePress API key from CafePress.


== Changelog ==

= v3.56 (August 2011) =

* Elminate errors on servers with exec() disabled on php.

= v3.55 (July 14th 2011) = 

* New zoom icon on product display output.
* Added div and html layout structure for easier custom CSS work.
* Update admin interface icons / cleanup on UI.

= v3.54 (July 11th 2011) = 

* Fixed uninitalized variable error.
* Fixed bug in SimpleXML check.

= v3.51 (July 2011) =

* Tags can now be uppercase, lowercase, or mixed case for legacy support (QuickCafe)
* Various bug fixes.
* Added core updates from standard edition version.
* Test with WordPress 3.2

= v3.4 (January 1st 2011) =

* Test with WordPress 3.0.4
* Update readme file.

= v3.3 (December 12,2010) =

* Missed a couple of things...
* Quick patch to fix [quickcafepress] errors
* Store ID and Section ID errors when using input arrays

= v3.2 (December 12,2010) =

* Fixed a problem with [quickcafepress] tag on legacy systems
* Fixed cache setting issue (was not saving cache length)
* Extended debugging mode output on product lookups.
* Added proper CSS formatting for new div tags

= v3.0 (November 29th, 2010) =

* Major update move CafePress Edition to a standard codebase.
* The selling price display can now be set to match your locale.
* Better inline help on settings page.
* Ability to specify which "page" of products to return via page="#" qualifier.
* Ability to set default section ID or specify in short code.
* Ability to set default store ID or specify in short code.
* New shortcodes, can be specified as a single shortcode entry, no URL required with store ID set.
* Updated the licensing code and product fetching code with a more robust connection algorithm.
* Added a debugging flag to the settings page to help when things go awry.

= v2.2 (June 10th, 2010) =

* Minor updates extending help.
* Better license lookup.
* Eliminated missing cache message for regular users.

= v2.0 (May 31st, 2010) =

* Earn revenue on ANY CafePress store via the affiliate program.
* Improved data retrieval for faster response and fewer "no products found" messages.
* Eliminated basic error messages for users,errors only appear for admins.
* Improved error reporting.

= v1.2.2 (May 7th, 2010) =
* Fixed loading of thickbox (lightbox image zooming)
* Correctly formatted the readme.txt file

= v1.2.1 (May 3rd, 2010) =
* Try to create cache directory if it does not exist
* Better error handling concerning permissions of cache directory
* Updated product description

= v1.2 (April 19th, 2010) =
* Minor documentation fixes
* Added "demo mode" for non-licensed copies
* Added notification for missing license info
* Added license verification
* Restyled options page to look much nicer

= v1.1 (March 15th, 2010) =
* Initial release (only released on cybersprocket.com)

