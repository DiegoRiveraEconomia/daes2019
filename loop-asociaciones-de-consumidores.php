	<!--<div id="accordion-consumidores" class="accordion-faqs">
	        
        	<?php 
        	    $o=1;   		        	
	        	$featured = get_posts(array('post_type' => 'faqs', 'numberposts' => '100',  'orderby' => 'date', 'category' => 7));				
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
			
			    <div id="collapse<?php echo $o; ?>" class="collapse" aria-labelledby="heading<?php echo $o; ?>" data-parent="#accordion-consumidores">
			      <div class="card-body">
						<?php the_content();?>
			      </div>
			    </div>
			 </div>
		
			<?php wp_reset_query(); ?>   	
			<?php $o++; endforeach; ?>
	</div>-->
	
	
	
	<div id="accordion-consumidores" class="accordion-faqs">
	        
        				
			<div>
			    <div id="heading1">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
			         	¿Cuál es el tratamiento de los bienes de una asociación de consumidores cuando ésta se disuelve?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion-consumidores">
			      <div class="card-body">
						<p>En caso de disolución, el patrimonio de la asociación se aplicará a los fines que señalen los estatutos. En caso alguno podrán destinarse los bienes de una asociación gremial disuelta a quienes estaban afiliados a ella.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading2">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
			         	¿Quiénes administran una asociación de consumidores?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion-consumidores">
			      <div class="card-body">
						<p>La ley dispone que las asociaciones de consumidores sean administradas por un directorio, sin perjuicio de lo que dispongan los estatutos sobre otros órganos de administración.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading3">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
			         	¿Qué características tiene la afiliación a una asociación de consumidores?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion-consumidores">
			      <div class="card-body">
						<p>La afiliación a una asociación de consumidores es un acto voluntario y personal, y nadie puede ser obligado a pertenecer a ella para desarrollar una actividad ni impedírsele su desafiliación.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading4">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
			         	¿Quién fiscaliza a las asociaciones de consumidores?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion-consumidores">
			      <div class="card-body">
						<p>Las asociaciones de consumidores estarán sujetas a la fiscalización del Ministerio de Economía, Fomento y Turismo, al que deberán proporcionarle los antecedentes que les solicite en material legal y contable. A contar del 14 de marzo de 2019, el Servicio de Registro Civil fiscalizará lo relativo a reformas de estatutos y registro de directorio.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading5">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
			         	¿Qué normas debe contener el estatuto de una asociación de consumidores?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion-consumidores">
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
			    <div id="heading6">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
			         	¿Qué cosas no pueden hacer las asociaciones de consumidores?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion-consumidores">
			      <div class="card-body">
						<p>A partir del 14.03.2019:</p>
<p style="padding-left: 40px;">a) Constituirse u operar con la finalidad de redistribuir sus fondos a sus miembros fundadores, directores, socios o personas relacionadas con los anteriores en los términos del artículo 100 de la ley N° 18.045</p>
<p style="padding-left: 40px;">b) Repartir costas procesales y personales, excedentes, utilidades o beneficios pecuniarios de sus actividades entre sus miembros fundadores, directores, socios, personas relacionadas con los anteriores de conformidad con el artículo 100 de la ley N° 18.045, o trabajadores, sin perjuicio de las gratificaciones legales que le correspondan. Los ingresos que obtengan con sus actividades servirán exclusivamente para su fi desarrollo institucional, investigación, estudios o para el apoyo de sus objetivos.</p>
<p>Lo dispuesto en el párrafo anterior es sin perjuicio de la remuneración de sus trabajadores y de la facultad del directorio para fijar una retribución adecuada a su representante legal, a sus miembros fundadores, socios o personas relacionadas con los anteriores de conformidad con el artículo 100 de la ley N° 18.045, por los servicios que prestaren a la asociación. Asimismo, las personas enumeradas en el párrafo anterior tendrán derecho a ser reembolsadas de los gastos, autorizados por el directorio, que justificaren haber efectuado en el ejercicio de su función;</p>
<p style="padding-left: 40px;">c) Incluir como asociados a personas jurídicas que se dediquen a actividades empresariales;</p>
<p style="padding-left: 40px;">d) Percibir donaciones, subvenciones, subsidios o ayudas de empresas o agrupaciones de empresas que suministren bienes o servicios a los consumidores;</p>
<p style="padding-left: 40px;">d) Realizar publicidad o difundir comunicaciones no meramente informativas sobre bienes o servicios, ni</p>
<p style="padding-left: 40px;">e) Dedicarse a actividades distintas de las señaladas en el artículo anterior.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading7">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
			         	¿Cuáles son las funciones específicas de una asociación de consumidores?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion-consumidores">
			      <div class="card-body">
						<p style="padding-left: 40px;">a) Difundir el conocimiento de las disposiciones de la Ley N° 19.496 y sus regulaciones complementarias;</p>
