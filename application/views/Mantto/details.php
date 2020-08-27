<div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card card-user">
                <div class="image">
                  <img src="<?php echo base_url(); ?>resources/images/antique.jpg"  alt="..." class="image-fluid">
                </div>
                <div class="card-body">
                  <div class="author">
                    <a href="#">
                      <img class="avatar border-gray" src="<?php echo base_url(); ?>resources/images/logox.png" alt="...">
                      <h5 class="title">Folio<br><?php echo $mantto->Folio; ?></h5>
                    </a>
                    <!-- <p class="description">
                      <?php echo $mantto->Name; ?>
                    </p>
                  </div>
                  <p class="description text-center">
                    <b><?php echo $mantto->Email; ?></b>
                  </p> -->
                </div>
                <div class="card-footer">
                  <hr>
                  <div class="button-container">
                    <div class="row">
                      <div class="col-lg-3 col-md-6 col-6 ml-auto">
                        <h5><small>Nombre</small><br><?php echo $mantto->Name; ?> </h5>
                      </div>
                      <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                        <h5><small>Celular</small><br><?php echo $mantto->Cellphone; ?> </h5>
                      </div>
                      <div class="col-lg-3 mr-auto">
                        <h5><small>Otros datos</small> <br> 24,6$</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
