<?php
session_start();
class Connect
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
 $obj = new Connect();




class Register extends Connect
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
class Login extends Connect
{
    public $id;
    public $name;
    public $password;
    public function login($name,$password){
        $result = mysqli_query($this->conn ,"SELECT * FROM gestion WHERE email = '$name' OR password = '$password' ");
        $row = mysqli_fetch_assoc($result);
        
        if (mysqli_num_rows($result) > 0 ) {
            if ($password == $row["password"]) {
                $this->id = $row["id"];
                $this->name = $row["name"];
                $this->date = $row["date"];
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
    public function email(){
        return $this->email;
    }
    public function password(){
        return $this->password;
    }
}
