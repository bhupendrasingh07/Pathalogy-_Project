<?php
session_start();
    if(isset($_POST['loginbtn'])){

        include('../Model/AdminModel.php');
        $data['email'] = $_POST['email'];
        $password = $_POST['password'];
        $result = LoginAdmin($data);
        $_SESSION['name'] = $result['name'];

        $HashPass = $result['password']; 

        if (password_verify($password, $HashPass)) {
            // Password is correct
        
            echo '<script type="text/javascript">'; 
            echo 'alert("Login Success");'; 
            echo 'window.location.href = "../index-2.php";';
            echo '</script>';
              
        } else {
            echo '<script type="text/javascript">'; 
            echo 'alert("Incorrect Details");'; 
            echo 'window.location.href = "../login.html";';
            echo '</script>';
        }
    } 

?>