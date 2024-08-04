<?php
//include('reportdrop.css');
include ('function.php');
$lang = 'en';

// Check if the 'lang' parameter is set in the URL and if it's either 'en' or 'hi'
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'hi'])) {
    $lang = $_GET['lang'];
}

// Load the appropriate language file
$translations = require "$lang.php";

?>
<head> 
    <link rel="stylesheet" type="text/css" href="reportdrop.css"> 
</head>

<div class="container">
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php"><?php echo $translations['E Nazarat']; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="receiving_form.php"><?php echo $translations['Receiving']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dispatch.php"><?php echo $translations['Dispatch']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dead_stock.php"><?php echo $translations['Dead Stock']; ?></a>
            </li>
            <div class="dropdown">
            <button class="dropbtn"><?php echo $translations['Report']; ?></button>
             <div class="dropdown-content">
               <a href="#"><?php echo $translations['Report Hindi'];?></a>
                <a href="rep2.php"><?php echo $translations['Report English'];?></a>
                
              </div>
              </div>

            <li class="nav-item">
              <a class="nav-link" href="./logout.php"><?php echo $translations['Logout']; ?></a>
            </li>
            <li class="nav-item">
             
            </li>
            <h1></h1>
            <p></p>
            
          </ul>
        </div>
      </div>
    </nav>


  </div>
