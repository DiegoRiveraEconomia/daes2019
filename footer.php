<?php 

 $datosfooter = get_field('datosfooter','2');

?>

<footer>
    <div class="container">
      <div class="row">
       
        <div class="col-md-8">
       
        <div class="row">
        	
        	<div class="col-md-3">
                <img src="<?php bloginfo('url') ?>/wp-content/uploads/2019/03/logo-gob-footer.png"/>        
        	</div>
        
        	<div class="col-md-9 texto-footer">
        
		    	<?php echo $datosfooter;?>
				
        	</div>
          
        </div>
        </div>
        
        <div class="col-md-4">
        
		  <div class="row">
		  <div class="span6">
		    <div class="mycontent-left">
		    </div>
		  </div>
		  <div class="span6">
		    <div class="mycontent-right">
		    </div>
		  </div>
		  
		  
		 <!-- <div class="col-md-12"> -->			
				<ul class="nav-footer ml-auto">
		          <li>
		            <a href="<?php bloginfo('url') ?>/quienes-somos/">Quiénes Somos</a>
		          </li>
		          <li>
		            <a href="<?php bloginfo('url') ?>/documentos">Documentos</a>
		          </li>
		          <li>
		            <a href="<?php bloginfo('url') ?>/beneficios">Beneficios</a>
		          </li>
		           <li>
		            <a href="<?php bloginfo('url') ?>/noticias">Noticias</a>
		          </li>
		          </ul>
		          
		        <ul class="nav-footer ml-auto">
		     	 
		          <li>
		            <a href="https://tramites.economia.gob.cl">DAES Digital</a>
		          </li>
		           <li>
		            <a href="<?php bloginfo('url') ?>/preguntas-frecuentes/">Preguntas Frecuentes</a>
		          </li>
		          <li>
		            <a href="<?php bloginfo('url') ?>/contacto">Contacto</a>
		          </li>
		        </ul>
		         
		    <!-- </div> -->
		  
		</div>
		
		
		</div>
       
        </div>
        
      </div>
    </div>
  </footer>

  

  <!-- Bootstrap core JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php bloginfo('template_url') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="<?php bloginfo('template_url') ?>/js/jqBootstrapValidation.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php bloginfo('template_url') ?>/js/agency.js"></script>

 	<script>
		
		function loadPage_arica(){			 
			 var frame= $('#iframe_arica');
			 var url = 'https://www.google.com/maps/d/u/2/embed?mid=1X3lDNQoRJ_kAMpZ-sGwvYhQMO04qd7tF&ll=-20.12794001354096%2C-69.62767770000005&z=7';
			 frame.attr('src',url).show();
		 }
		function loadPage_tarapaca(){
		var frame = $('#iframe_tarapaca');
		var url = 'https://www.google.com/maps/d/u/2/embed?mid=1o0N6s1g8zbSqze8bcgCCbek5MkgW7zYx&ll=-20.722135800859295%2C-68.27537437343744&z=8';
		frame.attr('src',url).show();
		}
		
		function loadPage_antofagasta(){
		var frame = $('#iframe_antofagasta');
		var url = 'https://www.google.com/maps/d/embed?mid=1p1SnVSelKgYv6BBaMYlfUApRP1yPn-mI&ll=-28.040399985220922%2C-69.7849301&z=6';
		frame.attr('src',url).show();
		}
		
		function loadPage_atacama(){
		var frame = $('#iframe_atacama');
		var url = 'https://www.google.com/maps/d/embed?mid=1B8Hd6IyBPPyl4ogNJX_wSH5WBapL8wQ2&ll=-28.11075687286399%2C-70.20698679999998&z=6';
		frame.attr('src',url).show();
		}
		
		function loadPage_coquimbo(){
		var frame = $('#iframe_coquimbo');
		var url = 'https://www.google.com/maps/d/embed?mid=1QGwK29oDMZoJvPDwd9-D7BRV0smIi6uj&ll=-34.76740577114763%2C-72.03916774999999&z=5';
		frame.attr('src',url).show();
		}
		
		function loadPage_valpo(){
		var frame = $('#iframe_valpo');
		var url = 'https://www.google.com/maps/d/embed?mid=1-6Sxsdt0xrXCUwzPoPwmXHTBy1x413WB&ll=-36.89680189608196%2C-89.78345554999999&z=5';
		frame.attr('src',url).show();
		}
		
		function loadPage_metro(){
		var frame = $('#iframe_metro');
		var url = 'https://www.google.com/maps/d/embed?mid=1jDNWfbFHqOatxZv1REtRSbPWfoxXu7Dk&ll=-39.55463060793387%2C-71.88792990000002&z=5';
		frame.attr('src',url).show();
		}
		
		function loadPage_ohiggins(){
		var frame = $('#iframe_ohiggins');
		var url = 'https://www.google.com/maps/d/embed?mid=1rend5urGMHKl4VMNpMQTv3BeH9p8sGD7&ll=-27.01719110374879%2C-71.14926655&z=5';
		frame.attr('src',url).show();
		}
		
		function loadPage_maule(){
		var frame = $('#iframe_maule');
		var url = 'https://www.google.com/maps/d/embed?mid=11VzvB_PeiBFPU6MpcpZXl0l46EmcxA_4&ll=-35.24424816071235%2C-71.6864172&z=7';
		frame.attr('src',url).show();
		}
		
		function loadPage_nuble(){
		var frame = $('#iframe_nuble');
		var url = 'https://www.google.com/maps/d/embed?mid=1hFxMyTkn8DWxQMaQ3xjg1axKjCDOP5WO&ll=-39.37918730041736%2C-72.65710149999995&z=6';
		frame.attr('src',url).show();
		}
		
		function loadPage_biobio(){
		var frame = $('#iframe_biobio');
		var url = 'https://www.google.com/maps/d/embed?mid=13QzhQUPkMDiTdC6u8_i3EEinTSQePcpS&ll=-39.384808169863%2C-72.18684074999999&z=5';
		frame.attr('src',url).show();
		}
		
		function loadPage_araucania(){
		var frame = $('#iframe_araucania');
		var url = 'https://www.google.com/maps/d/embed?mid=1_pSjQvNelp3c2uQH9rY4Vy3eI6lD23b5&ll=-37.8002454287885%2C-72.19109975000003&z=6';
		frame.attr('src',url).show();
		}
		
		function loadPage_rios(){
		var frame = $('#iframe_rios');
		var url = 'https://www.google.com/maps/d/embed?mid=1vOZ_JVJY6w6azzij5L34QoSGseB-3aSM&ll=-39.37929489007049%2C-72.71792364999999&z=8';
		frame.attr('src',url).show();
		}
		
		function loadPage_lagos(){
		var frame = $('#iframe_lagos');
		var url = 'https://www.google.com/maps/d/embed?mid=1DVW3wwxCAJ4ukNXcKpICzS5yK5x1EjM9&ll=-31.898584217072106%2C-71.73877029999997&z=4';
		frame.attr('src',url).show();
		}
		
		function loadPage_aysen(){
		var frame = $('#iframe_aysen');
		var url = 'https://www.google.com/maps/d/embed?mid=1ovW1qpaQ6_5TVtNMJdWrpWm8PD-KIv_h&ll=-46.17236134948299%2C-72.96647055&z=6';
		frame.attr('src',url).show();
		}
		
		function loadPage_magallanes(){
		var frame = $('#iframe_magallanes');
		var url = 'https://www.google.com/maps/d/embed?mid=1V4B-P3zB6ZPRPE-4GOULwX7yl-RyWduF&ll=-53.13468421826024%2C-70.06118585000002&z=7';
		frame.attr('src',url).show();
		}
		
	
		
		
	</script>

 <?php wp_footer(); ?> 
 
