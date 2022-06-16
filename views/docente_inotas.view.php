<?php require 'views/template/head.view.php'; ?>
<?php require 'views/template/header.view.php'; ?>
<?php require 'views/template/nav-docente.view.php'; ?>

<div class="row py-3">
    <div class="col-md-12 text-center">
        <h1>Ingresar Notas</h1>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <label for="nota1">Nota 1 :</label>
                        <input type="text" name="nota1" id="nota1" class="">
                    </div>
                    <div class="col-md-12">
                        <label for="nota2">Nota 2 :</label>
                        <input type="text" name="nota2" id="nota2" class="">
                    </div>
                    <div class="col-md-12">
                        <label for="nota3">Nota 3 :</label>
                        <input type="text" name="nota3" id="nota3" class="">
                    </div>
                    <div class="col-md-12">
                        <label for="exfinal">Ex Final :</label>
                        <input type="text" name="exfinal" id="exfinal" class="">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row  justify-content-around mt-2">
                    <div class="col-md-4">
                        <button class="white">Registrar</button>
                    </div>

                    <div class="col-md-4">
                        <button class="white">Elimar</button>
                    </div>
                </div>

                <div class="row justify-content-around mt-2">
                    <div class="col-md-4">
                        <button class="white">Actualizar</button>
                    </div>

                    <div class="col-md-4">
                        <button class="white">Cancelar</button>
                    </div>


                </div>
            </div>
            <div class="col-md-4">

                <div class="row">
                    <div class="col-md-12 d-flex  justify-content-around mb-4
                    
                    
                 ">
                        <button class="white">
                            Calcular Promedio
                        </button>
                    </div>
                    <div class="col-md-12 d-flex  justify-content-around">
                        <input type="text" name="promedio" id="promedio">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require 'views/template/footer.view.php'; ?>
<?php require 'views/template/body.view.php'; ?>