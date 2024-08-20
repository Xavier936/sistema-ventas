<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/roles/listado_roles.php');


?>
 
<!-- Content Header (Page header) -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Listado de Roles</h1>

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-outline card-primary">
                <div class="card-header">
                  <h3 class="card-title">Roles Registrados</h3>
                  <div class="card-tools">
                    <buutton class="btn btn-tool"><i class="fas fa-minus"></i></buutton>
                  </div>
                </div>
                <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>Nro</th>
                      <th>Nombres del rol</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                      $contador = 0;
                      foreach ($data_rol as $roldata) {
                        $id_rol = $roldata['id_rol']; ?>
                        <tr>
                          <td><?php echo $contador = $contador + 1; ?></td>
                          <!-- <td><?php echo $roldata['id_rol'] ?></td> -->
                          <td><?php echo $roldata['rol'] ?></td>
                          <td>
                            <center>
                              <div class="btn-group">
                                
                                <a href="update.php?id=<?php echo $id_rol; ?>" class="btn btn-success"><i class="fa fapencil-alt"></i>Editar</a>
                                
                              </div>
                            </center>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
</div>

<?php include('../layout/mensajes.php');?>
<?php include('../layout/parte2.php'); ?>

<script>
  $(function() {
    $("#example1").DataTable({
      "pageLength": 5,
      "language":{
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
        "infoEmpty": "Mostrando 0 to 0 of 0 Usuarios",
        "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Usuarios",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscador:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      /* Ajuste de botones */
      buttons: [{
                        extend: 'collection',
                        text: 'Reportes',
                        orientation: 'landscape',
                        buttons: [{
                            text: 'Copiar',
                            extend: 'copy'
                        }, {
                            extend: 'pdf',
                        }, {
                            extend: 'csv',
                        }, {
                            extend: 'excel',
                        }, {
                            text: 'Imprimir',
                            extend: 'print'
                        }
                        ]
                    },
                        {
                            extend: 'colvis',
                            text: 'Visol de columnas'
                        }
                    ],
                    /*Fin de ajuste de botones*/
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>