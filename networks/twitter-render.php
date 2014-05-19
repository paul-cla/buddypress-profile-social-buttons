<?php
/* only include the  extension if enabled */
  if ( !isset($psb_extension_check) ) {
    if ( !$psb_extension_check = get_option('psb_twitter') )
      $psb_extension_check = ''; // the default
  }
  if ( $psb_extension_check == '1' ) {
	function show_twitter_icon() {
		$twitter_address= xprofile_get_field_data(get_option('psb_twitter_label')); //fetch the location field for the displayed user
		  if ( $twitter_address != "" ) { // check to see the twitter field has data
		?>
		<a class="bp-go-profile" href="<?php echo $twitter_address; ?>" ><img src="<?php bloginfo('wpurl'); ?>/wp-content/plugins/buddypress-profile-social-buttons/img/twitter.png" /></a>
		<?php
		}
	}
	add_filter( 'bp_before_member_header_meta', 'show_twitter_icon' );
  }
?>