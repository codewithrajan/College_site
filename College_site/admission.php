<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
?>

<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/images/1.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/photo/pic1.jpg">
    <title>Admission|Rajan Singh College</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/all.css">
    <script src="js/all.js"></script>
</head>

<body style="background-color:aqua;">
    <script src="js/bootstrap.bundle.js"></script>
    <?php require('nav.inc.php') ?>
    <div class="container">
        <h1 class="text-info text-center">Admssion Process</h1>
    </div>

    <div class="container bg-light">
        <h3 class="text-danger">Firstly read the following contain be carefully and then apply online</h3>
        <ol class=" text-primary ">
            <div class="text-dark ">
                <li>
                    <h4>
                        The students must passed 10<sup>th</sup> or 12<sup>th</sup>
                        from any recogniged board with minimum 50% marks, they can apply </h4>
                </li>
            </div>
            <div class="text-dark text-align-justify">
                <li>
                    <h4>We have differnt courses for students such as I.SC, I.COM ,I.A, B.A, B.COM, B.SC, B.SC(Agriculture) etc</h4>
                </li>
            </div>

            <div class="text-dark text-align-justify">
                <li>
                    <h4>First of all, you create a account for Admission,for ites click login button and sing up.</h4>
                </li>
            </div>

            <div class="text-dark text-align-justify">
                <li>
                    <h4>After create a account you needes some document, necessary document are given blew</h4>
                    <ul>
                        <li>
                            <h5>A valid email Id</h5>
                        </li>
                        <li>
                            <h5>A valid Mobile Number</h5>
                        </li>
                        <li>
                            <h5>10 <sup>th</sup> and 12 <sup>th</sup> marks sheet (jpg/jpeg with 80kb to 100kb)</h5>
                        </li>
                        <li>
                            <h5>recent passport size photo( in jpg/jpeg formate between 20kb to 100kb)</h5>
                        </li>
                        <li>
                            <h5>Signature both hindi and english( in jpg/jpeg formate 20kb to 100kb</h5>
                        </li>
                        <li>
                            <h5>Admit card(jpeg/jpg formate 20kb to 100kb</h5>
                        </li>

                    </ul>
                </li>
            </div>

            <div class="text-dark text-align-justify">
                <li>
                    <h4>after filling your details please check again for any error</h4>
                </li>
            </div>

            <div class="text-dark text-align-justify">
                <li>
                    <h4>after once submited your form then you cann't be edit so be carful</h4>
                </li>
            </div>

            <div class="text-dark text-align-justify">
                <li>
                    <h4>please click on Apply Online button for admisstion</h4>
                </li>
            </div>


        </ol>
        <h4>
            <div class="container">
                <input type="checkbox" name="checkbox" value="success">    please tick out the checkbox
            </div>
        </h4>


    </div>
    <a href="form.php">
        <div class="btn btn-success">
            <h3 onclick=" return validate()">Apply Online</h3>
        </div>
    </a>



    <script>
        function validate() {
            var x = document.getElementsByName('checkbox')[0].checked;
            if (x == false) {
                alert("please check box");
                return false;
            } else {

                return true;
            }

        }
    </script>
    <?php require('footer.inc.php') ?>

</body>

</html>