<?php

include 'app/controller/userController.php';

$userController= new UserController();
$users = $userController->getAllUsers();

if(empty($users)){
    echo'<h3>There are no users!</h3>';
}
else {
    echo'<div class="users-list">';
    for($i =0; $i<=5;$i++)
    {
    foreach($users as $user){
        echo'<div class="user-list-item">';
        echo'<i class="fa-regular fa-user fa-2xl"></i><br>';
        echo'<h4>'.$user->get_name().'</h4></div>';
    }
} 
    echo '</div>';
}