<?php
/*
 * Template Name: Plantilla Beneficios
 * Author: Juan Génova.
 *
 */
?>

<?php get_header(); ?>
<?php the_post()
?>

<section style="padding: 50px 0 0 0;">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<h1><?php the_title(); ?></h1>				
			</div>
		</div>

		<div class="row">

			<div class="col-lg-12 mt-4">
			
			<h2 class="section-heading">Capacitación y Gestión</h2>
			<hr class="redline" align="left">
			
			</div>

			<div class="col-lg-12 mt-4">
			
			<?php the_content(); ?>

			</div>

		</div>

	</div>
</section>

<section style="padding: 50px 0 0 0;">
	<div class="container">

		
		<div class="row">
		
			<div class="col-lg-10">				
				<h2 class="section-heading">Fondos Concursables</h2>
			</div>
			
			<div class="col-lg-2 text-right">
        		<h4><a style="font-size:15px; font-weight: normal; text-decoration: underline;" href="../fondos">Ver más</a></h4>
       		</div>
			
		</div>
		
		
		<div class="row">
			<div class="col-lg-12">
				<hr class="redline" align="left">
			</div>
		</div>
		
		<div class="row">		
		
				<?php 
								
				$i=1;
				
				$query_posts = new WP_Query(array('post_type' => 'fondos'));
				$count = $query_posts->post_count;
				$mitad = $count/2;
				$inicio_mitad = $mitad+1;
				
				?>
				<?php
		
				 if ( $query_posts->have_posts() ) : while ( $query_posts->have_posts() ) : $query_posts->the_post();									
				?>   
				
				<?php if($i==1){ ?>      
				<div class="col-lg-6 mt-4">
				<?php } ?>
					<?php if($i<=5){ ?>
					   <p class="titulo_line <?php echo $i; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<?php } ?>    
				<?php if($i==5){ ?>
				</div>
				<?php } ?>
				
				<?php if($i==6){ ?>      
				<div class="col-lg-6 mt-4">
				<?php } ?>
				
					<?php if($i>=6 && i<=$count){ ?>
					   <p class="titulo_line <?php echo $i; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<?php } ?>
					    
				<?php if($i==$count){ ?>
				</div>
				<?php } ?>
										
				<?php 
				$i++;
				endwhile; else: 
				?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				<?php wp_reset_query(); ?>		

		</div>

	</div>
</section>

 <section id="actividades" style="padding: 50px 0 50px 0;">
    <div class="container">
     
      <div class="row">
		
			<div class="col-lg-10">				
				<h2 class="section-heading">Actividades</h2>
			</div>
			
			<div class="col-lg-2 text-right">
        		<h4><a style="font-size:15px; font-weight: normal; text-decoration: underline;" href="../actividades">Ver más</a></h4>
       		</div>
			
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<hr class="redline" align="left">
			</div>
		</div>
		
      <div class="row">
        
        
         <?php $query_posts = new WP_Query(array('post_type' => 'actividades', 'showposts' => 4)); ?>
				<?php
				
				 if ( $query_posts->have_posts() ) : while ( $query_posts->have_posts() ) : $query_posts->the_post(); 
				
					$imagenth = get_field('imagenth');  
				
				?>    
				       <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 p-2">          
				          <div class="row">
				
				          		<div class="col-lg-4 d-none d-sm-block">
				          		<a href="<?php the_permalink(); ?>"><img src="<?php echo $imagenth['url'];?>" width="100%" /></a>
				          		</div>
				          		
				          		<div class="col-lg-8">          			
				          			<h4 class="p-2"><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h4>          			
				          			<p class="p-2"><?php echo excerpt(25); ?></p>          				
				          		</div>                        
				          </div>
				        </div>  
					
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				<?php wp_reset_query(); ?>   
        
      </div>
    </div>
  </section>

<?php get_footer(); ?>