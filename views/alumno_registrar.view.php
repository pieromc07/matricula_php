<?php require 'views/template/head.view.php'; ?>
<?php require 'views/template/header.view.php'; ?>
<?php require 'views/template/nav-administrador.view.php'; ?>

<div class="row">
    <div class="col-12 a_notas ">
        <label for="title" class="mt-3 mb-4 titreg">Registrar Alumno</label>
    </div>
</div>
<form action="">
    <div class="row">
        <div class="col-8 ">
            <div class="row">
                <div class="col-3 regisal">
                    <label for="nombre">Nombre:</label>
                </div>
                <div class="col regisal">
                    <input type="text" name="nombre" id="nombre">
                </div>
            </div>
            <div class="row">
                <div class="col-3 regisal">
                    <label for="apepaterno">Apellido paterno:</label>
                </div>
                <div class="col regisal">
                    <input type="text" name="apepaterno" id="apepaterno">
                </div>
            </div>
            <div class="row">
                <div class="col-3 regisal">
                    <label for="apematerno">Apellido paterno:</label>
                </div>
                <div class="col regisal">
                    <input type="text" name="apematerno" id="apematerno">
                </div>
            </div>
            <div class="row">
                <div class="col-3 regisal">
                    <label for="fechanacimiento">Fecha de nacimiento:</label>
                </div>
                <div class="col regisal">
                    <input type="date" name="fechanacimiento" id="fechanacimiento">

                </div>
            </div>

            <div class="row">
                <div class="col-3 regisal">
                    <label for="dni">DNI:</label>
                </div>

                <div class="col regisal">
                    <input type="text" name="dni" id="dni">
                </div>
            </div>

            <div class="row">
                <div class="col-3 regisal">
                    <label for="genero">GENERO</label>
                </div>

                <div class="col regisal">
                    <h5 class="femrb">Femenino</h5>
                    <input type="radio" name="genero" id="genero1" class="rb">
                </div>

                <div class="col regisal">
                    <h5 class="masrb">Masculino</h5>
                    <input type="radio" name="genero" id="genero2" class="rb">
                </div>

            </div>

            <div class="row">
                <div class="col-3 regisal">
                    <label for="correo">Correo Electrónico:</label>
                </div>
                <div class="col regisal">
                    <input type="email" name="correo" id="correo">
                </div>
            </div>

            <div class="row">
                <div class="col-3 regisal">
                    <label for="distrito">Distrito:</label>
                </div>
                <div class="col regisal">
                    <input type="text" name="distrito" id="distrito">
                </div>
            </div>

            <div class="row">
                <div class="col-3 regisal">
                    <label for="direccion">Dirección:</label>
                </div>
                <div class="col regisal">
                    <input type="text" name="direccion" id="direccion">
                </div>
            </div>

            <div class="row">
                <div class="col-3 regisal mb-4">
                    <label for="contacto">Contacto:</label>
                </div>
                <div class="col regisal mb-4">
                    <input type="text" name="contacto" id="contacto">
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-12 regisal">
                    <label for="idalumno">ID:</label>
                    <input type="text" name="idalumno" id="idalumno">
                </div>
            </div>

            <div class="row contenedor">
                <div class="col-12 regisal a_notas">
                    <label for="acciones" class="titcont">Acciones</label><br>
                </div>
                <div class="col-12">
                    <button class="btn-yelloww">Registrar Alumno</button>
                </div>
                <div class="col-12">
                    <button type="button" class="btn-yelloww" onclick="borrar()">Nuevo</button>
                </div>
            </div>


        </div>
    </div>
</form>


<script type="text/javascript">

    function borrar() {
        document.getElementById("nombre").value = "";
        document.getElementById("apepaterno").value = "";
        document.getElementById("apematerno").value = "";
        document.getElementById("fechanacimiento").value = "";
        document.getElementById("dni").value = "";

        document.getElementById("genero1").checked = false;
        document.getElementById("genero2").checked = false;

        document.getElementById("correo").value = "";
        document.getElementById("distrito").value = "";
        document.getElementById("direccion").value = "";
        document.getElementById("contacto").value = "";
        document.getElementById("idalumno").value = "";

    }
</script>

<?php require 'views/template/footer.view.php'; ?>
<?php require 'views/template/body.view.php'; ?>