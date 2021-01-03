<?php

#require file for custom settings page
require(get_template_directory() . '/includes/function-admin.php');

#require file for enqueue scripts and styles
require(get_template_directory(). '/includes/enqueue.php');

#require file for theme_support
require(get_template_directory() . '/includes/theme_support.php');

#custom post-type "Offerings"
require(get_template_directory() . '/includes/offerings.php');



?>