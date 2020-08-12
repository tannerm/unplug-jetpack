=== Unplug Jetpack ===
Contributors:      tannerm
Tags:              jetpack
Requires at least: 3.5.1
Tested up to:      5.5
Stable tag:        1.0.0
License:           GPLv2 or later
License URI:       http://www.gnu.org/licenses/gpl-2.0.html

Use Jetpack without needing to connect to WordPress.com

== Description ==
Jetpack is an amazing plugin with many great features. Sometimes, however, you just want to use a specific feature from Jetpack and don't want to go through the hassle of connecting Jetpack to your WordPress.com user account. This is where this plugin comes in handy.

Just install this plugin and you will get access to all of the Jetpack modules that do not require a connection to WordPress.com.

If you find that the module you are interested in is not available after installing this plugin, that is an indication that a WordPress.com account is required for that module. These include Site stats, Publicize, and a few others.


== Installation ==

= Manual Installation =

1. Upload the entire `/unplug-jetpack` directory to the `/wp-content/plugins/` directory.
2. Activate Unplug Jetpack through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==


== Screenshots ==


== Changelog ==

= 1.0.0 =
* Replaced `jetpack_development_mode` hook with `jetpack_offline_mode` to support Jetpack versions 8.8+

= 0.1.0 =
* First release

== Upgrade Notice ==

= 0.1.0 =
First Release