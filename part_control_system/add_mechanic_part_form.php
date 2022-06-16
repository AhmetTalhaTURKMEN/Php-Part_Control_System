<?php
    session_start(); 
    if(!isset($_SESSION['login'])) { 
        header('LOCATION:login_page.php');  
	    die(); 
    } 
?>
<!doctype html>
<html>
   <meta http-equiv="Content-Type"  
      content="text/html; charset=UTF-8" />
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
      <h1>Add New Mechanic Part</h1>
   </center>
   <form action="add_mechanic_part.php" method="POST">
      <div class="form-group">
         <label for="part_id">Part ID</label>
         <input type="text" class="form-control" name="part_id" placeholder="part id is here">
   </div>
   <div class="form-group">
      <label for="part_date">Part Date</label>
      <input type="date" class="form-control" name="part_date" placeholder="part date is here">
   </div> 
   <div class="form-group">
      <label for="raw_materials">Raw Materials</label>
      <input type="text" class="form-control" name="raw_materials" placeholder="raw materials is here">
   </div> 
   <div class="form-group">
      <label for="country">Country</label>
      <input type="text" class="form-control" name="country" placeholder="country is here">
   </div> 
   <div class="form-group">
      <label for="status">Status</label>
      <input type="text" class="form-control" name="status" placeholder="status is here">
   </div> 
   <center>
   <button type="submit" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Add Part</button>
   </center>
   </form>
   </div>
</body>
</html>