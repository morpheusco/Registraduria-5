<!DOCTYPE html>
<html lang="es">
<head>
    <title>DMG Renovado</title>
    <?php include 'metas.php'; ?>

    <?php include 'conexion.php'; ?>




</head>
<body>
    <!-- Encabezado -->
    <?php include 'header.php' ; ?>

    <!-- Contenido global -->

    <div class="container jumbo">

        <div class="row jumbo">
            


            <hr>

            <div class="col">
            <?php 
           
            $miconsultasql = ("SELECT Titulo, Contenido, Estado FROM tareas");

            $consulta = $miconexion -> query ($miconsultasql);

            while ($registro = $consulta -> fetch_assoc ()) { 

                $estado = $registro['Estado'];
                $titulo = $registro['Titulo'];
                $contenido = $registro['Contenido'];

                mitarjeta($estado, $titulo, $contenido) ; 

            
            }



            
            
            
            
            ?>

        </div>


        </div> 

    </div>


    <!-- Fin del contenido global -->

    <!-- Pie de página -->
    <footer class="container-fluid bg-dark text-white jumbo">
        <?php include 'pie.php' ; ?>
        <?php include 'copy-redes.php' ; ?>
    </footer>
    
    <?php include 'scripts.php' ; ?>

</body>
</html>