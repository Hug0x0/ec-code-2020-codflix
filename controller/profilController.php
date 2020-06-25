<?php
function profilController(){ 
   

    $medias = Media::filterMedias( $search );
    $user = new User( );
    $userData = $user->getUserById( $_SESSION['user_id']);
    require('view/profilView.php');
}
function modifController($user){ 
   
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