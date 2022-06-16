<?php
    session_start(); 
    if(isset($_SESSION['login'])) { 
        header('LOCATION:index.php');  
	    die(); 
    }   
    error_reporting(E_ERROR | E_PARSE);   
    include('mysqlconnect.php');
    
    $user_id = $_POST['user_id'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $user_id = stripcslashes($user_id);  
        $password = stripcslashes($password);  
        $user_id = mysqli_real_escape_string($baglanti, $user_id);  
        $password = mysqli_real_escape_string($baglanti, $password);  
      
        $sql = "select *from employee where user_id = '$user_id' and password = '$password'";  
        $result = mysqli_query($baglanti, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['login'] = true; 
            header('LOCATION:login_successful.php');
        }  
        else{  
            header('LOCATION:login_failed.php');
        } 
       
?>  