<?php if(is_page(2)){ ?>
	
<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">    
    <div class="modal-dialog modal-lg h-100">    
        <div class="modal-content">
                
                <div class="modal-body p-5 text-white" style="background:#073b75;" id="result">		
									    
							    <h2 class="text-center p-2" style="font-size:2.2rem;">Atención Usuarios</h2>
								<h2 class="text-center pb-4" style="font-size:1.5rem;">Entra en vigencia Ley N° 21.239: Prorroga el mandato de directorios asociaciones gremiales, de consumidores y consejos de administración de cooperativas</h2>
								
						<p class="text-white text-justify">					
					Iniciativa legal extenderá vigencia de representantes de sus órganos de administración en tiempos de restricciones de reuniones por la pandemia del Covid-19. Así, la Ley N° 21.239 prorroga el mandato de los órganos de administración como directorios en el caso de asociaciones gremiales y de consumidores, así como los consejos de administración de las cooperativas, entidades fiscalizadas por la División de Asociatividad del Ministerio de Economía.					
						</p>																										
																
								<p class="text-white text-justify">A continuación, invitamos a conocer y leer toda la documentación que la División de Asociatividad ha publicado para colaborar con el funcionamiento de las organizaciones:</p>
								
								
								<div class="row p-3">								
								
									<div class="col-lg-6 pr-4 border-right border-white coop-border">
									
									
										<div class="row">
												
											<div class="col-lg-12">	
												<h2 class="text-white text-center pt-2" style="font-size:1.2rem; min-height:70px;">Cooperativas</h2>
											</div>
											
										</div>
										
										<div class="row">	
			
											
											<div class="col-lg-12 text-center mb-2">
												<div class="border border-white p-1">
												<a class="text-white stretched-link" href="/wp-content/uploads/2020/06/DECLARACION-COOPERATIVAS.pdf" style="font-size:.9rem;" target="_blank">DECLARACIÓN COOPERATIVAS</a>												
												</div>
											</div>
						
											
											<div class="col-lg-6 text-center mx-auto mb-2">
												<div class="border border-white p-1">
												<a class="text-white stretched-link" href="/wp-content/uploads/2020/03/R.A.EX_.-726-INSTRUC.-JGS-COOP.pdf" style="font-size:.9rem;" target="_blank">RAE N°726</a>												
												</div>
											</div>
											
											<div class="col-lg-6 text-center mx-auto mb-2">
												<div class="border border-white p-1">
													<a class="text-white stretched-link" href="/wp-content/uploads/2020/04/RAE-848.pdf" style="font-size:.9rem;" target="_blank">RAE N°848</a>												
												</div>	
											</div>
											
											<div class="col-lg-6 text-center mx-auto mb-2">
												<div class="border border-white p-1">
													<a class="text-white stretched-link" href="/wp-content/uploads/2020/04/RAE-849.pdf" style="font-size:.9rem;" target="_blank">RAE N°849</a>												
												</div>
											</div>
											
											<div class="col-lg-6 text-center mx-auto mb-2">
												<div class="border border-white p-1">
													<a class="text-white stretched-link" href="/wp-content/uploads/2020/04/RAE-851.pdf" style="font-size:.9rem;" target="_blank">RAE N°851</a>												
												</div>
											</div>
											<div class="col-lg-6 text-center mx-auto mb-2">
												<div class="border border-white p-1">
													<a class="text-white stretched-link" href="/wp-content/uploads/2020/04/Oficio-3418.pdf" style="font-size:.9rem;" target="_blank">Oficio N°3418</a>												
												</div>
											</div>
											
										   <div class="col-lg-6 text-center mx-auto mb-2">
												<div class="border border-white p-1">
													<a class="text-white stretched-link" href="/wp-content/uploads/2020/07/RAE-856-Medidas-excepcionales-No-CACS.pdf" style="font-size:.9rem;" target="_blank">RAE N°856</a>												
												</div>
											</div>
											
											<div class="col-lg-6 text-center mx-auto mb-2">
												<div class="border border-white p-1">
													<a class="text-white stretched-link" href="/wp-content/uploads/2020/09/R.A.EX_.870-.pdf" style="font-size:.9rem;" target="_blank">RAE N°870</a>												
												</div>
											</div>
											
											
											<div class="col-lg-6 text-center mx-auto mb-2">
												<div class="border border-white p-1">
													<a class="text-white stretched-link" href="https://asociatividad.economia.cl/wp-content/uploads/2020/09/R.A.EX_.876-auditores-externos.pdf" style="font-size:.9rem;" target="_blank">RAE N°876</a>												
												</div>
											</div>
											
											
											
											
										</div>									
									
									</div>
									
									<div class="col-lg-6 pl-4">
									
									
										<div class="row">
												
											<div class="col-lg-12">	
												<h2 class="text-white text-center" style="font-size:1.2rem; min-height:70px;">Asociaciones Gremiales y de Consumidores</h2>
											</div>
											
										</div>
									
										
										<div class="row">																							
											
												<div class="col-lg-6 text-center mx-auto mb-2">		
													<div class="border border-white p-1">
													<a class="text-white stretched-link" href="/wp-content/uploads/2020/06/ORD.3977-28-05-20_Gremios.pdf"  style="font-size:.9rem;" target="_blank">Oficio N°3977 </a>
													</div>
												</div>
											
												<div class="col-lg-6 text-center mx-auto mb-2">		
													<div class="border border-white p-1">
														<a class="text-white stretched-link" href="/wp-content/uploads/2020/03/Oficio-AG-y-AC.pdf"  style="font-size:.9rem;" target="_blank">Oficio N°2453</a>																								
													</div>
												</div>
											
												<div class="col-lg-6 text-center mb-2">		
													<div class="border border-white p-1">
														<a class="text-white stretched-link" href="/wp-content/uploads/2020/10/ORD.5729-19-10-20.pdf"  style="font-size:.9rem;" target="_blank">Oficio N°5729</a>																								
													</div>
												</div>
											
												 
										</div>
										
									
									</div>
									
								
								</div>
								
								<div class="row p-5">
								
									<div class="col-lg-12 text-center">
									
										<img src="/wp-content/themes/daes2019/img/logo-daes.png" />
										
									</div>
								
								</div>
								
									    
								</div>
            
        </div>
    </div>
</div>-->

<!--<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>  -->

<?php } ?>
<!--<script type="text/javascript">
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
	</script>-->
</body>
</html>