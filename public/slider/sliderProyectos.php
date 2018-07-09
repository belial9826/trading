<div id="sliderProy" class="owl-carousel owl-theme">
	
	<div class="item">
		<img src="public/img/HEADER/10.png" alt="PETROAMBIENTAL COLOMBIA">	
		<div class="info">
			<a href="detalle-proyecto.php">
				<p>Complejo de oficinas modulares</p>
				<h4>OBONUCO - PASTO</h4>
			</a>
		</div>
	</div>
	<div class="item">
		<img src="public/img/HEADER/11.png" alt="PETROAMBIENTAL COLOMBIA">	
		<div class="info">
			<a href="detalle-proyecto.php">
				<p>Complejo de oficinas modulares</p>
				<h4>OBONUCO - PASTO</h4>
			</a>
		</div>
	</div>
	<div class="item">
		<img src="public/img/HEADER/12.png" alt="PETROAMBIENTAL COLOMBIA">	
		<div class="info">
			<a href="detalle-proyecto.php">
				<p>Complejo de oficinas modulares</p>
				<h4>OBONUCO - PASTO</h4>
			</a>
		</div>
	</div>
	<div class="item">
		<img src="public/img/HEADER/13.png" alt="PETROAMBIENTAL COLOMBIA">	
		<div class="info">
			<a href="detalle-proyecto.php">
				<p>Complejo de oficinas modulares</p>
				<h4>OBONUCO - PASTO</h4>
			</a>
		</div>
	</div>
	<div class="item">
		<img src="public/img/HEADER/10.png" alt="PETROAMBIENTAL COLOMBIA">	
		<div class="info">
			<a href="detalle-proyecto.php">
				<p>Complejo de oficinas modulares</p>
				<h4>OBONUCO - PASTO</h4>
			</a>
		</div>
	</div>
</div>

<script>
	jQuery(document).ready(function($) {



		

		$(window).load(function() {	

			$(".owl-carousel").owlCarousel({
			    loop:true,
			    autoplay: false,
			    arrows: false,
			    dots: false,
			    navSpeed: 2500,
			    smartSpeed: 2500,
			    fluidSpeed: 2500,
			    autoHeight:true,
			    nav:true,
			    navText: ["<img src='public/img/17.png'>","<img src='public/img/18.png'>"],
			    margin:0,
			    items: 3,
			});

			
			if (screen.width >= 768) {

				/*$("#sliderProy .item img").height($("#sliderProy").height());*/
				
			}
		});
		
	});
	
</script>