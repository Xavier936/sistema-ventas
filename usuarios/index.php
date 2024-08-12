<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/usuarios/listado_usuarios.php'); 
?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Listado de usuarios</h1>
          
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Usuarios Registrados</h3>
                <div class="card-tools">
                  <buutton class="btn btn-tool"><i class="fas fa-minus"></i></buutton>
                </div>
              </div>
              <div class="card-body" style="display: block;">
                <table class="table table-bordered table-hover">
                  <tr>
                    <th>Nro</th>
                    <th>Nombres</th>
                    <th>Email</th>
                  </tr>
                  <tbody>
                    <?php  foreach($data_user as $userdata){
                      echo "hola a todos";?>
                      <tr>
                        <td><?php  echo $userdata['id_usuario']?></td>
                        <td><?php  echo $userdata['nombres']?></td>
                        <td><?php  echo $userdata['email']?></td>
                      </tr>
                      <?php  
                      } ?>
                  </tbody>
                </table>
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



    <?php
    include('../layout/parte2.php');
    ?>