<?php ob_start();?>

<?php

    $id_media = $_GET['media'];
    //echo "id media = " . $id_media;
    $req = Media::detailMedia($id_media);
    $reqGenre = Media::detailMediaGenre($id_media);
    //var_dump($reqGenre);
?>

<div class="row">
    <div class="col-md-4">
        <h3><?= $req['title']; ?></h3>
    </div>
    <div class="col d-flex justify-content-end">
        <div>
            <a href="index.php" class="btn btn-dark">X</a>
        </div>

    </div>
</div>

<div class="col mt-5">
    <div class="row mt-4">
        <div class="col mt-2">
            <span id="media_genre" class="row">Kind: <?= $reqGenre['name']?> Type: <?= $req['type']?></span>
            <p class="row">Release date: <?= $req['release_date']?></p>
            <p class="row">Duration: <?= $req['durée']?></p>
            <span class="row">Synopsis and details: <?= $req['summary']?></span>
            <p class="row">Director: <?= $req['director']?></p>
            <p></p>
        </div>
    </div>
    <div class="row video mt-4">
        <iframe width="560" height="315" 
            src="<?= $req['trailer_url']; ?>" frameborder="0" allow= "accelerometer; autoplay: encrypt"></iframe>
    </div>

</div>


<?php $content = ob_get_clean(); ?>

<?php require( 'dashboard.php'); ?>