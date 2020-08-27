<div class="content">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header py-2 bg-default">
          <h6 class="m-0 text-center text-white">Crear Roles</h6>
        </div>
        <div class="card-body">
          <form class="" action="<?php echo base_url(); ?>Roles/addrol" method="post">

              <fieldset class="form-group">
                <label for="formGroupExampleInput">Rol</label>
                <input type="text" name="RolName" class="form-control" placeholder="Nombre Rol" value="">
              </fieldset>
              <row class="form-group d-flex justify-content-center">
                <button type="submit" name="button" class="btn btn-round btn-outline-default">Enviar</button>
              </row>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
