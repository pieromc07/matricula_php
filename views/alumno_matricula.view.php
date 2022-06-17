<?php require 'views/template/head.view.php'; ?>
<?php require 'views/template/header.view.php'; ?>
<?php require 'views/template/nav-alumno.view.php'; ?>

<form class="row py-3">
    <div class="col-md-12 text-center">
        <h4>Empece a Matricularse</h4>
    </div>
    <div class="col-md-12 py-3">
        <div class="row justify-content-around">
            <div class="col-6">
                <div class="row">

                    <div class="col-6">
                        <label for="curso" class="mb-1">
                            Curso :
                        </label><br>
                        <label for="hora" class="mb-1">
                            Hora :
                        </label><br>
                        <label for="docente">
                            Docente :
                        </label>
                    </div>

                    <div class="col">
                        <select name="curso" id="curso" class="mb-2 select-am">
                            <option value="1_matematica">Matemática</option>
                            <option value="2_fisica">Física</option>
                            <option value="3_quimica">Química</option>
                        </select>
                        <select name="hora" id="hora" class="mb-2 select-am">
                            <option value="lunes">lunes (7:00 - 9:30)</option>
                            <option value="martes">Martes (7:00 - 9:30)</option>
                            <option value="miercoles">Miercoles (7:00 - 9:30)</option>
                        </select>
                        <input class="name-pr" type="text" value="Juan Aguilar Mamani" readonly id="docente">
                    </div>

                </div>
            </div>
            <div class="col mt-4">
                <div class="row">
                    <div class="col-6">
                        <button class="white mb-2" type="button" onclick="agregar()">Agregar</button>
                    </div>
                    <div class="col">
                        <button class="white" id="matricula">Matricular</button>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="row centrar-table">
                        <div class="col-10">
                            <table class="table" id="tabla">
                                <thead class="thead">
                                    <tr class="table-dark">
                                        <th scope="col">Cursos</th>
                                        <th scope="col">Hora</th>
                                        <th scope="col">Docente</th>
                                        <th scope="col">Opción</th>
                                    </tr>
                                </thead>
                                <tbody class="table-warning">
                                    <!-- <tr>
                                        <th scope="row">Curso 1</th>
                                        <td>lunes (7:00 - 9:30)</td>
                                        <td>Juan Aguilar Mamani</td>
                                        <td><button type="button" class="btn-borrar">Borrar</button></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>


<script type="text/javascript">
let index = 0;
let cursos = [];

function agregar() {
    let docente = document.getElementById('docente').value;
    var curso = document.getElementById('curso').value.split('_');
    var hora = document.getElementById('hora').value;

    if (cursos.includes(curso[0])) {
        alert("El curso ya esta en la lista");
    } else {


        let fila = '<tr id="row' + index + '"><th scope="row" id="celdacurso">' + curso[1] + '</th><td>' + hora +
            '</td><td>' + docente +
            '</td><td><button type="button" class="btn-borrar" onclick="borrar(' + index +
            ')">Borrar</button></td></tr>'
        document.getElementById('tabla').innerHTML += fila;
        index++;

        cursos.push(curso[0]);
    }


}

function borrar(nfila) {
    let fila = document.getElementById('row' + nfila).remove();
    let celdacurso = document.getElementsByTagName("th");
    index--;

    let curso = celdacurso[nfila].innerHTML;
    cursos.splice(cursos.indexOf(curso), 1);
}

document.getElementById('matricula').addEventListener('click', function(e) {
    e.preventDefault();
    if (index === 0) {
        alert('No hay cursos agregados');
    } else {
        alert('Matricula realizada');
    }
});
</script>


<?php require 'views/template/footer.view.php'; ?>
<?php require 'views/template/body.view.php'; ?>