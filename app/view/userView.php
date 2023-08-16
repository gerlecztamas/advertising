<?php

include 'app/controller/userController.php';

$userController= new UserController();
$users = $userController->getAllUsers();

if(empty($users)){
    echo'<h3>There are no users to display!</h3>';
}
else {
    echo'<div class="users-list">';
    foreach($users as $user){
        echo'<a href=""><div class="user-list-item">';
        echo'<i class="fa-regular fa-user fa-2xl"></i><br>';
        echo'<h4>'.$user->get_name().'</h4></div></a>';
    }
    echo '</div>';
}