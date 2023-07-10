<?php
/*
 * Template Name: Plantilla Quienes Somos
 * Author: Juan Génova.
 *
 */
?>

<?php get_header(); ?>
<?php the_post();

$textointro = get_field('textointro');
$imageintro = get_field('imageintro');
$mision = get_field('mision');
$nuestroequipo = get_field('nuestroequipo');
$trabajamos_cooperativas = get_field('trabajamos_cooperativas');
$trabajamos_gremiales = get_field('trabajamos_gremiales');
$trabajamos_consumidores = get_field('trabajamos_consumidores');

?>

<section style="padding: 50px 0 50px 0; background-color:#f6f6f6;">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<h1><?php the_title(); ?></h1>				
			</div>
		</div>

		<div class="row">

			<div class="col-lg-6 pt-4">

				<?php echo $textointro; ?>

			</div>

			<div class="col-lg-6">
				
				<img class="shadow" src="<?php echo $imageintro['url']; ?>" width="100%" />

			</div>

		</div>

	</div>
</section>

<section style="padding: 50px 0 0 0;">
	<div class="container">

		<div class="row">

			<div class="col-lg-6">

				<h2 class="section-heading">Misión</h2>
				<hr style="margin-bottom:25px;">

				<?php echo $mision; ?>

			</div>

			<div class="col-lg-6">

				<h2 class="section-heading">Nuestro Equipo</h2>
				<hr style="margin-bottom:25px;">
				
				<?php echo $nuestroequipo; ?>

			</div>

		</div>

	</div>
</section>

<section style="padding: 50px 0 50px 0;">
	<div class="container">

		<div class="row">

			<div class="col-lg-12 pt-4">

				<h2 class="section-heading">Con qué sector trabajamos</h2>
				<hr>

			</div>

		</div>

		<div class="row">

			<div class="col-lg-6">

				<h3 class="section-heading">Cooperativas</h3>
				<hr class="redline" align="left">
				
				
				<?php echo $trabajamos_cooperativas; ?>

				<!--<p>
					La legislación chilena las define como asociaciones que de conformidad con el principio de
					la ayuda mutua tienen por objeto mejorar las condiciones de vida de sus socios. Presentan las
					siguientes características: Los socios tienen iguales derechos y obligaciones, un solo voto
					por persona y su ingreso y retiro es voluntario. Deben distribuir el excedente correspondiente
					a operaciones con sus socios, entre otras.
				</p>

				<p>
					<b>Tipo de Cooperativas</b>
				</p>

				<div id="accordion">
					<div>
						<div id="headingOne">
							<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Cooperativas de trabajo
							</button></h5>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								<p>
									Tienen por objeto producir o transformar bienes o prestar servicios a terceros, mediante el trabajo mancomunado de sus
									socios/as y cuya retribución debe fijarse de acuerdo a la labor realizada por cada cual.
								</p>
							</div>
						</div>
					</div>
					<div>
						<div id="headingTwo">
							<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Cooperativas Agrícolas, Campesinas
							</button></h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								<p>
									Se dedican a la compraventa, distribución, producción y transformación de bienes, productos y servicios relacionados
									con la actividad silvoagropecuaria y agroindustrial, y actúan preferentemente en un medio rural y propenden al desarrollo
									social, económico y cultural de sus socios/as.
								</p>
							</div>
						</div>
					</div>
					<div>
						<div id="headingThree">
							<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Cooperativas Pesqueras
							</button></h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
								<p>
									Son aquellas que se dedican a la producción, compra, venta, distribución, transformación de bienes, productos y servicios
									relacionados con la explotación de productos del mar y a las actividades que persigan el mejoramiento de las condiciones de
									vida de quienes las desempeñan.
								</p>
							</div>
						</div>
					</div>
					<div>
						<div id="headingFour">
							<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								Cooperativas de Servicios
							</button></h5>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
							<div class="card-body">								
								<p>
									Tienen por objeto distribuir los bienes y proporcionar servicios de toda índole, preferentemente a sus socios/as, con el
									propósito de mejorar sus condiciones ambientales y económicas y de satisfacer sus necesidades familiares, sociales,
									ocupacionales o culturales.
								</p>
							</div>
						</div>
					</div>
					<div>
						<div id="headingFive">
							<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								Federaciones e Institutos Auxiliares
							</button></h5>
						</div>
						<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
							<div class="card-body">
								<p>Las federaciones de cooperativas están constituidas por tres o más cooperativas, las confederaciones 
								por tres o más federaciones y los institutos auxiliares por siete o más personas jurídicas de derecho público,
								 cooperativas u otras personas jurídicas de derecho privado que no persiguen fines de lucro.</p>
							</div>
						</div>
					</div>
				</div>-->

			</div>

			<div class="col-lg-6">

				<div class="row">

					<div class="col-lg-12">

						<h3 class="section-heading">Asociaciones Gremiales</h3>
						<hr class="redline" align="left">
						
						<p>
							<?php echo $trabajamos_gremiales; ?>
						</p>

						<!--<p>
							Las asociaciones gremiales son organizaciones que reúnen personas naturales, jurídicas, o ambas, con el
							objeto de promover la racionalización, desarrollo y protección de las actividades que les son comunes,
							en razón de su profesión, oficio o rama de la producción o de los servicios, y de las conexas a
							dichas actividades comunes. Se trata de una agrupación de carácter sectorial, cuyo fin es la protección
							y desarrollo de una determinada actividad o sector económico.
						</p> -->

					</div>

					<div class="col-lg-12">

						<h3 class="section-heading">Asociaciones de Consumidores</h3>
						<hr class="redline" align="left">
						
						<p>
						<?php echo $trabajamos_consumidores; ?>
						</p>
						
						<!--<p>
							Es la organización constituida por personas naturales o jurídicas, independientes de todo interés económico,
							comercial o político, cuyo objetivo es proteger, informar y educar a los consumidores y asumir la representación
							y defensa de los derechos de sus afiliados y de los consumidores que así lo soliciten.
						</p>-->

					</div>

				</div>

			</div>

		</div>

	</div>
</section>

<?php get_footer(); ?>