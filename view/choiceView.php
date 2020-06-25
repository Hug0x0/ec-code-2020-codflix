<?php ob_start();?>

<?php

    $id_user = $_SESSION['user_id'];

    $req = User::getUserById($id_user);
    //var_dump ($req);
    
?>

<div class="row">
    <div class="col-md-4 offset-md-8">
        <form method="get">
            <div class="form-group has-btn">
                <input type="search" id="search" name="title" value="<?= $search; ?>" class="form-control" placeholder="Rechercher">
                <button type="submit" class="btn btn-block bg-red">Submit</button>
            </div>
        </form>
    </div>
</div>

<div class="genre-list">
    <?php foreach( $genres as $genre ): ?>
        <a class="item" href="index.php?action=detail&media=<?=$genre['id'];?>">
            <div class="title"><?= $genre['name']; ?></div>
        </a>
    <?php endforeach; ?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require( 'dashboard.php'); ?>