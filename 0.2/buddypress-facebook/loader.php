<?php

/**

Plugin Name: BuddyPress Facebook

Plugin URI: http://wordpress.org/extend/plugins/buddypress-facebook/

Description: Let your members and groups show their Facebook Button on their profile page and group page. Using just the name after the Facebook URL (www.facebook.com/), the plugin fetches your members and/or groups username and displays their button in the member's/group's header.



If your BuddyPress community is active on Facebook, this plugin is a great tool for boosting communication both on and off your website.

Version: 0.1

Author: Samuel Costa

Author URI: artewebdesign.com.br

License:GPL2

**/



function bp_fbcj_init() {

  require( dirname( __FILE__ ) . '/buddypress-facebook.php' );

}

add_action( 'bp_include', 'bp_fbcj_init' );



?>