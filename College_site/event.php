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
    <title>Event|Rajan Singh College</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <script src="js/all.js"></script>
</head>

<body>
    <script src="js/bootstrap.bundle.js"></script>
    <?php require('nav.inc.php') ?>

    <div class="container ">
        <h1 class="text-center text-success mb-3">
            Upcoming Event
        </h1>
        <div class="container h3 text-danger">Gandhi Jee Birthday</div>
        <div class="row">
            <div class="col col-md-6">
                <div class="h4" style="text-align:justify;">
                    Mohandas Karamchand Gandhi was born on October 2, 1869 in Porbandar, India. He became one of the most respected spiritual and political leaders of the 1900's. Gandhi helped free the Indian people from British rule through nonviolent resistance, and is honoured by Indians as the father of the Indian Nation.</div>

            </div>
            <div class="col co-md-6">
                <a href="images/events/gandhiji.jpg">
                    <img src="images/events/gandhiji.jpg" alt="" style="height: 200px; width:300px;" class="img-fluid rounded float-end">
                </a>
            </div>
        </div>
        <div class="container h3 text-danger">Independence Day</div>
        <div class="row">
            <div class="col col-md-6">
                <div class="h4" style="text-align:justify;">
                    Independence Day is celebrated with great joy across the country. People hold meetings, fly the tricolour flag, and sing the National Anthem.
                </div>
            </div>
            <div class="col co-md-6">
                <a href="images/events/independence.jpg">
                    <img src="images/events/independence.jpg" alt="" style="height: 200px; width:300px;" class="img-fluid rounded float-end">
                </a>
            </div>
        </div>


    </div>
    <div class="container mb-3">
        <h1 class="text-center text-success">Previous Event</h1>
        <div class="container h3 text-danger">Festival Of Colors</div>
        <div class="row">
            <div class="col col-md-6">
                <div class="h4" style="text-align:justify;">
                    Holi is known as the festival of colours. It is one of the most important festivals in India. Holi is celebrated each year with zeal and enthusiasm in the month of March by followers of the Hindu religion. Those who celebrate this festival, wait for it every year eagerly to play with colours and have delectable dishes.</div>

            </div>
            <div class="col co-md-6">
                <a href="images/events/color.jpg">
                    <img src="images/events/color.jpg" alt="" style="height: 200px; width:300px;" class="img-fluid rounded float-end">
                </a>
            </div>
        </div>
    </div>

    <?php require('footer.inc.php') ?>

</body>

</html>