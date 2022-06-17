<?php require 'views/template/head.view.php'; ?>
<?php require 'views/template/header.view.php'; ?>
<?php require 'views/template/nav-docente2.view.php'; ?>

<div class="row">
    <div class="col-md-12">
        <div class="row justify-content-around">
            <?php
                foreach ($secciones as $seccion) {
                echo '
                <a href="docente_balumno.php?grado='.$seccion['grado_id'].'&seccion='.$seccion['seccion_id'] .'&curso='.$seccion['curso_id'].'"'.'class="seccion-btn col-md-5">
                    <p> Seccion '. 
                        $seccion['grado'] . ' ' .
                        $seccion['seccion'] .'-'.
                        $seccion['curso'] .
                    '</p>
                    <i class="fas fa-plus"></i>
                </a>
                ';
                }
            ?>
        </div>
    </div>
</div>

<?php require 'views/template/footer.view.php'; ?>
<?php require 'views/template/body.view.php'; ?>