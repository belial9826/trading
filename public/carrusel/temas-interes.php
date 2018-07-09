<link rel="stylesheet" type="text/css" href="public/js/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="public/js/slick/slick-theme.css"/>
<script type="text/javascript" src="public/js/slick/slick.min.js"></script>


<div class="carruHome" id="carru-temas">

  <div>
    <div class="info"> 
      <div class="col-md-6 col-sm-4 col-xs-12">
        <img src="public/img/BANNER/5.png" >
      </div>
      <div class="col-md-6 col-sm-8 col-xs-12">
        <div class="desc disTable">
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam asperiores repudiandae cupiditate, nulla rem perspiciatis, nam ratione dolorem similique accusamus, fugiat eveniet id laudantium dicta. Earum distinctio velit laboriosam voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias doloribus facilis, fuga iure sapiente nisi ab enim, esse...
          </p>
          <a href="interes-detalle.php" class="leermas">Leer más</a>
        </div>
        <div class="clearfix"></div>
        <a href="#" class="btnTransMorado btnBoxShadow">Ver mas</a>
      </div>
      
    </div>
  </div>

  <div>
    <div class="info"> 
      <div class="col-md-6 col-sm-4 col-xs-12">
        <img src="public/img/BANNER/5.png" >
      </div>
      <div class="col-md-6 col-sm-8 col-xs-12">
        <div class="desc disTable">
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam asperiores repudiandae cupiditate, nulla rem perspiciatis, nam ratione dolorem similique accusamus, fugiat eveniet id laudantium dicta. Earum distinctio velit laboriosam voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias doloribus facilis, fuga iure sapiente nisi ab enim, esse...
          </p>
          <a href="interes-detalle.php" class="leermas">Leer más</a>
        </div>
        <div class="clearfix"></div>
        <a href="#" class="btnTransMorado btnBoxShadow">Ver mas</a>
      </div>
      
    </div>
  </div>

  <div>
    <div class="info"> 
      <div class="col-md-6 col-sm-4 col-xs-12">
        <img src="public/img/BANNER/5.png" >
      </div>
      <div class="col-md-6 col-sm-8 col-xs-12">
        <div class="desc disTable">
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam asperiores repudiandae cupiditate, nulla rem perspiciatis, nam ratione dolorem similique accusamus, fugiat eveniet id laudantium dicta. Earum distinctio velit laboriosam voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias doloribus facilis, fuga iure sapiente nisi ab enim, esse...
          </p>
          <a href="interes-detalle.php" class="leermas">Leer más</a>
        </div>
        <div class="clearfix"></div>
        <a href="#" class="btnTransMorado btnBoxShadow">Ver mas</a>
      </div>
      
    </div>
  </div>

</div>


<script>
	
  $(document).ready(function() {
    $('#carru-temas').slick({
      dots: false,
      arrows: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      prevArrow:"<img class='a-left control-c prev slick-prev' src='public/img/ICONO/3.png'>",
      nextArrow:"<img class='a-right control-c next slick-next' src='public/img/ICONO/2.png'>",
      speed: 3200,
      responsive: [{
      breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: !0,
          dots: !0
        }
        },{
          breakpoint: 780,
          settings: {
          slidesToShow: 1,
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
  });
</script>