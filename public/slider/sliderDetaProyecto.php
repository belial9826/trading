<div id="sliderDetaProy" class="owl-carousel owl-theme">
	
	<div class="item">
		<img src="public/img/HEADER/14.png" alt="PETROAMBIENTAL COLOMBIA">	
		<div class="contexto">
			<h2>Complejo de oficinas modulares</h2>
			<h2>OBONUCO - PASTO</h2>
		</div>
	</div>
	<div class="item">
		<img src="public/img/HEADER/14.png" alt="PETROAMBIENTAL COLOMBIA">	
		<div class="contexto">
			<h2>Complejo de oficinas modulares</h2>
			<h2>OBONUCO - PASTO</h2>
		</div>
	</div>
	<div class="item">
		<img src="public/img/HEADER/14.png" alt="PETROAMBIENTAL COLOMBIA">
		<div class="contexto">
			<h2>Complejo de oficinas modulares</h2>
			<h2>OBONUCO - PASTO</h2>
		</div>	
	</div>
</div>

<script>
	jQuery(document).ready(function($) {

		$(".owl-carousel").owlCarousel({
		    loop:true,
		    autoplay: false,
		    arrows: false,
		    dots: false,
		    navSpeed: 2500,
		    smartSpeed: 2500,
		    fluidSpeed: 2500,
		    nav:true,
		    navText: ["<img src='public/img/17.png'>","<img src='public/img/18.png'>"],
		    margin:0,
		    items: 1,
		});

		$(window).load(function() {
			
			
			if (screen.width >= 768) {

				/*$("#sliderDetaProy .item img").height($("#sliderDetaProy").height());*/
				
			}
		});
		
	});
	
</script>