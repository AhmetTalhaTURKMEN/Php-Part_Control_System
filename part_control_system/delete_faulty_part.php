<?php
    session_start(); 
    if(!isset($_SESSION['login'])) { 
        header('LOCATION:login_page.php');  
	    die(); 
    } 
    include("mysqlconnectpart.php");
    $sql = "DELETE FROM faulty_mechanic_part WHERE id=".$_GET['id'];
    $cevap = mysqli_query($baglanti,$sql);

    if(!$cevap )
    {
        echo '<br>Hata:' . mysqli_error($baglanti);
    }
    else
    {
        header('LOCATION:login_successful.php');
    }
    mysqli_close($baglanti);
?>