<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>ASESORIA PERSONALIZADA | TRADING CRIPTOMONEDAS | BITCOIN, LITECOIN, ETERIUM</title>
        <meta name="description" content="ASESORIA PERSONALIZADA | TRADING CRIPTOMONEDAS | BITCOIN, LITECOIN, ETERIUM">
        <meta name="author" content="www.creasotol.com, contactos@creasotol.com">
        <meta name="Subject" content="ASESORIA PERSONALIZADA | TRADING CRIPTOMONEDAS | BITCOIN, LITECOIN, ETERIUM">
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

        <div id="pageAsesoriaPer" class="disTable pageAsesoriaPer">

            <div id="imgprincipal" class="disTable" style="background-image: url('public/img/BANNER/18.png')">
                <div>
                    <h1>ASESORIA PERSONALIZADA</h1>
                </div>
            </div>

            <div class="informacion disTable padcont">
                <div class="container">
                    <div class="row">

                        <?php
                        $imgAsesoria = array('20.png', '21.png', '22.png');
                        $titAsesoria = array('PERSONALIZADO', 'GRUPAL', 'MASTERCOMODOS');
                        for ($i=0; $i < count($imgAsesoria); $i++): ?>
                            <div class="info-asesoria disTable">
                                <div class="contimg col-md-6 col-sm-12 col-xs-12" style="background-image: url('public/img/BANNER/<?php echo $imgAsesoria[$i]; ?>')">
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="texto disTable text-justify">
                                        <h2><?php echo $titAsesoria[$i]; ?></h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur doloribus ipsum harum, modi quaerat est suscipit iste, quis nostrum vel facere odit dolore quidem maxime. Eos saepe suscipit architecto soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque fuga dignissimos ea voluptates non dolorem exercitationem fugiat beatae alias ipsam? Placeat quae, quo dicta in repellendus ex eius at expedita.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        <?php endfor ?>                        
                        
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