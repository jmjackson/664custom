<div class="content">
  <div class="container">
    </div>
          </div>
          <div class="card-body">
                    <div class="" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar Auto - Folio No <?php echo $fila->Folio; ?></h5>
                          </button>
                        </div>
                          <div class="modal-body">
                            <form action="<?php echo base_url(); ?>Car/addcar" method="post">
                              <div class="row">
                                <div class="col-md-6 pr-2">
                                  <div class="form-group">
                                    <input type="hidden" name="ManttoId" class="form-control" placeholder="" value="<?php echo $manttoid ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6 pr-1">
                                  <div class="form-group">
                                    <label>Placa</label>
                                    <input type="text" name="Plate" class="form-control" placeholder="" value="" required>
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
                                    <label>Descripción</label>
                                    <textarea class="form-control textarea" name="Notes">
                                    </textarea>
                                  </div>
                                </div>
                              </div>
                                  <div class="row justify-content-center">
                                    <div class="update md-auto md-auto">
                                      <button type="submit" class="btn btn-outline-secondary btn-round"> <i class="fas fa-arrow-right"></i> Continuar</button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
