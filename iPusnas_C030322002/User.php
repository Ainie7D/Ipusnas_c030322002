<?php
class User {
    private $ID_User;
    private $Nama;
    private $Email;
    private $Password;

    public function __construct($ID_User, $Nama, $Email, $Password) {
        $this->ID_User = $ID_User;
        $this->Nama = $Nama;
        $this->Email = $Email;
        $this->Password = $Password;
    }

    public function Login() {
        
    }

    public function Logout() {
        
    }
}