<?php

require 'config/config.php';
require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id,name_product,price,discount FROM productos WHERE state_product = 1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

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

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">EQUIPOS Y ACCESORIOS CELULARES</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Sobre nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Marcas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contactanos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">El mejor lugar para adquirir tu Smartphone </h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Tienda de equipos y accesorios online Angela, para nosotros es fundamental brindarte una experiencia agradable y satisfactoria, es por ello que aquí encontraras las mejores opciones tecnológicas de telefonía del mercado.</p>
                    <a class="btn btn-primary btn-xl" href="#about">Conoce más</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Tenemos lo que necesitas para tu smartphone</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Manejamos sistema de separado en equipos nuevos y de segunda, tambien contamos con smartwatch de marca como también replicas, como Samsung , Huawei, Amazfit, Xiaomi, entre otros.</p>
                    <a class="btn btn-light btn-xl" href="#contact">Comenzar cotización</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">SERVICIOS OFRECIDOS</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Ventas de Smartphone</h3>
                        <p class="text-muted mb-0">¡Encuentras smartphone de todas las marcas!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Venta de Smartwatch</h3>
                        <p class="text-muted mb-0">Relojes inteligentes en replica y originales</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Servicio Tecnico</h3>
                        <p class="text-muted mb-0">Cambio de baterias, display, visores, pin de carga,etc.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Accesorios para computador</h3>
                        <p class="text-muted mb-0">Teclados. mouse con cable e inalambricos , parlantes para computador.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-md-4">
                    <a class="portfolio-box" href="assets/img/funda.jpg" title="CELUACCESORIOS">
                        <img class="img-fluid" src="assets/img/img1.1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">CELUACCESORIOS</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="portfolio-box" href="assets/img/reparacion.webp" title="Servicio Tecnico">
                        <img class="img-fluid" src="assets/img/img2.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Servicio Tecnico</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="portfolio-box" href="assets/img/img3.jpg" title="Diademas">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Diademas</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="portfolio-box" href="assets/img/iphone-14-pro-Max-vs-iPhone-13-Pro-max.jpg" title="Iphone">
                        <img class="img-fluid" src="assets/img/iphone144.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Iphone</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="portfolio-box" href="assets/img/Gear-Samsung-Galaxy-S22-Ultra (1).jpg" title="Samsung S22 Ultra">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/galaxy-s22-ultra_highlights_kv_img1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Samsung</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="portfolio-box" href="assets/img/1366_2000.jpg" title="Xiaomi Mi 11 Ultra">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/xiaomijpg.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Xiaomi</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">¡NUESTROS SMARTPHONES MAS TOP!</h2>
            <hr class="divider" />

        </div>
    </section>

    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($resultado as $row) { ?>
                    <div class="col">
                        <div class="card shadow-sm">

                            <?php
                            $id = $row['id'];
                            $imagen = "images/productos/" . $id . "/iphone14pro.jpg";

                            if (!file_exists($imagen)) {
                                $imagen = "images/no-photo.jpg";
                            }
                            ?>

                            <img src=" <?php echo $imagen; ?> ">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $row['name_product']; ?> </h5>
                                <p class="card-text">$ <?php echo number_format($row['price'], 2, '.', ','); ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="details.php?id=<?php echo $row['id']; ?> &token=<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>" class="btn btn-primary">Detalles
                                        </a>
                                    </div>
                                    <a class="btn btn-success" type="button" href="#contact">Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <!-- Contact-->
    <section class="page-section" style="padding: 2rem 0;" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Contactanos</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Llena los datos para ponernos en contacto contigo y darte más informacion de los productos</p>
                </div>
            </div>

            <form action="requestc.php" name="contactForm" method="POST" data-sb-form-api-token="API_TOKEN">
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">

                        <div class="form-floating mb-3">
                            <input class="form-control" name="name_client" type="text" placeholder="Ingresa tu nombre..." data-sb-validations="required" />
                            <label for="name">NOMBRE</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es obligatorio</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" type="email" placeholder="email@ejemplo.com" data-sb-validations="required,email" />
                            <label for="email">Correo electronico</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">El correo electronico es requerido</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Correo no es valido</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="phone_number" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Numero telefonico</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required"></div>El numero telefonico es requerido
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="description" type="text" placeholder="Ingresa tu mensaje aqui..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message" style="left: 30px;">Cuentanos sobre que necesitas información </label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Ingrese la informacion que desea</div>
                    </div>
                    <div class="d-grid"><button class="btn btn-primary btn-xl" name="submitButton" type="submit">enviar </button></div>
            </form>

        </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>+573225252965</div>
            </div>
        </div>
        </div>
    </section>
    <!-- Footer-->
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