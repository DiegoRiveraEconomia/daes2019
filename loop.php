<?php

$query = new WP_Query( array( 'tag_id' => 13 ) );

?>
<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page-content ">
<?php the_content(); ?>
</div>

<?php 

endwhile;
endif ;

?>