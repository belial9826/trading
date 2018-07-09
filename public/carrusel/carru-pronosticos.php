
<link rel="stylesheet" type="text/css" href="public/js/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="public/js/slick/slick-theme.css"/>


<div class="clearfix"></div>

<div class="carruHome1" id="carruPronosticos">

  <?php
    $imgvideo = array('18.png', '19.png', '20.png', '19.png', '20.png', '18.png');
    $urlvideo = array('xh3OKgBuTE8', 'T4MwvWSdH2c', '2SQrB1PTQ5g', 'xh3OKgBuTE8', 'T4MwvWSdH2c', '2SQrB1PTQ5g');
  ?>
  <?php
    for ($i=0; $i < count($imgvideo); $i++): ?>
    <div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="pronostico disTable">
          <div class="contimg img-full youtube-link" youtubeid="<?php echo $urlvideo[$i]; ?>" title="Ver Video...">
            <img src="public/img/<?php echo $imgvideo[$i]; ?>" alt="RESULTADOS DE PARTIDOS ONLINE">
          </div>
        </div>
      </div>
    </div>  
  <?php
    endfor;
  ?>
</div>

<div class="clearfix"></div>


<script type="text/javascript" src="public/js/slick/slick.min.js"></script>

<script>
  
  $(document).ready(function() {
      $('#carruPronosticos').slick({
        dots: false,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        speed: 3200,
        prevArrow:"<img class='a-left control-c prev slick-prev' src='public/img/ICONOS/3.png'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='public/img/ICONOS/2.png'>",
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: !0,
                dots: !0
            }
        }, {
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
  });
</script>