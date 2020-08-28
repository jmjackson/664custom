<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row justify-content-around">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header bg-dark">
                  <h6 class="text-center text-white"><i class="fas fa-info-circle"></i> Información del Auto</h6>
                </div>
                <div class="card-body">
                  <table class="table-sm table-borderless">
                    <tr>
                      <td><b>Fecha</b></td>
                      <td><?php echo date('d-m-Y'); ?></td>
                      <td><b>Folio</b></td>
                      <td><?php echo $Car->Folio ; ?></td>
                    </tr>
                      <tr>
                        <td><b>Matricula</b></td>
                        <td><?php echo $Car->Plate; ?></td>
                        <td><b>Año</b></td>
                        <td><?php echo $Car->Year; ?></td>
                      </tr>
                      <tr>
                        <td><b>Fabricante</b></td>
                        <td><?php echo $Car->Make; ?></td>
                        <td><b>Modelo</b></td>
                        <td><?php echo $Car->Model; ?></td>
                      </tr>
                      <tr>
                        <td><b>Color</b> </td>
                        <td colspan="3"><?php echo $Car->Color; ?></td>
                      </tr>
                      <tr>
                        <td><b>Notas</b> </td>
                        <td colspan="3"><?php echo $Car->Notes; ?></td>
                      </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <h5>Servicios</h5>
            <table class="table table-sm">
              <tr>
                <td>Servicio</td>
                <td>Nombre</td>
                <td>Hohras</td>
                <td>Precio</td>
                <td>Total</td>
              </tr>
            </table>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
</div>
