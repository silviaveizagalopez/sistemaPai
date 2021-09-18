<?php
                 var_dump($vacuna->result());

                  ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 
  <sect
  ion class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h5>Vacuna a paciente</h5>
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
              echo form_open_multipart('pacientevacuna/registrarPacienteFormulario');
              ?>
              <div class="form-group">
                <button type="submit" class="btn btn-secondary btn-xs">Registrar vacuna a paciente</button>
              </div>
              <?php
              echo form_close();
              ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Paciente</th>
                    <th>Vacuna</th>
                    <th>Descripcion</th>
                    <th>Dosis</th>
                    <th>Siguiente dosis</th>
                    <th>Fecha siguiente dosis</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($vacuna->result() as $row) {

                  ?>
                    <tr>
                      <td><?php echo $row->nombrePaciente; ?></th>
                      <td><?php echo $row->nombreVacuna; ?></td>
                      <td><?php echo $row->descripcion; ?></td>
                      <td><?php echo $row->dosis; ?></td>
                      <td><?php echo $row->siguienteDosis; ?></td>
                      <td><?php echo $row->fechaSiguienteDosis; ?></td>
                      <td>
                        <?php
                        echo form_open_multipart('vacuna/modificar');
                        ?>
                        <input type="hidden" name="idPacienteVacuna" value="<?php echo $row->idPacienteVacuna;  ?>">

                        <button type="submit" class="btn btn-primary btn-xs"><i class="far fa-edit"></i></button>
                        <?php
                        echo form_close();
                        ?>
                      </td>
                      <td>
                        <?php
                        echo form_open_multipart('vacuna/eliminarbd');
                        ?>
                        <input type="hidden" name="idPacienteVacuna" value="<?php echo $row->idPacienteVacuna; ?>">
                        <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></button>
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