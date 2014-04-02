<?php
/*
 Plugin Name: WP Get Attachments
 Plugin URI: http://www.csschopper.com/
 Description: Get all image attachments from a page or post. 
 Version: 1.0.0
 Author: Robin Gupta
 Author URI: http://www.csschopper.com/
 Author Email: robin.gupta@sparxtechnologies.com
 License: GPL
 */


/**
	 * This function is used to fetch the attachments of the post/page based on the parameter passed in it.
	 *
	 * @param integer $post_id             ( post id whoose attachments are required )
	 * @param integer $num_of_attachments  ( how many attachments to be displayed )
     * @param string  $no_result_msg       ( message to be displayed when no attachments found ) 
	 
	 * returns array
*/
	 

function wp_get_attachments( $post_id = 0 , $num_of_attachments = -1 , $no_result_msg = 'No Attachmets found' )
{
	global $post;
	
	/* IF POST ID IS NOT PASSED THEN FETCH THE CURRENT POST ID */
	
	if( $post_id == 0 )
		$post_id = $post->ID ; 
		
	
	/* CODE TO GET THE ATTACHMETNS */
	
	/* CREATE AN ARRAY FOR THE DEFAULT PARAMETERS */
	$args = array(
		'post_type' => 'attachment',
		'numberposts' => $num_of_attachments ,
		'post_mime_type' => 'image',
		'post_status'    => NULL , 
		'post_parent' => $post_id
	); 
	
	$attachments = get_posts( $args );
	
	/* RETURN OF RESULT */
	
	if ( $attachments ) {
		return $attachments;
	}	
	else {
		echo $no_result_msg;
	}
	
}
?>