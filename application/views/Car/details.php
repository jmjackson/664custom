<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="form-horizontal px-3">
        <form action="<?php echo base_url(); ?>Car/details" method="post">
          <div class="row justify-content-around">
            <div class="col-md-5 col-sm-12 border m-1">
              <h5 class="text-center m-0">Datos Cliente</h5>
              <div class="row">
                <div class="col-md-6 col-md-12">
                  <div class="row">
                    <div class="col-md-6 px-3">
                      <div class="form-group">
                        <label>ID</label>
                          <input type="text" name="Id" class="form-control"  value="<?php echo $car->Id; ?>"readonly>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Placa</label>
                          <input type="text" name="Plate" class="form-control" value="<?php echo $car->Plate; ?>" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 px-3">
                      <div class="form-group">
                        <label>Año</label>
                          <input type="text" name="Year" class="form-control"  value="<?php echo $car->Year; ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Fabricante</label>
                          <input type="text" name="Make" class="form-control" value="<?php echo $car->Make; ?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Modelo</label>
                    <input type="text" name="Model" class="form-control" placeholder="" value="<?php echo $car->Model; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Color</label>
                    <input type="text" name="Color" class="form-control" placeholder="" value="<?php echo $car->Color; ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Codigo Postal</label>
                    <input type="text" name="Zip" class="form-control" placeholder="" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" name="Telefono" class="form-control" placeholder="" value="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Celular</label>
                    <input type="text" name="Cellphone" class="form-control" placeholder="" value="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-sm-12 border m-1">
              <h5 class="text-center m-0">Datos de Servicio</h5>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>ID</label>
                    <input type="text" name="ID" class="form-control" placeholder="" value="<?php echo $service->Id; ?>" required>
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Fabricante</label>
                    <input type="text" name="Make" class="form-control" placeholder="" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Modelo</label>
                    <input type="text" name="Model" class="form-control" placeholder="" value="" >
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Color</label>
                    <input type="text" name="Color" class="form-control" placeholder="" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Año</label>
                    <input type="text" name="Year" class="form-control" placeholder="" value="" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Notas</label>
                    <textarea class="form-control textarea" name="Notes"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-outline-secondary btn-round">
                    <i class="fas fa-plus"></i> Siguiente</button>
                </div>
              </div>
      </div>
    </div>



  </div>
</div>
