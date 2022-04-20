<?php
session_start();
class connect
{
    // attributs:
    private $host = "localhost";
    private $name = "root";
    private $password = "";
    private $data = "contact";
    public $conn;


    //methode:
    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->name, $this->password, $this->data);
        // if ($this->conn) {
        //     echo 'connected';
        // }else{
        //     echo 'failed';
        // }
    }
}
$obj = new connect();




class Register extends connect
{
    public function registration($name, $email, $password, $confirm)
    {
        $duplicate = mysqli_query($this->conn, "SELECT * FROM `gestion` WHERE name = '$name' OR email = '$email' ");
        if (mysqli_num_rows($duplicate) > 0) {
            return 10;
        } else {
            if ($password == $confirm) {
                $query = "INSERT INTO gestion(name,email,password) VALUES ('$name','$email','$password');";
                mysqli_query($this->conn, $query);
                return 1;
            } else {
                return 100;
            }
        }
    }
}
class Login extends connect
{
    public $id;
    public function login($email,$password){
        $result = mysqli_query($this->conn ,"SELECT * FROM gestion WHERE email = '$email' OR password = '$password' ");
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0 ) {
            if ($password == $row["password"]) {
                $this->id = $row["id"];
                $this->name = $row["name"];
                return 1;
                //login sucees
            }else{
                return 10;
               // wrong password
            }
        }else{
            return 100;
            //user not enregistred
        }
    }
    public function idUser(){
        return $this->id;
    }
    public function name(){
        return $this->name;
    }
}
