<table class="form-table">
  <tr valign="top">
    <th scope="row">Facebook</th>
    <td>
      <input type="checkbox" name="psb_facebook" value="1" <?php if (get_option('psb_facebook')==1) echo 'checked="checked"'; ?>/>
    </td>
  </tr>
  <tr valign="top">
    <th scope="row">Mirror Profile Field Title</th>
    <td>
      <input <?php if ( get_option('psb_facebook') == '' ) {?>disabled="disabled"<?php }?> name="psb_facebook_label" value="<?php echo get_option('psb_facebook_label') ?>"/><?php if ( get_option('psb_facebook') == '' ) {?><br /><i><colored-text style="color: orange;">Disabled</colored-text> - Tick the check-box above and save to enable this feature</i><?php }?>
     </td>
  </tr>
</table>