<?php
    include_once('global/global.php');
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Inicio - Alexander Minaya</title>
    <!-- Metadatos -->
    <meta name="author" content="<?php echo AUTHOR?>">
    <meta name="description"
        content="Soy un profesional apasionado de la carrera de Ingeniería de Sistemas e Informática. Mi fascinación por la tecnología y la resolución de problemas me ha llevado a sumergirme en el mundo de la informática y la ingeniería, donde exploro la creación y optimización de sistemas, así como el desarrollo de soluciones tecnológicas innovadoras.">
    <meta name="keywords"
        content="<?php echo KEYWORDS?>">
    <meta property="og:title" content="<?php echo TITLE?>" />
    <meta property="og:url" content="<?php echo URL?>" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Favicons -->
    <link href="<?php echo URL?>assets/img/icono.ico" rel="icon">
    <link href="<?php echo URL?>assets/img/icono.ico" rel="apple-touch-icon">
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/bootstrap.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/animate.min.css">
    <!-- ET Line Icon CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/et-line.css">
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/fontawesome.min.css">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/meanmenu.css">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/magnific-popup.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/owl.carousel.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/responsive.css">
</head>

<body>
    <!-- Start Preloader Area -->
    <div id="preloader">
        <div class="ctn-preloader" id="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="responsive-nav index-navber-responsive">
            <div class="container">
                <div class="responsive-menu">
                    <div class="logo__black">
                        <a href="<?php echo URL?>">
                            <h2>Alexander</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav index-navber">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand__white" href="<?php echo URL?>">
                        <h2>Alexander</h2>
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="<?php echo URL?>" class="nav-link">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo URL?>about" class="nav-link">Acerca de mí</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo URL?>training" class="nav-link">Capacitaciones</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo URL?>portfolio" class="nav-link">Portafolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo URL?>blog" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo URL?>contact" class="nav-link">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
    <?php
    $identificador =  getenv('HTTP_USER_AGENT');
    if(preg_match("/Edg/i",$identificador))
    {
       require_once ('views/index.php');
       require_once('views/footer.php');
    }
    else if(preg_match("/Chrome/i",$identificador)){
       require_once ('view/index.php');
       require_once('view/footer.php');
    }
    else
    {
       require_once ('view/index.php');
       require_once('view/footer.php');
    }
    ?>
</body>

</html>