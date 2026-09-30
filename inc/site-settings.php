<?php


//  ********************   Add setting for Admin panel *****************
/**
 * =========================================
 * Site Settings
 * =========================================
 */

add_action('admin_menu', 'mycity_site_settings_menu');

function mycity_site_settings_menu()
{
  add_menu_page(
    'Site Settings',              // Page Title
    'Site Settings',              // Menu Title
    'manage_options',             // Capability
    'mycity-site-settings',       // Menu Slug
    'mycity_site_settings_page',  // Callback
    'dashicons-admin-generic',    // Icon
    30                            // Position
  );
}


/**
 * Site Settings Page
 */
function mycity_site_settings_page()
{
  if (!current_user_can('manage_options')) {
    return;
  }

  /*
   * ============================
   * Save Settings
   * ============================
   */

  if (
    isset($_POST['mycity_site_settings_submit']) &&
    check_admin_referer(
      'mycity_site_settings_action',
      'mycity_site_settings_nonce'
    )
  ) {

    // Get previous settings
    $settings = get_option('mycity_site_settings', []);

    // Current tab submitted from the form
    $active_tab = sanitize_key(
      $_POST['active_tab'] ?? 'contact'
    );

    /*
     * ============================
     * Contact Information
     * ============================
     */

    if ($active_tab === 'contact') {

      $settings['phone'] = sanitize_text_field(
        $_POST['phone'] ?? ''
      );

      $settings['phone_2'] = sanitize_text_field(
        $_POST['phone_2'] ?? ''
      );

      $settings['email'] = sanitize_email(
        $_POST['email'] ?? ''
      );

      $settings['address'] = sanitize_textarea_field(
        $_POST['address'] ?? ''
      );
    }


    /*
     * ============================
     * Social Networks
     * ============================
     */ elseif ($active_tab === 'social') {

      $socials = [
        'instagram',
        'telegram',
        'whatsapp',
        'facebook',
        'linkedin',
        'github',
        'twitter',
        'youtube',
        'aparat',
        'personal_website',
      ];

      foreach ($socials as $social) {

        $settings[$social] = esc_url_raw(
          $_POST[$social] ?? ''
        );
      }
    }


    /*
     * ============================
     * General Information
     * ============================
     */ elseif ($active_tab === 'general') {

      $settings['site_description'] = sanitize_textarea_field(
        $_POST['site_description'] ?? ''
      );

      $settings['copyright'] = sanitize_text_field(
        $_POST['copyright'] ?? ''
      );
    }


    /*
     * ============================
     * Appearance Settings
     * ============================
     */ elseif ($active_tab === 'appearance') {

      $settings['primary_color'] = sanitize_hex_color(
        $_POST['primary_color'] ?? ''
      );

      $settings['secondary_color'] = sanitize_hex_color(
        $_POST['secondary_color'] ?? ''
      );
    }


    // Save settings
    update_option(
      'mycity_site_settings',
      $settings
    );

    echo '<div class="notice notice-success is-dismissible">
                <p>Site settings saved successfully.</p>
              </div>';
  }


  /*
   * ============================
   * Retrieve Settings
   * ============================
   */

  $settings = get_option(
    'mycity_site_settings',
    []
  );


  /*
   * ============================
   * Active Tab
   * ============================
   */

  $active_tab = isset($_GET['tab'])
    ? sanitize_key($_GET['tab'])
    : 'contact';

  ?>

  <div class="wrap" dir="ltr">

    <h1>Site Settings</h1>

    <nav class="nav-tab-wrapper">

      <a href="?page=mycity-site-settings&tab=contact"
        class="nav-tab <?php echo $active_tab === 'contact' ? 'nav-tab-active' : ''; ?>">
        Contact Information
      </a>

      <a href="?page=mycity-site-settings&tab=social"
        class="nav-tab <?php echo $active_tab === 'social' ? 'nav-tab-active' : ''; ?>">
        Social Networks
      </a>

      <a href="?page=mycity-site-settings&tab=general"
        class="nav-tab <?php echo $active_tab === 'general' ? 'nav-tab-active' : ''; ?>">
        General Information
      </a>

      <a href="?page=mycity-site-settings&tab=appearance"
        class="nav-tab <?php echo $active_tab === 'appearance' ? 'nav-tab-active' : ''; ?>">
        Appearance Settings
      </a>

    </nav>


    <form method="post">

      <?php
      wp_nonce_field(
        'mycity_site_settings_action',
        'mycity_site_settings_nonce'
      );
      ?>

      <input type="hidden" name="active_tab" value="<?php echo esc_attr($active_tab); ?>">
      <?php

      /*
       * ====================================
       * Contact Information Tab
       * ====================================
       */

      if ($active_tab === 'contact'):

        ?>

        <div class="postbox" style="margin-top:20px;">

          <div class="postbox-header">
            <h2 style="padding:10px 15px;">
              Contact Information
            </h2>
          </div>

          <div class="inside">

            <table class="form-table">

              <tr>
                <th>
                  <label for="phone">
                    Primary Phone Number
                  </label>
                </th>

                <td>
                  <input type="text" id="phone" name="phone" class="regular-text"
                    value="<?php echo esc_attr($settings['phone'] ?? ''); ?>" placeholder="0912xxxxxxx">
                </td>
              </tr>


              <tr>
                <th>
                  <label for="phone_2">
                    Secondary Phone Number
                  </label>
                </th>

                <td>
                  <input type="text" id="phone_2" name="phone_2" class="regular-text"
                    value="<?php echo esc_attr($settings['phone_2'] ?? ''); ?>" placeholder="021xxxxxxxx">
                </td>
              </tr>


              <tr>
                <th>
                  <label for="email">
                    Email
                  </label>
                </th>

                <td>
                  <input type="email" id="email" name="email" class="regular-text"
                    value="<?php echo esc_attr($settings['email'] ?? ''); ?>" placeholder="info@example.com">
                </td>
              </tr>


              <tr>
                <th>
                  <label for="address">
                    Address
                  </label>
                </th>

                <td>
                  <textarea id="address" name="address" rows="4"
                    class="large-text"><?php echo esc_textarea($settings['address'] ?? ''); ?></textarea>
                </td>
              </tr>

            </table>

          </div>

        </div>

        <?php


        /*
         * ====================================
         * Social Networks Tab
         * ====================================
         */

      elseif ($active_tab === 'social'):

        ?>

        <div class="postbox" style="margin-top:20px;">

          <div class="postbox-header">
            <h2 style="padding:10px 15px;">
              Social Networks
            </h2>
          </div>

          <div class="inside">

            <table class="form-table">

              <?php

              $socials = [
                'instagram' => 'Instagram',
                'telegram' => 'Telegram',
                'whatsapp' => 'WhatsApp',
                'facebook' => 'Facebook',
                'linkedin' => 'LinkedIn',
                'github' => 'GitHub',
                'twitter' => 'X / Twitter',
                'youtube' => 'YouTube',
                'aparat' => 'Aparat',
                'personal_website' => 'Personal Website',
              ];

              foreach ($socials as $key => $label):

                ?>

                <tr>

                  <th>
                    <label for="<?php echo esc_attr($key); ?>">
                      <?php echo esc_html($label); ?>
                    </label>
                  </th>

                  <td>

                    <input type="url" id="<?php echo esc_attr($key); ?>" name="<?php echo esc_attr($key); ?>"
                      class="large-text" value="<?php echo esc_attr($settings[$key] ?? ''); ?>" placeholder="https://...">

                  </td>

                </tr>

              <?php endforeach; ?>

            </table>

          </div>

        </div>

        <?php


        /*
         * ====================================
         * General Information Tab
         * ====================================
         */

      elseif ($active_tab === 'general'):

        ?>

        <div class="postbox" style="margin-top:20px;">

          <div class="postbox-header">
            <h2 style="padding:10px 15px;">
              General Site Information
            </h2>
          </div>

          <div class="inside">

            <table class="form-table">

              <tr>

                <th>
                  <label for="site_description">
                    Site Description
                  </label>
                </th>

                <td>

                  <textarea id="site_description" name="site_description" rows="5"
                    class="large-text"><?php echo esc_textarea($settings['site_description'] ?? ''); ?></textarea>

                  <p class="description">
                    A short description about the site.
                  </p>

                </td>

              </tr>


              <tr>

                <th>
                  <label for="copyright">
                    Copyright Text
                  </label>
                </th>

                <td>

                  <input type="text" id="copyright" name="copyright" class="large-text"
                    value="<?php echo esc_attr($settings['copyright'] ?? ''); ?>" placeholder="All rights reserved.">

                </td>

              </tr>

            </table>

          </div>

        </div>

        <?php


        /*
         * ====================================
         * Appearance Settings Tab
         * ====================================
         */

      elseif ($active_tab === 'appearance'):

        ?>

        <div class="postbox" style="margin-top:20px;">

          <div class="postbox-header">
            <h2 style="padding:10px 15px;">
              Appearance Settings
            </h2>
          </div>

          <div class="inside">

            <table class="form-table">

              <tr>

                <th>
                  <label for="primary_color">
                    Primary Site Color
                  </label>
                </th>

                <td>

                  <input type="color" id="primary_color" name="primary_color" value="<?php echo esc_attr(
                    $settings['primary_color'] ?? '#2563eb'
                  ); ?>">

                </td>

              </tr>


              <tr>

                <th>
                  <label for="secondary_color">
                    Secondary Site Color
                  </label>
                </th>

                <td>

                  <input type="color" id="secondary_color" name="secondary_color" value="<?php echo esc_attr(
                    $settings['secondary_color'] ?? '#1d4ed8'
                  ); ?>">

                </td>

              </tr>

            </table>

          </div>

        </div>

      <?php endif; ?>


      <?php
      /*
       * ============================
       * Save Button
       * ============================
       */

      submit_button('Save Settings');
      ?>

      <input type="hidden" name="mycity_site_settings_submit" value="1">

    </form>

  </div>

  <?php
}


//  ******************** End Add setting for Admin panel *****************