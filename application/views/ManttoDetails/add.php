<div class="content">
  <div class="row">
    <div class="col-md-12">
            <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#mDetailsModal"><i class="fas fa-plus"></i> Nuevo Servicio</a>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"> Lista de Servicios</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-sm table-hover">
                        <thead class=" text-black-50">
                          <tr>
                          <th>
                            Servicio
                          </th>
                          <th>
                            Desarrollo
                          </th>
                          <th>
                            Costo
                          </th>
                          <th>
                            Total
                          </th>
                          <th>
                            Action
                          </th>
                        </tr></thead>
                        <tbody>
                          <?php foreach ($MD as $m): ?>
                            <tr>
                              <td><?php echo $m->Name; ?></td>
                              <td><?php echo $m->Supplier; ?></td>
                              <td><?php echo $m->Rate; ?></td>
                              <td><?php echo $m->Total; ?></td>
                              <td>
                                <form class="" action="<?php echo base_url(); ?>ManttoDetails/Delete" method="post">
                                  <input type="hidden" name="ManttoId" value="<?php echo $Mantto->Id; ?>">
                                  <input type="hidden" name="Id" value="<?php echo $m->Id?>">
                                  <button type="submit" name="button" class="btn btn-icon btn-sm btn-round"><i class="fas fa-trash"></i> </button>
                                </form>
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
<div class="row col-md-12 justify-content-center">
  <a href="<?php echo base_url(); ?>ManttoDetails/finish/<?php echo $Mantto->Id; ?>" class="btn btn-sm btn-outline-success">Finalizar</a>
</div>
<!-- Modal -->
<div class="modal fade" id="mDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card card-user">
              <div class="card-body">
                <form action="<?php echo base_url(); ?>ManttoDetails/addMantto" method="post">
                  <div class="row">
                    <div class="col-md-12 pr-1">
                      <input type="hidden" name="ManttoId" value="<?php echo $Mantto->Id; ?>">
                      <div class="form-group">
                        <label>Servicio</label>
                        <select class="form-control" name="ServiceId" required>
                          <option value="">Elige un Servicio</option>
                          <?php foreach ($services as $s): ?>
                            <option value="<?php echo $s->Id; ?>"><?php echo $s->Name.' - '.$s->Supplier; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pr-1">
                      <div class="form-group">
                        <label>Costo</label>
                        <input type="text" name="Rate" class="form-control"   value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <input type="submit" name="submit" value="Agregar Servicio" class="btn btn-primary btn-round">
                    </div>
                  </div>
                </form>
              </div>
            </div>
      </div>
    </div>
  </div>
</div>
