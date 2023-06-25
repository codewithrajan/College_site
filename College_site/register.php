<?php
session_start();
?>
<?php
require('connection.inc.php');
$emailerr = " ";
if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $check=mysqli_query($con, "select *from students where email='$email'");
    $row=mysqli_num_rows($check);
    if ($row==1) {
        $emailerr = "You are already register";
    } else {
        $sql = "insert into students(name,email,mobile,address,password)
       values('$name','$email','$mobile','$address','$password')";
        if (mysqli_query($con, $sql)) {
            
            header("location:login.php");
        } else {
            echo " some problem " . mysqli_connect_error();
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/images/1.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/images/1.jpg">
    <title>Sing Up|Rajan Singh College</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
  <script src="js/all.js"></script>
</head>

<body>
    <script src="js/bootstrap.bundle.js"></script>
    <?php require('nav.inc.php') ?>
    <h2 class="text-center text-danger">This is registration page</h2>
    <div class="sufee-login d-flex align-content-center flex-wrap ">


        <div class="container">
            <div class="sufee-login d-flex align-content-center flex-wrap ">
                <div class="container">
                    <div class="login-content">
                        <div class="login-form mt-150">
                            <form name='register' method="POST">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter name" required><br>
                                </div>
                                <div class="form-group">
                                    <label>Your Email
                                        <span class="text-danger">
                                            <b>
                                                <?php echo "$emailerr"; ?></b>

                                        </span></label>
                                        
                                    <input type="email" name="email" class="form-control" placeholder="Enter email id" required><br>

                                </div>
                                <div class="form-group">
                                    <label> Your Mobile Number</label>
                                    <input type="text" name="mobile" class="form-control" placeholder="Enter mobile number" required><br>
                                </div>

                                <div class="form-group">
                                    <label>Your Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Enter address" required><br>
                                </div>
                                <div class="form-group">
                                    <label>Create Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Create Password" required><br>
                                </div>

                                <input type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30" value="Register">
                                <!-- <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Resister</button> -->
                            </form>

                            <!-- <div class="field_error"><?php echo $msg ?></div> -->
                            <h3 class="text-dark">If you are already register then click on
                                <a href="login.php" class="text-primary">
                                    login</a> for login
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <script>
        function validate() {
            var name = document.getElementsById("name").value
            if (name == "") {
                alert("please enter correct name");
                return false;
            } else {
                alert("hello");
                return true;
            }
        }
    </script>
    <?php require('footer.inc.php') ?>
</body>

</html>