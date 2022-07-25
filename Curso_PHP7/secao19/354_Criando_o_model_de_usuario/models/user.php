<?php
    class User {
        public $id;
        public $name;
        public $lastName;
        public $email;
        public $password;
        public $image;
        public $bio;
        public $token;


    }

    interface UserDAOInterface {
        public function buildUser($data);
        public function create(User $user, $authUser = false);
        public function update(User $user);
        public function findByToken($token);
        public function verifyToken($protected = false);
        public function setTokenToSession($token, $redirect = true);
    }