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
    <title>Blog - Alexander Minaya</title>
    <!-- Metadatos -->
    <meta name="author" content="<?php echo AUTHOR?>">
    <meta name="description"
        content="Mi blog es un lugar donde podemos sumergirnos juntos en un viaje de descubrimiento. Espero que encuentres valor en cada publicación y que te sientas inspirado a unirte a la conversación compartiendo tus propias ideas y perspectivas.">
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
<?php
    $identificador =  getenv('HTTP_USER_AGENT');
    if(preg_match("/Edg/i",$identificador))
    {
       require_once('views/nav.php');
       require_once ('views/blog.php');
       require_once('views/footer.php');
    }
    else if(preg_match("/Chrome/i",$identificador)){
       require_once('view/nav.php');
       require_once ('view/blog.php');
       require_once('view/footer.php');
    }
    else
    {
       require_once('view/nav.php');
       require_once ('view/blog.php');
       require_once('view/footer.php');
    }
   ?>
</body>

</html>