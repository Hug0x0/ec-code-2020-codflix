<?php

require_once( 'model/user.php' );

/****************************
* ----- LOAD SIGNUP PAGE -----
****************************/

function signupPage() {

  $user     = new stdClass();
  $user->id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( !$user->id ):
    require('view/auth/signupView.php');
  else:
    require('view/homeView.php');
  endif;

}

/***************************
* ----- SIGNUP FUNCTION -----
***************************/
if(isset($_POST['Valider'])){
  signup();
}
function signup() {

  // On verifie d'abord qu'on reçoit des données via le formulaire 
  if(!empty($_POST)){
    extract($_POST);
    $valid = true;

  // value to recover in form
    if(isset($_POST['Valider'])){
      $mail = htmlentities(strtolower($email));
      $password = htmlentities(trim($password));
      $conf_password = htmlentities(trim($password_confirm));
      // Email verification
      if(empty($mail)){
        $valid = false;
        $er_mail = "Mail cannot be empty";
      }
      elseif(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $mail)){
        $valid = false;
        $er_mail = "Invalid email";
      }
    }
    // Password verification
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
      $password = hash('sha256', $password);
      $new_user = new User();
      $new_user->setEmail($mail);
      $new_user->setPassword($password);
      $new_user->createUser();
      }
    }
  }
