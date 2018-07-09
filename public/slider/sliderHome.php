<div id="sliderHome" class="owl-carousel owl-theme">
	
	<div class="item">
		<img src="public/img/BANNER/1.png" alt="TRADING CRIPTOMONEDAS | BITCOIN, LITECOIN, ETERIUM">
		<div class="contexto">
			<h2>TODOS LOS RECURSOS</h2>
			<h3>EN EL MUNDO DEL TRADING</h3>
		</div>	
	</div>
	<div class="item">
		<img src="public/img/BANNER/1.png" alt="TRADING CRIPTOMONEDAS | BITCOIN, LITECOIN, ETERIUM">	
		<div class="contexto">
			<h2>TODOS LOS RECURSOS</h2>
			<h3>EN EL MUNDO DEL TRADING</h3>
		</div>	
	</div>
	<div class="item">
		<img src="public/img/BANNER/1.png" alt="TRADING CRIPTOMONEDAS | BITCOIN, LITECOIN, ETERIUM">	
		<div class="contexto">
			<h2>TODOS LOS RECURSOS</h2>
			<h3>EN EL MUNDO DEL TRADING</h3>
		</div>	
	</div>
</div>

<script>
	jQuery(document).ready(function($) {

		$(".owl-carousel").owlCarousel({
		    loop:true,
		    autoplay: false,
		    arrows: false,
		    dots: true,
		    navSpeed: 2500,
		    smartSpeed: 2500,
		    fluidSpeed: 2500,
		    responsiveClass:true,
		    nav:false,
		    navText: ["<img src='public/img/HEADER/5.png'>","<img src='public/img/HEADER/4.png'>"],
		    margin:0,
		    items: 1,
		});

		$(window).load(function() {

			$("#sliderHome .item").each(function(index, el) {
				$(this).find('.texto').height($(this).height());					
			});
			
			if (screen.width >= 768) {
				
			}
		});
		
	});
	
</script>