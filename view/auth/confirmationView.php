
<div class="landscape">
  <div class="bg-black">
    <div class="row no-gutters">
      <div class="col-md-6 full-height bg-white">
        <div class="auth-container">
          <h2><span>Cod</span>'Flix</h2>
          <h3>Confirmation de mot de passe</h3>
          <form method="post" action="index.php?action=confirmation" class="custom-form">

            <div class="form-group">
              <label for="confirmation">Confirmation</label>
              <input type="confirmation" name="confirmation" value="" id="confirmation" class="form-control" />
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <input type="submit" name="Valider" class="btn btn-block bg-red" />
                </div>
                <div class="col-md-6">
                  <a href="index.php?action=login" class="btn btn-block bg-blue">Confirmer</a>
                </div>
              </div>
            </div>

            <span class="error-msg">
              <?= isset( $error_msg ) ? $error_msg : null; ?>
            </span>
          </form>
        </div>
      </div>
      <div class="col-md-6 full-height">
        <div class="auth-container">
          <h1>Cod'FlEx !</h1>
        </div>
      </div>
    </div>
  </div>
</div>
