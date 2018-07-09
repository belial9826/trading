<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>TRANDING | TRADING CRIPTOMONEDAS | BITCOIN, LITECOIN, ETERIUM</title>
        <meta name="description" content="TRANDING | TRADING CRIPTOMONEDAS | BITCOIN, LITECOIN, ETERIUM">
        <meta name="author" content="www.creasotol.com, contactos@creasotol.com">
        <meta name="Subject" content="TRANDING | TRADING CRIPTOMONEDAS | BITCOIN, LITECOIN, ETERIUM">
        <meta name="robots" content="index,follow">
        <meta NAME="Language" CONTENT="Spanish">
        <meta NAME="Revisit" CONTENT="1 day">
        <meta NAME="Distribution" CONTENT="Global">
        <!--para desactivar el cache de todos los navegadores-->
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <!--cierra-->
        <!-- Mobile Specific Metas
        ================================================== -->
        
        <?php include 'partials/scriptsGlobal.php';  ?>

    </head>
    <body id="" class="">                
        <?php include 'partials/header.php'; ?>        

        <div id="pageTrading" class="disTable pageAsesoriaPer">

            <div id="imgprincipal" class="disTable" style="background-image: url('public/img/BANNER/18.png')">
                <div>
                    <h1>TRADING</h1>
                </div>
            </div>

            <div class="informacion disTable padcont">
                <div class="container">
                    <div class="row">

                        <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                            <p>Para ver mas información toque la imagen [+].</p>
                        </div>

                        <div class="info-trading col-md-4 col-sm-12 col-xs-12">
                            <div class="contimg disTable" style="background-image: url('public/img/BANNER/15.png')">
                                <div class="info-abs">
                                    <div>
                                        <h3>CURSO BASICO</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="infotexto disTable">
                                <div class="numeros disTable">
                                    <div class="col col-izq">
                                        <p>200</p>
                                    </div>
                                    <div class="col col-der">
                                        <p>30</p>
                                    </div>
                                </div>
                                <div class="texto disTable text-justify">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus unde, ipsa, dolorum provident natus, a animi optio accusantium beatae, cupiditate debitis! Voluptates aliquid provident culpa sint, alias. Porro, voluptas, impedit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non impedit quaerat animi mollitia molestias facilis temporibus eum natus accusamus, maxime minus, quia asperiores deleniti porro, a harum. Veniam, optio, voluptate!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="info-trading col-md-4 col-sm-12 col-xs-12">
                            <div class="contimg disTable" style="background-image: url('public/img/BANNER/16.png')">
                                <div class="info-abs">
                                    <div>
                                        <h3>CURSO INTERMEDIO</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="infotexto disTable">
                                <div class="numeros disTable">
                                    <div class="col col-izq">
                                        <p>500</p>
                                    </div>
                                    <div class="col col-der">
                                        <p>30</p>
                                    </div>
                                </div>
                                <div class="texto disTable text-justify">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus unde, ipsa, dolorum provident natus, a animi optio accusantium beatae, cupiditate debitis! Voluptates aliquid provident culpa sint, alias. Porro, voluptas, impedit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non impedit quaerat animi mollitia molestias facilis temporibus eum natus accusamus, maxime minus, quia asperiores deleniti porro, a harum. Veniam, optio, voluptate!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="info-trading col-md-4 col-sm-12 col-xs-12">
                            <div class="contimg disTable" style="background-image: url('public/img/BANNER/17.png')">
                                <div class="info-abs">
                                    <div>
                                        <h3>CURSO AVANZADO</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="infotexto disTable">
                                <div class="numeros disTable">
                                    <div class="col col-izq">
                                        <p>800</p>
                                    </div>
                                    <div class="col col-der">
                                        <p>40</p>
                                    </div>
                                </div>
                                <div class="texto disTable text-justify">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus unde, ipsa, dolorum provident natus, a animi optio accusantium beatae, cupiditate debitis! Voluptates aliquid provident culpa sint, alias. Porro, voluptas, impedit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non impedit quaerat animi mollitia molestias facilis temporibus eum natus accusamus, maxime minus, quia asperiores deleniti porro, a harum. Veniam, optio, voluptate!
                                    </p>
                                </div>
                            </div>
                        </div>


                        
                    </div>
                </div>
            </div>

        </div>   

        <?php include 'partials/footer.php'; ?>

        <script assync>

            jQuery(document).ready(function($) {                      

                $(window).load(function() {     

                    if (screen.width >= 768) {

                        $("#pageAsesoriaPer .informacion .info-asesoria").each(function(index, el) {

                            $(this).find('.contimg').height($(this).find('.texto').outerHeight());
                            
                        });

                    }
                });              
                
            });
        </script>
    </body>
</html>