x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x
x   WP Get Attachments (WordPress Plugin)   x
x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x

Contributors: Prashant, Stephen, HTMLPanda
Tags: page, post, attachments, image attachments, wp, wordpress
Requires at least: 1.2.0
Tested up to: 3.5.1
Stable tag: 1.0.0
License: GPLv2 or later

This plugin is used to fetch the image attachments of a post or page 

== Description ==
Many of us need to fetch the image attachments of a post or page and then we have to write code . Here is the plugin to fetch that , just call the function and it will return all image attachments of a post/page that you can fetch to show image .</p>
<p>For more plugins, themes and WordPress support , Please visit http://www.htmlpanda.com/

== Installation ==

Extract the zip file and put wp-get-attachments in wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

call following function  if( function_exists( 'wp_get_attachments' ) )	$attachments = wp_get_attachments();  in any of your template file .

if( function_exists( 'wp_get_attachments' ) )	$attachments = wp_get_attachments( 101 , 20 , 'Sorry nothing found' ); 
this function accepts following three parameters

1. $post_id ( id of the post/page whoose attachments need to be fetched . if used with in standard wordpress loop then it will use current post id ).
2. $num_of_attachments ( number of attachments to be fetched , defaults to all attachments of a post )
3. $no_result_msg ( message to be shown when no attachments is there , defaults is 'No Attachmets found' )

Note: You can call this function with 1,2,3 or none parameters.

== Changelog ==
1.0.0 updated files
