<table class="form-table">
  <tr valign="top">
    <th scope="row">Linked In</th>
    <td>
      <input type="checkbox" name="psb_linkedin" value="1" <?php if (get_option('psb_linkedin')==1) echo 'checked="checked"'; ?>/>
    </td>
  </tr>
  <tr valign="top">
    <th scope="row">Mirror Profile Field Title</th>
    <td>
      <input <?php if ( get_option('psb_linkedin') == '' ) {?>disabled="disabled"<?php }?> name="psb_linkedin_label" value="<?php echo get_option('psb_linkedin_label') ?>"/><?php if ( get_option('psb_linkedin') == '' ) {?><br /><i><colored-text style="color: orange;">Disabled</colored-text> - Tick the check-box above and save to enable this feature</i><?php }?>
    </td>
  </tr>
</table>