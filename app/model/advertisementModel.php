<?php
    Class Advertisement{
        private $id;
        private $user;
        private $title;

        function __construct($id, $user, $title) {
            $this->id = $id;
            $this->user = $user;
            $this->title = $title;
          }

        function get_id() {
            return $this->id;
        }
        
        function set_id($id) {
            $this->id = $id;
        }
        
        function get_user() {
            return $this->user;
        }

        function set_user($user) {
            $this->user = $user;
        }

        function get_title() {
            return $this->title;
        }

        function set_title($title) {
            $this->title = $title;
        }
    }
?>