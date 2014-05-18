<?php
/* only include the  extension if enabled */
  if ( !isset($psb_extension_check) ) {
    if ( !$psb_extension_check = get_option('psb_google') )
      $psb_extension_check = ''; // the default
  }
  if ( $psb_extension_check == '1' ) {
	function show_google_icon() {
		$google_address= xprofile_get_field_data(get_option('psb_google_label')); //fetch the location field for the displayed user
		  if ( $google_address != "" ) { // check to see the google field has data
		?>
		<a class="bp-go-profile" href="<?php echo $google_address; ?>" ><img src="<?php bloginfo('wpurl'); ?>/wp-content/plugins/buddypress-profile-social-buttons/img/google.png" /></a>
		<?php
		}
	}
	add_filter( 'bp_before_member_header_meta', 'show_google_icon' );
  }
?>