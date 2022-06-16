<?php
    session_start(); 
    if(!isset($_SESSION['login'])) { 
        header('LOCATION:login_page.php');  
	    die(); 
    }
    
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
include("mysqlconnectpart.php");



$part_id=$_POST['part_id'];
$part_date=$_POST['part_date'];
$part_raw_mat=$_POST['raw_materials'];
$part_country=$_POST['country'];
$part_status=$_POST['status'];

$sql = "INSERT INTO mechanic_all_part".
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