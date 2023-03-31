<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-1">
        <div class="icon-bar">
  <a class="active" href="dashboard.php"><i class="fa fa-home"></i></a> 
  <a href="#"><i class="fa fa-user"></i></a> 
  <a href="donate.php"><i class="fa fa-dollar-sign"></i></a> 
  <a href="receiver.php"><i class="fa fa-handshake"></i></a>
  <a href="logout.php" style="margin-top:300px;"><i class="fas fa-sign-out-alt"></i></a> 
</div>
        </div>
        <div class="col-11">
        <?php include'header.php';
        ?>
        <div class="container mt-5">
            <h3 style="margin-left:70px;">Hi, <?php echo$_SESSION["username"]; ?></h3><br>
            <div class="row">
              
            </div>
        </div>
        <!-- card ends -->
        <div class="container-fluid p-5" style="background-color:#6300dc; width:1200px;border-radius:30px;">
      <div class="container">
        <div class="row">
          <div class="col-6 ">
              <div class="card text-center text-light" style="width: 25rem; background-color: transparent;border:none; margin-left:100px;">
              <i class='fas fa-dollar-sign ' style='font-size:90px;color:white'></i>
              <div class="card-body">
              <h5 class="card-title" style="font-weight:800;font-size:30px;">I want to Donate Things</h5>
              <p class="card-text" style="color:#e0e6eb;">If you want to contribute in improving the quality of Education by Donating valueable assets such as Money,E-books
            School Equipments,Others etc </p> <br>
             <a href="donate.php" class="btn-donate " >Donate</a>
              </div>
              </div>
          </div>
          <div class="col-6">
              <div class="card text-center text-light text-justify" style="width: 25rem; background-color: transparent;border:none;">
              <i class='far fa-handshake ' style='font-size:90px;color:white'></i>
              <div class="card-body">
              <h5 class="card-title" style="font-weight:800;font-size:30px;">I want to Receive Things</h5>
              <p class="card-text" style="color:#e0e6eb;">If you wish to recieve the valueable assets donated by someone then you can visit at our portal by clicking on the below button </p>
             <br> <a href="receiver.php" class="btn-donate " >Recieve</a>
              </div>
              </div>
          </div>
          
        </div>
      </div>
    </div>
      <!-- card ends -->
        </div>
    </div>
</div>


  
</body>
</html> 