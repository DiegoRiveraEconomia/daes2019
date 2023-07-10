<?php
/*
 * Template Name: Plantilla Estadisticas
 * Author: Juan Génova.
 *
 */
?>

<?php get_header(); ?>
<?php the_post();
	
	//$regiones = get_field('regiones','506');
	$mapa = get_field('mapa');
	$cooperativas = get_field('cooperativas','506');
	$agremiales = get_field('asociaciones_gremiales','506');
	$aconsumidores =  get_field('asociaciones_de_consumidores','506');
	$mapaarica = get_field('mapa_region_de_arica_y_parinacota','506');
	$mapatarapaca = get_field('mapa_region_de_tarapaca','506');
	
?>

<section style="padding: 15px 0 0 0; background-color: #f6f6f6;">
	<div class="container">

		
		<div class="row mt-4 pb-5">

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-3">				 
				<div class="row">
					
					<div class="col-lg-5">
						
						<h2 style="font-size:1.5rem; font-family: 'Roboto Slab', serif!important; font-weight:400;">
							<?php echo $mapa['title'];?>
						</h2>
						
						<div class="mt-4" style=" max-width: 200px; padding: 10px; text-align: center; border: 1px solid #0052ab; min-height: 50px;">
							<a href="<?php echo $mapa['caption'];?>">Revisa aquí</a>
						</div>
						
					</div>
					
					<div class="col-lg-7">
					
						<img src="<?php echo $mapa['url'];?>" class="img-fluid"/>					
						
					</div>
				</div>
	    	</div>			
			
			
			
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-3">				 
					
				<div class="row">
					
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-3">
						  <div style="font-size:2.5rem; line-height: 1; color: #011c41;">
							 <?php echo $cooperativas; ?>
						</div>				 
						<div>
							 <h2 style="font-weight:300; font-size: 1.22rem; color: #011c41;">
								 Cooperativas
							</h2>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-3">
						 <div style="font-size:2.5rem; line-height: 1; color: #011c41;">
							 <?php echo $agremiales; ?>
						</div>				
						<div>
							 <h2 style="font-weight:300; font-size: 1.22rem; color: #011c41;">
								 Asociaciones<br>gremiales
							</h2>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-3">
						 <div style="font-size:2.5rem; line-height: 1; color: #011c41;">
							 <?php echo $aconsumidores; ?>
						</div>
						<div>
							 <h2 style="font-weight:300; font-size: 1.22rem; color: #011c41;">
								 Asociaciones<br>de consumidores
							</h2>
						</div>
					</div>
					
					   
				</div>

	    	</div>			
			
			<!--<div class="col-lg-12">
				<h2>
					<span style="font-size:1rem;">Las cifras corresponden a organizaciones activas y vigentes</span>
				</h2>
			</div> -->

		</div>
</section>
	
<section style="padding:50px 0 25px 0;">
	
<div class="container">
	
	<div class="row">
	
		<div class="col-lg-12">
				<h1><?php the_title(); ?></h1>				
		</div>
		
		<div class="col-lg-12">
			<p><?php  the_content(); ?>	</p>
		</div>
		
	</div>
	
</div>
	
</section>	
	
	
	<section id="actividades" style="padding: 25px 0 0 0;">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-10">
          <h2 class="section-heading">Estudios</h2>
			<hr class="redline" align="left">          
        </div>
        
      </div>
      
      <div class="row">
        
        
       <?php $query_posts = new WP_Query(array('post_type' => 'estudios', 'showposts' => 4)); ?>
				<?php
				
				 if ( $query_posts->have_posts() ) : while ( $query_posts->have_posts() ) : $query_posts->the_post(); 
				
					$caratula = get_field('caratula'); 
		  			$archivo = get_field('archivo'); 
				
				?>    
				       <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 p-2">          
				          <div class="row">
				
				          		<div class="col-lg-4 d-none d-sm-block">
				          		<a href="<?php echo $archivo['url'];?>"><img src="<?php echo $caratula['url'];?>" width="100%" /></a>
				          		</div>
				          		
				          		<div class="col-lg-8 p-5">          			
				          			<h4 class="p-2"><a href="<?php echo $archivo['url'];?>"><?php the_title(''); ?></a></h4>          			
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
	
