
<link rel="stylesheet" type="text/css" href="public/js/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="public/js/slick/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="public/css/slick-lightbox.css"/>


<div class="carruHome1" id="carruMarcas">

	<div>
		<a href="public/img/BANNER/6.png" data-caption="3/20:Habitación y Aire Acondicionado">
			<div class="info">
				<div class="contImgz">
					<img src="public/img/BANNER/6.png" />
				</div>
			</div>
		</a>
	</div>

</div>

<script type="text/javascript" src="public/js/slick/slick.min.js"></script>
<script type="text/javascript" src="public/js/slick-lightbox.js"></script>

<script>
	
	$(document).ready(function() {

		$(window).load(function() {
			
			if (screen.width >= 768) {
				altoimg = 0;

				$("#carruMarcas .info img").each(function(index, el) {
					if (altoimg <= $(this).height()) { altoimg = $(this).height() }
				});

				$("#carruMarcas .info img").height(altoimg);
			}
		});


	  	$('#carruMarcas').slick({
	  		dots: false,
	  		arrows: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			autoplay: false,
			prevArrow:"<img class='a-left control-c prev slick-prev' src='public/img/carru-bot.jpg'>",
      		nextArrow:"<img class='a-right control-c next slick-next' src='public/img/carru-top.jpg'>",
			speed: 3200,			
			responsive: [{
            	breakpoint: 1024,
		            settings: {
		                slidesToShow: 2,
		                slidesToScroll: 1,
		                infinite: !0,
		                dots: !0
		            }
	        	},{
	            breakpoint: 780,
		            settings: {
		                slidesToShow: 2,
		                slidesToScroll: 1
		            }
		        }, {
	            breakpoint: 600,
		            settings: {
		                slidesToShow: 1,
		                slidesToScroll: 1
		            }
		        }, {
		            breakpoint: 480,
		            settings: {
		                slidesToShow: 1,
		                slidesToScroll: 1
		            }
	        }]
		});

		/*$('#carruMarcas').slickLightbox({
	        itemSelector        : 'a',
	    	navigateByKeyboard  : true,
	    	caption: 'caption'
	    });*/
	});
</script>
