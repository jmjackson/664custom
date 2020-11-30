<div class="content">
  <div class="container">
    <div class="row pb-3">
      <button type="button" name="button" class="btn btn-outline-default btn-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus"></i> Servicio
      </button>
    </div>
    <div class="row justify-content-center m-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h6 class="m-0 text-center">Lista de Servicios</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <td>Servicio</td>
                    <td>Detalles</td>
                    <td>Proveedor</td>
                    <td>Accion</td>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($services as $s): ?>
                    <tr>
                      <td><?php echo $s->Name; ?></td>
                      <td><?php echo $s->Description; ?></td>
                      <td><?php echo $s->Supplier; ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>Services/edit/<?php echo $s->Id; ?>" class="btn btn-sm btn-round btn-outline-success btn-icon"><i class="fas fa-pencil-alt"></i> </a>
                        <a href="<?php echo base_url(); ?>Services/delete/<?php echo $s->Id; ?>" class="btn btn-sm btn-round btn-outline-danger btn-icon"><i class="fas fa-trash-alt"></i> </a>
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
          <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Servicio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">
            <form action="<?php echo base_url(); ?>Services/create" method="post">
                  <div class="row">

                    <div class="col-md-12 col-sm-12 px-2">
                      <div class="form-group">
                        <label>Servicio</label>
                        <input type="text" name="Name" class="form-control" placeholder="Nombre de Servicio" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 px-2">
                      <div class="form-group">
                        <label>Proveedor</label>
                        <select class="form-control" name="SupplierId" required>
                          <option value="">Selecciona un proveedor</option>
                          <?php foreach ($suppliers as $s): ?>
                            <option value="<?php echo $s->Id; ?>"><?php echo $s->Name; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Descripción</label>
                        <textarea class="form-control textarea" name="Description">

                        </textarea>
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
