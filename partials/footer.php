<script>
	jQuery(document).ready(function($) {
		$(window).load(function() {
			/* Act on the event */
			$("footer .suscripcion .col-der").height($("footer .suscripcion .col-izq").outerHeight());		
		});
	});
</script>
<footer class="disInlineB" >

	<div class="suscripcion disTable">
		<div class="col col-izq">
			<div class="texto">
				<h3>REGISTRATE</h3>
				<p>
					Recibe información exclusiva de nuestra empresa
				</p>
			</div>
			<form action="POST">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<input type="text" class="form-control" placeholder="Nombre">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<input type="text" class="form-control" placeholder="Telefono">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<input type="text" class="form-control" placeholder="E-mail">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<input type="submit" class="btnTransBlanco btnBoxShadow" value="Enviar">
				</div>
			</form>
		</div>
		<div class="col col-der">
			<div>
				<?php include 'partials/redes.php'; ?>
			</div>
		</div>
	</div>	

	<div class="info-footer disTable">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="contimg">
						<a href="index.php">
							<img src="public/img/HEADER/1.png" alt="CURSO TRADING CRIPTOMONEDAS">
						</a>
					</div>
				</div>

				<div class="col-md-2 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-12">
					<div class="info disTable">
						<h3>Site Map</h3>
						<ul>
							<li><a href="index.php">INICIO</a></li>
							<li><a href="index.php">COMPAÑIA</a></li>
							<li><a href="index.php">SERVICIOS</a></li>
							<li><a href="index.php">ANALISIS</a></li>
							<li><a href="index.php">TIENDA</a></li>
							<li><a href="index.php">SEMINARIOS</a></li>
							<li><a href="index.php">CONTÁCTENOS</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info disTable">
						<h3>Contacto</h3>
						<div class="dato disTable">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<div class="texto">
								<p>Ibagué - Tolima - Colombia.</p>
							</div>
						</div>

						<div class="dato disTable">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<div class="texto">
								<p>+57 (8) 268 05 05</p>
							</div>
						</div>

						<div class="dato disTable">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<div class="texto">
								<p><a href="mailto:info@tradingmarketcash.com">info@tradingmarketcash.com</a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info disTable declaracion">
						<div class="texto disTable text-justify">
							<p>
								<strong>Declaración de riezgos:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quae, quasi molestias ducimus animi voluptatibus, consequuntur maiores, aliquam suscipit natus possimus eaque facilis nihil nobis hic voluptates dolorem vitae expedita.
							</p>
						</div>
						<div class="clearfix"></div>
						<a href="terminos-condiciones.php" class="btnVerde btnBoxShadow">Términos y condiciones</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>



<script src="public/js/webfont.js"></script>
<script >
 WebFont.load({
    google: {
      families: ['Roboto:400, 600, 700, 900', 'Open Sans:400, 600, 700, 900', 'Source Sans Pro:400, 600, 700, 900', 'Lato: 400, 600, 700, 900']
    }
  });
</script>

<script async>
	jQuery(document).ready(function($) {
		
		$('.btnBoxShadow').hover(function() {

			colTrans = "#ffffff";

			if ($(this).hasClass('btnVerde') ) {
				colTrans = "#08a635";
			} 
			if ($(this).hasClass('btnGris') ) {
				colTrans = "#7c7c7c";
			} 
			
			if ($(this).hasClass('btnTransVino') ) {
				colTrans = "#5c0100";
			} 	
			if ($(this).hasClass('btnTransBlanco') ) {
				colTrans = "#ffffff";
			} 					

			wid = $(this).outerWidth();
			fondo = $(this).css("background-color");

			estilo = 'inset '+wid+'px 0px 0px '+colTrans;

			$(this).css('box-shadow', estilo); 
		}, function() {
			$(this).css('box-shadow', ''); 
		});

		if (screen.width > 768) {
		}		
		
	});

	$(window).load(function() {
		/* Act on the event */
		
		if (screen.width >= 768) {	

			
			
		}	
	});
</script>


<?php include 'partials/animaciones.php'; ?>