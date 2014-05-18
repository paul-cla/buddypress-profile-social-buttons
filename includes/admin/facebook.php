            <?php settings_fields( 'bppsb_plugin_profile_social_buttons_options' ); ?>
            <?php do_settings_sections( 'bppsb_plugin_profile_social_buttons_options' ); ?>
            <table class="form-table">
              <tr valign="top">
                <td>
                  <input type="checkbox" name="psb_facebook" value="1" <?php if (get_option('psb_facebook')==1) echo 'checked="checked"'; ?>/>
                  Let your members display their Facebook button on their profile page.
                </td>
              </tr>
              <tr valign="top">
                <th scope="row"><colored-text style="color: red;">Mirror</colored-text> Profile Field Title</th>
                <td>
                  <input <?php if ( get_option('psb_facebook') == '' ) {?>disabled="disabled"<?php }?> name="psb_facebook_label" value="<?php echo get_option('psb_facebook_label') ?>"/><?php if ( get_option('psb_facebook') == '' ) {?><br /><i><colored-text style="color: orange;">Disabled</colored-text> - Tick the check-box above and save to enable this feature</i><?php }?>
                  <p><colored-text style="color: green;">Quick links:</colored-text> Visit <a href="<?php echo home_url(); ?>/wp-admin/admin.php?page=bp-profile-setup&group_id=1&mode=add_field" target="_blank" title="opens in a new tab">Add Field</a> to set up a new XProfile field or <a href="<?php echo home_url(); ?>/wp-admin/admin.php?page=bp-profile-setup" target="_blank" title="opens in a new tab">Extended Profile Fields</a> to edit a existing field</p>
                </td>
              </tr>
            </table>