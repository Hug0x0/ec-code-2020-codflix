<?php ob_start();?>

<?php

    $id_user = $_SESSION['user_id'];

    $req = User::getUserById($id_user);
    //var_dump ($req);
    
?>

<div class="row">
    <div class="col-md-4">
        <h4>Profile information</h4>
    </div>
</div>

<div class="col mt-5">
    <div class="row mt-4">
        <div class="col mt-2">
            <span id="media_genre" class="row"> You are connected with:  <?= $req['email']?></span>
            <!-- <div class="col-md-6">
                  <button type="submit" class="btn bg-blue">Modifier vos information</button>
                </div> -->
                <form method="post" class="custom-form">

            <div class="form-group">
              <label for="email">New email : </label>
              <input type="email" name="email" value="" placeholder="<?= $req['email']?>" id="email" class="form-control" />
            </div>
            <div class="form-group d-flex ">
                <span>Change password</span>
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password" placeholder="Mot de passe" class="form-control" />
            </div>
            <div class="form-group">
              <input type="password" name="newPassword" id="newPassword" placeholder="Nouveau mot de passe" class="form-control" />
            </div>
            <div class="form-group">
              <input type="password" name="newPasswordConfirm" id="newPasswordConfirm" placeholder="Confirmation" class="form-control" />
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <!-- <a href="index.php?redicrect=signup" class="btn btn-block bg-red">Suppression du compte</a> -->
                  <input type="submit" name="delete" value="Suppression du compte" class="btn btn-block bg-red" />
                </div>
                <div class="col-md-6">
                  <input type="submit" name="update" value="Valider" class="btn btn-block bg-red" />
                </div>
              </div>
            </div>

            <span class="error-msg">
              <?= isset( $error_msg ) ? $error_msg : null; ?>
            </span>
            <span class="success-msg">
              <?= isset( $success_msg ) ? $success_msg : null; ?>
            </span>
          </form>
        </div>
    </div>

</div>


<?php $content = ob_get_clean(); ?>

<?php require( 'dashboard.php'); ?>


