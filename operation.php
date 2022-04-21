<?php
require 'conect.php';
// insertion
class Clt extends Connect
{
    function Insert($name, $phone, $email, $adresse, $id)
    {

        $query = mysqli_query($this->conn, "INSERT INTO `liste`( `name`, `phone`, `email`, `adresse`, `fo_id`) VALUES('$name','$phone','$email','$adresse','$id')");
        if ($query) {
            return $query;
        } else {
            echo "error";
        }
    }

    // affichage
    public function Affiche($foid)
    {
        $sql = mysqli_query($this->conn, "SELECT * FROM `liste` WHERE fo_id ='$foid' ");
        return $sql;
    }

    // update

    public function getData($id)
    {
        $sql = mysqli_query($this->conn, "SELECT * FROM `liste` WHERE id='$id'");
        $data = mysqli_fetch_assoc($sql);
        return $data;
    }

    public function updateData($name,$phone, $email, $adresse, $id)
    {
        $sql = mysqli_query($this->conn, "UPDATE `liste` SET name='$name', phone='$phone', email='$email', adresse='$adresse' WHERE id='$id'");
        if ($sql) {
            return true;
        } else {
            return false;
        }
    }

    
    public function Delete($id){
        $sql = mysqli_query($this->conn, "DELETE FROM `liste` WHERE id='$id'");
        return $sql;
    }


}
