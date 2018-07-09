<script assync>
	/*Para usar las animaciones es necesario que este incluidas las librerias de waypoint y animate.*/
	jQuery(document).ready(function($) {
		$(".aniUp").waypoint(function(direction) {
		    if (direction === 'down') {
		        $(this.element).addClass('animated zoomInUp');
		    } else {
		        $(this.element).removeClass('animated  zoomInUp');
		    }
		}, {
		    offset: '99%'
		});

		$(".aniDer").waypoint(function(direction) {
		    if (direction === 'down') {
		        $(this.element).addClass('animated fadeInRight');
		    } else {
		        $(this.element).removeClass('animated  fadeInRight');
		    }
		}, {
		    offset: '99%'
		});

		$(".aniIzq").waypoint(function(direction) {
		    if (direction === 'down') {
		        $(this.element).addClass('animated fadeInLeft');
		    } else {
		        $(this.element).removeClass('animated  fadeInLeft');
		    }
		}, {
		    offset: '99%'
		});

		$(".aniZoom").waypoint(function(direction) {
		    if (direction === 'down') {
		        $(this.element).addClass('animated zoomIn');
		    } else {
		        $(this.element).removeClass('animated  zoomIn');
		    }
		}, {
		    offset: '99%'
		});

		$(".aniFade").waypoint(function(direction) {
		    if (direction === 'down') {
		        $(this.element).addClass('animated fadeIn');
		    } else {
		        $(this.element).removeClass('animated  fadeIn');
		    }
		}, {
		    offset: '99%'
		});
	});
</script>