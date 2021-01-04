<h1><?php echo get_admin_page_title();?></h1>

<form action="options.php" method="post" class="ultra-cta-form">
      <div>
            <?php settings_fields('ultra_settings_group_2');?>
      </div>
      <div>
            <?php do_settings_sections('ultra_call_to_action');?>
      </div>
      <div>
            <?php submit_button();?>
      </div>
</form>