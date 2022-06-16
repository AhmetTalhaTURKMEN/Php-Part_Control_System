<?php
    session_start(); 
    if(!isset($_SESSION['login'])) { 
        header('LOCATION:login_page.php');  
	    die(); 
    }
    if(isset($_GET['logout'])) {
        unset($_SESSION['login']);
        header('Location: login_page.php');  
        exit;
        
    }

?>
<!doctype html>
<html>
    <style>

a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-default,
.btn-default:hover,
.btn-default:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritence from `body` */
  background-color: #fff;
  border: 1px solid #fff;
}


/*
 * Base structure
 */

html,
body {
/*css for full size background image*/
  background: url(https://img.freepik.com/free-vector/mechanic-services-engineering-repair-logo-design_5379-658.jpg?w=1060) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  
  height: 100%;
  background-color: #060;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 3px rgba(0,0,0,.5);
 
}
/**{
    color:blue;
}*/

/* Extra markup and styles for table-esque vertical and horizontal centering */
.site-wrapper {
  display: table;
  width: 100%;
  height: 100%; /* For at least Firefox */
  min-height: 100%;
  -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
          box-shadow: inset 0 0 100px rgba(0,0,0,.5);
}
.site-wrapper-inner {
  display: table-cell;
  vertical-align: top;
}
.cover-container {
  margin-right: auto;
  margin-left: auto;
}

/* Padding for spacing */
.inner {
  padding: 30px;
}
p{
    color:black;
}


/*
 * Header
 */
.masthead-brand {
  margin-top: 10px;
  margin-bottom: 10px;
}

.masthead-nav > li {
  display: inline-block;
}
.masthead-nav > li + li {
  margin-left: 20px;
}
.masthead-nav > li > a {
  padding-right: 0;
  padding-left: 0;
  font-size: 16px;
  font-weight: bold;
  color: black; /* IE8 proofing */
  color: black;
  border-bottom: 2px solid transparent;
}
.masthead-nav > li > a:hover,
.masthead-nav > li > a:focus {
  background-color: transparent;
  border-bottom-color: #a9a9a9;
  border-bottom-color: rgba(255,255,255,.25);
}
.masthead-nav > .active > a,
.masthead-nav > .active > a:hover,
.masthead-nav > .active > a:focus {
  color: red;
}

.masthead-nav > .add > a,
.masthead-nav > .add > a:hover,
.masthead-nav > .add > a:focus {
  color: green;
}

@media (min-width: 768px) {
  .masthead-brand {
    float: left;
  }
  .masthead-nav {
    float: right;
  }
}


/*
 * Cover
 */

.cover {
  padding: 0 20px;
}
.cover .btn-lg {
  padding: 10px 20px;
  font-weight: bold;
}


/*
 * Footer
 */

.mastfoot {
  color: #999; /* IE8 proofing */
  color: rgba(255,255,255,.5);
}


/*
 * Affix and center
 */

@media (min-width: 768px) {
  /* Pull out the header and footer */
  .masthead {
    position: fixed;
    top: 0;
  }
  .mastfoot {
    position: fixed;
    bottom: 0;
  }
  /* Start the vertical centering */
  .site-wrapper-inner {
    vertical-align: middle;
  }
  /* Handle the widths */
  .masthead,
  .mastfoot,
  .cover-container {
    width: 100%; /* Must be percentage or pixels for horizontal alignment */
  }
}

@media (min-width: 992px) {
  .masthead,
  .mastfoot,
  .cover-container {
    width: 1500px;
  }
  
}

    </style>
    

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand">Mechanic Part Control System</h3>

          <ul class="nav masthead-nav">

            <li class="add">
            <a href="add_mechanic_part_form.php" class="btn btn-outline-success" data-toggle="modal"><i class="fa fa-plus"></i> <span>Add New Part</span></a>
            </li>

            <li>
            <a href="show_all_mechanic_part.php" class="btn btn-outline-dark" data-toggle="modal"><i class="fa fa-table"></i> Show Mechanic Part</a>
            </li>

            <li>
            <a href="show_all_faulty_part.php" class="btn btn-outline-dark"><i class="fa fa-table"></i> Show Faulty Mechanic Part</a>
            </li>

            <li>
            <a class='btn btn-outline-dark' href='https://github.com/AhmetTalhaTURKMEN?tab=repositories'><i class='fa fa-github'></i> Github Repository</a>
            </li>

            <li class="active">
            <a href="?logout" class="btn btn-outline-danger"><i class="fa fa-sign-out"></i> Log out</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="mastfoot">
        <div class="inner">
          
          <p><a href=
          "http://tankgameproject.eu5.org/"
          target="_blank"><small>Try My Game</small></a></p>          
      
          <p>© 2022 Ahmet Talha Turkmen ~ <a href=
          "http://getbootstrap.com/">Bootstrap</a></p>
        </div>
      </div>
    </div>
</div>
</div>
</body>
</html>