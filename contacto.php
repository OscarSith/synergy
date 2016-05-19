<?php include 'tpl/header.tpl.php'; ?>
<?php include 'tpl/breadcrumbs-row.tpl.html'; ?>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<div id="map" data-position-latitude="-12.117815" data-position-longitude="-77.033877"></div>
<div class="container">
	<article id="index-contact">
		<div class="col-sm-12">
			<h2 class="page-header">CONTACTO</h2>
		</div>
		<div class="row">
			<div class="col-md-8">
				<p>Escríbenos y resolveremos tus dudas.</p>
				<br>
				<form role="form" class="contact-form" action="contact.php" id="contact-form" method="post">
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
						<div class="controls">
							<input type="text" placeholder="Nombre" name="nombre" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="controls">
							<input type="text" class="requiredField form-control" placeholder="Empresa" name="empresa">
						</div>
					</div>
					<div class="form-group">
						<div class="controls">
							<input type="email" class="email form-control" placeholder="Correo" name="email" required>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="telefono" placeholder="Teléfono" class="form-control">
							</div>
							<div class="col-sm-6">
								<input type="text" name="tipo" id="tipo" placeholder="Tipo de evento" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="controls">
							<textarea rows="7" placeholder="Escribe su mensaje..." name="mensaje" class="form-control"></textarea>
						</div>
					</div>
					<button type="submit" id="submit" class="btn btn-success">ENVIAR</button>
				</form>
			</div>

			<div class="col-md-4">
				<h4 class="classic-title"><span>Información</span></h4>
				<p>Av. Dos de Mayo 516 of. 201 - Miraflores</p>
				<p>Av. Manuel Olguin 335 of. 1205 - Surco</p>
				<div class="hr1" style="margin-bottom:10px;"></div>
				<ul class="icons-list list-unstyled">
					<li><strong><i class="fa fa-phone fa-lg fa-fw"></i> Central:</strong> 708 4101</li>
	                <li><strong><i class="fa fa-mobile-phone fa-lg fa-fw"></i> RPC:</strong> 992346162</li>
	                <li><strong><i class="fa fa-envelope-o fa-lg fa-fw"></i> Correo:</strong> <a href="mailito:eventos@nosilenceperu.com">eventos@nosilenceperu.com</a></li>
				</ul>
				<div class="hr1" style="margin-bottom:15px;"></div>
			</div>
		</div>
	</article>
</div>
<?php include 'tpl/footer.tpl.html'; ?>