<div class="content">
  <div class="row">
    <div class="col-md-12" id="printDiv" >
      <div class="card">
        <div class="row justify-content-center">
          <img src="<?php echo base_url(); ?>resources/images/logox.png" alt="" width="120">
        </div>
        <div class="card-header mt-3">
          <div class="row justify-content-around">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header bg-default">
                  <h6 class="text-center text-white">Info Recibo</h6>
                </div>
                <div class="card-body">
                  <table class="table-sm table-borderless">
                    <tr>
                      <td> <b>Folio</b> </td>
                      <td><?php echo $mantto->Folio; ?></td>
                      <td> <b>Fecha</b> </td>
                      <td><?php echo $mantto->DateMantto; ?></td>
                    </tr>
                    <tr>
                      <td> <b>Nombre</b> </td>
                      <td> <?php echo $mantto->Name; ?> </td>
                      <td> <b>Email</b> </td>
                      <td><?php echo $mantto->Email; ?></td>
                    </tr>
                    <tr>
                      <td> <b>Dirrecion</b> </td>
                      <td colspan="3"> <?php echo $mantto->Address ?> </td>
                    </tr>
                    <tr>
                      <td> <b>Telefono</b> </td>
                      <td> <?php echo $mantto->Telefono ?></td>
                      <td> <b>Celular</b> </td>
                      <td><?php echo $mantto->Cellphone ?></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header bg-default">
                  <h6 class="text-white text-center">Info Autos</h6>
                </div>
                <div class="card-body">
                  <table class="table-sm table-borderless">
                    <tr>
                      <td> <b>Placa</b> </td>
                      <td><?php echo $mantto->Plate; ?></td>
                      <td> <b>Fabricante</b> </td>
                      <td><?php echo $mantto->Make; ?></td>
                    </tr>
                    <tr>
                      <td> <b>Modelo</b> </td>
                      <td><?php echo $mantto->Model; ?></td>
                      <td> <b>Color</b> </td>
                      <td><?php echo $mantto->Color; ?></td>
                    </tr>
                    <tr>
                      <td colspan="2"> <b>Año</b> </td>
                      <td><?php echo $mantto->Year; ?></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td colspan="2"> <b>Nota</b> </td>
                      <td><?php echo $mantto->Notes; ?></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <h5>Detalles De Servicios</h5>
            <table class="table table-sm ">
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

              </tr></thead>
              <tbody>

                <?php $ct=0; foreach ($MD as $m): ?>
                  <tr>
                    <td><?php echo $m->Name; ?></td>
                    <td><?php echo $m->Supplier; ?></td>
                    <td><?php echo '$'.$m->Rate; ?></td>
                   </tr>
                <?php $ct+=$m->Rate; endforeach; ?>
                <tr>
                  <td colspan="2" class="text-right">Total</td>
                  <td><?php echo '$'.number_format($ct,2,'.',','); ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row justify-content-center">
          <button   class="btn btn-default btn-sm d-print-none" id="doPrint">Imprimir</button>
        </div>
      </div>
    </div>
  </div>
</div>
