<!DOCTYPE html>
<html lang="es">

<head>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GAiA</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="vistas/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">

    <style>
      #pd-pagination {
        display: inline-flex;
        flex-wrap: wrap;
        gap: 0.55rem;
        justify-content: center;
        align-items: center;
        padding: 0.45rem 0.6rem;
        background: rgba(15, 23, 42, 0.88);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 999px;
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.12);
        backdrop-filter: blur(12px);
      }

      .pd-circle {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 2.45rem;
        height: 2.45rem;
        padding: 0 0.5rem;
        border-radius: 50%;
        font-weight: 700;
        font-size: 0.95rem;
        color: rgba(229, 241, 255, 0.8);
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.08);
        transition: transform 0.18s ease, background-color 0.18s ease, color 0.18s ease, box-shadow 0.18s ease;
        cursor: pointer;
      }

      .pd-circle:hover {
        transform: translateY(-1px);
        background: rgba(255, 255, 255, 0.12);
      }

      .pd-circle.active {
        color: #ffffff;
        background: linear-gradient(180deg, #4d8cff 0%, #2852ff 100%);
        border-color: rgba(255, 255, 255, 0.24);
        box-shadow: 0 0 0 6px rgba(40, 82, 255, 0.12), 0 12px 24px rgba(0, 0, 0, 0.18);
      }
    </style>

    <!-- DataTables -->
    <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Estilos Personalizados de la App -->
    <link rel="stylesheet" href="vistas/css/plantilla.css">

    <!-- ************************************************************ -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="vistas/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="vistas/plugins/jszip/jszip.min.js"></script>
    <script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="vistas/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="vistas/plugins/raphael/raphael.min.js"></script>
    <script src="vistas/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="vistas/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="vistas/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="vistas/dist/js/pages/dashboard2.js"></script>

    <!-- AdminLTE App -->
    <script src="vistas/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="vistas/dist/js/demo.js"></script> -->


  </head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  <div class="wrapper">
    <?php
    include 'modulos/encabezado.php';
    include 'modulos/menu.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


      <?php
      if (isset($_GET["ruta"])) {
        if (
          $_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "puntuacion" ||
          $_GET["ruta"] == "apoyos" ||
          $_GET["ruta"] == "sedes" ||
          $_GET["ruta"] == "fichas" ||
          $_GET["ruta"] == "identificacion" ||
          $_GET["ruta"] == "financiera" ||
          $_GET["ruta"] == "verificacion" ||
          $_GET["ruta"] == "reportes" ||
          $_GET["ruta"] == "inscripciones" ||
          $_GET["ruta"] == "Usuarios"
        ) {
          include "modulos/" . $_GET["ruta"] . ".php";
        } //fin del enrutador
        else {
          include "modulos/error404.php";
        } // si la ruta no existe
      }

      ?>

    </div>
    <!-- /.content-wrapper -->
    <?php
    include 'modulos/footer.php';
    ?>
  </div>



  <script src="vistas/js/plantilla.js"></script>
  <script src="vistas/js/styles.css"></script>



</body>

</html>