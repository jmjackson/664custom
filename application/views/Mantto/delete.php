<div class="content">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-header">
        <h6 class="text-center m-0">Recibos Info</h6>
      </div>
      <div class="card-body">
        <table class="table table-sm">
          <tr>
            <td>Folio</td>
            <td><?php echo $mantto->Folio; ?></td>
          </tr>
          <tr>
            <td>Nombre</td>
            <td><?php echo $mantto->Name; ?></td>
          </tr>
          <tr>
            <td>Celular</td>
            <td><?php echo $mantto->Cellphone; ?></td>
          </tr>
        </table>
      </div>
      <div class="row justify-content-center">
        <a href="<?php echo base_url(); ?>Mantto" class="btn btn-round btn-outline-default"><i class="fas fa-stop"></i> Cancelar</a>
        <a href="<?php echo base_url(); ?>Mantto/deletep/<?php echo $mantto->Id; ?>" class="btn btn-round btn-outline-danger"><i class="fas fa-trash"></i> Eliminar</a>
      </div>
    </div>
  </div>
</div>
