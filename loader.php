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
    foreach (scandir(dirname( __FILE__ ) . '/includes/networks/') as $filename) {
        $path = dirname(__FILE__) . '/includes/networks/' . $filename;
        if (is_file($path)) {
            require $path;
        }
    } 
    require ( dirname( __FILE__ ) . '/admin.php' );
    require ( dirname( __FILE__ ) . '/includes/common.php' );
}

add_action( 'bp_include', 'bp_psb_init' );

?>