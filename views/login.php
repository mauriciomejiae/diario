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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h2 class="text-primary text-center mt-5">Iniciar sesión</h2>
                    <hr>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input type="text" class="form-control mb-2" name="usuario" placeholder="Usuario">
                        <input type="password" class="form-control mb-2" name="pass" placeholder="Contraseña">

                        <!-- aqui van los errores -->
                        <?php if (!empty($errores)): ?>
                            <div class="alert alert-danger"><?php echo $errores; ?></div>
                        <?php endif ?>
                        <div class="action mb-2">¿No tienes cuenta? <a href="registro.php">Registrate</a></div>
                        <button type="submit" class="btn btn-secondary">Iniciar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
