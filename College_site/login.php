<?php
require("connection.inc.php");
$err = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    // password_verify($password,$row['pass'])
    //$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $password = $_POST['password'];
    $sql = "select *from students where email='$email'";
    $res = mysqli_query($con, $sql);

    // echo "$res";
    $num = mysqli_num_rows($res);
    if ($num == 1) {
        $row=mysqli_fetch_assoc($res);
        if($email=$row['email'] && password_verify($password,$row['password'])){
            session_start();
            //$row = mysqli_fetch_assoc($res);
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $email;
            $_SESSION['id'] = $row['id'];
            header("location: admission.php");
        }
        else
        {
            echo"<script>alert('worng password')</script>";
            $err="your password is worng";
        }
        
    } else {
        $err="<script>alert('You are not register')</script>";
        $err="you are not register please click on register link to register";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" href="images/images/1.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/photo/1.jpg">
    <title>Login|Rajan Singh College</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
  <script src="js/all.js"></script>
</head>

<body style="background-color: rgb(5%, 30%, 5%);">
    <script src="js/bootstrap.bundle.js"></script>
    <?php require('nav.inc.php') ?>
    <h2 class="text-center text-danger">This is Login page</h2>
    <div class="container">
        <div class="sufee-login d-flex align-content-center flex-wrap ">
            <div class="container">
                <div class="login-content">
                    <div class="login-form mt-150">
                        <form method="POST">
                            <div class="form-group">
                                <label><h3>Email Id</h3></label>
                                <input type="text" name="email" class="form-control" placeholder="Username" required><br>
                            </div>
                            <div class="form-group">
                                <label><h3 >Password</h3></label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required><br>
                            </div>
                            <span class="text-danger "><b><?php echo "$err"; ?></b></span><br>
                            <input type="submit" name="submit" value="Login" class="btn btn-success btn-flat m-b-30 m-t-30">
                            <!-- <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Login</button> -->
                        </form>

                        <!-- <div class="field_error"><?php echo $msg ?></div> -->
                        <h3 class="text-dark"> New user click on
                            <a href="register.php" class="text-primary">
                                Register</a> for sign up
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <?php require('footer.inc.php') ?>

</body>

</html>