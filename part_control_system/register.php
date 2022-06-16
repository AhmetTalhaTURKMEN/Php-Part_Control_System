<?php
    session_start(); 
    if(isset($_SESSION['login'])) { 
        header('LOCATION:index.php');  
	    die(); 
    }
    error_reporting(E_ERROR | E_PARSE); 
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
include("mysqlconnect.php");


if($_POST['user_id']!="" && $_POST['password']!=""){
$user_id=$_POST['user_id'];
$password=$_POST['password'];

$sql = "INSERT INTO employee ".
       "(user_id,password) ".
       "VALUES ( '$user_id','$password')";
	   
$cevap = mysqli_query( $baglanti,$sql);

if(!$cevap)
{
    echo '<br>ERROR:' . mysqli_error($baglanti);
}
else
{
    $_SESSION['login'] = true;
    header('LOCATION:login_successful.php');
}

mysqli_close($baglanti);
}
else{
    session_start(); 
    if(!isset($_SESSION['login'])) { 
        header('LOCATION:register_form.php');  
	    die(); 
    }
}
?>
</body>
</html>
