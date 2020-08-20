<div class="content">
  <div class="container">
    <div class="row pb-3">
      <button type="button" name="button" class="btn btn-outline-default btn-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus"></i> Recibos
      </button>
    </div>
    <div class="row justify-content-center m-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h6 class="m-0 text-center">Lista de Recibos</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <td>Folio</td>
                    <td>Nombre</td>
                    <td>Celular</td>
                    <td>Accion</td>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($mantto as $si): ?>
                    <tr>
                      <td><?php echo $si->Folio; ?></td>
                      <td><?php echo $si->Name; ?></td>
                      <td><?php echo $si->Cellphone; ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>Mantto/visualize/<?php echo $si->Id; ?>" class="btn btn-sm btn-round btn-outline-primary btn-icon"><i class="fas fa-eye"></i> </a>
                        <a href="<?php echo base_url(); ?>Mantto/edit/<?php echo $si->Id; ?>" class="btn btn-sm btn-round btn-outline-success btn-icon"><i class="fas fa-pencil-alt"></i> </a>
                        <a href="<?php echo base_url(); ?>Mantto/delete/<?php echo $si->Id; ?>" class="btn btn-sm btn-round btn-outline-danger btn-icon"><i class="fas fa-trash-alt"></i> </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>



  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Recibo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">
            <form action="<?php echo base_url(); ?>Mantto/create" method="post">
              <div class="row">
                <div class="col-md-12 pr-2">
                  <div class="form-group">
                    <label>Folio</label>
                    <input type="text" name="Folio" class="form-control" placeholder="" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="Name" class="form-control" placeholder="" value="" required>
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="email" name="Email" class="form-control" placeholder="" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pr-2">
                  <div class="form-group">
                    <label>Dirrecion</label>
                    <input type="text" name="Address" class="form-control" placeholder="" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Ciudad</label>
                    <input type="text" name="City" class="form-control" placeholder="" value="">
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Codigo Postal</label>
                    <input type="text" name="Zip" class="form-control" placeholder="" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" name="Telefono" class="form-control" placeholder="" value="">
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Celular</label>
                    <input type="text" name="Cellphone" class="form-control" placeholder="" value="">
                  </div>
                </div>
              </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-outline-secondary btn-round"> <i class="fas fa-plus"></i> Guardar</button>
                    </div>
                  </div>
          </div>
        </form>

      </div>
    </div>
  </div>
