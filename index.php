<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <title>Televisión Educativa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="css/full-slider.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>

    <body class="container">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">                    
                    <div class="navbar-header  barra">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">INICIO</a></li>
                            <li><a href="#about">CANALES</a></li>
                            <li><a href="#contact">¿QUIÉNES SOMOS?</a></li>
                            <li><a href="#contact">CAPACITACIÓN</a></li>
                            <li><a href="#contact">SERVICIOS</a></li>
                            <li><a href="#contact">NOTICIARIO</a></li>
                            <li><a href="#contact">CONTACTO</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section  class="row canales">
            <div class="col-md-4 col-sm-4 col-xs-4 canal"><a href="#"><img class="img-responsive" src="img/telesecundaria.png"></a></div>
            <div class="col-md-4 col-sm-4 col-xs-4 canal"><a href="#"><img class="img-responsive" src="img/ingeniotv.png"></a></div>
            <div class="col-md-4 col-sm-4 col-xs-4 canal"><a href="#"><img class="img-responsive" src="img/aprende.png"></a></div>
            <div class="col-md-4 col-sm-4 col-xs-4 canal"><a href="#"><img class="img-responsive" src="img/tvdocencia.png"></a></div>
            <div class="col-md-4 col-sm-4 col-xs-4 canal"><a href="#"><img class="img-responsive" src="img/telebachillerato.png"></a></div>
            <div class="col-md-4 col-sm-4 col-xs-4 canal"><a href="#"><img class="img-responsive" src="img/tvuniversidad.png"></a></div>

            <div id="collapse1" class="collapse col-md-12 canales">
                <a class="col-md-4 col-sm-4 col-xs-4 canal" href="#"><img class="img-responsive" src="img/telemexico.png"></a>
                <a class="col-md-4 col-sm-4 col-xs-4 canal" href="#"><img class="img-responsive" src="img/telesecundaria_2.png"></a>
                <a class="col-md-4 col-sm-4 col-xs-4 canal" href="#"><img class="img-responsive" src="img/especiales.png"></a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 canal"><a data-toggle="collapse" href="#collapse1"><img class="img-responsive" src="img/mascanales.png"></a></div>                
            <div class="col-md-4 col-sm-4 col-xs-4 canal"><a href="#"><img class="img-responsive" src="img/mexicoaldia.png"></a></div>
            <div class="col-md-4 col-sm-4 col-xs-4 canal"><a href="#"><img class="img-responsive" src="img/cete.png"></a></div>
        </section>
        <footer>
            <div class="container">
                <div class="row footer-panel">
                    <div class="col-sm-12 col-xs-12 social text-center">
                        <ul>
                            <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-lg fa-envelope"></i></a></li>
                        </ul>
                        <p class="col-sm-12 col-xs-12 text-muted text-center"><strong>© 2015 Televisión Educativa</strong></p>
                    </div>
                </div>
            </div>
        </footer
    </body>
</html>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>        
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>