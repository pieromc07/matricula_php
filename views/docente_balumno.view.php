<?php require 'views/template/head.view.php'; ?>
<?php require 'views/template/header.view.php'; ?>
<?php require 'views/template/nav-docente2.view.php'; ?>

<div class="row p-3 d-flex justify-content-between  align-items-center">
    <div class="col-md-4">
        <div class="row">
            <select name="seccion" id="seccion" class="col-md-12 my-2">
                   <option value="0">Seleccione Seccion</option>
            </select>
            <select name="alumno" id="alumno" class="col-md-12 my-2">
                     <option value="0">Seleccione Alumno</option>
                     <?php 
                        foreach($alumnos as $alumno){
                            echo "<option value='".$alumno['id']."'>".$alumno['apellidoPaterno']." ".$alumno['apellidoMaterno']." ".$alumno['nombre']."</option>";
                        }
                     ?>
            </select>
        </div>
    </div>
    <div class="col-md-6">

        <div class="row d-flex  justify-content-center align-items-center">
            <div class="col-md-4">
                <i class="fas fa-user" style="font-size: 7rem;"></i>
            </div>
            <div class="col-md-4">
                <textarea class="p-1" name="data_user" id="data_user" cols="20" rows="10">Datos del Alumno</textarea>
            </div>
            <div class="col-md-4">
                <button class="white"> <a href="" id="url" >Ingresar Nota</a> </button>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    document.getElementById('alumno').addEventListener('change',()=>{
        let id = document.getElementById('alumno').value;
        
        <?php 
            foreach ($alumnos as $alumno) {
                echo "if(id == '".$alumno['id']."'){
                    document.getElementById('data_user').value = '".$alumno['apellidoPaterno']." ".$alumno['apellidoMaterno']." ".$alumno['nombre']."';

                }";
                $matricula_id = $alumno['matricula_id'];
                echo "document.getElementById('url').href = 'docente_inotas.php?matricula=$matricula_id&curso=$curso';";
            }

        ?>
    
    });
</script>

<?php require 'views/template/footer.view.php'; ?>
<?php require 'views/template/body.view.php'; ?>