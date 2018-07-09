<script >
    $(document).ready(function() {

        $(window).load(function() {
            /* Act on the event */
            if (screen.width >= 768) {

                altoH = $("header").outerHeight();

                $("body").css('padding-top', altoH+'px');

                $("header .divmenu").height($("header .contlogo img").height());
            }
        });

        if (screen.width > 780) {                
        }

        if (screen.width >= 481 && screen.width <= 780) {

            $('.navbar a.dropdown-toggle').on('click', function(e) {
                var $el = $(this);
                var $parent = $(this).offsetParent(".dropdown-menu");
                $(this).parent("li").toggleClass('open');

                if(!$parent.parent().hasClass('nav')) {
                    $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
                }

                $('.nav li.open').not($(this).parents("li")).removeClass("open");

                return false;
            });
        }

        if (screen.width <= 480) {

            $("nav.navbar").addClass("navbar-fixed-top");

            $('.navbar a.dropdown-toggle').on('click', function(e) {
                var $el = $(this);
                var $parent = $(this).offsetParent(".dropdown-menu");
                $(this).parent("li").toggleClass('open');

                if(!$parent.parent().hasClass('nav')) {
                    $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
                }

                $('.nav li.open').not($(this).parents("li")).removeClass("open");

                return false;
            });   

            $("header .contimg").insertBefore('.navbar-default .navbar-toggle');
        } 

        else {
            jQuery('li.dropdown').hover(function() {
                jQuery(this).children('.dropdown-menu').stop(true, true).delay(200).fadeIn();
                }, function() {
                jQuery(this).children('.dropdown-menu').stop(true, true).delay(200).fadeOut();
            });
        }         

        $(window).scroll(function() {   

            altoH = $("header").outerHeight();

            if (screen.width >= 768) {

                var scroll = $(window).scrollTop();

                if (scroll >= altoH) {
                    $("header, body").addClass("scroll");                    
                } else {
                    $("header, body").removeClass("scroll");
                }
            }           
        }); 

    });
</script>

<header> 

    <div class="arriba disTable">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="correo">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <p><a href="mailto:info@tradingmarketcash.com">info@tradingmarketcash.com</a></p>
                    </div>
                </div>

                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="divder">
                        <div class="idioma">
                            <div class="imagen-idioma">
                                <img src="public/img/HEADER/3.png" alt="TRADING MARKET CRIPTOMONEDAS ESPAÑOL ">
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Español
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    <li role="presentation"><a role="menuitem" href="#">Inglés</a></li>
                                </ul>
                            </div>
                        </div>
                        <?php include 'partials/redes.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="abajo disTable">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="contimg">
                        <a href="index.php">
                            <img src="public/img/HEADER/1.png" alt="CURSO TRADING CRIPTOMONEDAS BITCOIN LITECOIN">
                        </a>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="promo disTable">
                        <div class="info" >
                            <img src="public/img/HEADER/4.png" alt="CURSO TRADING CRIPTOMONEDAS">
                            <div class="informacion">
                                <div>
                                    <h3>ES HORA DE INVERTIR EN TU FUTURO</h3>
                                    <a href="#" class="btnVerde btnBoxShadow">EMPIEZA YA!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contmenu disTable">
                        <?php include 'partials/menu.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</header>