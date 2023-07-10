<?php
/*
 * Template Name: Plantilla Noticias
 * Author: Juan Génova.
 *
 */
?>
<?php get_header(); ?>
<?php the_post()?>

<section style="padding: 50px 0 50px 0; background-color:#f6f6f6;">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<h1><?php the_title(); ?></h1>				
			</div>
		</div>

		<div class="row mt-4">

			<div class="col-lg-6">

				<img src="https://via.placeholder.com/530x290/" width="100%" />

			</div>
			
			<div class="col-lg-6 pt-5">

				<h2 class="service-heading" style="font-size:25px; padding-left:0;">DAES en Seminario de Universidad Autónoma de Temuco</h2>

	
				<p style="text-align:left;">
					 Otro de sus objetivos es capacitar a funcionarios públicos y a la ciudadanía sobre el funcionamiento y marco legal de
					cooperativas, asociaciones gremiales y de consumidores.
				</p>

			</div>

		</div>

	</div>
</section>

 <section id="services" style="padding: 50px 0 0 0;">
    <div class="container">
      
      <div class="row text-center">
      
      
      <?php $loop = new WP_Query( array( 'post_type' => 'noticias', 'posts_per_page' => 10 ) ); ?>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
		    
		  <div class="col-lg-4 col-md-6 pb-3">
        	  <img src="https://via.placeholder.com/350x150/" width="100%" />
          		<div class="contenido-caja" style="background-color:#f6f6f6; min-height: 200px;">
		        <h4 class="service-heading"><?php the_title( '<h4 class="entry-title">
		        <a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h4>' ); ?>
		        </h4>
                <p class="text-muted"> <?php the_excerpt(); ?></p>
          		</div>
        	</div>
			    
			    
			<?php endwhile; ?>
         
      
      </div>
      
    </div>
  </section>



<?php get_footer(); ?>