<?php
require('template/header.php');
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="mt-3">Registrar Nueva Tardanza</h1>
                <hr>
                <form action="procesar_tardanza.php" method="post" class="mt-3">

                    <div class="form-group">
                        <label for="matricula">Matrícula:</label>
                        <input type="text" id="matricula" name="matricula" class="form-control" require>
                    </div>

                    
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" require>
                    </div>

                    
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" require>
                    </div>

                    
                    <div class="form-group">
                        <label for="curso">Curso:</label>
                        <input type="text" id="curso" name="curso" class="form-control" require>
                    </div>

                    
                    <div class="form-group">
                        <label for="motivo">Motivo:</label>
                        <input type="text" id="motivo" name="motivo" class="form-control" require>
                    </div>
                    <div class="text-center">
                        <button type="sutmid" class="btn btn-primary mt-3">
                            <i class="fas fa-save"></i>
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>


<?php
require('template/footer.php');
?>