<section style="padding:50px 0 25px 0;">

	<div class="container">
		
		<div class="row">
        
        <div class="col-lg-10">
          <h2 class="section-heading">Estadísticas</h2>
			<hr class="redline" align="left">          
        </div>
        
      </div>
		
		
		<div class="row pt-4">        
           				
			<?php
			
			$cooperativas_general = get_field('cooperativas_general');	
			$gremiales_general	= get_field('gremiales_general');	
			$consumidores_general = get_field('consumidores_general');
			
			?>
			
				       <div class="col-md-4 col-sm-6 portfolio-item">          
					          <div class="portfolio-caption text-center p-4 d-flex align-items-center justify-content-center" style="min-height: 115px; background-color: #0052ab;">
					            <h4><a class="stretched-link" style="font-size:1em; color:#fff;" href="<?php echo $cooperativas_general['url']; ?>">
									Cooperativas
									</a></h4>
					          </div>
					     </div>
					
				  
				       <div class="col-md-4 col-sm-6 portfolio-item">          
					          <div class="portfolio-caption text-center p-4 d-flex align-items-center justify-content-center" style="min-height: 115px; background-color: #0052ab;">
					          <h4><a class="stretched-link" style="font-size:1em; color:#fff;" href="<?php echo $gremiales_general['url']; ?>">
									Asociaciones Gremiales
									</a></h4>
					          </div>
					     </div>
					
				  
				       <div class="col-md-4 col-sm-6 portfolio-item">          
					          <div class="portfolio-caption text-center p-4 d-flex align-items-center justify-content-center" style="min-height: 115px; background-color: #0052ab;">
					      <h4><a class="stretched-link" style="font-size:1em; color:#fff;" href="<?php echo $consumidores_general['url']; ?>">Asociaciones de Consumidores</a></h4>
					          </div>
					     </div>
					
							      </div>
		
	</div>
	
	
</section>	
	
