<?php
add_action('widgets_init', 'ultra_sidebars');

function ultra_sidebars () {
      register_sidebar (array(
      'name'            => 'Footer Column One',
      'id'              => 'ultra_footer_1',
      'description'     => 'Drag and drop a sidebar here',
      'before_widget'   => '<section class="widget widget_text">',
      'after_widget'    => '</section>',
      'before_title'    => '<h2 class="widget-title">',
      'after_title'     => '</h2>'
      ));

      register_sidebar (array(
            'name'            => 'Footer Column Two',
            'id'              => 'ultra_footer_2',
            'description'     => 'Drag and drop a sidebar here',
            'before_widget'   => '<section class="widget widget_recent_entries">',
            'after_widget'    => '</section>',
            'before_title'    => '<h2 class="widget-title">',
            'after_title'     => '</h2>'
            ));

            register_sidebar (array(
                  'name'            => 'Footer Column Three',
                  'id'              => 'ultra_footer_3',
                  'description'     => 'Drag and drop a sidebar here',
                  'before_widget'   => '<section class="widget widget_categories">',
                  'after_widget'    => '</section>',
                  'before_title'    => '<h2 class="widget-title">',
                  'after_title'     => '</h2>'
                  ));
}
?>