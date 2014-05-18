<?php

/* Include the css to fix the button alignment. */

function bp_psb_insert_head() {
?>
<link href="<?php bloginfo('wpurl'); ?>/wp-content/plugins/buddypress-profile-social-buttons/includes/style.css" media="screen" rel="stylesheet" type="text/css"/>
<?php
}

add_action('wp_head', 'bp_psb_insert_head');

?>