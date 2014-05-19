<?php
/* only include the  extension if enabled */
  if ( !isset($psb_extension_check) ) {
    if ( !$psb_extension_check = get_option('psb_linkedin') )
      $psb_extension_check = ''; // the default
  }
  if ( $psb_extension_check == '1' ) {
	function show_linkedin_icon() {
		$linkedin_address= xprofile_get_field_data(get_option('psb_linkedin_label')); //fetch the location field for the displayed user
		  if ( $linkedin_address != "" ) { // check to see the linkedin field has data
		?>
		<a class="bp-go-profile" href="<?php echo $linkedin_address; ?>" ><img src="<?php bloginfo('wpurl'); ?>/wp-content/plugins/buddypress-profile-social-buttons/img/linkedin.png" /></a>
		<?php
		}
	}
	add_filter( 'bp_before_member_header_meta', 'show_linkedin_icon' );
  }
?>