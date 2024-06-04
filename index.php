<?php
require('template/header.php');
?>





    <div class="container">
        <h1 class="mt-4"> Sistema de Control de Tardanzas </h1>
        <hr>

        <div class="text-end">
            <a class="btn btn-primary mt-3 mb-4" href="nueva_tardanza.php">
                <i class="fas fa-plus"></i>
                Registrar Nueva Tardanzas
            </a>
        </div>

        <h2 class="mt-5">Listado de Tardanzas</h2>
        <hr>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Curso</th>
                    <th>Motivo</th>
                    <th>Fecha</th>
                </tr>
            </thead>

            <tbody>
                <?php

                    $archivos = glob('tardanzas/*.json');

                    foreach($archivos as $archivo){
                        $estudiante_json = file_get_contents($archivo);

                        $estudiante = json_decode($estudiante_json, 0777);

                        echo "<tr>";

                        echo "<td>{$estudiante['matricula']}</td>";
                        echo "<td>{$estudiante['nombre']}</td>";
                        echo "<td>{$estudiante['apellido']}</td>";
                        echo "<td>{$estudiante['curso']}</td>";
                        echo "<td>{$estudiante['motivo']}</td>";
                        echo "<td>{$estudiante['fecha']}</td>";
                        

                        echo "</tr>";

                    }

                ?>
            </tbody>

        </table>


    </div>

<?php
require('template/footer.php');
?>
