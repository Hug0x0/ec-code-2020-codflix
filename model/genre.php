<?php

require_once( 'database.php' );
//Class Genre
class Genre {

  protected $id;
  protected $name;

  public function __construct( $genre ) {

    $this->setId( isset( $genre->id ) ? $genre->id : null );
    $this->setName( $genre->name );
    
  }

  /***************************
  * -------- SETTERS ---------
  ***************************/

  public function setId( $id ) {
    $this->id = $id;
  }

  public function setName( $name ) {
    $this->name = $name;
  }

  /***************************
  * -------- GETTERS ---------
  ***************************/

  public function getId() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
  }

  /***************************
  * -------- GET LIST --------
  ***************************/

  public static function filterGenre( $search ) {

    // Open database connection
    $db = init_db();

    if(empty($search)){
      $req = $db->prepare( "SELECT * FROM genre" );
      $req->execute();
      $db   = null;

      return $req->fetchALL();
    } else { 
      $req = $db->prepare('SELECT * FROM genre WHERE name LIKE "%'.$search.'%"');
      $req->execute();
    }
    // Close database connection
    $db = null;

    return $req->fetchAll();

  }

  public static function detailGenre( $id_genre ){

    $db = init_db();

    $req = $db->prepare( "SELECT * FROM genre WHERE id = " . $name );
    $req->execute();


    $db = null;

    return $req->fetch();
  }

}
