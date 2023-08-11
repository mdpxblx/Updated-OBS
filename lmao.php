<?php

use LDAP\Result;

  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'obs');
  
  $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if(!$con)
    {
        echo"unable to establish connect".mysqli_error();
    }
    
        $db= mysqli_select_db('obs',$con);
    if(!$db)
    {
    echo"data base not found".mysqli_error();
    }
    if(isset($_POST['submit']))
    {
    $user_type=$_POST['user_type'];
    $usern=$_POST['username'];
    $passww=$_POST['password'];

    $query= "SELECT * FROM users WHERE username='$usern' AND password='$passw' AND user_type='$user_type' ";
    $result=mysqli_query($query);

    while($row=mysqli_fetch_array($result))
    {
        if($row['username']== $usern && ['password']== $passw && ['user_type']== 'Admin' )
        {
            header("Location: admin.php");
        }
        elseif($row['username']== $usern &&['password'] == $passw && ['user_type']== 'User' )
        {
            header("Location: user.php");
        }
    } 

    }
?>