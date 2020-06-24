<?php ob_start();?>

<?php

    $id_user = $_SESSION['user_id'];

    $req = User::getUserById($id_user);
    //var_dump ($req);
    
?>

<div class="row">
    <div class="col-md-4">
        <h4>Information sur votre profil</h4>
    </div>
</div>

<div class="col mt-5">
    <div class="row mt-4">
        <div class="col mt-2">
            <span id="media_genre" class="row">Email: <?= $req['email']?></span>
            <div class="col-md-6">
                  <button type="submit" class="btn bg-blue">Modifier vos information</button>
                </div>
        </div>
    </div>

</div>


<?php $content = ob_get_clean(); ?>

<?php require( 'dashboard.php'); ?>