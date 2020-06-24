<?php ob_start(); ?>


        <div class="auth-container">
          <h2>Nous Contacter</h2>

          <form method="post" action="index.php?action=contact" class="custom-form">

            <div class="form-group">
              <label for="email">Your name</label>
              <input type="text" name="name" value="" id="name" class="form-control" />
            </div>

            <div class="form-group">
              <label for="password">Your email</label>
              <input type="email" name="email" id="email" class="form-control" />
            </div>

            <div class="form-group">
              <label for="comment">Message</label>
              <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>

            <div class="form-group">
            <div class="justify-content-center d-flex">
                
                  <button type="submit" class="btn bg-red">Send</button>
                
                </div>
                </div>
            <div class="form-group">
              <div class="row">
              <div class="justify-content-center d-flex">
                  <button type="submit" class="btn bg-red">Send</button>
                </div>
              <div class="col-md-6">
              </div>
          </div>

            <span class="error-msg">
              <?= isset( $error_msg ) ? $error_msg : null; ?>
            </span>
          </form>
  </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require( 'dashboard.php'); ?>