<p style="padding-left: 40px;">b) Informar, orientar y educar a los consumidores para el adecuado ejercicio de sus derechos y brindarles asesoría cuando la requieran;</p>
<p style="padding-left: 40px;">c) Estudiar y proponer medidas encaminadas a la protección de los derechos de los consumidores y efectuar o apoyar investigaciones en el área del consumo;</p>
<p style="padding-left: 40px;">d) Representar a sus miembros y ejercer las acciones a que se refiere esta ley en defensa de aquellos consumidores que le otorguen el respectivo mandato;</p>
<p style="padding-left: 40px;">e) Representar tanto el interés individual, como el interés colectivo y difuso de los consumidores ante las autoridades jurisdiccionales o administrativas, mediante el ejercicio de las acciones y recursos que procedan. A contar del 14 de marzo del 2019, se agrega la representación individual de los consumidores en causas ante los tribunales de justicia para la determinación de indemnización de perjuicios.</p>
<p style="padding-left: 40px;">f) Participar en los procesos de fijación de tarifas de los servicios básicos domiciliarios, conforme a las leyes y reglamentos que los regulen.</p>
<p>A partir del 14.03.2019 se agregan:</p>
<p style="padding-left: 40px;">g) Ejecutar y celebrar actos y contratos civiles y mercantiles para cumplir sus objetivos, y destinar los frutos de dichos actos y contratos al financiamiento de sus actividades propias.</p>
<p style="padding-left: 40px;">h) Realizar, a solicitud de un consumidor, mediaciones individuales,</p>
<p style="padding-left: 40px;">i) Efectuar, de conformidad a esta ley, cualquier otra actividad destinada a proteger, informar y educar a los consumidores.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading8">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
			         	¿Cómo se constituye una asociación de consumidores?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion-consumidores">
			      <div class="card-body">
						<p>El acto de constitución de una asociación de consumidores se realiza en una reunión que se realiza ante notario público, o ante un Oficial de Registro Civil en aquellas comunas que no son asiento de notario, o mediante la suscripción del acta constitutiva ante dicho ministro de fe. Posteriormente, el acta constitutiva y los Estatutos deben ser depositados en el Ministerio de Economía, Fomento y Turismo, en triplicado, y publicar en el Diario Oficial un extracto del acta constitutiva, fecha a partir de la cual la asociación gremial gozará de personalidad jurídica. Para el depósito de antecedentes y la publicación, se dispone de un plazo de 60 días.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading9">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
			         	¿Con cuántos socios se constituye una Asociación de Consumidores?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion-consumidores">
			      <div class="card-body">
						<p>Para formar una asociación de consumidores, se necesitan a lo menos 25 personas naturales y jurídicas, o al menos 4 personas jurídicas.</p>
			      </div>
			    </div>
			 </div>
		
			   	
						
			<div>
			    <div id="heading10">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
			         	¿Cuál es la norma que regula a las asociaciones de consumidores?			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion-consumidores">
			      <div class="card-body">
						<p>Las Asociaciones de Consumidores están reguladas por la Ley N° 19.496 y sus modificaciones, que Establece Normas Sobre Protección de los Derechos de los Consumidores; en subsidio por el Decreto Ley Nº 2.757 del 26 de junio de 1979 del Ministerio del Trabajo y Previsión Social y, por la Ley 20.500 sobre Asociaciones y Participación Ciudadana, a partir del 14 de marzo de 2019.</p>
			      </div>
			    </div>
			 </div>
		
			   	
				</div>		
