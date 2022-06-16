<?php require 'views/template/head.view.php'; ?>

<div class="container p-3">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Bienvenido al Colegio Mundo Ecologico</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- <img src="./assets/img/img1.jpg" class="d-block w-100" alt="..."> -->
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444"
                                dy=".3em">First slide</text>
                        </svg>
                    </div>
                    <div class="carousel-item">
                        <!-- <img src="./assets/img/img2.jpg" class="d-block w-100" alt="..."> -->
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#D36"></rect><text x="50%" y="50%" fill="#444"
                                dy=".3em">Second slide</text>
                        </svg>
                    </div>
                    <div class="carousel-item">
                        <!-- <img src="./assets/img/img1.jpg" class="d-block w-100" alt="..."> -->
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#E63"></rect><text x="50%" y="50%" fill="#444"
                                dy=".3em">Thrid slide</text>
                        </svg>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="row mt-2 py-2">
        <div class="col-6 px-4 py-2">
            <h3 class="">Colegio Mundo Ecologico</h3>
            <p>
                El proyecto consiste en el desarrollo de una pagina web para el Colegio Mundo Ecológico ubicado en
                Cooperativa Daniel Alcides Carrión N° 103 José Luis Bustamante Y Rivero. De modo que, el objetivo de la
                página web es brindar una información completa sobre la institución, sobre todo de los servicios que
                dispone el mismo, a su ves este sitio web proporciona una serie de funcionalidades para los distintos
                tipos de usuarios que pueden ser los docentes, alumnos, anónimos, etc.
            </p>
        </div>
        <div class="col-6 px-4 py-2">
            <h3 class="text-end">Sobre Nuestro Colegio</h3>
            <p>
                El proyecto consiste en el desarrollo de una pagina web para el Colegio Mundo Ecológico ubicado en
                Cooperativa Daniel Alcides Carrión N° 103 José Luis Bustamante Y Rivero. De modo que, el objetivo de la
                página web es brindar una información completa sobre la institución, sobre todo de los servicios que
                dispone el mismo, a su ves este sitio web proporciona una serie de funcionalidades para los distintos
                tipos de usuarios que pueden ser los docentes, alumnos, anónimos, etc.
            </p>
        </div>
    </div>

    <div class="row py-4">
        <div class="col-12 d-flex flex-wrap justify-content-around align-content-center">
            <a class="btn btn-outline-light" style="background: white; color: black; border: 2px solid #333; "
                href="./login.php">Soy Administrador</a>
            <a class="btn btn-outline-light" style="background: white; color: black; border: 2px solid #333; "
                 href="./login.php">Soy Docente</a>
            <a class="btn btn-outline-light" style="background: white; color: black; border: 2px solid #333; "
                 href="./login.php">Soy Alumno</a>
            <a href="#" style="font-size: 1.2rem;  font-weight: 500; margin: auto 0;">Visitar</a>
        </div>

    </div>

    <?php require 'views/template/body.view.php'; ?>