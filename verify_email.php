<?php
session_start();
include('connection.php');

if(isset($_GET['token']))
{
    $toket = $_GET['token'];
    $verify_query= "SELECT verify_token,verify_status FROM users WHERE verify_token = '$toket' LIMIT 1";
    $verify_query_run = mysqli_query($con, $verify_query);

    if(mysqli_num_rows($verify_query_run) > 0)
    {
        
      $row = mysqli_fetch_array($verify_query_run);
      if($row['verify_status'] == '0')
      {
        $clicked_toket = $row['verify_token'];
        $update_query = "UPDATE users SET verify_status = '1' WHERE verify_token='$clicked_toket' LIMIT 1";
        $update_query_run = mysqli_query($con,$update_query);
        if($update_query_run)
        {
            $_SESSION['status'] = "You are verify now! please log in";
            header("Location: login.php");
            exit(0);
        }
        else
        {
            $_SESSION['status'] = "Verifycation Failed";
            header("Location: login.php");
            exit(0);
        }
      }
      else
      {
        $_SESSION['status'] = "This token is doest exist";
        header("Location: login.php");
      }
    }
    else
    {
        $_SESSION['status'] = "Not Allowed";
        header("Location: login.php");
    }
    
}
else
{
    $_SESSION['status']= "Not Allowed lmao";
    header("Location: login.php");
}

?>