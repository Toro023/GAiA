$(document).ready(function () {
  $(function () {
    $("#tblApoyos")
      .DataTable({
        responsive: true,
        lengthChange: false,
        autoWidth: false,
        buttons: ["excel", "pdf"],
      })
      .buttons()
      .container()
      .appendTo("#tblApoyos_wrapper .col-md-6:eq(0)");

    $("#tblSostenimiento")
      .DataTable({
        responsive: true,
        lengthChange: false,
        autoWidth: false,
        buttons: ["excel", "pdf"],
      })
      .buttons()
      .container()
      .appendTo("#tblSostenimiento_wrapper .col-md-6:eq(0)");

    $("#tblTransporte")
      .DataTable({
        responsive: true,
        lengthChange: false,
        autoWidth: false,
        buttons: ["excel", "pdf"],
      })
      .buttons()
      .container()
      .appendTo("#tblTransporte_wrapper .col-md-6:eq(0)");

    $("#tblAlimentacion")
      .DataTable({
        responsive: true,
        lengthChange: false,
        autoWidth: false,
        buttons: ["excel", "pdf"],
      })
      .buttons()
      .container()
      .appendTo("#tblAlimentacion_wrapper .col-md-6:eq(0)");

    $("#tblDatos")
      .DataTable({
        responsive: true,
        lengthChange: false,
        autoWidth: false,
        buttons: ["excel", "pdf"],
      })
      .buttons()
      .container()
      .appendTo("#tblDatos_wrapper .col-md-6:eq(0)");

    // Manejo de tabs para los botones de apoyo
    $(".btn-apoyo").click(function () {
      // Remover active de todos los botones y agregarlo al actual
      $(".btn-apoyo").removeClass("active");
      $(this).addClass("active");

      // Ocultar todos los paneles y mostrar el destino
      var targetId = $(this).data("target");
      $(".tab-pane").removeClass("show active");
      $(targetId).addClass("show active");

      // Recalcular el tamaño de las columnas de DataTables al mostrar la pestaña
      $.fn.dataTable.tables({ visible: true, api: true }).columns.adjust().responsive.recalc();
    });
  });
});
