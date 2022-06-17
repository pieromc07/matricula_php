<?php require 'views/template/head.view.php'; ?>
<?php require 'views/template/header.view.php'; ?>
<?php require 'views/template/nav-administrador.view.php'; ?>

<div class="row">
    <div class="col-12 a_notas ">
        <label for="title" class="mt-3 mb-4 titreg">Registrar Curso</label>
    </div>
</div>
<form action="">
    <div class="row">
        <div class="col-8 ">

            <div class="row">
                <div class="col-3 regisal">
                    <label for="curso">Nombre Curso:</label>
                </div>
                <div class="col regisal">
                    <input type="text" name="curso" id="curso">
                </div>
            </div>

            <div class="row">
                <div class="col-3 regisal">
                    <label for="grado">Seleccione Grado:</label>
                </div>
                <div class="col regisal">
                    <select name="grado" id="grado" class="selectcregis">
                        <option value="seleccione">Seleccione Grado</option>
                        <option value="Primero">Primero</option>
                        <option value="Segundo">Segundo</option>
                        <option value="Tercero">Tercero</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-3 regisal">
                    <label for="idcurso">ID:</label>
                </div>
                <div class="col regisal">
                    <input type="text" name="idcurso" id="idcurso">
                </div>
            </div>

            <div class="row">
                <div class="col-3 regisal mb-5">
                    <label for="docente">Docente:</label>
                </div>
                <div class="col regisal mb-5">
                    <select name="docente" id="docente" class="selectcregis">
                        <option value="seleccione">Seleccionar Docente</option>
                        <option value="Docente1">Docente1</option>
                        <option value="Docente2">Docente2</option>
                        <option value="Docente3">Docente3</option>
                    </select>
                </div>
            </div>


        </div>

        <div class="col-4">
            <div class="row contenedor">
                <div class="col-12 regisal a_notas">
                    <label for="acciones" class="titcont">Acciones</label><br>
                </div>
                <div class="col-12">
                    <button class="btn-yelloww">Registrar Docente</button>
                </div>
                <div class="col-12">
                    <button type="button" class="btn-yelloww" onclick="borrar()">Nuevo</button>
                </div>
            </div>


        </div>
    </div>
</form>


<script type="text/javascript">

//borrar campos
function borrar() {
    document.getElementById("curso").value = "";
    document.getElementById("grado").querySelector("option[value='seleccione']").selected = true;
    document.getElementById("idcurso").value = "";
    document.getElementById("docente").querySelector("option[value='seleccione']").selected = true;
}

</script>

<?php require 'views/template/footer.view.php'; ?>
<?php require 'views/template/body.view.php'; ?>