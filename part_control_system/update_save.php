<?php
session_start(); 
if(!isset($_SESSION['login'])) { 
    header('LOCATION:login_page.php');  
    die(); 
} 
include("mysqlconnectpart.php");

extract($_POST);

$sql ="UPDATE mechanic_all_part ".
      "SET part_id='$part_id',part_making_date='$part_date',part_raw_materials='$raw_materials',part_country='$country',part_status='$status' ".
      "WHERE id=".$_GET['id'];
$cevap = mysqli_query( $baglanti,$sql);

if(!$cevap){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
    header('LOCATION:login_successful.php');
}
mysqli_close($baglanti);
?>