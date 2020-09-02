<div class="content">
  <div class="container">
    <div class="row pb-3">
    </div>
    </button>
    <div class="row justify-content-center m-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h6 class="m-0 text-center">Lista de Autos</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm">
                <thead>
                  <tr class="text-black-50">
                    <th>Folio</th>
                    <th>Matricula</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($Car as $c): ?>
                    <tr>
                      <td><?php echo $c->ManttoId; ?></td>
                      <td><?php echo $c->Plate; ?></td> 
                      <td><?php echo $c->Make; ?></td>
                      <td><?php echo $c->Color; ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>Car/details/<?php echo $c->Id; ?>" class="btn btn-sm btn-round btn-outline-success btn-icon"><i class="fa fa-eye"></i> </a>
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
