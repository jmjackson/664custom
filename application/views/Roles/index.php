<div class="content">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <a href="<?php echo base_url(); ?>Roles/create" class="btn btn-outline-primary btn-round">Crear Rol</a>
      <div class="card">
        <div class="card-header p-2 bg-default">
          <h5 class="m-0 text-center text-white">Roles</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Rol</th>
                  <th>Acción</th>
                </tr>
              </thead>
              <tbody>
              
                <?php foreach ($paquito as $r): ?>
                    <tr>
                      <td><?php echo $r->RolName; ?></td>
                      <td><a href="<?php echo base_url(); ?>Roles/details/<?php echo $r->Id; ?>" class="text-dark" title="Detalles"><i class="fas fa-eye"></i> </a> |
                        <a href="<?php echo base_url(); ?>Roles/edit/<?php echo $r->Id; ?>" class="text-warning" title="Editar"><i class="fas fa-pen-fancy"></i></a> |
                        <a href="<?php echo base_url(); ?>Roles/delete/<?php echo $r->Id; ?>" class="text-danger" title="Eliminar"><i class="fas fa-trash"></i></a>  </td>
                    </tr>
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
