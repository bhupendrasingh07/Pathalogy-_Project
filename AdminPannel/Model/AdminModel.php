<?php
include('../config/dbconfig.php');
// ADD admin 
function RegisterAdmin($array){
    $query = "INSERT INTO admin(name,email,password,phone,status)
      VALUES('".$array['name']."','".$array['email']."',
      '".$array['password']."','".$array['phone']."',1)";
      return sql($query);
  }

  function LoginAdmin($data){
    $query = "SELECT name,password from admin WHERE email ='".$data['email']."' ";
    $result=sql($query);
        $row = mysqli_fetch_assoc($result);
    return $row;
}
?>