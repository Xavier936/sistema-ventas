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
          <h1 class="m-0"> VISUALIZARDATOS DE USUARIO</h1>
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
              <h3 class="card-title">DATOS DE USUARIO</h3>
              <div class="card-tools">
                <buutton class="btn btn-tool"><i class="fas fa-minus"></i></buutton>
              </div>
            </div>
            <div class="card-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">
                  <form >
                    <div class="form-group">
                      <label for="">Nombres</label>
                      <input  name="txt_nombre" type="text" class="form-control" value="<?php echo $nombres;?>" disabled>
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input name="txt_email"type="email" class="form-control"  value="<?php  echo $email;?>"  disabled>
                    </div>
                    <div class="form-group">
                      <label for="">Rol Usuario</label>
                      <input name="txt_rol" type="text" class="form-control"  value="<?php echo $rol;  ?>"  disabled>
                    </div>
                    <div class="form-group">
                      <a href="index.php" class="btn btn-danger">Volver Atras</a>
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