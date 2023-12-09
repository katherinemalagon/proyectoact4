<?php

include_once ('../config/config.php');
include('../config/Database.php');

class asesoria {

    public $conexion; 

    function __construct()
    {
        $db = new Database ();
        $this->conexion = $db->connectToDatabase();
    }

    function save( $params){
        $documento = $params ['documento'];
        $nombrecompleto = $params ['nombrecompleto'];
        $celular = $params ['celular'];
        $correo = $params ['correo'];
        $fecha = $params ['fecha'];
        $profesion = $params ['profesion'];
        $imagen = $params ['imagen'];

        $insert = "INSERT INTO asesoria VALUES (NULL,'$documento','$nombrecompleto','$celular','$correo','$fecha','$profesion','$imagen')";
        return mysqli_query ($this->conexion, $insert);
    }


    function getAll(){
        $sql = "SELECT * FROM asesoria";
        return mysqli_query ($this->conexion, $sql);
    }

    function getOne ($id)
    {
        $sql ="SELECT * FROM asesoria WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
    }

    function update($params){
        $documento = $params ['documento'];
        $nombrecompleto = $params ['nombrecompleto'];
        $celular = $params ['celular'];
        $correo = $params ['correo'];
        $fecha = $params ['fecha'];
        $profesion = $params ['profesion'];
        $imagen = $params ['imagen'];
        $id = $params ['id'];

        $update = "UPDATE asesoria SET documento='$documento', nombrecompleto='$nombrecompleto', celular='$celular', correo='$correo',fecha='$fecha', profesion='$profesion', imagen='$imagen' WHERE id = '$id' ";

        return mysqli_query($this->conexion, $update);
    }
          
    function delete($id){
        $eliminar= "DELETE FROM asesoria WHERE id = $id"; /* Elimine de la tabla x, el id que me */
        return mysqli_query($this->conexion, $eliminar);
    }
  

  }
  ?>