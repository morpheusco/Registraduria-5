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
            


            <hr>
            <?php 
            $estadito = "warning";
            $titulazo = "Estamos probando";
            $contenido = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi molestiae asperiores ipsam hic blanditiis similique illo voluptate ullam autem ea. Adipisci temporibus distinctio, molestias quod ipsam veniam aliquid porro tenetur!" ;

            
            
            mitarjeta($estadito, $titulazo, $contenido) ; 
            
            
            ?>


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