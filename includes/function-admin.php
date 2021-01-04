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
       #Call to action submenu
       add_submenu_page('ultra_intro_setting', 'Ultra Call To Action', 'Call To Action', 'manage_options', 'ultra_call_to_action', 'ultra_theme_styling_cb');

       add_action('admin_init', 'ultra_custom_setting');
 }
 
 function ultra_theme_styling_cb () {
       require_once(get_template_directory() . '/includes/templates/ultra-call-to-action.php');
 }

function ultra_custom_setting () {
        #register the settings part 1
        register_setting('ultra_settings_group', 'profile_picture');
        register_setting('ultra_settings_group', 'full_name');
        register_setting('ultra_settings_group', 'description');

        #register the settings part 2
        register_setting('ultra_settings_group_2', 'cta_title');
        register_setting('ultra_settings_group_2', 'cta_description');

        #ADD SECTION part 1
        add_settings_section('ultra-setting-option', 'Edit your Personal Information', 'ultra_section_title_cb', 'ultra_intro_setting');

        #Add section part 2
        add_settings_section('ultra-setting-option-2', 'Edit Your Call To Action', 'ultra_section_cta_cb', 'ultra_call_to_action');

        #ADD FIELD Profile Picture
        add_settings_field('ultra-settings-profile-picture', 'Profile Picture', 'ultra_profile_picture_cb', 'ultra_intro_setting', 'ultra-setting-option');
        #ADD FIELD Name
        add_settings_field('ultra-settings-fullname', 'Display Name', 'ultra_user_name_cb', 'ultra_intro_setting', 'ultra-setting-option');
        #ADD FIELD Description
        add_settings_field('ultra-settings-description', 'Description', 'ultra_settings_description_cb', 'ultra_intro_setting', 'ultra-setting-option');

        #ADD FIELD FOR CTA TITLE
        add_settings_field('ultra-cta-title', 'CTA TITLE', 'ultra_cta_title_cb', 'ultra_call_to_action', 'ultra-setting-option-2');
        #ADD FIELD FOR CTA Description
        add_settings_field('ultra-cta-description', 'CTA Description', 'ultra_cta_desc_cb', 'ultra_call_to_action', 'ultra-setting-option-2');

  }

  function ultra_cta_title_cb () {
        $cta_title = esc_attr(get_option('cta_title'));
        echo '
            <input type="text" style="width:608px;" name="cta_title" placeholder="CTA Title 30-35 characters" value="'.$cta_title.'"/>
        ';
  }
  function ultra_cta_desc_cb() {
        $cta_description = esc_attr(get_option('cta_description'));
        echo '
      <textarea id="cta_description" cols="85" rows="10" name="cta_description" value="' . $cta_description . '">
      '.$cta_description.'
      </textarea>
        ';
  }
  function ultra_section_cta_cb () {
      ?>
      <div class="section-title">
            <p>Call to Action are short and unique call to grasp users' attention. You can introduce a short title and subtitle to let the users know about your page and opt in for email subscription.</p>
      </div>
     <?php
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