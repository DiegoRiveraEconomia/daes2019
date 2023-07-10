<?php
/*
 * Template Name: Plantilla Documentos
 * Author: Juan Génova.
 *
 */
?>

<?php get_header(); ?>
<?php the_post()
?>


<?php 

$leyes_y_decretos = get_field('leyes_y_decretos');
$resoluciones = get_field('resoluciones');
$normas = get_field('normas');
$minutas = get_field('minutas');
$modelofichas = get_field('modelo_fichas');
$estatutos = get_field('estatutos');
$guias_buenas_practicas = get_field('guias_buenas_practicas');
$estados_financieros = get_field('estados_financieros');


?>

<section  style="padding: 50px 0 0px 0;">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>	
      
    </div>
  </section>
  
  
  <section id="portfolio" style="padding:20px 0 0 0;">
  
  		<div class="container">
  		
  			<div class="row">  			
  				<div class="col-lg-8">
			  		
			  		 <!-- Leyes y Decretos -->
			  		 
			  		 <div class="row">
				        <div class="col-lg-12">
				         <h2 class="section-heading" id="leyes">Leyes y decretos</h2>
				         <hr class="redline" align="left">  
				        </div>
			      	 </div>
			         <div class="row">
				      	<?php  echo $leyes_y_decretos; ?>
				     </div>
				     <!-- Leyes y Decretos -->
				    
				     <!-- Resoluciones -->	
				     			    
				     <div class="row">
				        <div class="col-lg-12">
				         <h2 class="section-heading" id="resoluciones">Resoluciones</h2>
				         <hr class="redline" align="left">  
				        </div>
				      </div>
				      
				      <div class="row">
				     	<?php echo $resoluciones; ?>
				      </div>
				      <!-- Resoluciones -->
				    
				    
				    <!-- Normas -->
				    <a href="#" id="normas"><!----></a>	
				     <div class="row">
				        <div class="col-lg-12">
				         <h2 class="section-heading" id="normas">Normas</h2>
				         <hr class="redline" align="left">  
				        </div>
				      </div>
				      
				      <div class="row">
				      	<?php echo $normas; ?>
				      </div>
				      <!-- Normas -->
						
						
					<!-- Minutas -->	
										
					 <div class="row">
					    <div class="col-lg-12">
					     <h2 class="section-heading" id="minutas">Minutas y Guías de Procedimientos</h2>
					     <hr class="redline" align="left">  
					    </div>
					  </div>
					  
					  <div class="row">					  
					  	<?php echo $minutas; ?>
					  </div>					
					<!-- Minutas -->
					
					<!-- Modelos -->	
								
					 <div class="row">
					    <div class="col-lg-12">
					     <h2 class="section-heading" id="modelos">Modelos de Fichas</h2>
					     <hr class="redline" align="left">  
					    </div>
					  </div>
					  
					  <div class="row">					  
					  	<?php echo $modelofichas; ?>
					  </div>					
					<!-- Modelos -->	
					
					<!-- Estatutos -->	
								
					 <div class="row">
					    <div class="col-lg-12">
					     <h2 class="section-heading" id="estatutos">Estatutos tipo</h2>
					     <hr class="redline" align="left">  
					    </div>
					  </div>
					  
					  <div class="row">					  
					  	<?php echo $estatutos; ?>
					  </div>					
					<!-- Estatutos -->
							
						<!-- Buenas Prácticas -->	
								
					 <div class="row">
					    <div class="col-lg-12">
					     <h2 class="section-heading" id="buenas_practicas">Guías de Buenas Prácticas</h2>
					     <hr class="redline" align="left">  
					    </div>
					  </div>
					  
					  <div class="row">					  
					  	<?php echo $guias_buenas_practicas; ?>
					  </div>					
						<!-- Buenas Prácticas -->	
					
					
				    	<!-- Estados Financieros -->	
								
					<!-- <div class="row">
					    <div class="col-lg-12">
					     <h2 class="section-heading" id="estados_financieros">Estados Financieros</h2>
					     <hr class="redline" align="left">  
					    </div>
					  </div>
					  
					  <div class="row">					  
					  	
					  </div>					-->
					<!-- Estados Financieros -->
					
				 </div>
				 
				 <div class="col-lg-4">
				 
				 
				  <div class="row mt-4">
        
			        <div class="col-md-12 portfolio-item">          
			          <div class="portfolio-caption">
			            <h4><a href="#leyes">Leyes y decretos</a></h4>   
			          </div>
			        </div>
			        
			        <div class="col-md-12 portfolio-item">          
			          <div class="portfolio-caption">
			            <h4><a href="#resoluciones">Resoluciones</a></h4>                        
			          </div>
			        </div>
			        
			         <div class="col-md-12 portfolio-item">          
			          <div class="portfolio-caption">
			            <h4><a href="#normas">Normas</a></h4>                        
			          </div>
			        </div>
			        
			         <div class="col-md-12 portfolio-item">          
			          <div class="portfolio-caption">
			            <h4><a href="#minutas">Minutas y Guías de Procedimientos</a></h4>                        
			          </div>
			        </div>
			        
			        <div class="col-md-12 portfolio-item">          
			          <div class="portfolio-caption">
			            <h4><a href="#modelos">Modelos de Fichas</a></h4>                        
			          </div>
			        </div>
					  
					 <div class="col-md-12 portfolio-item">          
			          <div class="portfolio-caption">
			            <h4><a href="#estatutos">Estatutos tipo</a></h4>                        
			          </div>
			        </div>
					  
					  <div class="col-md-12 portfolio-item">          
			          <div class="portfolio-caption">
			            <h4><a href="#buenas_practicas">Guías de Buenas Prácticas</a></h4>                        
			          </div>
			        </div>
					  
				<!--   <div class="col-md-12 portfolio-item">          
			          <div class="portfolio-caption">
			            <h4><a href="#estados_financieros">Estados Financieros</a></h4>                        
			          </div>
			        </div>
			       -->
					  
			      </div>
				 
				 
				 </div>
				 
  			</div>
  		</div>
  
  </section>

<?php get_footer(); ?>
