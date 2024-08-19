<?php
include_once('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/usuarios/show-user.php');


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0"> ELIMINAR DATOS DE USUARIO</h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Estas seguro de eliminar este usuario</h3>
              <div class="card-tools">
                <buutton class="btn btn-tool"><i class="fas fa-minus"></i></buutton>
              </div>
            </div>
            <div class="card-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">
                  <form action="../app/controllers/usuarios/delete_user.php" method="post">
                  <input  name="txt_id_user" type="text" class="form-control" value="<?php echo $id_usuario_get;?>" hidden >
                    <div class="form-group">
                      <label for="">Nombres</label>
                      <input  name="txt_nombre" type="text" class="form-control" value="<?php echo $nombres;?>" disabled>
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input name="txt_email"type="email" class="form-control"  value="<?php  echo $email;?>"  disabled>
                    </div>
                    <div class="form-group">
                      <button  class="btn btn-danger">eliminar</button>
                      <a href="index.php" class="btn btn-warning">Volver Atras</a>
                    </div>
                  </form>
                </div>
              </div>
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



<?php
include('../layout/parte2.php');
?>