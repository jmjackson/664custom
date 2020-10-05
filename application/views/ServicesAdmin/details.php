<div class="content">
  <div class="container">
    <div class="row pb-3">
    </div>
    </button>
    <div class="row justify-content-center m-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5>Lista de Autos</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm">
                <thead>
                  <tr class="text-black-50">
                    <th>Servicios</th>
                    <th>Proveedor</th>
                    <th>$ Cliente</th>
                    <th>Precio Proveedor</th>
                    <th>Ganancia</th>
                    <th>Add</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($Service as $s): ?>
                    <tr>
                      <td><?php echo $s->ServiceName; ?></td>
                      <td><?php echo $s->SupplierName; ?></td>
                      <td><?php echo "$".number_format($s->Rate,2,'.',','); ?></td>
                      <td><?php echo "$".number_format($s->SupplierPrice,2,'.',','); ?></td>
                      <td><?php echo "$".number_format($s->Rate-$s->SupplierPrice,2,'.',','); ?></td>
                      <td><button type="button" class="btn btn-sm btn-icon btn-round btn-default"data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $s->mdId; ?>"><i class="fas fa-plus"></button></td>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Costo del Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>ManttoDetails/AddSPrice" method="post">
          <div class="form-group">
                       <div class="col-md-12">
                           <input type="hidden" value="" name="MDetailId" id="MDId" class="form-control" required readonly />
                       </div>
                   </div>
                  <div class="row">
                    <div class="col-md-10 pr-1">
                      <div class="form-group">
                        <label>Precio Proveedor</label>
                        <input type="text" class="form-control" placeholder="$0.00" value="" name="SupplierPrice">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-default btn-sm">Guardar</button>
                    </div>
                  </div>
                </form>
      </div>

    </div>
  </div>
</div>
