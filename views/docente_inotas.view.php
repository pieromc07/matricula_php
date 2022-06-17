<?php require 'views/template/head.view.php'; ?>
<?php require 'views/template/header.view.php'; ?>
<?php require 'views/template/nav-docente2.view.php'; ?>

<div class="row py-3">
    <div class="col-md-12 text-center">
        <h1>Ingresar Notas</h1>
    </div>
    <form class="col-md-12" method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <label for="nota1">Nota 1 :</label>
                        <input type="text" name="nota1" id="nota1" class="" value="<?php echo $detalle['nota1']?>">
                    </div>
                    <div class="col-md-12">
                        <label for="nota2">Nota 2 :</label>
                        <input type="text" name="nota2" id="nota2" class="" value="<?php echo $detalle['nota2']?>">
                    </div>
                    <div class="col-md-12">
                        <label for="nota3">Nota 3 :</label>
                        <input type="text" name="nota3" id="nota3" class="" value="<?php echo $detalle['nota3']?>">
                    </div>
                    <div class="col-md-12">
                        <label for="exfinal">Ex Final :</label>
                        <input type="text" name="exfinal" id="exfinal" class="" value="<?php echo $detalle['exmen']?>">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row  justify-content-around mt-2">
                    <div class="col-md-4">
                        <button class="white" name="Registrar" value="Registrar">Registar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 d-flex  justify-content-around mb-4">
                        <button type="button" class="white" id="calcular">
                            Calcular Promedio
                        </button>
                    </div>
                    <div class="col-md-12 d-flex  justify-content-around">
                        <input type="text" name="promedio" id="promedio">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    let nota1 = document.getElementById('nota1').value
    let nota2 = document.getElementById('nota2').value
    let nota3 = document.getElementById('nota3').value
    let exfinal = document.getElementById('exfinal').value

    let promedio = (parseInt(nota1) + parseInt(nota2) + parseInt(nota3) + parseInt(exfinal)) / 4
    
    document.getElementById('calcular').addEventListener('click', function(){
        document.getElementById('promedio').value = promedio
    })

</script>


<?php require 'views/template/footer.view.php'; ?>
<?php require 'views/template/body.view.php'; ?>