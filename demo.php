<!DOCTYPE html>
<html lang="es">
<head>
    <title>DMG Renovado</title>
    <?php include 'metas.php'; ?>



</head>
<body>
    <!-- Encabezado -->
    <?php include 'header.php' ; ?>

    <!-- Contenido global -->

    <div class="container jumbo">

        <div class="row jumbo">

            <div class="card text-white bg-secondary" >
                <div class="card-header">Estado</div>
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Contenido</p>
                </div>
            </div>  
            
            <hr>
            <?php mitarjeta() ; ?>


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