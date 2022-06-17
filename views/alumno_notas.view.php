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
            <option value="1_matematica">Matemática</option>
            <option value="2_fisica">Física</option>
            <option value="3_quimica">Química</option>
        </select>
    </div>
    <div class="col a_notas">
        <button class="white m-4">Buscar</button>
    </div>
</div>
<div class="row">
    <div class="col-4 a_notas">
        <label for="curso" class="mt-2">CURSO</label>
    </div>
    <div class="col-4 a_notas">
        <input class="m-2 input-curso" type="text" value="Matemáticas" readonly>
    </div>
</div>

<div class="row">
    <div class="col-4 seguido a_notas">
        <label for="nota01" class="mt-4">NOTA 01:</label>
        <input type="text" class="notas mt-4" value="11" readonly>
    </div>
    <div class="col-4 seguido a_notas">
        <label for="nota02" class="mt-4">NOTA 02:</label>
        <input type="text" class="notas mt-4" value="11" readonly>
    </div>
    <div class="col a_notas">
        <label for="promedio" class="mt-4">PROMEDIO</label>
    </div>
</div>

<div class="row">
    <div class="col-4 seguido a_notas">
        <label for="nota03" class="mt-4 mb-5">NOTA 03:</label>
        <input type="text" class="notas mt-4 mb-5" value="11" readonly>
    </div>
    <div class="col-4 seguido a_notas">
        <label for="exfinal" class="mt-4 mb-5">EX FINAL:</label>
        <input type="text" class="notas mt-4 mb-5" value="11" readonly>
    </div>
    <div class="col a_notas">
        <input type="text" class="notas mt-4 mb-5" value="11" readonly>
    </div>
</div>




<?php require 'views/template/footer.view.php'; ?>
<?php require 'views/template/body.view.php'; ?>