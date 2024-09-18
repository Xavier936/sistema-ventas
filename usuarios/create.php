<?php
include_once('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');

include('../app/controllers/roles/listado_roles.php');


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Registro de Usuarios</h1>
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
              <h3 class="card-title">Ingrese todos los campos</h3>
              <div class="card-tools">
                <buutton class="btn btn-tool"><i class="fas fa-minus"></i></buutton>
              </div>
            </div>
            <div class="card-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">
                  <form action="../app/controllers/usuarios/crear_usuarios.php" method="post">
                    <div class="form-group">
                      <label for="">Nombres</label>
                      <input  name="txt_nombre" type="text" class="form-control" placeholder="Ingrese un nombre y un apellido" required>
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input name="txt_email"type="email" class="form-control" placeholder="Ingrese un correo valido" required>
                    </div>
                    <div class="form-group">
                      <label for="">Rol de usuario</label>
                      <select name="txt_rol" id="" class="form-control">
                        <?php foreach($data_rol as $rolDato){?>
                          <option value="<?php echo $rolDato['id_rol'];?>"><?php echo $rolDato['rol'];?></option>
                          <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Contaseña</label>
                      <input name="txt_pwd" type="text" class="form-control" placeholder="Al menos 8 caracteres" required>
                    </div>
                    <div class="form-group">
                      <label for="">Repita la contraseña</label>
                      <input name="txt_pass" type="text" class="form-control" required>
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