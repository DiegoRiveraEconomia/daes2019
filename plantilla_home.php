<?php
/*
 * Template Name: Plantilla Home
 * Author: Juan Génova.
 *
 */
?>
<?php get_header(); ?>    
<?php the_post() ?>

<?php  
$des_daes = get_field('texto_daes_digital');
$des_fondos = get_field('texto_fondos');
$des_actividades = get_field('texto_actvidades');
$registrodecoop = get_field('registrodecoop');


?>



 <section id="services" style="padding: 10px 0 0 0;">

 
    <div class="container">
		
	  	<div class="row text-center">
			<div class="col-lg-12">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img src="/wp-content/uploads/2023/10/960x320Negro.png" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="/wp-content/uploads/2023/10/960x320Rojo.png" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="/wp-content/uploads/2023/10/960x320Rosa.png" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="/wp-content/uploads/2023/10/960x320VerdeManzana.png" class="d-block w-100" alt="...">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</button>
				</div>
			</div>
		</div>	

		<br>

      <div class="row text-center">            
      <?php $query_posts = new WP_Query(array('post_type' => 'noticias', 'showposts' => 3)); ?>
				<?php
				
				 if ( $query_posts->have_posts() ) : while ( $query_posts->have_posts() ) : $query_posts->the_post(); 
				
					$imagen = get_field('imagen');  
				
				?>   
					   <div class="col-lg-4 col-md-6">
				          <a href="<?php the_permalink(); ?>"><img src="<?php echo $imagen['url'];?>" width="100%" /></a>
				          <div class="contenido-caja" style="background-color:#f6f6f6; min-height: 200px;">
				          <h4 class="service-heading"><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h4>
				          <p class="text-muted"><?php echo excerpt(25); ?></p>
				          </div>
				       </div>
					
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				<?php wp_reset_query(); ?>   
      </div>

					
	  <!--<div class="row mt-5">
          <div class="col text-center">
            <button onclick="location.href='https://asociatividad.economia.cl/noticias/'" class="btn btn-default border border-dark">Ver más</button>
          </div>
        </div>-->
      
    </div>
  </section>

  <div class="container">
      
	  <div class="col text-right">
	  	<h4><a style="font-size:15px; font-weight: normal; text-decoration: underline;" href="https://asociatividad.economia.cl/noticias/">Ver más</a></h4>
	  </div>
	
	</div>


   <section style="padding: 50px 0;">		
		    <div class="container">
				
				<div class="row">
					
					<div class="col-lg-4">
						
						<div class="text-center pt-0 pb-4" style="background-color:#e5e7f3; min-height: 460px;">
							
							<img src="https://asociatividad.economia.cl/wp-content/uploads/2020/05/icon-doc.png" class="img-fluid"/>
							
							<h2 style="font-size:1.2rem; font-family: 'Roboto Slab', serif!important; font-weight:400;     min-height: 46px;">
								Registro de cooperativas activas y vigentes
							</h2>
						
							<div class="mt-4" style="margin:0 auto; max-width: 200px; padding: 10px; text-align: center; border: 1px solid #0052ab; min-height: 50px;">
								<a href="https://tramites.economia.gob.cl/Organizacion">Revisa aquí</a>
							</div>
							
						</div>
						
					</div>	
					
					<div class="col-lg-4">
						
						<div class="text-center pt-0 pb-4" style="background-color:#e5e7f3; min-height: 460px;">
							
						<img src="https://asociatividad.economia.cl/wp-content/uploads/2020/10/icon-stats.png" class="img-fluid" />
						<h2 style="font-size:1.2rem; font-family: 'Roboto Slab', serif!important; font-weight:400;     min-height: 46px;">
								Informes Estadísticos
							</h2>
						
							<div class="mt-4" style="margin:0 auto; max-width: 200px; padding: 10px; text-align: center; border: 1px solid #0052ab; min-height: 50px;">
								<a href="<?php bloginfo('url') ?>/estadisticas/">Revisa aquí</a>
							</div>
							
						</div>
						
					</div>	
					
					<div class="col-lg-4">
						
						<div class="text-center pt-0 pb-4" style="background-color:#e5e7f3; min-height: 460px;">
							
							<img src="https://asociatividad.economia.cl/wp-content/uploads/2020/05/icon-map.png" class="img-fluid"/>
							
							<h2 style="font-size:1.2rem; font-family: 'Roboto Slab', serif!important; font-weight:400;     min-height: 46px;">
								Mapa Nacional de Organizaciones Asociativas
							</h2>
						
							<div class="mt-4" style="margin:0 auto; max-width: 200px; padding: 10px; text-align: center; border: 1px solid #0052ab; min-height: 50px; ">
								<a href="mapa-regional">Revisa aquí</a>
							</div>
							
						</div>
						
					</div>					
					
				</div>
				
				
				
      			
				<!--<div class="row" style="background-color:#e5e7f3;">					
					<div class="col-lg-4 pt-5 pl-5 pr-0">						
						<h2 style="font-size:2.4rem; font-family: 'Roboto Slab', serif!important; font-weight:400;">
							Mapa Nacional de Organizaciones Asociativas
						</h2>
						
						<div class="mt-4" style=" max-width: 200px; padding: 10px; text-align: center; border: 1px solid #0052ab; min-height: 50px;">
							<a href="mapa-regional">Revisa aquí</a>
						</div>						
					</div>			
					
					<div class="col-lg-8 pt-5 pr-5 pl-5 pb-2">						
						<img src="https://asociatividad.economia.cl/wp-content/uploads/2020/03/mapas-regionales.png" width="100%"/>						
					</div>					
				</div>-->
				
				
			</div>	
	</section>

  
  <section id="portfolio" style="padding: 50px 0 0 0;">
    <div class="container">
      <div class="row">
      
        <div class="col-lg-10">
          <h2 class="section-heading">DAES Digital</h2>
        </div>
        <div class="col-lg-2 text-right">
        <h4><a style="font-size:15px; font-weight: normal; text-decoration: underline;" href="http://tramites.economia.gob.cl/DAES/">Ver más</a></h4>
        </div>
      
      </div>
      
      <div class="row">
            
      <div class="col-lg-12">
      <hr>         
      <p><?php echo $des_daes; ?></p>
      </div>
      
      </div>
            
      
      <div class="row">
      
      
        <?php $query_posts = new WP_Query(array('post_type' => 'links-daes-digital')); ?>
				<?php
				
				 if ( $query_posts->have_posts() ) : while ( $query_posts->have_posts() ) : $query_posts->the_post(); 
				
					$link_daes = get_field('link_daes');  
				
				?>    
        
        <div class="col-md-4 col-sm-6 portfolio-item">          
          <div class="portfolio-caption">
            <h4><a href="<?php echo $link_daes; ?>"><?php the_title(); ?></a></h4>            
          </div>
        </div>
        
        	<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				<?php wp_reset_query(); ?>  
      </div>
    </div>
  </section>
  
  <section id="actividades" style="padding: 50px 0 0 0;">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-10">
          <h2 class="section-heading">Centro de Capacitación DAES</h2>            
        </div>
        
        <div class="col-lg-2 text-right">
        <h4><a style="font-size:15px; font-weight: normal; text-decoration: underline;" href="capacitacion">Ver más</a></h4>
        </div>
        
      </div>
      
      <div class="row">
      
	      <div class="col-lg-12">
		      <hr>         
		    <p><?php echo $des_actividades; ?></p>
	      </div>
      
      </div>
      
      
      <div class="row">
        
        
       <?php $query_posts = new WP_Query(array('post_type' => 'capacitacion', 'showposts' => 4)); ?>
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

 <section id="programas" style="padding: 50px 0 50px 0;">
    <div class="container">
      <div class="row">
       
        <div class="col-lg-10">
          <h2 class="section-heading">Programas Especiales para Cooperativas</h2>                  
        </div>
        
        <!-- <div class="col-lg-2 text-right">
        <h4><a style="font-size:15px; font-weight: normal; text-decoration: underline;" href="fondos">Ver más</a></h4>
        </div>-->
                
      </div>
      
      <div class="row">
      
      		<div class="col-lg-12">
		      <hr>         
		      <p><?php //echo $des_fondos; ?></p>
	      	</div>      	
      
      </div>
      
      
      <div class="row">        
           <?php $query_posts = new WP_Query(array('post_type' => 'programas', 'showposts' => 3)); ?>
				
				<?php
				
				if ( $query_posts->have_posts() ) : while ( $query_posts->have_posts() ) : $query_posts->the_post();	

					$image_programa = get_field('imagen');
									
				?>  
				       <div class="col-md-4 col-sm-6 portfolio-item">          
					          <div class="portfolio-caption" style="min-height: 115px;">
					            <img src="<?php echo $image_programa['url']; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
					          </div>
							  <div class="">
								<p><?php the_content(); ?> </p>
							  </div>
							  <div class="">
							  <a href="<?php echo $image_programa['caption']; ?>"><?php echo $image_programa['alt']; ?></a>
							  </div>
					     </div>
					
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
      </div>
    </div>
  </section>
  
  
 <section id="fondos" style="padding: 50px 0 50px 0; background-color:#f6f6f6;">
  
  <div class="container">
  
	  	<div class="row">
	  	
	  		<div class="col-lg-12">
	  		
	  		<h4 class="section-heading" style="font-size:1.3em; color:#0052ab; font-weight: normal;">Registro de cooperativas activas y vigentes</h4>
	  		
				<?php echo $registrodecoop; ?>			
	  		
	  		</div>
	  	
	  	</div> 
  
  </div>
  
  </section>
    
<?php get_footer(); ?>