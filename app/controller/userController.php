<?php
    include 'app/service/userService.php';

    class UserController{
        private UserService $userService;

        function __construct() {
            $this->userService = new UserService();
        }

        function getAllUsers(){
            $users = $this->userService->getAllUsers();
            return $users;
        }
    }
?>