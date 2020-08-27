<div class="content">
  <div class="row">
    <form class="form-inline" action="<?php echo base_url() ?>Roles/update" method="post">
      <div class="form-group">
        <label for="exampleInputName2" class="mr-3">Rol</label>
        <input type="hidden" name="Id" value="<?php echo $rol->Id ?>">
        <input type="text" name="RolName" class="form-control" value="<?php echo $rol->RolName; ?>" placeholder="">
      </div>
      <button type="submit" class="ml-2 btn btn-primary">Actualizar</button>
    </form>
  </div>
</div>
