<?php include 'tpl/header.tpl.php'; ?>
<?php include 'tpl/breadcrumbs-row.tpl.html'; ?>
<section class="container">
	<article>
		<div class="col-sm-12">
			<h2 class="page-header">TESTIMONIOS</h2>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="content-testimonio">
					<div class="col-sm-3">
						<img src="assets/images/toulouse.png" alt="" class="pull-left img-responsive fix-left">
					</div>
					<div class="col-sm-9">
						<p>TLS "Las actividades de integración que desarrollamos junto a Synergy cumplieron todos los objetivos de camaradería entre los trabajadores"</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="content-testimonio">
					<div class="col-sm-9">
						<p>BPZ "Soy trabajador de BPZ hace 5 años en el area de contabilidad y puedo decir que la experiencia con Synergy en la fiesta de fin de año, fue mas allá de mis expectativas y la de mis compañeras"</p>
					</div>
					<div class="col-sm-3">
						<img src="assets/images/BPZ.png" alt="" class="pull-right img-responsive mt50">
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="content-testimonio">
					<div class="col-sm-3">
						<img src="assets/images/pandero.png" alt="" class="pull-left img-responsive mt50">
					</div>
					<div class="col-sm-9">
						<p>PANDERO "La fiesta del día del trabajador fué un exito, la cena y el dj fueron lo mejor de todo, realmente"</p>
					</div>
				</div>
			</div>
		</div>
	</article>
	<article>
		<div class="col-sm-10 col-sm-offset-1">
			<h2>CONTACTO</h2>
			<form role="form" class="contact-form" action="SendMail/fast-contact.php" id="contact-form" method="post">
				<input type="hidden" name="page" value="Testimonio">
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