<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GDSC Project</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
  <body>
    
    <!-- header starts -->
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container">
         <a class="navbar-brand" href="#">
      <span style="font-weight:800; color:#008BDC;font-size:23px;">Knowledge</span> <span style="font-weight:800; color:#6300dc; margin-left:-4px;font-size:30px;">Donor</span> 
    </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
            <div class="d-flex" role="search" style="margin-left:600px;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " style="margin-left:30px;" href="#">About us </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " style="margin-left:30px;" >Contact</a>
                    </li>
                  </ul>
                  <?php
    session_start();
    if(!isset($_SESSION["username"])) {
        echo' <a href="login.php" class=" btn-login" style="margin-left:30px;" >Login</a>';
    }
?>
             
            </div>
          </div>
        </div>
      </nav>
    <!-- header ends -->