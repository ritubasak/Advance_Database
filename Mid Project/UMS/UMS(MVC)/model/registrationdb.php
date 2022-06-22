<?php
include'../model/dbConnect.php';
  function register($name,$uname,$pass){
     $conn = connect();
     $sql = oci_parse($conn,"INSERT INTO Users (NAME,USERNAME,PASSWORD) values ('$name','$uname','$pass')");
     $res = oci_execute($sql);
     return $res;
}



?>