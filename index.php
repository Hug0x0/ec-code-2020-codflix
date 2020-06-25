<?php

require_once( 'controller/homeController.php' );
require_once( 'controller/loginController.php' );
require_once( 'controller/signupController.php' );
require_once( 'controller/mediaController.php' );
require_once( 'controller/contactController.php' );
require_once( 'controller/mediaDetailController.php' );
require_once( 'controller/profilController.php' );
require_once( 'controller/contactControllerDe.php' );
require_once( 'controller/choiceController.php' );




/**************************
* ----- HANDLE ACTION -----
***************************/

if ( isset( $_GET['action'] ) ):

  switch( $_GET['action']):

    case 'login':

      if ( !empty( $_POST ) ) login( $_POST );
      else loginPage();

    break;

    case 'signup':
      if ( !empty( $_POST ) ) signup( );
      else signupPage();

    break;

    case 'logout':

      logout();

    break;
    
    case 'contact':

      contact();

    break;

    case 'contactde':

      contactde();

    break;

    case 'detail':

      detailController();

    break;
    
    // case 'profil':

    //   profilController();

    // break;
    case 'profile':

      updateAccount($_POST );
    
    break;

    case 'choice':

      choiceController();

    break;

    case 'modifpassword':

      modifPassword();

    break;

  endswitch;

else:

  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( $user_id ):
    mediaPage();
  else:
    homePage();
  endif;

endif;