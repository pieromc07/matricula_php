<?php require 'views/template/head.view.php'; ?>
<?php require 'views/template/header.view.php'; ?>
<?php require 'views/template/nav-alumno.view.php'; ?>

<form class="row py-3">
    <div class="col-md-12 text-center">
        <h4>Empece a Matricularse</h4>
    </div>
    <div class="col-md-12 py-3">
        <div class="row justify-content-around">
            <div class="col-md-6">
                <div class="row">

                    <div class="col-md-12">
                        <label for="grado">
                            Grado Escolar :
                        </label>
                        <select name="grado" id="grado">
                            <option value="0">Seleccione grado</option>
                        </select>
                    </div>
                    <div class="col-md-1 mb-22">
                        <label for="hora">Hora : </label>
                        <select name="hora" id="hora">
                            <option value="0">Seleccione hora</option>
                        </select>
                    </div>
                    <div class="col-md-1 mb-22"> <label for="docente">Docente : </label>
                        <select name="docente" id="docente">
                            <option value="0">Seleccione docente</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h1>hhh</h1>
            </div>
        </div>
    </div>
</form>

<?php require 'views/template/footer.view.php'; ?>
<?php require 'views/template/body.view.php'; ?>