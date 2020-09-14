<div class="content">
  <div class="container">
    <div class="row pb-3">
    </div>
    </button>
    <div class="row justify-content-center m-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5>Lista de Autos</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm">
                <thead>
                  <tr class="text-black-50">
                    <th>Servicios</th>
                    <th>Horas</th>
                    <th>Proveedor</th>
                    <th>$ Cliente</th>
                    <th>Precio Proveedor</th>
                    <th>Ganancia</th>
                    <th>Add</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($Service as $s): ?>
                    <tr>
                      <td><?php echo $s->ServiceName; ?></td>
                      <td><?php echo $s->Hours; ?></td>
                      <td><?php echo $s->SupplierName; ?></td>
                      <td><?php echo "$".number_format($s->Total,2,'.',','); ?></td>
                      <td><?php; ?></td>
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
