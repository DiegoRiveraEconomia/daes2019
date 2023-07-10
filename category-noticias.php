<?php get_header(); ?>
<?php the_post()?>

<section style="padding: 50px 0 50px 0; background-color:#f6f6f6;">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<h1><?php the_title(); ?></h1>				
			</div>
		</div>
		
		
		<?php $loop_1 = new WP_Query( array( 'post_type' => 'noticias', 'posts_per_page' => 1 ) );?>
			
			<?php while ( $loop_1->have_posts() ) : $loop_1->the_post();			
				
				$idpost_1 = get_the_ID();
				$image_noticia_1 = get_field('imagen', $idpost);					
			?>			
		  
		<div class="row mt-4">

			<div class="col-lg-6">

				<img src="<?php echo $image_noticia_1['url']; ?>" width="100%" />

			</div>
			
			<div class="col-lg-6 pt-5">

				<h2 class="service-heading" style="font-size:25px; padding-left:0;">				
								<?php the_title( '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a>' ); ?>
							</h2>
	
				<p style="text-align:left;">
					<?php the_excerpt(); ?>
				</p>

			</div>

		</div>
		
		<?php endwhile; ?>

	</div>
</section>

 <section id="services" style="padding: 50px 0 0 0;">
    <div class="container">
      
      <div class="row text-center">
      
      
      <?php $loop = new WP_Query( array( 'post_type' => 'noticias', 'posts_per_page' => 10 ) ); 
			
		//var_dump($loop);
			
			?>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post();			
				
				$idpost = get_the_ID();					
				$image_noticia = get_field('imagen', $idpost);					
			?>
			
		    
		  <div class="col-lg-4 col-md-6">
        	  <img src="<?php echo $image_noticia['url']; ?>" width="100%" />
          		<div class="contenido-caja" style="background-color:#f6f6f6; min-height: 200px;">
		        <h4 class="service-heading"><?php the_title( '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a>' ); ?></h4>
                <p class="text-muted p-0 m-0"> <?php the_excerpt(); ?></p>
          		</div>
        	</div>
			    
			    
			<?php endwhile; ?>
         
      
      </div>
      
    </div>
  </section>



<?php get_footer(); ?>