<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = $_SESSION['username'];
        $donation_value    = stripslashes($_REQUEST['donation_value']);
        $donation_value    = mysqli_real_escape_string($con, $donation_value);
       
        $query    = "INSERT into `donations` (username, donation_value)
                     VALUES ('$username', '$donation_value')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            header('Location: http://localhost/GDSC/dashboard.php');
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {}
?>
