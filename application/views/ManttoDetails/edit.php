<div class="content">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-default">
          <h6 class="text-white">Actualizar Servicios</h5>
        </div>
        <div class="card-body">
          <form class="" action="<?php echo base_url() ?>ManttoDetails/update" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nombre Servicio</label>
                        <input type="text" class="form-control" name="Service" value="<?php echo $MD->Services; ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Costo</label>
                        <input type="text" class="form-control"  name="Costo" value="<?php echo $MD->Costo; ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Deposito</label>
                        <input type="text" class="form-control" name="Deposito" value="<?php echo $MD->Deposito; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nombre del Proveedor</label>
                        <input type="text" class="form-control" name="Proveedor" value="<?php echo $MD->Proveedor; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Costo del Proveedor</label>
                        <input type="text" class="form-control" name="CostoProveedor"  value="<?php echo $MD->CostoProveedor ?>">
                      </div>
                    </div>

                  </div>
                  <input type="hidden" name="ManttoId" value="<?php echo $MD->ManttoId; ?>">
                  <input type="hidden" name="Id" value="<?php echo $MD->Id; ?>">
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-default btn-round">Actualizar</button>
                      <a href="<?php echo base_url(); ?>Mantto/details/<?php echo $MD->ManttoId; ?>" class="btn btn-danger btn-round"> Cancelar</a>
                    </div>
                  </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
