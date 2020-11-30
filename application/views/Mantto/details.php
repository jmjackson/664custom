<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row justify-content-around">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header bg-default">
                  <h6 class="text-center text-white">Información Recibo</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table-sm table-borderless">
                      <tr>
                        <td> <b>Folio</b> </td>
                        <td><?php echo $mantto->Folio; ?></td>
                        <td> <b>Fecha</b> </td>
                        <td><?php echo  date('m-d-Y',strtotime($mantto->DateMantto)) ; ?></td>
                      </tr>
                      <tr>
                        <td> <b>Nombre</b> </td>
                        <td> <?php echo $mantto->Name; ?> </td>
                        <td> <b>Email</b> </td>
                        <td><?php echo $mantto->Email; ?></td>
                      </tr>
                      <tr>
                        <td> <b>Dirección</b> </td>
                        <td colspan="3"> <?php echo $mantto->Address ?> </td>
                      </tr>
                      <tr>
                        <td> <b>Celular</b> </td>
                        <td><?php echo $mantto->Cellphone ?></td>
                      </tr>
                    </table>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header bg-default">
                  <h6 class="text-white text-center">Información Auto</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table-sm table-borderless">
                      <tr>
                        <td> <b>Placa</b> </td>
                        <td><?php echo $mantto->Plate; ?></td>
                      </tr>
                      <tr>
                        <td> <b>Color</b> </td>
                        <td><?php echo $mantto->Color; ?></td>
                      </tr>
                      <tr>
                        <td><b>Año</b> </td>
                        <td><?php echo $mantto->Year; ?></td>
                      </tr>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
              <a href="<?php echo base_url(); ?>Mantto/edit/<?php echo $mantto->Id; ?>" class="btn btn-sm btn-round btn-outline-success btn-icon ml-2" title="Editar"><i class="fas fa-pencil-alt"></i> </a>
              <a href="<?php echo base_url(); ?>Mantto/delete/<?php echo $mantto->Id; ?>" class="btn btn-sm btn-round btn-outline-danger btn-icon ml-2" title="Eliminar"><i class="fas fa-trash-alt"></i> </a>

          </div>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleServices">Servicio</a>
                <a href="<?php echo base_url() ?>Mantto/invoice/<?php echo $mantto->Id ?>" class="btn btn-default">Recibo</a>
                <a href="#"  class="btn btn-default" data-toggle="modal" data-target="#exampleAbono">Abono</a>
                <a href="<?php echo base_url(); ?>Mantto/InvoiceDetails/<?php echo $mantto->Id; ?>" class="btn btn-default">Detalle Pago</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <h5>Detalles De Servicios</h5>
          <div class="table-responsive">
            <table class="table table-sm ">
              <thead class=" text-black-50">
                <tr>
                  <th></th>
                  <th>Cobro</th>
                  <th>Servicio</th>
                  <th>Deposito</th>
                  <th>Proveedor</th>
                  <th>Ganancia</th>
                  <th>Pagado</th>
                  <th>Acción</th>
              </tr>
            </thead>
              <tbody>
                <?php $costo=0;$deposito=0; $costop=0;$ganancia=0; foreach ($MD as $m): ?>
                  <tr>
                    <td></td>
                    <td><?php echo '$'.number_format($m->Costo,'2','.',','); ?></td>
                    <td><?php echo $m->Services; ?></td>
                    <td><?php echo '$'.number_format($m->Deposito,'2','.',','); ?></td>
                    <td><?php echo '$'.number_format($m->CostoProveedor,'2','.',','); ?></td>
                    <td><?php echo '$'.number_format($m->Ganancia,'2','.',','); ?></td>
                    <td><?php echo '$'.number_format($m->Pagado,'2','.',','); ?></td>
                    <td>

                      <a href="<?php echo base_url(); ?>ManttoDetails/Edit/<?php echo $m->Id; ?>" class="btn btn-round btn-icon btn-sm btn-warning ml-1"><i class="fas fa-pen-alt"></i> </a>
                      <a href="<?php echo base_url(); ?>ManttoDetails/delete/<?php echo $m->Id; ?>" class="btn btn-round btn-icon btn-sm btn-danger"><i class="fas fa-trash"></i> </a>
                    </td>
                  </tr>

                <?php $costo+=$m->Costo; $deposito+=$m->Deposito;
                  $costop+=$m->CostoProveedor;
                  $ganancia+=$m->Ganancia;
                endforeach; ?>
                <tr class="font-weight-bold">
                  <td>Total</td>
                  <td><?php echo '$'.number_format($costo,'2','.',','); ?></td>
                  <td></td>
                  <td><?php echo '$'.number_format($deposito,'2','.',','); ?></td>
                  <td><?php echo '$'.number_format($costop,'2','.',','); ?></td>
                  <td><?php echo '$'.number_format($ganancia,'2','.',','); ?></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleServices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>ManttoDetails/Add" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nombre del Servicio</label>
                        <input type="hidden" name="ManttoId" value="<?php echo $mantto->Id; ?>">
                        <input type="text" name="Service" class="form-control"  value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Costo</label>
                        <input type="text" name="Costo" class="form-control" placeholder="$0.00" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Deposito</label>
                        <input type="text" name="Deposito" class="form-control" placeholder="$0.00" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nombre del Proveedor</label>
                        <input type="text" name="Proveedor" class="form-control" placeholder="Proveedor" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Costo Proveedor</label>
                        <input type="text" name="CostoProveedor" class="form-control" placeholder="$0.00" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Guardar</button>
                    </div>
                  </div>
                </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleAbono" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Abono</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>/ManttoDetails/Abono" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Servicio </label>
                        <input type="hidden" name="ManttoId" value="<?php echo $mantto->Id; ?>">
                        <select class="form-control select" name="ManttoDetailId">
                          <option value="">Seleccionar un Servicio</option>
                          <?php foreach ($MD as $m): ?>
                            <option value="<?php echo $m->Id ?>"><?php echo $m->Services; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Abono</label>
                        <input type="text" name="Abono" class="form-control" placeholder="$0.00" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
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
                </form>
      </div>
    </div>
  </div>
</div>
