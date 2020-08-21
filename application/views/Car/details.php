<div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card card-user">
              <div class="image">
                <img src="<?php echo base_url(); ?>resources/images/antique.jpg" alt="..." class="image-fluid">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="<?php echo base_url(); ?>resources/images/usuario.png" alt="...">
                    <h5 class="title"><?php echo $user->FullName; ?></h5>
                  </a>
                  <p class="description">
                    <?php echo $user->Title; ?>
                  </p>
                </div>
                <p class="description text-center">
                  <b><?php echo $user->Email; ?></b>
                </p>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                      <h5>12<br><small>Files</small></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <h5>2GB<br><small>Used</small></h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                      <h5>24,6$<br><small>Spent</small></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
