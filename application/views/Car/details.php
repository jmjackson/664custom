<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row justify-content-around">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header bg-dark">
                  <h6 class="text-center text-white">Informacion del Auto</h6>
                </div>
                <div class="card-body">
                  <table class="table-sm table-borderless">
                    <tr>
                      <td>Fecha</td>
                      <td><?php echo date('d-m-Y'); ?></td>
                      <td>Folio</td>
                      <td><?php echo $Mantto->Folio ; ?></td>
                    </tr>
                    <?php foreach ($Car as $c): ?>
                      <tr>
                        <td><b>Matricula</b></td>
                        <td><?php echo $c->Plate; ?></td>
                        <td><b>Año</b></td>
                        <td><?php echo $c->Year; ?></td>
                      </tr>
                      <tr>
                        <td><b>Fabricante</b></td>
                        <td><?php echo $c->Make; ?></td>
                        <td><b>Modelo</b></td>
                        <td><?php echo $c->Model; ?></td>
                      </tr>
                      <tr>
                        <td><b>Color</b> </td>
                        <td colspan="3"><?php echo $c->Color; ?></td>
                      </tr>
                      <tr>
                        <td><b>Notas</b> </td>
                        <td colspan="3"><?php echo $c->Notes; ?>baicfbasigfiuasfujasufhbkasjhfkjashkfjhas</td>
                      </tr>
                    <?php endforeach; ?>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header bg-dark">
                  <h6 class="text-white text-center">Info Recibo</h6>
                </div>
                <div class="card-body-">
                  <table class="table-sm table-borderless">
                    <tr>
                      <td>Modelo</td>
                      <td>xgfxfvccxbgxc</td>
                      <td>Año</td>
                      <td>cvbcxbx</td>
                    </tr>
                    <tr>
                      <td>Make</td>
                      <td>cvbxbxcvb</td>
                      <td>Model</td>
                      <td>cvxbcxbxv</td>
                    </tr>
                    <tr>
                      <td>Plate</td>
                      <td>cxvbxxc</td>
                      <td></td>
                      <td></td>
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
          <h5>Costos Totales</h5>
          <p>Total De el Mantenimiento</p>
          <p>IVA</p>

        </div>
      </div>
    </div>
  </div>
</div>
