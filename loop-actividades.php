<?php if (have_posts()): while (have_posts()) : the_post(); 

$imagen = get_field('imagen');

?>

					<div class="col-lg-4 col-md-6">
				          <a href="<?php the_permalink(); ?>"><img src="<?php echo $imagen['url'];?>" width="100%" /></a>
				          <div class="contenido-caja" style="background-color:#f6f6f6; min-height: 200px;">
				          <h4 class="service-heading"><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h4>
				          <p class="text-muted"><?php echo excerpt(25); ?>
				          <?php edit_post_link('Editar'); ?>
				          </p>
				          </div>
				       </div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
