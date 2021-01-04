<?php
add_action('widgets_init', 'ultra_sidebars');

function ultra_sidebars () {
      register_sidebar (array(
      'name'            => 'Footer Column One - About',
      'id'              => 'ultra_footer_1',
      'description'     => 'Drag and drop a Text Field',
      'before_widget'   => '<section class="widget">',
      'after_widget'    => '</section>',
      'before_title'    => '<h2 class="widget-title">',
      'after_title'     => '</h2>'
      ));

      register_sidebar (array(
            'name'            => 'Footer Column Two',
            'id'              => 'ultra_footer_2',
            'description'     => 'Showcase Recent Blogs Here',
            'before_widget'   => '<section class="widget">',
            'after_widget'    => '</section>',  
            'before_title'    => '<h2 class="widget-title">',
            'after_title'     => '</h2>'
            ));

            register_sidebar (array(
                  'name'            => 'Footer Column Three',
                  'id'              => 'ultra_footer_3',
                  'description'     => 'Showcase Categories here',
                  'before_widget'   => '<section class="widget">',
                  'after_widget'    => '</section>',        
                  'before_title'    => '<h2 class="widget-title">',
                  'after_title'     => '</h2>'
                  ));
}
?>