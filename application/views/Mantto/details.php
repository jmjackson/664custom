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
                  <h6 class="text-white text-center">Información Autos</h6>
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
          <div class="row">
            <div class="update ml-auto mr-auto">
              <a href="<?php echo base_url(); ?>Mantto/edit/<?php echo $mantto->Id; ?>" class="btn btn-sm btn-round btn-outline-success btn-icon" title="Editar"><i class="fas fa-pencil-alt"></i> </a>
              <a href="<?php echo base_url(); ?>Mantto/delete/<?php echo $mantto->Id; ?>" class="btn btn-sm btn-round btn-outline-danger btn-icon" title="Eliminar"><i class="fas fa-trash-alt"></i> </a>
              <a href="<?php echo base_url(); ?>Mantto/invoice/<?php echo $mantto->Id ?>" class="btn btn-sm btn-round btn-outline-default btn-icon" title="Recibo"> <i class="fas fa-file-alt"></i> </a>
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
                <th>
                  Total
                </th>
              </tr></thead>
              <tbody>

                <?php foreach ($MD as $m): ?>
                  <tr>
                    <td><?php echo $m->Name; ?></td>
                    <td><?php echo $m->Supplier; ?></td>
                    <td><?php echo $m->Rate; ?></td>
                    <td><?php echo $m->Total; ?></td>
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
