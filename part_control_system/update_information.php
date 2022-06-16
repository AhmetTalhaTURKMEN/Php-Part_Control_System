<?php
    session_start(); 
    if(!isset($_SESSION['login'])) { 
        header('LOCATION:login_page.php');  
	    die(); 
    } 
    include("mysqlconnectpart.php");
    $sql = "SELECT * FROM mechanic_all_part WHERE id=".$_GET['id'];
    $cevap = mysqli_query($baglanti,$sql);
    if(!$cevap ){
        echo '<br>ERROR:' . mysqli_error($baglanti);
    }
    $gelen=mysqli_fetch_array($cevap);
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container">
        <center>
        <h1>Set Data</h1>
        </center>
        <form action="update_save.php?id=<?php echo $_GET['id'] ?>" method="POST">
        <div class="form-group">
            <label for="part_id">Part ID</label>
            <input type="text" class="form-control" name="part_id" value="<?php echo $gelen['part_id']?>">
        </div>

        <div class="form-group">
            <label for="part_date">Raw Part DATE</label>
            <input type="date" class="form-control" name="part_date" value="<?php echo $gelen['part_making_date'] ?>">
        </div>

        <div class="form-group">
            <label for="raw_materials">Raw Materials</label>
            <input type="text" class="form-control" name="raw_materials" value="<?php echo $gelen['part_raw_materials']?>">
        </div>

        <div class="form-group">
            <label for="country">Part Country</label>
            <input type="text" class="form-control" name="country" value="<?php echo $gelen['part_country']?>">
        </div>

        <div class="form-group">
            <label for="status">Part Status</label>
            <input type="text" class="form-control" name="status" value="<?php echo $gelen['part_status']?>">
        </div>
        
            <center>
            <button type="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i> Save Changes</button>
            </center>
        </form>
    </div>
</body>
</html>