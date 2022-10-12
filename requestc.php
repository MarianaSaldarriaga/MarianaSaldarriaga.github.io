<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$conex = mysqli_connect(
    'localhost',
    'root',
    '',
    'tienda_online'
);


if (isset($_POST['submitButton'])) {

    if (strlen($_POST['name_client']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['phone_number']) >= 1 && strlen($_POST['description']) >= 1) {
        $name = trim($_POST["name_client"]);
        $email = trim($_POST["email"]);
        $tel = trim($_POST["phone_number"]);
        $text = trim($_POST["description"]);
        $consulta = "INSERT INTO clientes
                    VALUES (null,'$name','$email','$tel','$text')";
        $resultado = mysqli_query($conex, $consulta) or die('Error de database');
        if ($resultado) {
?>
            <section class="page-section bg-primary" id="about">
                <h3 class="ok" style="text-align: center; color: white;">'¡Solicitud enviada, pronto nos comunicaremos contigo!'</h3>;
                <div class="d-grid gap-3 col-10 mx-auto">
                    <a class="btn btn-primary" type="button" href="index.php#contact">Regresar</a>
                </div>
                <div class="container px-4 px-lg-5 h-100">
                    <img src="images/productos/love-death-robots-2.webp" alt="" class="d-block w-100">
                </div>
            </section>
        <?php
        } else {
        ?>
            <section class="page-section bg-primary" id="about">
                <h3 class="bad" style="text-align: center; color: white;">'¡Ups, algo ha ido mal!'</h3>;
                <div class="d-grid gap-3 col-10 mx-auto">
                    <a class="btn btn-primary" type="button" href="index.php#contact">Regresar</a>
                </div>
                <div class="container px-4 px-lg-5 h-100">
                    <img src="images/productos/love-death-robots-2.webp" alt="" class="d-block w-100">
                </div>
            </section>
        <?php
        }
    } else {
        ?>
        <section class="page-section bg-primary" id="about">
            <h3 class="bad" style="text-align: center; color: white;">'¡Ups, por favor completa todos los campos!'</h3>;
            <div class="d-grid gap-3 col-10 mx-auto">
                <a class="btn btn-primary" type="button" href="index.php#contact">Regresar</a>
            </div>
            <div class="container px-4 px-lg-5 h-100">
                <img src="images/productos/love-death-robots-2.webp" alt="" class="d-block w-100">
            </div>
        </section>
<?php
    }
    mysqli_close($conex);
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