<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-1">
        <div class="icon-bar">
  <a  href="dashboard.php"><i class="fa fa-home"></i></a> 
  <a href="profile.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="donate.php"><i class="fa fa-dollar-sign"></i></a> 
  <a href="receiver.php"><i class="fa fa-handshake"></i></a>
  <a href="logout.php" style="margin-top:300px;"><i class="fas fa-sign-out-alt"></i></a> 
</div>
        </div>
        <div class="col-11">
        <?php include'header.php';
        ?>
       
        <!-- card ends -->
        <div class="container-fluid p-5" style="background-color:#6300dc; width:1200px;border-radius:30px;">
      <div class="container">
        <h1 class="text-center text-light">Profile</h1>
       
          </div>
          
        
          <div class="row">
          <form>
  <div class="row">
  <div class="col">
  <div class="mb-3 text-light">
    <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
  </div>
  
  </div>
  <div class="col">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-light">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  </div>
  
  </div>
 
  <button type="submit" class=" btn-donate" style="margin-left:440px;">Submit</button>
</form>
          </div>
       
      </div>
    </div>
      <!-- card ends -->
        </div>
    </div>
</div>


  
</body>
</html> 