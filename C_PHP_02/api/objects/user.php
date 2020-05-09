<?php
// 'user' object
class User{

    // database connection and table name
    private $conexion;
    private $table_name = "users";

    // object properties
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $password;

    // constructor
    public function __construct($db){
        $this->$conexion = $db;
    }

// create() method will be here
}
