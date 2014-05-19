<?php
/* only include the  extension if enabled */
  if ( !isset($psb_extension_check) ) {
    if ( !$psb_extension_check = get_option('psb_facebook') )
      $psb_extension_check = ''; // the default
  }
  if ( $psb_extension_check == '1' ) {
	function show_facebook_icon() {
		$facebook_address= xprofile_get_field_data(get_option('psb_facebook_label')); //fetch the location field for the displayed user
		  if ( $facebook_address != "" ) { // check to see the facebook field has data
		?>
		<a class="bp-fb-profile" href="<?php echo $facebook_address; ?>" ><img src="<?php bloginfo('wpurl'); ?>/wp-content/plugins/buddypress-profile-social-buttons/img/facebook.png" /></a>
		<?php
		}
	}
	add_filter( 'bp_before_member_header_meta', 'show_facebook_icon' );
  }
?>