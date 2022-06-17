<?php require 'views/template/head.view.php'; ?>
<?php require 'views/template/header.view.php'; ?>
<?php require 'views/template/nav-alumno.view.php'; ?>

<div class="row">
    <div class="col-12 a_notas">
        <label for="notas" class="mt-4 title-n mb-4">LISTA DE DOCENTES</label>
    </div>
</div>

<div class="row">
    <?php foreach($docentes as $docente): ?>
    <div class="col-3">
        <div class="row">
            <div class="col-12 a_notas listadoc mb-4">
                <img src="https://picsum.photos/seed/picsum/280/200" alt="profesor" class="lprof">
                <p class="textdoc">
                    <?php
                        echo "
                            <b>Nombre: </b>".$docente['nombre']." ".$docente['apellidoPaterno']." ".$docente['apellidoMaterno']."<br>
                            <b>Correo: </b>".$docente['correoElectronico']."<br>
                            <b>Contacto: </b>".$docente['contacto']."<br>
                            <b>Curso: </b>".$docente['curso']."<br>
                            
                        ";

                    ?>
                </p>
            </div>
        </div>

    </div>
    <?php endforeach; ?>
</div>

<?php require 'views/template/footer.view.php'; ?>
<?php require 'views/template/body.view.php'; ?>