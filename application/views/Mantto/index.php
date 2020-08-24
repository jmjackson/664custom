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
              <table class="table table-sm">
                <thead>
                  <tr>
                    <td>Folio</td>
                    <td>Nombre</td>
                    <td>Celular</td>
                    <td>Acción</td>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($mantto as $si): ?>
                    <tr>
                      <td><?php echo $si->Folio; ?></td>
                      <td><?php echo $si->Name; ?></td>
                      <td><?php echo $si->Cellphone; ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>Mantto/details/<?php echo $si->Id; ?>" class="btn btn-sm btn-round btn-outline-primary btn-icon"><i class="fas fa-eye"></i> </a>
                        <a href="<?php echo base_url(); ?>Mantto/edit/<?php echo $si->Id; ?>" class="btn btn-sm btn-round btn-outline-success btn-icon"><i class="fas fa-pencil-alt"></i> </a>
                        <a href="<?php echo base_url(); ?>Mantto/delete/<?php echo $si->Id; ?>" class="btn btn-sm btn-round btn-outline-danger btn-icon"><i class="fas fa-trash-alt"></i> </a>
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
