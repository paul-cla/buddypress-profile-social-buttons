<?php

/**

Plugin Name: BuddyPress Profile Social Buttons

Plugin URI: http://wordpress.org/extend/plugins/buddypress-profile-social-buttons

Description: Let your members and groups show their Facebook Button on their profile page and group page.

Version: 0.3

Author: Paul Clarkin

License:GPL2

**/



function bp_psb_init() {
    foreach (glob(dirname( __FILE__ ) . '/networks/*-render.php') as $filename) {
        if (is_file($filename)) {
            require $filename;
        }
    } 
    require ( dirname( __FILE__ ) . '/admin.php' );
    require ( dirname( __FILE__ ) . '/includes/common.php' );
}

add_action( 'bp_include', 'bp_psb_init' );

?>