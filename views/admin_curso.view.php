<?php require 'views/template/head.view.php'; ?>
<?php require 'views/template/header.view.php'; ?>
<?php require 'views/template/nav-administrador.view.php'; ?>

<div class="row">
    <div class="col-12 a_notas ">
        <label for="title" class="mt-3 mb-4 titreg">Registrar Curso</label>
    </div>
</div>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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
                        <option value="0">Seleccione Grado</option>
                        <?php foreach($grados as $grado): ?>
                        <option value="<?php echo $grado['id']; ?>"><?php echo $grado['descripcion']; ?></option>
                        <?php endforeach; ?>
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
                        <?php foreach($docentes as $docente): ?>
                        <option value="<?php echo $docente['id']; ?>"><?php echo $docente['nombre'].' '.$docente['apellidoPaterno'].' '.$docente['apellidoMaterno'];?></option>
                        <?php endforeach; ?>
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
                    <button class="btn-yelloww" value="registrar">Registrar curso</button>
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