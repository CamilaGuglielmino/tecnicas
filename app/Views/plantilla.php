<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Noticias</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php base_url(); ?>">
                <img id="logo" src="..\public\imagenes\logo111.png" height="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="" aria-label=""
                                aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Buscar</button>
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#">Categorias</a></li>

                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php base_url(); ?>/ingreso">Ingresar</a></li>


                    <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>-->
                </ul>
            </div>
        </div>
    </nav>
</body>
<?php
/**
 * @var CodeIgniter\View\View $this
*/
?>
<div class="container">
    <?php echo $this-> renderSection('contenido'); ?>

</div>

<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Camila Guglielmino &copy; </p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</html>