<section class="p-5">
	
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<h2 style="font-weight:400;">Selecciona región <span style="font-size:1rem;">( la información de cada región se desplegará al seleccionarla )</span></h2>	
			</div>
		</div>				
		
		<div class="row pt-4 pb-4 pl-0 pr-0"  >			
			
			<div class="col-lg-12">
				
				<div class="d-flex flex-row flex-wrap  nav" id="nav-tab" role="tablist">
					
							
				<a onclick="loadPage_arica()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-arica-tab" data-toggle="tab" href="#nav-arica" role="tab" aria-controls="nav-arica" aria-selected="false">
						Región de Arica y Parinacota
				</a>
					
				<a onclick="loadPage_coquimbo()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-coquimbo-tab" data-toggle="tab" href="#nav-coquimbo" role="tab" aria-controls="nav-coquimbo" aria-selected="false">
						Región de Coquimbo
					</a>
					
						<a onclick="loadPage_nuble()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-nuble-tab" data-toggle="tab" href="#nav-nuble" role="tab" aria-controls="nav-nuble" aria-selected="false">
						Región de Ñuble
					</a>
					
				<a onclick="loadPage_lagos()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-lagos-tab" data-toggle="tab" href="#nav-lagos" role="tab" aria-controls="nav-lagos" aria-selected="false">
						Región de Los Lagos
					</a>	
					
				<a onclick="loadPage_tarapaca()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-tarapaca-tab" data-toggle="tab" href="#nav-tarapaca" role="tab" aria-controls="nav-tarapaca" aria-selected="false">
						Región de Tarapacá
				</a>
					
					<a onclick="loadPage_valpo()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-valpo-tab" data-toggle="tab" href="#nav-valpo" role="tab" aria-controls="nav-valpo" aria-selected="false">
						Región de Valparaíso
					</a>
					
						<a onclick="loadPage_biobio()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-biobio-tab" data-toggle="tab" href="#nav-biobio" role="tab" aria-controls="nav-biobio" aria-selected="false">
						Región del Biobío
					</a>
					
						<a onclick="loadPage_aysen()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-aysen-tab" data-toggle="tab" href="#nav-aysen" role="tab" aria-controls="nav-aysen" aria-selected="false">
						Región del Aysén
					</a>		
					
				<a onclick="loadPage_antofagasta()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-antofagasta-tab" data-toggle="tab" href="#nav-antofagasta" role="tab" aria-controls="nav-antofagasta" aria-selected="false">	
					Región de Antofagasta
				</a>	
				
						<a onclick="loadPage_ohiggins()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-ohiggins-tab" data-toggle="tab" href="#nav-ohiggins" role="tab" aria-controls="nav-ohiggins" aria-selected="false">
						Región de O'Higgins
					</a>
					
					<a onclick="loadPage_araucania()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-araucania-tab" data-toggle="tab" href="#nav-araucania" role="tab" aria-controls="nav-araucania" aria-selected="false">
						Región de la Araucanía
					</a>
					
					<a onclick="loadPage_magallanes()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-magallanes-tab" data-toggle="tab" href="#nav-magallanes" role="tab" aria-controls="nav-magallanes" aria-selected="false">
						Región de Magallanes
					</a>									
					
				<a onclick="loadPage_atacama()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-atacama-tab" data-toggle="tab" href="#nav-atacama" role="tab" aria-controls="nav-atacama" aria-selected="false">
					Región de Atacama
				</a>
					
									
					<a onclick="loadPage_maule()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-maule-tab" data-toggle="tab" href="#nav-maule" role="tab" aria-controls="nav-maule" aria-selected="false">
						Región del Maule
					</a>
		
					
					<a onclick="loadPage_rios()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-rios-tab" data-toggle="tab" href="#nav-rios" role="tab" aria-controls="nav-rios" aria-selected="false">
						Región de los Ríos
					</a>
						
					
					<a onclick="loadPage_metro()" class="nav-item nav-link p-2 px-3 w-25 list-group-item-action" id="nav-metro-tab" data-toggle="tab" href="#nav-metro" role="tab" aria-controls="nav-metro" aria-selected="false">
						Región de Metropolitana
					</a>
				
				
				</div>
		</div>
		</div>
			
						
			
		<div class="row">
			
			
			<div class="col-lg-12">
				

			<div class="tab-content" id="nav-tabContent">

				 <!-- Region de Arica y Parinacota -->
				 <div class="tab-pane fade" id="nav-arica" role="tabpanel" aria-labelledby="nav-arica-tab">

					<h3>Region de Arica y Parinacota</h3>		
					 
					 	<div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_arica" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>

				 </div>

				 <!-- Region de Tarapacá -->
				 <div class="tab-pane fade" id="nav-tarapaca" role="tabpanel" aria-labelledby="nav-tarapaca-tab">

					<h3>Region de Tarapacá</h3>
					 					 
					  <div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_tarapaca" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           			  </div>					 

				</div>

				 <!-- Region de Antofagasta -->
				 <div class="tab-pane fade" id="nav-antofagasta" role="tabpanel" aria-labelledby="nav-antofagasta-tab">

					 <h3>Region de Antofagasta</h3>	
					 
					 <div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_antofagasta" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           			  </div>		

				 </div>	
				
				 <!-- Region de Atacama -->
				 <div class="tab-pane fade" id="nav-atacama" role="tabpanel" aria-labelledby="nav-atacama-tab">

					 <h3>Region de Atacama</h3>		
					 
					 <div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_atacama" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           			  </div>		

				 </div>	
				
				
				 <!-- Región de Coquimbo -->
				 <div class="tab-pane fade" id="nav-coquimbo" role="tabpanel" aria-labelledby="nav-coquimbo-tab">
				 
					  <h3>Región de Coquimbo</h3>
					 
					 <div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_coquimbo" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>
				
				  </div>
				
				<!-- Región de Coquimbo -->
				<div class="tab-pane fade" id="nav-valpo" role="tabpanel" aria-labelledby="nav-valpo-tab">
				 
					  <h3>Región de Valparaíso</h3>
					
					<div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_valpo" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>
				
				</div>
				
				 <!-- Región de Coquimbo -->
				<div class="tab-pane fade" id="nav-ohiggins" role="tabpanel" aria-labelledby="nav-ohiggins-tab">
				 
					  <h3>Región de O'Higgins</h3>
					
					<div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_ohiggins" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>
				
				  </div>
				
				 <!-- Región del Maule -->
				<div class="tab-pane fade" id="nav-maule" role="tabpanel" aria-labelledby="nav-maule-tab">
				 
					  <h3>Región del Maule</h3>
					
					<div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_maule" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>
				
				  </div>
								
					
				 <!-- Región de Ñuble -->
				<div class="tab-pane fade" id="nav-nuble" role="tabpanel" aria-labelledby="nav-nuble-tab">
				 
					  <h3>Región de Ñuble</h3>
					
					<div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_nuble" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>
				
				  </div>
				
				 <!-- Región de Biobío -->
				<div class="tab-pane fade" id="nav-biobio" role="tabpanel" aria-labelledby="nav-biobio-tab">
				 
					  <h3>Región del Biobío</h3>
					
					<div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_biobio" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>
				
				  </div>
				
				 <!-- Región de la Araucanía -->
				 <div class="tab-pane fade" id="nav-araucania" role="tabpanel" aria-labelledby="nav-araucania-tab">
				 
					  <h3>Región de la Araucanía</h3>
					 
					 <div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_araucania" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>
				
				  </div>
					
				  <!-- Región de los Ríos -->
				 <div class="tab-pane fade" id="nav-rios" role="tabpanel" aria-labelledby="nav-rios-tab">
				 
					  <h3>Región de los Ríos</h3>
					 
					 <div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_rios" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>
				
				  </div>						
					
				<!-- Región de Los Lagos -->
				 <div class="tab-pane fade" id="nav-lagos" role="tabpanel" aria-labelledby="nav-lagos-tab">
				 
					  <h3>Región de Los Lagos</h3>
					 
					 <div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_lagos" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>
				
				  </div>	
				
				<!-- Región del Aysén -->
				 <div class="tab-pane fade" id="nav-aysen" role="tabpanel" aria-labelledby="nav-aysen-tab">
				 
					  <h3>Región del Aysén</h3>
					 
					 <div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_aysen" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>
				
				  </div>
					
				  <!-- Región de Magallanes -->
				 <div class="tab-pane fade" id="nav-magallanes" role="tabpanel" aria-labelledby="nav-magallanes-tab">
				 
					  <h3>Región de Magallanes</h3>
					 
					 <div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_magallanes" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>
				
				  </div>	
				
				  <!-- Región de Metropolitana -->
				 <div class="tab-pane fade" id="nav-metro" role="tabpanel" aria-labelledby="nav-metro-tab">
				 
					  <h3>Región de Metropolitana</h3>
					 
					 <div class="row d-flex justify-content-around p-3">
               				 <div class="col-10 d-lg-block embed-responsive embed-responsive-16by9">
                  				  <div class="row align-items-center">
                   				     <iframe style="display:none" id="iframe_metro" class="embed-responsive-item"></iframe>
                   				 </div>
                			</div>
           				</div>
				
				  </div>

			 </div>

			</div>
		
		</div>

				
			</div>	
	
