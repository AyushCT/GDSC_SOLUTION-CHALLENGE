<?php include'header.php';
?>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            // header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
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
        <h1 class="login-title mt-5 text-center">Login</h1>
         <div class="form-group mt-3">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Enter your Username">
    
  </div>
  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password"  id="exampleInputPassword1" placeholder="Password">
  </div>
        <!-- <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/> -->
        <input type="submit" value="Login" name="submit" class="btn-login mt-3" style="border:none;"/>
        <p class="link mt-3"><a href="registration.php">New Registration ?</a></p>
  </form>
    </div>
   </div>
   </div>
  
<?php
    }
?>
</body>
</html>