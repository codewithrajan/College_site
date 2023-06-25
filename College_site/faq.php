<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/images/1.jpg" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/photo/pic1.jpg">
  <title>Faq|Rajan Singh College</title>
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/all.css">
  <script src="js/all.js"></script>
</head>

<body>
  <script src="js/bootstrap.bundle.js"></script>
  <?php require('nav.inc.php') ?>


  <div class="container-fluid">
    <h1 class="text-info text-center mb-3">
      Frequently Ask Questions</h1>
  </div>


  <div class="container mb-3">
    <div class="accordion" id="accordionPanelsStayOpenExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            Q1.How can I apply admission form?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
          <div class="accordion-body">
            First of all,you need a account on this site.After creating a account you click to addmision and check a check box your admissin form ready .Becare full when apply form.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            Q2.How can create a account?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
          <div class="accordion-body">
            For apply admissin form you need a account.For create a account click <a href="login.php">login</a> after
            clicking you click <a href="register.php"> Register</a> and fill your input boxes and enter email and password and click Login Button.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            Q3.What is last date of apply admission online?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
          <div class="accordion-body">
            Last date for apply admission form is 23/07/2021.So,I want suggest today apply now click on <a href="admissin.php"> apply </a> button
          </div>
        </div>
      </div>

    </div>
  </div>
  

  <?php require('footer.inc.php') ?>












</body>

</html>