</section>	
	
<?php /*	
<section class="pt-0">
	
	<div class="container">
		
					
		<div class="row">
			
		
					<div class="col-lg-3">						
					<?php 					
							for($x=1;$x<=4;$x++){						
							$estadisticas_modulo_1 = $x."_estadisticas";
							$estadisticas_modulo_1_current = get_field($estadisticas_modulo_1);								
				 	?>								
					<a class="nav-item nav-link p-2 px-3 list-group-item-action" href="<?php echo $estadisticas_modulo_1_current['url']; ?>" target="_blank ">
					<?php 
						if($estadisticas_modulo_1_current){
							if(!is_null($estadisticas_modulo_1_current['title']))
							{
								echo $estadisticas_modulo_1_current['title']; 
							}
						}
						?>
					</a>					
					<?php } ?>							
					</div>
		
					<div class="col-lg-3">						
					<?php 					
							for($y=5;$y<=8;$y++){						
							$estadisticas_modulo_2 = $y."_estadisticas";
							$estadisticas_modulo_2_current = get_field($estadisticas_modulo_2);								
				 	?>								
					<a class="nav-item nav-link p-2 px-3 list-group-item-action" href="<?php echo $estadisticas_modulo_2_current['url']; ?>" target="_blank ">
					<?php 
						if($estadisticas_modulo_2_current){
							if(!is_null($estadisticas_modulo_2_current['title']))
							{
								echo $estadisticas_modulo_2_current['title']; 
							}
						}
						?>
					</a>					
					<?php } ?>							
					</div>
						
					<div class="col-lg-3">						
					<?php 					
							for($t=9;$t<=12;$t++){						
							$estadisticas_modulo_3 = $t."_estadisticas";
							$estadisticas_modulo_3_current = get_field($estadisticas_modulo_3);								
				 	?>								
					<a class="nav-item nav-link p-2 px-3 list-group-item-action" href="<?php echo $estadisticas_modulo_3_current['url']; ?>" target="_blank ">
					<?php 
						if($estadisticas_modulo_3_current){
							if(!is_null($estadisticas_modulo_3_current['title']))
							{
								echo $estadisticas_modulo_3_current['title']; 
							}
						}
						?>
					</a>					
					<?php } ?>							
					</div>	
		
					<div class="col-lg-3">						
					<?php 					
							for($r=13;$r<=16;$r++){						
							$estadisticas_modulo_4 = $r."_estadisticas";
							$estadisticas_modulo_4_current = get_field($estadisticas_modulo_4);								
				 	?>								
					<a class="nav-item nav-link p-2 px-3 list-group-item-action" href="<?php echo $estadisticas_modulo_4_current['url']; ?>" target="_blank ">
					<?php 
						if($estadisticas_modulo_4_current){
							if(!is_null($estadisticas_modulo_4_current['title']))
							{
								echo $estadisticas_modulo_4_current['title']; 
							}
						}
						?>
					</a>					
					<?php } ?>							
					</div>	
		
			</div>
	
				
			</div>	
	
</section>
*/

?>
	
<?php get_footer(); ?>
