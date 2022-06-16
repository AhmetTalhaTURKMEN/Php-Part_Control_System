<?php
    session_start(); 
    if(!isset($_SESSION['login'])) { 
        header('LOCATION:login_page.php');  
	    die(); 
    } 
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class='container-xl'>
        <div class="table-wrapper">
            <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>All  <b>Faulty </b> Part</h2>
                        </div>
                    </div>
                </div>      
            <?php
            include("mysqlconnectpart.php");

            $sql = "SELECT * FROM faulty_mechanic_part";

            $cevap = mysqli_query($baglanti,$sql);

            if(!$cevap )
            {
                echo '<br>ERROR:' . mysqli_error($baglanti);
            }
            echo "<table class='table table-striped table-hover table-bordered text-center'>";
            echo "<tr>";
            echo "<th>Part ID</th>";
            echo "<th>Date</th>";
            echo "<th>Raw Materials</th>";
            echo "<th>Country</th>";
            echo "<th>Status</th>";
            echo "<th>Action</th>";
            echo "</tr>";
            while($gelen=mysqli_fetch_array($cevap))
            {
                echo "<tr><td>".$gelen['part_id']."</td>";
                echo "<td>".$gelen['part_making_date']."</td>";
                echo "<td>".$gelen['part_raw_materials']."</td>";
                echo "<td>".$gelen['part_country']."</td>";
                echo "<td>".$gelen['part_status']."</td>"; 
                echo "<td><a class='btn btn-outline-danger' href=delete_faulty_part.php?id=";
                echo $gelen['id'];
                echo "><span class='fa fa-trash'></span> Delete</a></td></tr>";    
            }
            echo "</table>";

            echo "<center>  <a class='btn btn-outline-primary' href='index.php'><i class='fa fa-home' style='font-size: 50px; '></i> Back to main menu</a>";
echo "  <a class='btn btn-outline-dark' href='https://github.com/AhmetTalhaTURKMEN?tab=repositories'><i class='fa fa-github' style='font-size: 50px; '></i> Github Repository</a></center>";

            mysqli_close($baglanti);


            ?>
            
        </div>
    </div>
</body>
</html>