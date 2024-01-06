<?php
include('../Model/AdminModel.php');
$data['name'] = $_POST['name'];
$data['email'] = $_POST['email'];
$data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
$data['phone'] = $_POST['phone'];

$res = RegisterAdmin($data);
if($res){
    header('location:../login.html');
}




?>