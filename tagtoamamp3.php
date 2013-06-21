<?php
/*
Plugin Name: Tag to Amazon MP3 shortcode
Plugin URI: http://ypraise.com/
Description: Convert post tags to keyword for Amazon.co.uk search of MP3 downloads.
Version: 1.0
Author: Kevin Heath
Author URI: http://ypraise.com/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

// set up menu and options page.

add_action( 'admin_menu', 'amaMP3_menu' );


function amaMP3_menu() {
	add_options_page( 'amaMP3 settings', 'Tag to Amazon', 'manage_options', 'amaMP3_uk', 'amaMP3_options' );
}

add_action ('admin_init', 'amaMP3_register');

function amaMP3_register(){
register_setting('amaMP3_options', 'amaMP3_affid');
register_setting('amaMP3_options', 'amaMP3_node');
register_setting('amaMP3_options', 'amaMP3_sizew');
register_setting('amaMP3_options', 'amaMP3_sizeh');
}

function amaMP3_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	?>
	<div class="wrap">
	<h2>Tag to Amazon MP3 Shortcode</h2>
	<div id="donate_container">
      Help keep this plugin in development and improved by using my Amazon links to make your purchases. Your commission can help support all my free Wordpress plugins. <a href="http://ypraise.com/">My Amazon page</a>
    </div>
	
	<p><form method="post" action="options.php">	</p>
	<p>Settings for Tag to Amazon MP3:</p>
	
	<?php
	
	settings_fields( 'amaMP3_options' );
	
?>
<p>Add your Amazon.co.uk affiliate id (UK Amazon only): <input type="text" size="20" name="amaMP3_affid" value="<?php echo get_option('amaMP3_affid'); ?>" /></p>
<p>Add your default node id: <input type="text" size="20" name="amaMP3_node" value="<?php echo get_option('amaMP3_node'); ?>" /></p>
<p>Find your music genre node id from: <a href="http://uk.browsenodelookup.com/77197031.html" rel="nofollow">http://uk.browsenodelookup.com/77197031.html</a> the node id is the number.</p>

<p>Width of widget (use the first number of the valid combinations below): <input type="text" size="20" name="amaMP3_sizew" value="<?php echo get_option('amaMP3_sizew'); ?>" /></p>
<p>Height of widget (use the second number of the valid combinations below):  <input type="text" size="20" name="amaMP3_sizeh" value="<?php echo get_option('amaMP3_sizeh'); ?>" /></p>


<p>Valid combinations of Width x Height are: 250 x 250, 336 x 280, 120 x 300, 160 x 300, 125 x 125, 120 x 90, 234 x 60 </p>

<p> Use the shortcode [amaMP3] to display the MP3 player and start earning commissions</p>

 <?php


	
 submit_button();
echo '</form>';

	
	echo '</div>';
}



// lets build the shortcode



function amaMP3($atts) {

$affid = get_option('amaMP3_affid');
$amanode = get_option('amaMP3_node');
$amawidth = get_option('amaMP3_sizew');
$amaheight = get_option('amaMP3_sizeh');

?>


<?php 
$posttags = get_the_tags();
foreach($posttags as $tag) { $keywords[] = $tag->name; }
$page_keywords = implode(',',$keywords);
?>
<script type='text/javascript'>
var amzn_wdgt={widget:'MP3Clips'};
amzn_wdgt.tag='<?php echo $affid ?>';
amzn_wdgt.widgetType='SearchAndAdd';
amzn_wdgt.browseNode='<?php echo $amanode ?>';
amzn_wdgt.keywords='<?php echo $page_keywords ?>';
amzn_wdgt.title='What I\'ve been listening to lately...';
amzn_wdgt.width='<?php echo $amawidth ?>';
amzn_wdgt.height='<?php echo $amaheight ?>';
amzn_wdgt.shuffleTracks='True';
amzn_wdgt.marketPlace='GB';
</script>
<script type='text/javascript' src='http://wms.assoc-amazon.co.uk/20070822/GB/js/swfobject_1_5.js'>
</script>


<?php

}

add_shortcode('amaMP3', 'amaMP3');  
?>