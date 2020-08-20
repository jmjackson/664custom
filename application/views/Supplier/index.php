<div class="content">
  <div class="row">
    <div class="container col-md-12 mb-3">
      <button type="button" name="button" class="btn btn-outline-default btn-sm" data-toggle="modal" data-target="#SupplierModal">
        <i class="fa fa-plus"></i>
        Proveedor
      </button>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-center"> Lista de Proveedores</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class=" text-default">
                <tr>
                  <th>Nombre</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Accion</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($suppliers as $su): ?>
                  <tr>
                    <td><?php echo $su->Name; ?></td>
                    <td><?php echo $su->Phone; ?></td>
                    <td><?php echo $su->Email; ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>Supplier/edit/<?php echo $su->Id; ?>" class="btn btn-sm btn-outline-success btn-round btn-icon">
                        <i class="fas fa-pen-fancy"></i>
                      </a>
                      <a href="<?php echo base_url(); ?>Supplier/delete/<?php echo $su->Id; ?>" class="btn btn-sm btn-outline-danger btn-round btn-icon">
                        <i class="fas fa-trash-alt"></i>
                      </a>

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

<div class="modal fade" id="SupplierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>Supplier/add" method="post">
        <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="Name" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" name="Phone" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pr-2">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="Email" class="form-control" placeholder="Company" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pr-2">
                      <div class="form-group">
                        <label>Nota</label>
                        <textarea name="Nota" rows="8" cols="80" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Guardar</button>
                    </div>
                  </div>
        </div>
      </div>
      </form>

  </div>
</div>
