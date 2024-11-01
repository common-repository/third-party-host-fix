=== Plugin Name ===
Contributors: Drenboy, nronksr
Tags: workaround, Cannot find Content directory, Unable to locate WordPress Root directory, Plugin Installation, Theme Installation, Wordpress AutoUpdate
Requires at least: 2.7
Tested up to: 3.0.4
Stable tag: trunk

Fixes Wordpress' inability to find the install directory which prevents you from easily downloading and installing other plugins and themes.

== Description ==

Fixes Wordpress' inability to find the install directory when it's not in the root folder. This includes hosting services such as 5Gigs and Bytehost. This is a plugin workaround of the "Cannot find Content directory (WP-Content)" or "Unable to locate WordPress Root directory. Installation Failed" errors to get the following built in features working : Plugin Installation, Theme Installation and Wordpress AutoUpdate.

== Installation ==

Installation Instructions.

1. Download and uncompress the plugin.
2. Upload the entire plugin folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Enjoy the restored functionality!

== Upgrade Notice ==
The 1.1 upgrade for the Third Party Host Fix plugin fixes a bug which breaks RSS feeds.

== Frequently Asked Questions ==

= Has this been tested extensively on all hosted providers? =

No, but it works pretty well for 5Gigs and Bytehost.

= Has this been tested for *insert host provider name*? =

Probably not, but give this a shot.

= Will this break LightBox or other plugins? =

So far I've tested with plugin-intensive blogs and no, LightBox doesn't break.

= This Plugin breaks XXXX plugin, which I need! =

This is just a workaround to enable certain features like theme and plugin downloads, wordpress upgrades, etc. If there is a 'conflict', simply disable this plugin when it's not required.

== Screenshots ==

1. This is BEFORE the plugin installation showing a theme failing installation from the "Add New Themes" feature.
2. This is BEFORE the plugin installation showing a plugin failing installation from the "Add New" feature.
3. After enabling the plugin, theme installation is a breeze.
4. After enabling the plugin, other plugins can be installed via the built-in "Add New" feature.

== Changelog ==

= 1.0.0 =
* First version to fix issues on 5Gigs and Bytehost

= 1.1.0 =
* Fixed a bug where a leading space character breaks RSS feeds. Thanks nronksr from the forums!
