<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="form-horizontal px-3">
        <form action="<?php echo base_url(); ?>Mantto/update" method="post">
        <input type="hidden" name="Id" class="form-control" value="<?php echo $mantto->Id; ?>">
          <div class="row justify-content-around">
            <div class="col-md-5 col-sm-12 border m-1">
              <h5 class="text-center m-0">Datos Cliente</h5>
              <div class="row">
                <div class="col-md-6 col-md-12">
                  <div class="row">
                    <div class="col-md-6 px-3">
                      <div class="form-group">
                        <label>Folio</label>
                          <input type="text" name="Folio" class="form-control" value="<?php echo $mantto->Folio; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Fecha</label>
                          <input type="text" name="DateMantto" class="form-control" value="<?php echo date('d-m-y'); ?>" readonly>
                      </div>
                    </div>
                  </div>

                    <div class="form-group">
                      <label>Auto</label>
                      <input type="text" name="Auto" class="form-control" placeholder="" value="<?php echo $mantto->Auto; ?>" required>
                    </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="email" name="Email" class="form-control" placeholder="" value="<?php echo $mantto->Email; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" name="Address" class="form-control" placeholder="" value="<?php echo $mantto->Address;?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="Name" class="form-control" placeholder="" value="<?php echo $mantto->Name; ?>" required>
                  </div>
                </div>

              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Celular</label>
                    <input type="text" name="Cellphone" class="form-control input-element" placeholder="" value="<?php echo $mantto->Cellphone; ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-sm-12 border m-1">
              <h5 class="text-center m-0">Datos del Auto</h5>
              <input type="hidden" name="CarId" value="<?php echo $mantto->carId ?>">
              <div class="row">
                <div class="col-md-12 pr-1">
                  <div class="form-group">
                    <label>Placa</label>
                    <input type="text" name="Plate" class="form-control" placeholder="" value="<?php echo $mantto->Plate; ?>" required>
                  </div>
                </div>

              </div>
              <div class="row">

                <div class="col-md-12 pr-1">
                  <div class="form-group">
                    <label>Color</label>
                    <input type="text" name="Color" class="form-control" placeholder="" value="<?php echo $mantto->Color; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pr-1">
                  <div class="form-group">
                    <label>Año</label>
                    <input type="text" name="Year" class="form-control input-date" placeholder="" value="<?php echo $mantto->Year; ?>" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Notas</label>
                    <textarea class="form-control textarea" name="Notes" value="" ><?php echo $mantto->Notes; ?></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-outline-secondary btn-round">
                    <i class="fas fa-plus"></i> Actualizar</button>
                </div>
              </div>
      </div>
    </div>



  </div>
</div>
