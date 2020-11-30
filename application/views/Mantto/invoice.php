<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style media="screen">
    body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      font-size: 10pt;
    }
      div>img{
        margin-left: 45%;
      }
      .left{
        float:left;
      }
      .right{
        float:right;
      }
      .rowhead{
        width: 100%;
        height: 200px;
      }
      .row{
        width: 100%;
        height: auto;
      }
      .table{
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 48%;
      }

      .detail{
        width: 100%;
      }
      .text-center{
        text-align: center;
      }

      .headd{
        background-color: #66615B;
        height: 22px;
        color:white;
      }
      #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
    </style>
  </head>
  <body>
    <div class="">
      <img src="<?php echo base_url(); ?>resources/images/logox.png" alt="" width="130" height="110">
    </div>
    <div class="rowhead">
      <div class="left">
        <table class="table">
          <tr>
            <td colspan="4" class="text-center headd ">Información Recibo </td>
          </tr>
          <tr>
            <td>Folio</td>
            <td><?php echo $mantto->Folio; ?></td>
            <td>Fecha</td>
            <td><?php echo $mantto->DateMantto; ?></td>
          </tr>
          <tr>
            <td>Nombre</td>
            <td colspan="3"><?php echo $mantto->Name; ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td colspan="3"><?php echo $mantto->Email; ?></td>
          </tr>
          <tr>
            <td>Dirección</td>
            <td colspan="3"><?php echo $mantto->Address; ?></td>
          </tr>
          <tr>
            <td>Celular</td>
            <td colspan="3"><?php echo $mantto->Cellphone; ?></td>
          </tr>
        </table>
      </div>
      <div class="right">
        <table class="table">
          <tr>
            <td colspan="4" class="text-center headd">Información Auto</td>
          </tr>
          <tr>
            <td>Auto</td>
            <td><?php echo $mantto->Auto; ?></td>
            <td>Placa</td>
            <td><?php echo $mantto->Plate; ?></td>
          </tr>
          <tr>
            <td colspan="2">Color</td>
            <td colspan="2"><?php echo $mantto->Color; ?></td>
          </tr>
          <tr>
            <td colspan="2">Año</td>
            <td colspan="2"><?php echo $mantto->Year; ?></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="detail">
      <table id="customers">
        <tr>
          <td colspan="2">Detalles de Servicios</td>
        </tr>
        <tr>
          <td><b>Servicio</b></td>
          <td><b>Precio</b></td>
        </tr>
        <?php $total=0; foreach ($MD as $m): ?>
          <tr>
            <td><?php echo $m->Services; ?></td>
            <td><?php echo '$'.number_format($m->Costo,2,'.',','); ?></td>
          </tr>
        <?php $total+=$m->Costo; endforeach; ?>
        <tr>
          <td>Total</td>
          <td><?php echo '$'.number_format($total,2,'.',','); ?></td>
        </tr>
      </table>
    </div>
  </body>
</html>
