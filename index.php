<!--<?php 
    /*session_start();    

require_once("conect_db.php");

//$qry = "INSERT INTO prueba (nombre_prueba, apellido_prueba, chuchada_favorita) VALUES('Brian', 'Palma', 'wn')";
$qry = "SELECT * FROM prueba";
$resultado = $mysqli->query($qry);
$rows = array();

if ($resultado->num_rows > 0) {
  while ($i = mysqli_fetch_object($resultado)) {
        array_push($rows, $i);
    }
}
*/

?>
-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skylabs</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/portfolio/skylabsweb.png" width="55" height="30" /></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Quienes somos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">clientes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><img src="img/portfolio/skylabsweb.png" width=45% height=75% /></h1>
                <hr>
                <p>Desarrollo y mantención de software</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Quienes somos?</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Quienes somos!</h2>
                    <hr class="light">
                    <p class="text-faded">Skylabs es una empresa dedicada al desarrollo y la mantención de software y paginas web.
                    ubicada en la ciudad de temuco, es una empresa que se creó con la idea de poder desarrollar software de un modo asequible para el empresario promedio.</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">servicios</a>
                </div>
            </div>
        </div>
    </section>

    
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nuestros servicios</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-laptop text-primary sr-icons"></i>
                        <h3>software computacional</h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>contacto frecuente</h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-android text-primary sr-icons"></i>
                        <h3>aplicaciones moviles</h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-chrome text-primary sr-icons"></i>
                        <h3>paginas web</h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    nombre del proyecto
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    nombre del proyecto
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    nombre del proyecto
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    nombre del proyecto
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    nombre del proyecto
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    nombre del proyecto
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">

                
                    <h2 class="section-heading">contáctanos</h2>
                    <hr class="primary">
                    

                    <form id="contact_form" action="send_form_email.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <label for="first_name">Nombre: (*)</label><br>
                            <input required id="first_name" class="input" name="first_name" type="text" value="" size="30" /><br />
                        </div>
                        <div class="row">
                            <label for="last_name">Apellido: (*)</label><br />
                            <input required id="last_name" class="input" name="last_name" type="text" value="" size="30" /><br />
                        </div>
                        
                        <div class="row">
                            <label for="email">E-mail: (*)</label><br />
                            <input required id="email" class="input" name="email" type="text" value="" size="30" /><br />
                        </div>
                        <div class="row">
                            <label for="telephone">Celular: (*)</label><br />
                            <input required id="telephone" class="input" name="telephone" type="text" value="" size="30" /><br />
                        </div>
                        <div class="row">
                            <label for="message">Mensaje: (*)</label><br />
                            <textarea required id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
                        </div>

                        <button type="submit" class="btn btn-primary">enviar</button>
                        
                    </form>                     
                

                    <p></p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p><a href="tel:+569 4421 1229" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">+569 4421 1229</a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:contacto@skylabs.cl"> contacto@skylabs.cl</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>


</body>

</html>
