<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h5>Lista de Usuarios</h5>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>usuario" class="nav-link">Inicio</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
            <!-- /.card-header -->
            <div class="card-body">
              <?php
              echo form_open_multipart('usuario/agregar');
              ?>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xs">Agregar Usuario</button>
              </div>
              <?php
              echo form_close();
              ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO PATERNO</th>
                    <th>APELLIDO MATERNO</th>
                    <th>CI</th>
                    <th>DIRECCION</th>
                    <th>TIPO DE USUARIO </th>
                    <th>NOMBRE DE USUARIO</th>
                    <th>CORREO</th>
                    <th>USUARIO DE ALTA</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($usuario->result() as $row) {
                    $deshabilitar = ($row->nombreUsuario=="admin")? "disabled" : "";
                  ?>
                    <tr>
                      <td><?php echo $row->nombre; ?></th>
                      <td><?php echo $row->primerApellido; ?></td>
                      <td><?php echo $row->segundoApellido; ?></td>
                      <td><?php echo $row->ci; ?></td>
                      <td><?php echo $row->direccion; ?></td>
                      <td><?php echo $row->tipoUsuario; ?></td>
                      <td><?php echo $row->nombreUsuario; ?></td>
                      <td><?php echo $row->correo; ?></td>
                      <td><?php echo ($row->habilitado == 1) ? "Habilitado": "Deshabilitado"; ?></td>
                      <td>
                        <?php
                        echo form_open_multipart('Usuario/modificar');
                        ?>
                        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>">

                        <button type="submit" class="btn btn-primary btn-xs" <?php echo $deshabilitar ?>><i class="far fa-edit"></i></button>
                        <?php
                        echo form_close();
                        ?>
                      </td>
                      <td>
                        <?php
                        echo form_open_multipart('Usuario/eliminarbd');
                        ?>
                        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>">
                        
                        <button type="submit" class="btn btn-danger btn-xs" <?php echo $deshabilitar ?> ><i class="fas fa-trash-alt"></i></button>
                        <?php
                        echo form_close();
                        ?>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>