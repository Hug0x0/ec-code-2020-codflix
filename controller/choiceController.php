<?php

require_once( 'model/genre.php' );

function choiceController(){ 
    $search = isset( $_GET['name'] ) ? $_GET['name'] : null;
    $genres = Genre::filterGenre( $search );

    require('view/choiceView.php');
}
?>