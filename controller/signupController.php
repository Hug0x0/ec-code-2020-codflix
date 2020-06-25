<?php

require_once( 'model/user.php' );

function signupPage() {

  $user     = new stdClass();
  $user->id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( !$user->id ):
    require('view/auth/signupView.php');
  else:
    require('view/homeView.php');
  endif;

}

if(isset($_POST['Valider'])){
  signup();
}
function signup() {

  if(!empty($_POST)){
    extract($_POST);
    $valid = true;

    if(isset($_POST['Valider'])){
      $mail = htmlentities(strtolower($email));
      $password = htmlentities(trim($password));
      $conf_password = htmlentities(trim($password_confirm));
      if(empty($mail)){
        $valid = false;
        $er_mail = "Mail cannot be empty";
      }
      elseif(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $mail)){
        $valid = false;
        $er_mail = "Invalid email";
      }
    }
    
    if(empty($password)) {
      $valid = false;
      $er_mdp = "Password cannot be empty";
       }
       elseif($password != $conf_password)
       {
         $valid = false;
         $er_mdp = "passwords do not match";
    }
    if($valid){
      //Test de création clé de confirmation
     /*$longueurKey = 15;
      $key = "";
      for($i=1;$i<$longueurKey;$i++){ 
        $key .= mt_rand(0,9);
      }*/
      $password = hash('sha256', $password);
      $new_user = new User();
      $new_user->setEmail($mail);
      $new_user->setPassword($password);
      $new_user->createUser();
      require("view/auth/loginView.php");
      }
    }
  }
