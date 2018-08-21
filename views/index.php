<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diario personal en PHP y MySQL</title>

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
                        <?php if ($obtenerNotaUsuario): ?>
                            <a href="crear.php" class="btn btn-secondary">Crear una nueva nota</a>
                        <?php endif; ?>
                        <hr>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <?php if ($obtenerNotaUsuario): ?>
                            <h2 class="text-primary">Todas tus notas</h2>
                            <hr>
                        <?php else: ?>
                            <h2 class="text-danger">No hay notas disponibles</h2>
                            <a href="crear.php" class="btn btn-secondary">Crear una nueva nota</a>
                            <hr>
                        <?php endif ?>
                    </div>
                    <div class="w-100"></div>
                    <?php foreach($obtenerNotaUsuario as $obtenerNotas): ?>
                        <!-- Nota #1 -->
                        <div class="col-lg-4">
                            <div class="card text-white bg-dark mb-3">
                              <div class="card-header">Creado el: <?php echo $obtenerNotas['fecha']; ?></div>
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $obtenerNotas['titulo']; ?></h5>
                                <p class="card-text"><?php echo substr($obtenerNotas['notas'], 0, 150) . '....'; ?></p>
                                <a href="ver.php?id=<?php echo $obtenerNotas['idNotas']; ?>" class="btn btn-primary mb-1">Ver nota</a>
                                <a href="?delete=<?php echo $obtenerNotas['idNotas']; ?>" class="btn btn-danger">Eliminar nota</a>
                              </div>
                            </div>
                        </div>
                    <?php endforeach;?>

                </div>
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="views/vendor/jquery/jquery.min.js"></script>
    <script src="views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
