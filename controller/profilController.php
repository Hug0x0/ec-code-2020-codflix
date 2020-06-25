<?php

require_once( 'model/user.php' );
require_once( 'loginController.php' );

// function profilController(){ 
   

//     $medias = Media::filterMedias( $search );
//     $user = new User( );
//     $userData = $user->getUserById( $_SESSION['user_id']);
//     require('view/profilView.php');
// }
// function modifController($user){ 
// }
function profil() {
    
    $user = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

    if($user){
        $user_id = User::getUserById($user);
        if(isset($_POST['update']) || isset($_POST['change_email']) ){
            updateAccount();
            //echo "coucou jai actualisé";
        }
        elseif(isset($_POST['delete'])){
            deleteAccount();

        }
        require_once('view/profilView.php');


    }else{
        require_once('view/homeView.php');
    }
}
function updateAccount() {

    $user_id = $_SESSION['user_id'];
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);
    $new_password = $_POST['newPassword'];
    $password_confirm = $_POST['newPasswordConfirm'];

    $user = new User();
    $userData = $user->getUserById($user_id); 

    if ($password != $userData['password'])
    {
        $error_msg = "Le mot de passe actuel est erroné.";
    }
    elseif (isset($_POST['change_email']))
    {
        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email))
        {
            $error_msg = "Format de mail non valide.";
        }
        else
        {
            $user->setId($user_id);
            $user->setEmail($email);

            $userData = $user->getUserByEmail();

            if ($userData && sizeof( $userData ) > 0)
            {
                $error_msg = "Cette adresse mail est déjà utilisée.";
            }
            else
            {
                $user->updateMail();
                $success_msg = "Vos informations ont été modifiées avec succès.";
            }    
        }
    }
    elseif (isset($_POST['change_password']))
    {
        if (strlen($new_password) < 6)
        {
            $error_msg = "Nouveau mot de passe incorrect";
        }
        elseif ($new_password != $password_confirm)
        {
            $error_msg = "Les deux mots de passe ne correspondent pas.";
        }
        else
        {
            $user->setId($user_id);
            $user->setPassword($new_password);

            $user->updatePassword();
            $success_msg = "Vos informations ont été modifiées avec succès.";     
        }
    }

    require('view/profilView.php');
}

function deleteAccount(){

    $user_id = $_SESSION['user_id'];
    $password = hash('sha256', $_POST['password']);

    $user = new User();
    $userData = $user->getUserById($user_id); 

    if ($password != $userData['password']) {
        $error_msg = "Le mot de passe actuel est erroné.";
    }
    else{
        $user->setId($user_id);
        $user->deleteUser();
        logout();
    }

        require('view/profilView.php');
    }


// function deleteUser($user){ 

//     $user_id = $_SESSION['user_id'];
//     $password = hash('sha256', $post['password']);

//     $user = new User();
//     $userData = $user->getUserById($user_id);
//     if ($password != $userData['password']) {
//         $error_msg = "wrong pwd";
//     }
//     else{
//         $user->setId($user_id);
//         $user->deleteUser();
//         logout();
//     }

//     require('view/accountView.php');

// }
?>