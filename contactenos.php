<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>CONTACTENOS | TRADING CRIPTOMONEDAS | BITCOIN, LITECOIN, ETERIUM</title>
        <meta name="description" content="CONTACTENOS | TRADING CRIPTOMONEDAS | BITCOIN, LITECOIN, ETERIUM">
        <meta name="author" content="www.creasotol.com, contactos@creasotol.com">
        <meta name="Subject" content="CONTACTENOS | TRADING CRIPTOMONEDAS | BITCOIN, LITECOIN, ETERIUM">
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
    <body class="">   

        <?php include 'partials/header.php'; ?> 

        <div id="pageContactenos" class="disInlineB">

            <div id="imgprincipal" class="disTable" style="background-image: url('public/img/BANNER/18.png')">
                <div>
                    <h1>CONTÁCTENOS</h1>
                </div>
            </div>

            <div id="cont-informacion" class="disTable pageContactenos padcont" >
                <div class="info">
                    <div class="container">
                        <div class="row">
                            <div class="infoform col-md-8 col-sm-12 col-xs-12">

                                <div class="titulo disTable text-center">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h2>CONTÁCTENOS</h2>

                                        <div class="texto disTable text-justify">
                                            <p>
                                                Puede contactarnosd e la forma que sea conveniente para usted. Estamos disponibles 24/7. También puede usar un formulario de contacto rápido a continuación.
                                            </p>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="clearfix">  </div>
                                
                                <form action="" class="form-contacto contacto" method="POST">
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nombres y Apellidos *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="E-mail *" required>
                                        </div>
                                    </div>    
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Telefono *" required>
                                        </div>
                                    </div>
                                                                
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Mensaje *"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                            <div class="cont-check disTable">
                                                <div class="checkbox checkbox-circle">
                                                    <input id="checkbox7" type="checkbox" required>
                                                    <label for="checkbox7">
                                                        Acepto los <a href="terminos.php" target="_blank">términos, condiciones y protección de datos</a>.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <input value="Enviar" class="btnVerde btnBoxShadow " id="btnEnviar" name="btnEnviar" type="submit">
                                        </div>                                        
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="infolateral disInlineB">
                                    <div class="contimg">
                                        <img src="public/img/HEADER/1.png" alt="TRADING MARKET CASH">
                                    </div>

                                    <div class="informacion disTable">
                                        <div class="titulo disTable">
                                            <h3>CONTÁCTENOS</h3>
                                        </div>

                                        <div class="dato disTable">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p>Ibagué - Tolima - Colombia</p>
                                        </div>

                                        <div class="dato disTable">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <p>info@tradingmarketcash.com</p>
                                        </div>

                                        <div class="dato disTable">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p>+57 (8) 268 05 05</p>
                                        </div>
                                    </div>                                  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>

                      

        <?php include 'partials/footer.php'; ?>   

        <script>
            jQuery(document).ready(function($) {       
                
            });

            $(window).load(function() {  
                
            });
        </script>
    </body>
</html>

<?php
require("partials/PHPMailer/_lib/class.phpmailer.php");
if(isset($_REQUEST['btnEnviar'])){
    //$captcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LfWRCAUAAAAAOdHudxMNGtiUeiAdpnXfM-rxy1i&response='.$_REQUEST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']),TRUE);
    /*if($captcha['success']){*/
    $nombre         = $_REQUEST['txtNombre'];
    $telefo         = $_REQUEST['txtTelefono'];
    $ciudad         = $_REQUEST['txtCiudad'];
    $correo         = $_REQUEST['txtMail'];
    $comentario     = $_REQUEST['txtComentario'];
    $fechaS         = date('Y-m-d H:m:s');
    //$para         = $elCorreo;
    $para         = 'jagonzalezv9826@gmail.com';
    $asunto         = '[CONTACTENOS] - '.$_SERVER['HTTP_HOST'];
    $mensaje        = "<html>
        <head>
            <title>:.. CONTACTENOS ..:</title>
            <style>
            .linkpag{
            text-decoration:none;
            color:#39F;
            }
            </style>
        </head>
        Una persona ha enviado un mensaje a traves de la pagina web:<br><br>
        <body>
            
            Fecha Envio: ".$fechaS."<br><br>
            
            <b>DATOS PERSONALES:</b><br><br>
            <b>NOMBRE:</b> ".$nombre."<br>
            <b>TELEFONO:</b> ".$telefo."<br>
            <b>CIUDAD / MUNICIPIO:</b> ".$ciudad."<br>
            <b>CORREO ELECTRONICO:</b> ".$correo."<br>
            <b>COMENTARIO O SOLICITUD:</b> ".$comentario."<br>
            <br>
            <br>
            <br>
            Enviado desde, Pagina Web
            <br />
            <b>BIKE SPORT</b>
            <br />
            <a href='http://".$_SERVER['HTTP_HOST']."' target='_blank' class='linkpag'>".$_SERVER['HTTP_HOST']."</a>
            <br />
            <br />
            <br />
            <b>NOTA:</b> Por favor, no responder a este correo automatico.
        </body>
    </html>";
    $mail = new PHPMailer();
    $mail->Host     = "localhost";
    $mail->From     = "seguridad@creasotol.com";
    $mail->FromName = $correo;
    $mail->Subject  = $asunto;
    $mail->AddAddress($para, "BIKE SPORT");
    $mail->Body     = $mensaje;
    $mail->AltBody  = "CONTACTENOS";
    $mail->Send();
    echo '<script>
    alert("Su mensaje se ha enviado correctamente. Pronto nos comunicaremos con usted.");
    location.href = "index.php";
    </script>';
    /*}else{
        echo "<script> alert(':.. Error al ingresar el codigo ..:'); </script>";
    }*/
}
?>