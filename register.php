<div class="header__container">
    <img id="logo" src="img/valen.png" >
    <p> ONLINE BARANGAY SERVICES</p>
    <img id="logo2" src="img/logo.png" >
</div>
<?php
session_start();
require('connection.php');
$page_title = "Register";
include('includes/header.php'); ?>
<div class="center">
    <div class="container-fluid">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
            <div class="col-md-6">
                <div class="alert">
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
                </div>

<style>
/* .header__container{
    display: flex;
    justify-content: center;
    flex-direction: column;
    border: 1px solid black; 
    height: 200px;
    width: 200px auto;
}

#logo {
  margin-top: 8px;
  width: 110px;
  border: 1px solid black; 
  background-color: red;
  
}

#logo2 {
  width: 110px;
  margin-right: 40px;
  margin-top: 10px;
  border: 1px solid black; 
  background-color: red;
}

h1 {
font-family:Baskerville,Times,'Times New Roman',serif;
font-size: 50px;
color:#589017;
font-variant:small-caps;
text-align:center;
font-weight:bold;
background-color: red;
border: 1px solid black; 
width: ;
margin: 0;
} */
.card shadow{
    background-color: blue;
}


    .header__container{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background-color: red;
        }

        #logo, #logo2{
            width: 10rem;
            
        }

        p{
            font-family:Baskerville,Times,'Times New Roman',serif;
            padding-top: 2.5rem;
            font-size: 50px;
            color:gainsboro;
            font-variant:small-caps;
            text-align:center;
            font-weight:bold;
        }



</style>

</style>


                <div class="card shadow">
                    <div class="card-header">
                        <h5>Registration Form</h5>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" autocomplete="off">
                            <!-- <div class="form-group mb-1 ">
                                <label for="">User Type</label>
                                <input type="text" name="user_type" value ="User" class="form-control"disabled>
                            </div> -->
                            <div class="form-group mb-1 ">
                                <label for="">First Name</label>
                                <input type="text" name="fname" id="fname" class="form-control" pattern="[^0-9]*" title="Please dont include number or special characters." placeholder="Enter your First here" required>
                            </div>
                            <div class="form-group mb-1 ">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" id="lname" class="form-control" pattern="[^0-9]*" title="Please dont include number or special characters." placeholder="Enter your Last Name here" required>
                            </div>
                            <div class="form-group mb-1 ">
                                <label for="">Email </label>
                                <input type="text" name="email" id="email" class="form-control" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="characters@characters.domain" placeholder="Enter your E-mail here" required>
                            </div>
                            <div class="form-group mb-1 ">
                                <label for="">Address </label>
                                <input type="text" name="addr" id="addr" class="form-control" placeholder="Enter your Address here" required>
                            </div>
                            <div class="form-group mb-1 ">
                                <label for="">Phone Number</label>
                                <input type="tel" name="pnum" id="pnum" class="form-control" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="(XXX)-YYY-ZZZZ" required>
                            </div>
                            <div class="form-group mb-1 ">
                                <label for="">Username</label>
                                <input type="text" name="usern" id="usern" class="form-control" placeholder="Enter your  Username"required>
                            </div>
                            <div class="form-group mb-1 ">
                                <label for="">Password</label>
                                <input type="password" name="passw" id="passw" class="form-control" placeholder="Enter your Password"required>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="register_btn" class="btn btn-primary">Register Now</button>
                                <hr>
                                <br>You have an account? <a href="login.php">Go back.</a></br>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>