<?php ob_start(); ?>

<div id="home">
    <div class="banner">
        <div class="container">
            <div class="row btn-container mt-0">
            <div class=" col-md-1 offset-md-11 mt-4 col-xs-6 offset-xs-6"><a href= " index.php?action=contact" class= " btn btn-block font-weight-bold" >Nous contacter</a></div>
</div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title">Cod<span>'Flix</span></h1>
                    <p>
                        <strong>Bienvenue</strong>
                    </p>
                </div>
            </div>
            <div class="row btn-container">
                
                <div class=" col-md-6 "><a href= " index.php?action=login " class= " btn btn-block bg-red " >Connexion</a></div>
                <div class=" col-md-6 "><a href= " index.php?action=signup" class= " btn btn-block bg-red " >Inscription</a></div>
                
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('base.php'); ?>
