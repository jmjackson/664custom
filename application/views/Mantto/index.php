<div class="content">
  <div class="container">
    <div class="row pb-3">
      <a href="<?php echo base_url(); ?>Mantto/create" class="btn btn-outline-default btn-sm m-3">
        <i class="fas fa-plus"></i>
        Nuevo recibo
      </a>
    </div>
    <div class="row justify-content-center m-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h6 class="m-0 text-center">Lista de Recibos</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm" id="myTable">
                <thead>
                  <tr class="text-black-50">
                    <th>Folio</th>
                    <th>Fecha</th>
                    <th>Auto</th>
                    <th>Celular</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($mantto as $si): ?>
                    <tr>
                      <td><?php echo $si->Folio; ?></td>
                      <td><?php echo  date('m-d-Y',strtotime($si->DateMantto)) ?></td>
                      <td><?php echo $si->Auto; ?></td>
                      <td><?php echo $si->Cellphone; ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>Mantto/details/<?php echo $si->Id; ?>" class="btn btn-sm btn-round btn-outline-default btn-icon" title="Informacion"><i class="fas fa-eye"></i> </a>
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
