<?php
    session_start(); 
    if(!isset($_SESSION['login'])) { 
        header('LOCATION:login_page.php');  
	    die(); 
    }
    error_reporting(E_ERROR | E_PARSE);  
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
include("mysqlconnectpart.php");

$sql = "SELECT * FROM mechanic_all_part WHERE id=".$_GET['id'];
 
$cevap = mysqli_query($baglanti,$sql);
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
$gelen=mysqli_fetch_array($cevap);

$part_id=$gelen['part_id'];
$part_date=$gelen['part_making_date'];
$part_raw_mat=$gelen['part_raw_materials'];
$part_country=$gelen['part_country'];
$part_status=$gelen['part_status'];

$sql = "INSERT INTO faulty_mechanic_part".
       "(part_id,part_making_date,part_raw_materials,part_country,part_status) ".
       "VALUES ( '$part_id','$part_date','$part_raw_mat','$part_country','$part_status')";
	   
$cevap = mysqli_query( $baglanti,$sql);

if(!$cevap)
{
    echo '<br>ERROR:' . mysqli_error($baglanti);
}
else
{
    header('LOCATION:login_successful.php');
}

mysqli_close($baglanti);

?>
</body>
</html>