<div class="content">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">
          <h5>Detalles de pago del recibo <?php echo $mantto->Folio; ?> </h5>
        </div>
        <div class="card-body">
          <table class="table">
            <tr>
              <td><b>Auto </b>:</td>
              <td><?php echo $mantto->Auto; ?></td>
              <td><b>Nombre </b>: </td>
              <td><?php echo $mantto->Name; ?></td>
              <td><b>Telefono</b>: </td>
              <td><?php echo $mantto->Cellphone; ?></td>
            </tr>
            <tr>
              <td><b>Color </b>: </td>
              <td><?php echo $mantto->Color; ?></td>
              <td><b>Placa </b>: </td>
              <td><?php echo $mantto->Plate; ?></td>
              <td><b>Año </b>: </td>
              <td><?php echo $mantto->Year; ?></td>
            </tr>
          </table>
          <hr>
          <table class="table">
            <tr>
              <th colspan="3" class="text-center">Servicios</th>
            </tr>
            <tr>
              <th>Servicio</th>
              <th>Costo</th>
              <th>Deposito</th>
              <th>Pagado</th>
            </tr>
            <?php foreach ($MD as $m): ?>
              <tr>
                <td><?php echo $m->Services; ?></td>
                <td><?php echo $m->Costo; ?></td>
                <td><?php echo $m->Deposito; ?></td>
                <td><?php echo $m->Pagado; ?></td>
              </tr>

            <?php endforeach; ?>
          </table>
          <hr>
          <table class="table">
            <tr>
              <th colspan="3" class="text-center">Abonos</th>
            </tr>
            <tr>
              <th>Servicio</th>
              <th>Abono</th>
              <th>Nota</th>
            </tr>
            <?php foreach ($Abonos as $a): ?>
              <tr>
                  <td><?php echo $a->Services; ?></td>
                  <td><?php echo $a->CostoAbono; ?></td>
                  <td><?php echo $a->Nota; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
          <div class="row justify-content-center">
              <a href="<?php echo base_url(); ?>Mantto/details/<?php echo $mantto->Id; ?>" class="btn btn-default">Regresar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
