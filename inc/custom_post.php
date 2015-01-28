<?php

add_action( 'init', 'codex_book_init' );

function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		'taxonomies' => array('category','post_tag'),
		
	);

	register_post_type( 'book', $args );
	
	//Custom Image Crop
	add_theme_support( 'post-thumbnails' ); 
	add_image_size( 'book-home-page', 150, 150);
	add_image_size( 'book-blog-page', 300, 300);
	add_image_size( 'book-single-page', 450, 450);
	add_image_size( 'book-full-page', 1024, 700);
}











/*
<?php
//Custom post display

$args = array(
	'post_type' => 'book',
);

$book = new WP_Query( $args );
if ( $book->have_posts($args) ) : ?>
	<?php while ($book->have_posts() ) : $book->the_post();  ?>
		<?php	
			if ( has_post_thumbnail() ) { 
				the_post_thumbnail( array(300, 300) );
				//the_post_thumbnail('book-single-page');

			}
		?>
	<?php endwhile; ?>
<?php endif; ?>
*/


