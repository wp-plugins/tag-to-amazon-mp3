=== Tag to AmazonMP3 Shortcode ===
Author: Kevin Heath (ypraise.com)
Plugin URI: http://ypraise.com/2013/wordpress/wordpress-2/tags-to-amazon-mp3-plugin/
Donate link: http://ypraise.com/2013/wordpress/plugins/wordpress-2/suport-my-free-wordpress-plugins/
Tags: amazon, mp3, music, affiliate
Requires at least: 3.0
Tested up to: 3.5.2
Stable tag: 1.1
Version: 1.1
License: GPLv2 or later


== Description ==

This plugin produces a shortcode that will take your tags and look for related music tracks on the Amazon download store. You can add your amazon affiliate id and set a default node for music genre. 

You can choose between UK or US Amazon stores.

Just fill in the settings page and then place the shortcode where you want, it will pull the tags of the post to use as keyword seach. I use this on my music video sharing site where I only use tags for the names of the artists. If there is no music by the artist it will try and pull in tracks from your default node.

Demo site: http://ypraise.com - the MP3 player is about half way down the right sidebar. Go to one of the artists and you'll see the mp£  change according to the tag which I have set as artist name. When it is a category with no tag then the plugin will try return music tracks from your default node.




== Installation ==

Manual install: Unzip the file into your WordPress plugin-directory. Activate the plugin in wp-admin.

Install through WordPress admin: Go to Plugins > Add New. Search for "Tag to AmazonMP3". Locate the plugin in the search results. Click "Install now". Click "Activate".

== Frequently Asked Questions ==

= How do I use this plugin? =

Go to the settings page and fill in the required information: 
1. Your affiliate id 
2. Add the MP3 player size - use the sizes that are currently supported by Amazon.
3. Choose the node for the music genre.
4. Choose the amazon store to use.

Add the shortcode [amaMP3] where you want the player to be displayed. 

You can make your theme shortcode friendly in widget text boxes by adding the following to your theme functions file:
 add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');


Why use tags and not a custom field?

I  already had lots of pages on my web site and using a custom field would have meant having to go through all my established pages to add the artist to the custom field. As my tags are already just the artist it seemed logical for my situation to use tags and make the plugin work with previous posts.



== Screenshots ==

1. Player displayed in sidebar.


== Changelog ==

= 1.1 =
Added support for both UK and US Amazon MP3 download stores.

= 1.0 =
Initial release.
