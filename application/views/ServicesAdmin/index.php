<div class="content">
  <div class="container">
    <div class="row justify-content-center m-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h6>Todos los Servicios </h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm">
                <thead>
                  <tr class="text-black-50">
                    <th>Folio</th>
                    <th>Nombre</th>
                    <th>Placa</th>
                    <th>Servicio</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($Services as $s): ?>
                    <tr>
                      <td><?php echo $s->Folio; ?></td>
                      <td><?php echo $s->Name; ?></td>
                      <td><?php echo $s->Plate; ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>ServicesAdmin/details/<?php echo $s->IdMantto; ?>" class="btn btn-sm btn-round btn-default btn-icon" title="Informacion"><i class="fas fa-wrench"></i> </a>
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
