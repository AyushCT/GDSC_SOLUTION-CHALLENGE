<?php include'header.php' ;
?>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            header('Location: http://localhost/GDSC/login.php');
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>

<div class="container">
   <div class="row border mt-5 shadow-lg">
   <div class="col-5">
      <img src="img/5836.jpg" alt=""width="500">
    </div>
    <div class="col-7">
    <form class="form" method="post" name="login">
        <h1 class="login-title mt-5 text-center">Registration</h1>
         <div class="form-group mt-3">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
    
  </div>
  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Username</label>
    <input type="text" class="form-control" name="username"  id="exampleInputPassword1" placeholder="Enter your Username">
  </div>
  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password"  id="exampleInputPassword1" placeholder="Password">
  </div>
        <!-- <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/> -->
        <input type="submit" value="Login" name="submit" class="btn-login mt-3" style="border:none;"/>
        <p class="link mt-3"><a href="login.php">Already Registered?</a></p>
  </form>
    </div>
   </div>
   </div>




 
    <!-- <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>  -->
<?php
    }
?>
</body>
</html>