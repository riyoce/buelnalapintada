<?php

class Conexion {

    var $host = "localhost";
    var $user = "newuser";
    var $pass = "Katiusha75";
    var $por = "3306";
    var $db = "buelnalapintada";

    function conectar() {
        $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db, $this->por);
        if (!$conn) {
            die("Could not connect to MySQL: " . mysqli_connect_error());
        }
        mysqli_query($conn, "SET NAMES 'utf8'");
        return $conn;
    }

}
?>

