<?php

class User {
    private $name;
    private $email;
    private $password;
    private $image;


    public function __construct($name, $email, $password, $image) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->image = $image;
    }

    
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getImage() {
        return $this->image;
    }
}

?>

