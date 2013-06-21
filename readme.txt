=== Tag to AmazonMP3 Shortcode ===
Author: Kevin Heath (ypraise.com)
Plugin URI: http://ypraise.com/
Donate link: http://ypraise.com/
Tags: amazon, mp3, music
Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: 1.0
Version: 1.0
License: GPLv2 or later


== Description ==

This plugin produces a shortcode that will take your tags and look for related music tracks on the Amazon.co.uk download store. You can add your amazon affiliate id and set a default node for music genre. 

It is limited to the UK version of Amazon at the moment. I'm sure osmeone will be able to fork this plugin off for other amazon stores.

Just fill in the settings page and then place the shortcode where you want, it will pull the tags of the post to use as keyword seach. I use this on my music video sharing site where I only use tags for the names of the artists. If there is no music by the artist it will try and pull in tracks from your default node.

Demo site: http://ypraise.com - the MP3 player is about half way down the right sidebar. Go to one of the artists and you'll see the mp£  change according to the tag which I have set as artist name. When it is a category with no tag then the plugin will try return music tracks from your default node.

To Do: I plan on adding a drop down option to change the amazon store from UK to COM (and others in the future), in the mean time you can hack the php file by changing the javascript source file from http://wms.assoc-amazon.co.uk/20070822/GB/js/swfobject_1_5.js to http://wms.assoc-amazon.com/20070822/US/js/swfobject_1_5.js

THe php file is pretty small and the change is close to the bottom of the code so it should not be too hard to do. If you make the change remeber you need to use the US nodes number rather than the UK nodes.


== Installation ==

Manual install: Unzip the file into your WordPress plugin-directory. Activate the plugin in wp-admin.

Install through WordPress admin: Go to Plugins > Add New. Search for "Tag to AmazonMP3". Locate the plugin in the search results. Click "Install now". Click "Activate".

== Frequently Asked Questions ==

= How do I use this plugin? =

Go to the settings page and fill in the required information: 
1. Your affiliate id (UK Amazon support only)
2. Add the MP3 player size - use the sizes that are currently supported by Amazon.
3. Choose the node for the music genre.

Add the shortcode [amaMP3] where you want the player to be displayed. 

You can make your theme shortcode friendly in widget text boxes by adding the following to your theme functions file:
 add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');


Why use tags and not a custom field?

I  already had lots of pages on my web site and using a custom field would have meant having to go through all my established pages to add the artist to the custom field. As my tags are already just the artist it seemed logical for my situation to use tags and make the plugin work with previous posts.



== Screenshots ==

1. Player displayed in sidebar.


== Changelog ==



= 1.0 =
Initial release.
