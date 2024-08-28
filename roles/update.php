<?php
include_once('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/roles/show_rol.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">ACTUALIZAR ROL</h1>
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
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">ROLES REGISTRADOS</h3>
              <div class="card-tools">
                <buutton class="btn btn-tool"><i class="fas fa-minus"></i></buutton>
              </div>
            </div>
            <div class="card-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">
                  <form action="../app/controllers/roles/update_rol.php" method="post">  
                    <input  name="txt_id_rol" type="text" class="form-control" value="<?php echo $id_rol;?>" hidden >
                    <div class="form-group">
                      <label for="">Rol </label>
                      <input  name="txt_rol" type="text" class="form-control" value="<?php echo $rol;?>" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary"> Guardar</button>
                      <a href="index.php" class="btn btn-danger">Cancelar</a>
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


<?php include('../layout/mensajes.php');?>
<?php include('../layout/parte2.php');?>
