<?php

function my_custom_theme_widgets() {
    register_sidebar( array(
        'name' => 'My Widget',
        'id' => 'widget_id',
        'before_widget' => '<div class="widget_div">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

}
add_action('widgets_init', 'my_custom_theme_widgets');




/*

if ( is_active_sidebar( 'widget_id' ) ) : ?>
<?php dynamic_sidebar('widget_id'); ?>
<?php else: ?>
	<h2>When widgets area is empy then active this line</h2>
<?php endif; ?>

*/
