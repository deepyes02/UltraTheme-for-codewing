<?php
/**
 * @package SuperUltraTheme
 * @since 1.0.0
 * 
 */
add_action('admin_menu', 'ultra_add_admin_page');
 function ultra_add_admin_page() {
       #add menu page
       add_menu_page('Ultra Intro Options', 'Author Intro', 'manage_options', 'ultra_intro_setting', 'ultra_theme_create_page', 'dashicons-admin-users', 2);

       #add submenu and integrate it with main menu for wordpress like setting experience
       add_submenu_page('ultra_intro_setting', 'Ultra Intro Options', 'Author Intro', 'manage_options', 'ultra_intro_setting', 'ultra_theme_create_page');

       add_submenu_page('ultra_intro_setting', 'Ultra Styling', 'Ultra Styling', 'manage_options', 'ultra-intro-styling', 'ultra_theme_styling_cb');

       add_action('admin_init', 'ultra_custom_setting');
 }
 
 function ultra_theme_styling_cb () {
       echo "Styling Page";
 }

function ultra_custom_setting () {
        #register the settings
        register_setting('ultra_settings_group', 'profile_picture');
        register_setting('ultra_settings_group', 'full_name');
        register_setting('ultra_settings_group', 'description');

        #ADD SECTION
        add_settings_section('ultra-setting-option', 'Edit your Personal Information', 'ultra_section_title_cb', 'ultra_intro_setting');

        #ADD FIELD Profile Picture
        add_settings_field('ultra-settings-profile-picture', 'Profile Picture', 'ultra_profile_picture_cb', 'ultra_intro_setting', 'ultra-setting-option');
        #ADD FIELD Name
        add_settings_field('ultra-settings-fullname', 'Display Name', 'ultra_user_name_cb', 'ultra_intro_setting', 'ultra-setting-option');
        #ADD FIELD Description
        add_settings_field('ultra-settings-description', 'Description', 'ultra_settings_description_cb', 'ultra_intro_setting', 'ultra-setting-option');
  }



function ultra_section_title_cb () {
     ?>
      <div class="section-title">
            <p>Please update information in this page to appear correctly on the front end.</p>
      </div>
     <?php
}

function ultra_profile_picture_cb () {
      $profile_picture = esc_attr(get_option('profile_picture'));
      echo '
      <input type="button" class="button button-secondary" value="Upload Picture" id="upload-button"/>
      <input type="text" id="profile_picture_url" name="profile_picture" value="' . $profile_picture . '"/>
      ';
}

function ultra_user_name_cb () {
      $full_name = esc_attr(get_option('full_name'));
      echo '
      <input type="text" name="full_name" value="' . $full_name . '" placeholder="First Name"/>
      ';
}

function ultra_settings_description_cb () {
      $description = esc_attr(get_option('description'));
      echo '
      <textarea id="myTextarea" cols="80" rows="10" name="description" value="' . $description . '">
      '.$description.'
      </textarea>
      ';
}


 function ultra_theme_create_page(){
       
       require_once(get_template_directory() . '/includes/templates/ultra-admin.php');
 }

?>