	<!--<div id="accordion-gremiales" class="accordion-faqs">
	        
        	<?php 
        	    $o=1;   		        	
	        	$featured = get_posts(array('post_type' => 'faqs', 'numberposts' => '100',  'orderby' => 'date', 'category' => 6));				
				foreach ($featured as $post) : setup_postdata($post);		
				
			?>
			
			<div>
			    <div id="heading<?php echo $o; ?>">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $o; ?>" aria-expanded="true" aria-controls="collapse<?php echo $o; ?>">
			         	<?php the_title(); ?>
			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse<?php echo $o; ?>" class="collapse" aria-labelledby="heading<?php echo $o; ?>" data-parent="#accordion-gremiales">
			      <div class="card-body">	
						<?php the_content();?>
			      </div>
			    </div>
			 </div>
		
			<?php wp_reset_query(); ?>   	
			<?php $o++; endforeach; ?>
	</div>		
-->

<div id="accordion-gremiales" class="accordion-faqs">
	        
        				
			<div>
			    <div id="heading1">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
			         	¿Cuál es el tratamiento de los bienes de una asociación gremial cuando ésta se disuelve?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion-gremiales">
			      <div class="card-body">	
						<p>En caso de disolución, el patrimonio de la asociación se aplicará a los fines que señalen los estatutos. En caso alguno podrán destinarse los bienes de una asociación gremial disuelta a quienes estaban afiliados a ella.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading2">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
			         	¿Quiénes administran una asociación gremial?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion-gremiales">
			      <div class="card-body">	
						<p>La ley dispone que las Asociaciones Gremiales sean administradas por un directorio, sin perjuicio de lo que dispongan los estatutos sobre otros órganos de administración.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading3">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
			         	¿Quién fiscaliza a las asociaciones gremiales?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion-gremiales">
			      <div class="card-body">	
						<p>Las asociaciones gremiales estarán sujetas a la fiscalización del Ministerio de Economía, Fomento y Turismo, al que deberán proporcionarle los antecedentes que les solicite.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading4">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
			         	¿Se puede distribuir el patrimonio de una asociación gremial a quienes se encuentren afiliados a la misma?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion-gremiales">
			      <div class="card-body">	
						<p>Las rentas, utilidades, beneficios o excedentes de la asociación pertenecerán a ella y no podrán distribuir a sus afiliados ni aún en caso de disolución. Las asociaciones podrán adquirir, conservar y enajenar bienes de toda clase, a cualquier título.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading5">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
			         	¿Qué elementos podrían formar parte del patrimonio de una asociación gremial?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion-gremiales">
			      <div class="card-body">	
						<ol>
<li>Las cuotas o aportes ordinarios o extraordinarios que la asamblea imponga a sus asociados, con arreglo a sus estatutos.</li>
<li>Las donaciones entre vivos.</li>
<li>Las asignaciones por causa de muerte.</li>
<li>El producto de sus bienes o servicios.</li>
<li>La venta de sus activos.</li>
<li>Las multas cobradas a los asociados de conformidad a sus estatutos.</li>
</ol>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading6">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
			         	¿Qué normas debe contener el estatuto de una asociación gremial?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion-gremiales">
			      <div class="card-body">	
						<ol>
<li>Nombre y domicilio de la asociación.</li>
<li>Objetivos que se propone y medios económicos de que dispondrá para su realización.</li>
<li>Categorías de socios, derechos y obligaciones; condiciones de incorporación; forma y motivos de exclusión.</li>
<li>Órganos de administración, ejecución y control; sus atribuciones y el número de miembros que lo componen.</li>
<li>Destino de los bienes en caso de disolución.</li>
</ol>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading7">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
			         	¿Cómo se constituye una Asociación Gremial?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion-gremiales">
			      <div class="card-body">	
						<p>El acto de constitución de una asociación gremial se efectúa en una reunión que se realiza ante notario público, o ante un Oficial de Registro Civil en aquellas comunas que no son asiento de notario, o mediante la suscripción del acta constitutiva ante dicho ministro de fe.</p>
<p>Consulte <strong>DAES Digital</strong> en el sitio <em>asociatividad.economia.cl</em> por Constitución en línea de Asociaciones Gremiales. (incluir link)</p>
<p>El acta constitutiva y los estatutos deben ser escaneados, contar con firma electrónica avanzada y ser subidos a DAES Digital (incluir link).</p>
<p>También pueden ser depositados en el Ministerio de Economía, Fomento y Turismo, en triplicado, y publicar en el Diario Oficial un extracto del acta constitutiva, fecha a partir de la cual la asociación gremial gozará de personalidad jurídica. Para el depósito de antecedentes y la publicación, se dispone de un plazo de 60 días, o en la Seremia de Economía de&nbsp; la región.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading8">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
			         	¿Con cuántos socios se constituye una Asociación Gremial?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion-gremiales">
			      <div class="card-body">	
						<p>Para formar una Asociación Gremial se necesitan a lo menos 25 personas naturales y jurídicas, o al menos 4 personas jurídicas.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading9">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
			         	¿Cuál es la norma que regula a las asociaciones gremiales?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion-gremiales">
			      <div class="card-body">	
						<p>Las Asociaciones Gremiales están reguladas por el Decreto Ley Nº 2.757 del 26 de junio de 1979 del Ministerio del Trabajo y Previsión Social.</p>
			      </div>
			    </div>
			 </div>
		
			   	
				</div>