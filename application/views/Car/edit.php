<div class="content">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <form action="<?php echo base_url(); ?>Car/update" method="post">
        <input type="hidden" name="Id" class="form-control" value="<?php echo $car->Id; ?>">
        <div class="row">
          <div class="col-md-6 px-1">
            <div class="form-group">
              <label>Matricula del Auto</label>
              <input type="text" name="Plate" class="form-control"  value="<?php echo $car->Plate; ?>">
            </div>
          </div>
          <div class="col-md-6 pl-1">
            <div class="form-group">
              <label>Año del Auto</label>
              <input type="text" name="Year" class="form-control" value="<?php echo $car->Year; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 px-1">
            <div class="form-group">
              <label>Marca del Auto</label>
              <input type="text" name="Make" class="form-control" value="<?php echo $car->Make; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 px-1">
            <div class="form-group">
              <label>Modelo del Auto</label>
              <input type="text" name="Model" class="form-control"  value="<?php echo $car->Model; ?>">
            </div>
          </div>
          <div class="col-md-6 pl-1">
            <div class="form-group">
              <label>Color del Auto</label>
              <input type="text" name="Color" class="form-control" value="<?php echo $car->Color; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 px-1">
            <div class="form-group">
              <label>Notas sobre el Auto</label>
              <input type="text" name="Notes" class="form-control"  value="<?php echo $car->Notes; ?>">
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
