<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tu nota: nombre nota | Diario personal en PHP y MySQL</title>

    <!-- Bootstrap core CSS -->
    <link href="views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="views/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <?php require 'sidebar.php'; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Abrir menu</a>
                        <a href="index.php" class="btn btn-secondary">Ir al inicio</a>
                        <hr>
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h2 class="text-center text-secondary">Tu nota</h2>
                        <div class="text-center">
                            <small>En esta opción, también puedes modificar tu nota</small>
                        </div>
                        <hr>
                        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                            <input type="hidden" name="id" value="<?php echo $verNota['idNotas']; ?>">
                            <input type="text" name="tituloNota" placeholder="Titulo de la nota" class="form-control mb-2" value="<?php echo $verNota['titulo']; ?>">
                            <textarea name="nota" class="form-control mb-2" placeholder="Escriba su nota" style="min-height: 100vh;"><?php echo $verNota['notas']; ?></textarea>
                            <?php if (!empty($errores)): ?>
                                <div class="alert alert-danger"><?php echo $errores; ?></div>
                            <?php endif; ?>
                            <button type="submit" class="btn btn-success">Modificar nota</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo RUTA; ?>/views/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo RUTA; ?>/views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
