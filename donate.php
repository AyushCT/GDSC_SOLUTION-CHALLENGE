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
        
        <div class="row">
            <h2 class="text-center text-light">Plz Select the Asset you want to Donate</h2>
          <div class="col-4  mt-5">
              <div class="card text-center text-light" style="width: 20rem; background-color: transparent;border:none; margin-left:10px;">
              <i class='fas fa-dollar-sign ' style='font-size:50px;color:white'></i>
              <div class="card-body">
              <h5 class="card-title" style="font-weight:800;font-size:20px;">Sponsor School Assets</h5>
              <br>
            
              </div>
              </div>
          </div>
          <div class="col-4">
              <div class="card text-center text-light text-justify mt-5" style="width: 20rem; background-color: transparent;border:none;">
              <i class='fa fa-video-camera ' style='font-size:50px;color:white'></i>
              <div class="card-body">
              <h5 class="card-title" style="font-weight:800;font-size:20px;">Video Lectures</h5>
            
              </div>
              </div>
          </div>
          <div class="col-4">
              <div class="card text-center text-light text-justify mt-5" style="width: 20rem; background-color: transparent;border:none;">
              <i class='fas fa-laptop-code' style='font-size:50px;color:white'></i>
              <div class="card-body">
              <h5 class="card-title" style="font-weight:800;font-size:20px;">E-Books</h5>
            
              </div>
              </div>
          </div>
          
        </div>

        <div class="row">
    
          <div class="col-4  mt-">
              <div class="card text-center text-light" style="width: 20rem; background-color: transparent;border:none; margin-left:10px;">
              <i class='fas fa-book ' style='font-size:50px;color:white'></i>
              <div class="card-body">
              <h5 class="card-title" style="font-weight:800;font-size:20px;">Books</h5>
              <br>
           
              </div>
              </div>
          </div>
          <div class="col-4">
              <div class="card text-center text-light text-justify " style="width: 20rem; background-color: transparent;border:none;">
              <i class='fa fa-money ' style='font-size:50px;color:white'></i>
              <div class="card-body">
              <h5 class="card-title" style="font-weight:800;font-size:20px;">Money</h5>
             
              </div>
              </div>
          </div>
          <div class="col-4">
              <div class="card text-center text-light text-justify " style="width: 20rem; background-color: transparent;border:none;">
              <i class='far fa-handshake ' style='font-size:50px;color:white'></i>
              <div class="card-body">
              <h5 class="card-title" style="font-weight:800;font-size:20px;">Others</h5>
            
              </div>
              </div>
          </div>
          
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-4">
            <form action="checkDonation.php" method="POST">
       
       <div class="form-group">
       
        <select class="form-select" aria-label="Default select example" style="margin-left:100px;">
        <option selected value="SponsorSchoolAssets" name="donation_value">Sponsor School Assets</option>
        <option value="E-Books">E-Books</option>
        <option value="VideoLectures">Video Lectures</option>
        <option value="Books">Books</option>
        <option value="Money">Money</option>
        <option value="Others">Others</option>
        </select>
       </div>
      
       <button type="submit" class=" btn-donate" style="margin-left:150px;margin-top:40px;">Submit</button>
     </form>
            </div>
            <div class="col-4"></div>
        </div>
       
      </div>
    </div>
      <!-- card ends -->
        </div>
    </div>
</div>


  
</body>
</html> 