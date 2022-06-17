<?php require 'views/template/head.view.php'; ?>
<?php require 'views/template/header.view.php'; ?>
<?php require 'views/template/nav-alumno.view.php'; ?>

<div class="row">
    <div class="col-12 a_notas">
        <label for="notas" class="mt-4 title-n">Notas</label>
    </div>
    <div class="col-4 a_notas">
        <label for="cursos" class="m-4">Cursos</label>
    </div>
    <div class="col-4 a_notas">
        <select name="curso" id="curso" class="a_combo m-4">
            <option value="">Seleccione un curso</option>
            <?php foreach($cursos as $curso): ?>
            <option value="<?php echo $curso['id']; ?>"><?php echo $curso['nombre']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-4 a_notas">
        <label for="curso" class="mt-2">CURSO</label>
    </div>
    <div class="col-4 a_notas">
        <input class="m-2 input-curso" type="text" id="icurso" readonly>
    </div>
</div>

<div class="row">
    <div class="col-4 seguido a_notas">
        <label for="nota01" class="mt-4">NOTA 01:</label>
        <input type="text" class="notas mt-4" id="nota1" readonly>
    </div>
    <div class="col-4 seguido a_notas">
        <label for="nota02" class="mt-4">NOTA 02:</label>
        <input type="text" class="notas mt-4" id="nota2" readonly>
    </div>
    <div class="col a_notas">
        <label for="promedio" class="mt-4">PROMEDIO</label>
    </div>
</div>

<div class="row">
    <div class="col-4 seguido a_notas">
        <label for="nota03" class="mt-4 mb-5">NOTA 03:</label>
        <input type="text" class="notas mt-4 mb-5" id="nota3" readonly>
    </div>
    <div class="col-4 seguido a_notas">
        <label for="exfinal" class="mt-4 mb-5">EX FINAL:</label>
        <input type="text" class="notas mt-4 mb-5" id="exmen" readonly>
    </div>
    <div class="col a_notas">
        <input type="text" class="notas mt-4 mb-5" id="promedio" readonly>
    </div>
</div>

<script type="text/javascript">
document.getElementById('curso').addEventListener('change', function() {
    var curso = document.getElementById('curso').value;
    <?php foreach($cursos as $curso){
            echo"
            if(curso == '".$curso['id']."'){
                document.getElementById('icurso').value = '".$curso['nombre']."';
                document.getElementById('nota1').value = '".$curso['nota1']."';
                document.getElementById('nota2').value = '".$curso['nota2']."';
                document.getElementById('nota3').value = '".$curso['nota3']."';
                document.getElementById('exmen').value = '".$curso['exmen']."';
            }";
            $promedio = ($curso['nota1'] + $curso['nota2'] + $curso['nota3'] + $curso['exmen'])/4;
            echo"
            document.getElementById('promedio').value = '".$promedio."';
            ";
        } 
       ?>
});
</script>




<?php require 'views/template/footer.view.php'; ?>
<?php require 'views/template/body.view.php'; ?>