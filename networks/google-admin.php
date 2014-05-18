<table class="form-table">
  <tr valign="top">
    <th scope="row">Google+</th>
    <td>
      <input type="checkbox" name="psb_google" value="1" <?php if (get_option('psb_google')==1) echo 'checked="checked"'; ?>/>
    </td>
  </tr>
  <tr valign="top">
    <th scope="row">Mirror Profile Field Title</th>
    <td>
      <input <?php if ( get_option('psb_google') == '' ) {?>disabled="disabled"<?php }?> name="psb_google_label" value="<?php echo get_option('psb_google_label') ?>"/><?php if ( get_option('psb_google') == '' ) {?><br /><i><colored-text style="color: orange;">Disabled</colored-text> - Tick the check-box above and save to enable this feature</i><?php }?>
    </td>
  </tr>
</table>