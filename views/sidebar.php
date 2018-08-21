<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="">
                Diario personal
            </a>
        </li>
        <div class="text-center mb-3 text-white">
            <small>Hola, <strong><?php echo $_SESSION['usuario']; ?></strong></small>
        </div>
        <li>
            <a href="index.php">Inicio</a>
        </li>
        <li>
            <a href="crear.php">Crear nueva nota</a>
        </li>
        <li>
            <a href="salir.php">Salir</a>
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->