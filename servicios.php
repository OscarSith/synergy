<?php include 'tpl/header.tpl.php'; ?>
<?php include 'tpl/breadcrumbs-row.tpl.html'; ?>
<section class="container">
	<article>
		<div class="col-sm-12">
			<h2 class="page-header">SERVICIOS</h2>
		</div>
		<div class="row service-content">
			<div class="col-sm-6" id="service-image">
				<img src="assets/images/imagen4.jpg" alt="" class="img-responsive" id="imagen4">
				<img src="assets/images/imagen5.jpg" alt="" class="img-responsive hidden" id="imagen5">
				<img src="assets/images/imagen6.jpg" alt="" class="img-responsive hidden" id="imagen6">
				<img src="assets/images/imagen7.jpg" alt="" class="img-responsive hidden" id="imagen7">
			</div>
			<div class="col-sm-6">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" data-img="imagen4"><i class="fa fa-chevron-circle-right"></i>Celebraciones Corporativas</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
							<ul>
								<li>Innovación y creatividad para celebraciones corporativas</li>
								<li>Unión entre espacio, gastronomía, decoración y espectaculos para crear un resultado impactante en el invitado</li>
								<li>Unido a una eficiancia operacional y logística creamos diferentes, atractivos y sostenibles</li>
							</ul>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading" role="tab" id="headingTwo">
						  <h4 class="panel-title">
						    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" data-img="imagen5"><i class="fa fa-chevron-circle-right"></i>Convenciones</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						  <div class="panel-body">
						  	<ul>
						    	<li>Mensaje puesta en escena, desarrollo e imagen de marca son los 4 pilares fundamentales para que una convención quede en la memoria de los asistentes</li>
						    	<li>Ofrecemos soluciones profesionales para convenciones que deseen proyectar un valor añadido a sus stands o expsiciones</li>
						    </ul>
						  </div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading" role="tab" id="headingThree">
						  <h4 class="panel-title">
						    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" data-img="imagen6"><i class="fa fa-chevron-circle-right"></i>Lanzamientos</a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						  <div class="panel-body">
						    <ul>
						    	<li>La celebración del lanzamiento de un producto, es un evento corporativo donde el objetivo es que el producto que se presenta y lance, perdure en el consciente de los asistentes, a través de todos los sentidos, durante todo el evento y luego del mismo.</li>
						    </ul>
						  </div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading" role="tab" id="headingFour">
						  <h4 class="panel-title">
						    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" data-img="imagen7"><i class="fa fa-chevron-circle-right"></i>Actividad de Integracion</a>
						  </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						  <div class="panel-body">
						    <ul>
						    	<li>Ofrecemos jornadas y eventos de equipo enfocados a generar sinergias en el grupo, mejorar, competir y avanzar juntos. Actividades de gestión de adrenalina y acciones que potencian las cualidades artísticas y humanas del conjunto</li>
						    </ul>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
	<article>
		<div class="col-md-12 col-lg-10 col-lg-offset-1">
			<h2>CONTACTO</h2>
			<form role="form" class="contact-form" action="SendMail/fast-contact.php" id="contact-form" method="post">
			<input type="hidden" name="page" value="Servicios">
				<div class="form-group" id="content-messages">
					<?php if (isset($_SESSION['SUCCESS'])): ?>
						<div id="success" class="alert alert-success" role="alert"><?= $_SESSION['SUCCESS'] ?></div>
						<?php unset($_SESSION['SUCCESS']) ?>
					<?php endif ?>
					<?php if (isset($_SESSION['ERROR'])): ?>
						<div id="error" class="alert alert-danger" role="alert"><?php echo $_SESSION['ERROR'] ?></div>
						<?php unset($_SESSION['ERROR']) ?>
					<?php endif ?>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="controls col-sm-6">
							<input type="text" placeholder="Nombre" name="nombre" class="form-control" required>
						</div>
						<div class="controls col-sm-6">
							<input type="email" class="email form-control" placeholder="Correo" name="email" required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="controls">
						<textarea rows="7" placeholder="Escribe su mensaje..." name="mensaje" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group text-center">
					<button type="submit" id="submit" class="btn btn-success">ENVIAR</button>
				</div>
			</form>
		</div>
	</article>
</section>
<?php include 'tpl/footer.tpl.html'; ?>