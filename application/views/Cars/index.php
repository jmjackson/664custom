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
                  <tr>
                    <td>Folio</td>
                    <td>Matricula</td>
                    <td>Marca</td>
                    <td>Color</td>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($Car as $s): ?>
                    <tr>
                      <td><?php echo $s->Plate; ?></td>
                      <td><?php echo $s->Make; ?></td>
                      <td><?php echo $s->Color; ?></td>
                      <td><?php echo $s->ManttoId; ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>Car/edit/<?php echo $s->Id; ?>" class="btn btn-sm btn-round btn-outline-success btn-icon"><i class="fas fa-pencil-alt"></i> </a>
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
