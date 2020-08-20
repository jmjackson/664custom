<div class="content">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <form action="<?php echo base_url(); ?>Mantto/update" method="post">
        <input type="hidden" name="Id" class="form-control" value="<?php echo $mantto->Id; ?>">
        <div class="row">
          <div class="col-md-6 px-1">
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" name="Name" class="form-control"  value="<?php echo $mantto->Name; ?>">
            </div>
          </div>
          <div class="col-md-6 pl-1">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="Email" class="form-control" value="<?php echo $mantto->Email; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 px-1">
            <div class="form-group">
              <label>Dirrecion</label>
              <input type="text" name="Address" class="form-control" value="<?php echo $mantto->Address; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 px-1">
            <div class="form-group">
              <label>Ciudad</label>
              <input type="text" name="City" class="form-control"  value="<?php echo $mantto->City; ?>">
            </div>
          </div>
          <div class="col-md-6 pl-1">
            <div class="form-group">
              <label>Codigo Postal</label>
              <input type="text" name="Zip" class="form-control" value="<?php echo $mantto->Zip; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 px-1">
            <div class="form-group">
              <label>Telefono</label>
              <input type="text" name="Telefono" class="form-control"  value="<?php echo $mantto->Telefono; ?>">
            </div>
          </div>
          <div class="col-md-6 pl-1">
            <div class="form-group">
              <label>Celular</label>
              <input type="text" name="Cellphone" class="form-control" value="<?php echo $mantto->Cellphone; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="update ml-auto mr-auto">
            <button type="submit" class="btn btn-primary btn-round">Actualizar</button>
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
