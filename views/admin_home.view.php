<?php require 'views/template/head.view.php'; ?>
<?php require 'views/template/header.view.php'; ?>
<?php require 'views/template/nav-administrador.view.php'; ?>

<div class="row">
    <div class="col-12 a_notas ">
        <label for="title" class="mt-4 title_bienv">Bienvenido al Colegio Mundo Ecológico</label>
    </div>
    <div class="col-4 a_notas mt-4 mb-5">
        <a class="btn-bienv"
            href="./admin_docente.php">
            Registrar Docente
        </a>
    </div>
    <div class="col-4 a_notas mt-4 mb-5">
        <a class="btn-bienv"
        href="./admin_curso.php"
        >Registrar Curso</a>
    </div>
    <div class="col-4 a_notas mt-4 mb-5">
        <a class="btn-bienv"
        href="./admin_alumno.php"
            >Registrar Alumno

        </a>
    </div>
</div>

<?php require 'views/template/footer.view.php'; ?>
<?php require 'views/template/body.view.php'; ?>