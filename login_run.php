<?php

require('connection.php');

if (isset($_POST['submit'])) {
    $usern = $_POST['usern'];
    $passw = $_POST['passw'];
    
    $query = "SELECT * FROM users WHERE usern='$usern' AND passw= '".md5($passw)."' AND verify_status=1 ";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);

    if (mysqli_num_rows($result) > 0 ) {
        $_SESSION["usern"] = $usern;
        session_start();


        $user_type = strtoupper($row['user_type']);
        switch ($user_type) {
            case 'ADMIN':
                header("Location: admin/index.php");
                /* echo $user_type ; */
                break;

            default:
                header("Location: index.php");
                /* echo $user_type ; */
        }
        $_SESSION["usern"] = $usern;
    } else {
        echo "<h2>You enetr the worng Username/Passowrd or The account is not been authenticated.</h2>";
        echo nl2br("<h3><a href='login.php'>Click here</a> to go back to Log-in page.</h3");
    }
} else {
    echo "Eror 404";
}
