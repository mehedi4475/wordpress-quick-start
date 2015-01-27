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