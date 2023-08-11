<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link type="text/css" rel="stylesheet" href="ccs/login.css" />

<head>
    <title>Log In</title>
</head>
<style>


  #logo {
    float:left;
    margin-top: 8px;
    width: 110px;
  }
  #logo2 {
    float:right;
    
    width: 110px;
    margin-right: 40px;
    margin-top: 10px; 
  }

  h1 {
 font-family:Baskerville,Times,'Times New Roman',serif;
 font-size: 50px;
 color:#589017;
 font-variant:small-caps;
 text-align:center;
 font-weight:bold;

 }



</style>
<body>


    <div class="header">
    
  <img id="logo" src="img/valen.png" >
  <img id="logo2" src="img/logo.png" >
        <h1 style="color: #ECEFF1;">ONLINE BARANGAY SERVICES</h1>
    </div>
    
        <?php
        if (isset($_SESSION['status'])) {
        ?>
            <div class="alert alet-success">
                <h5><?= $_SESSION['status']; ?></h5>
            </div>
        <?php
            unset($_SESSION['status']);
        }
        ?>
    
    <div>
        <form action="login_run.php" method="POST">

            <?php
            if (isset($_SESSION['status'])) {
                echo "<h4>" . $_SESSION['status'] . "</h4>";
                unset($_SESSION['status']);
            }
            ?>
            <table>
                <tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="usern" id="usern" placeholder="Username" required></td>

                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="passw" id="passw" placeholder="Password" required></td>
                </tr>
            </table>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Log in" class=buttonlogin></td>
            <hr>
            <br>You don't have an account?<a href="register.php"> Click Here</a></br>
            </tr>
        </form>
    </div>
</body>

</html>