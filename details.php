<?php
require 'config/config.php';
require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if ($id == '' || $token == '') {
    echo 'Error con la petición';
    exit;
} else {
    $sql = $con->prepare("SELECT count(id) FROM productos WHERE id = ? AND state_product = 1 LIMIT 1 ");
    $sql->execute([$id]);

    if ($sql->fetchColumn() > 0) {

        $sql = $con->prepare("SELECT name_product, descriptionp, price, discount FROM productos WHERE id = ? AND state_product = 1
             LIMIT 1 ");
        $sql->execute([$id]);
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $nameproduct = $row['name_product'];
        $descriptionp = $row['descriptionp'];
        $price = $row['price'];
        $discount = $row['discount'];

        $price_desc = $price - (($price * $discount) / 100);

        $dir_images = 'images/productos/' . $id . '/';

        $routeimg = $dir_images . 'iphone14pro.jpg';

        if (!file_exists($routeimg)) {
            $routeimg = 'images/no-photo.jpg';
        }

        $imagenes = array();
        $dir = dir($dir_images);

        while (($archivo = $dir->read()) != false) {
            if ($archivo != 'iphone14pro.jpg' && (strpos($archivo, 'jpg') || strpos($archivo, 'jpeg'))) {
                $imagenes[] = $dir_images . $archivo;
            }
        }
        $dir->close();
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CELUTIENDA</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php#page-top">EQUIPOS Y ACCESORIOS CELULARES</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php#about">Sobre nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#portfolio">Marcas</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#contact">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--Contenido-->
    <main>
        <div class="container">
            <section class="page-section bg-primary" id="about">
                <h1 class="text-white font-weight-bold " style="text-align: center;">¡El Smartphone de tus sueños te espera! </h1>
            </section>
            <div class="row">
                <div class="col-md-6 order-md-1">

                    <div id="carouselImages" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $routeimg; ?>" class="d-block w-100">
                            </div>

                            <?php foreach ($imagenes as $img) { ?>
                                <div class="carousel-item">
                                    <img src="<?php echo $img; ?>" class="d-block w-100">
                                </div>
                            <?php } ?>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>

                <div class="col-md-6 order-md-2">
                    <h2 style="text-align: center;"><?php echo $nameproduct ?></h2>

                    <?php if ($discount > 0) { ?>
                        <p style="text-align: center;"><del><?php echo MONEDA . number_format($price, 2, '.', ','); ?></del></p>
                        <h2 style="text-align: center;">
                            <?php echo MONEDA . number_format($price_desc, 2, '.', ','); ?>
                            <small class="text-success"> <?php echo $discount; ?> % descuento </small>
                        </h2>

                    <?php } else { ?>
                        <h2 style="text-align: center;"><?php echo MONEDA . number_format($price, 2, '.', ','); ?> </h2>
                    <?php } ?>

                    <p>
                    <div class="lead" style="text-align: center;">
                        <?php echo $descriptionp; ?>
                    </div>
                    </p>

                    <div class="d-grid gap-3 col-10 mx-auto">
                        <a class="btn btn-primary" type="button" href="index.php#contact">Comprar ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2022 - Daniela Company</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>