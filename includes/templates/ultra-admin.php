<h1><?php echo get_admin_page_title();?></h1>
<form method="post" action="options.php" class="ultra-general-form">
      <div>
            <?php
            settings_fields('ultra_settings_group');
            ?>
      </div>
      <div>
            <?php do_settings_sections('ultra_intro_setting');?>
      </div>
      <div>
            <?php submit_button(); ?>
      </div>
</form>