=== Plugin Name ===
Contributors: szaranger
Donate link: http://example.com/
Tags: notice
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This enables the admin to post a message (HTML or just text) on top of a post. 

== Description ==

This enables the admin to post a message (HTML or just text) on top of a post. The admin can choose specific categories, Ideal for obsolete\deprecation messages for tutorials or technical posts.
On edit mode, this plugin adds a widget that displays an input field on the bottom of your post, allowing you to add a temporary notice.
You can remove or change the notice anytime.

== Installation ==

1. Upload `blog-post-notice.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('blog-post-notice_hook'); ?>` in your templates

== Frequently Asked Questions ==

= Does the notice timeout automatically? =

The notice doesn not time out, the editor has to manually delete or change the notice.


== Screenshots ==

 1. The notice displays on the top of your post.
 2. You can edit your notice.

== Changelog ==

= 1.0 =
* First version

== Upgrade Notice ==

= 1.0 =
* First version
