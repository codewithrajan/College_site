<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
?>

<?php
require("connection.inc.php");
$id = $_SESSION['id'];
// echo $id;
$result = mysqli_query($con, "select *from students where id='$id'");
$row = mysqli_fetch_assoc($result);
// echo var_dump($row);

?>
<?php
require("connection.inc.php");
$alerterr = "";
if (isset($_POST['submit'])) {
    $id = $row['id'];
    $res = mysqli_query($con, "select *from basicdetails where bid='$id'");
    if (mysqli_num_rows($res) == 1) {
        $alerterr = "your are already fill up admission form";
    } else {

        $bid = $row['id'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $fathername = $_POST['fathername'];
        $mothername = $_POST['mothername'];

        $dob = $_POST['dob'];
        $sql = "insert into basicdetails
   (bid,fname,mname,lname,fathername,mothername,dob) 
   values('$bid','$fname','$mname','$lname','$fathername','$mothername','$dob')";
        $result = mysqli_query($con, $sql);
        // echo var_dump($result);
        if (!$result) {
            echo mysqli_error($con);
        }

        $aid = $row['id'];
        $gender = $_POST['gender'];
        $cast = $_POST['cast'];
        $religion = $_POST['religion'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $sql = "insert into address
    (aid,gender,cast,religion,country,state,district,address,pincode)
    values('$aid','$gender','$cast','$religion','$country','$state','$district','$address','$pincode')";
        if (!mysqli_query($con, $sql)) {
            echo mysqli_error($con);
        }

        $qid = $row['id'];
        $exampassed = $_POST['exampassed'];
        $boardname = $_POST['boardname'];
        $schoolname = $_POST['schoolname'];
        $passingyear = $_POST['passingyear'];
        $totalmarks = $_POST['totalmarks'];
        $obtainmarks = $_POST['obtainmarks'];

        $sql = "insert into qualification(qid,exampassed,boardname,schoolname,passingyear,totalmarks,obtainmarks) values
    ('$qid','$exampassed','$boardname','$schoolname','$passingyear','$totalmarks','$obtainmarks')";
        if (!mysqli_query($con, $sql)) {
            echo mysqli_error($con);
        }

        $did = $row['id'];
        $photo = $_POST['photo'];
        $shindi = $_POST['shindi'];
        $senglish = $_POST['senglish'];
        $marksheet = $_POST['marksheet'];

        $sql = "insert into documents(did,photo,shindi,senglish,marksheet) 
    values('$did','$photo','$shindi','$senglish','$marksheet')";
        if (!mysqli_query($con, $sql)) {
            echo mysqli_error($con);
        }
        echo "<script>alert('you are successfull fill the form ')</script>";

        header("location:index.php");
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
    <link rel="apple-touch-icon" href="images/photo/pic1.jpg">

    <title>Admission form|Rajan Singh College</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/all.css">
    <script src="js/all.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

</head>

<body style="background-color:aqua;" onload="GenerateCaptcha();">
    <!-- <h1 onload="display()"></h1> -->
    <script src="js/bootstrap.bundle.js"></script>

    <?php require('nav.inc.php') ?>
    <p id='demo'></p>

    <div class="container text-center text-success">
        <h1>Rajan Singh College</h1>
        <h2 class="text-danger">Admission Form</h2>
    </div>
    <div class="container">
        <form method="POST" id="form1" name="form1">
            <div class="container text-center">
                <legend class="bg-dark text-light text-ceter">Basic Details</legend>
            </div>
            <h4>
                <div class="row">
                    <div class="col col-md-4">
                        <label for="firstname"> First Name</label>
                        <input type="text" id='fname' name="fname" class="form-control" placeholder="First Name" aria-label="First name" required>
                    </div>
                    <div class="col col-md-4">
                        <label for="middlename">Middle Name</label>
                        <input type="text" name='mname' class="form-control" placeholder="Middle Name" aria-label="Middle Name" value="<?php echo $row['name'] ?>
                            ">
                    </div>
                    <div class="col col-md-4">
                        <label for="lastname">Last Name</label>
                        <input type="text" name='lname' class="form-control" placeholder="Last Name" aria-label="Last Name" required>
                    </div>
                </div>
            </h4>
            <h4>
                <div class="row">
                    <div class="col col-md-6">
                        <label for="fathername">Father's Name</label>
                        <input required type="text" name='fathername' class="form-control" placeholder="Father's Name" aria-label="Father's Name">
                    </div>
                    <div class="col col-md-6">
                        <label for="mothername">Mother's Name</label>
                        <input required type="text" name='mothername' class="form-control" placeholder="Mother's Name" aria-label="Mother's name">
                    </div>



                </div>
            </h4>
            <h4>
                <div class="row">
                    <div class="col col-md-6">
                        <label for="date of birth">Date of birth</label>
                        <input required type="date" name='dob' class="form-control" aria-label="date of birth">
                    </div>

                    <div class="col col-md-6">
                        <label for="gender">Gender</label><br>

                        <select name="gender" id="gender">
                            <option value="none" selected>select option</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>

                    </div>

                </div><br>
            </h4>
            <h4>
                <div class="row">
                    <div class="col col-md-6">
                        <label for="cast">Cast</label>
                        <select name="cast" id="cast">
                            <option value="none" selected>select option</option>
                            <option value="sc">sc</option>
                            <option value="st">st</option>
                            <option value="obc">obc</option>
                            <option value="general">general</option>
                            <option value="other">other</option>
                        </select>

                    </div>
                    <div class="col col-md-6">
                        <label for="religion">Religion </label>
                        <select name="religion" id="religion">
                            <option value="none" selected>select option</option>
                            <option value="hindu">hindu</option>
                            <option value="muslim">Muslim</option>
                            <option value="christian">christian</option>
                            <option value="sikh">sikh</option>
                            <option value="other">other</option>
                        </select>
                    </div>

                </div><br>
            </h4>
            <h4>
                <div class="row">

                    <div class="col col-md-6">
                        <label for="country">contry</label>
                        <select name="country" id="country">
                            <option value="none">select option</option>
                            <option value="india">india</option>
                            <option value="us">us</option>
                            <option value="england">england</option>
                            <option value="other">other</option>
                        </select>
                    </div>
                    <div class="col col-md-6">
                        <label for="state">state</label>
                        <select name="state" id="state">
                            <option value="none">select option </option>
                            <option value="asham">asham</option>
                            <option value="bihar">bihar</option>
                            <option value="utter pradesh">utter pradesh</option>
                            <option value="punjab">panjab</option>
                            <option value="hariyana">hariyana</option>
                            <option value="gujrat">gujrat</option>
                            <option value="madhya pradesh">madhya pradesh</option>
                            <option value="goa">goa</option>
                            <option value="delhi">delhi</option>
                            <option value="uttrakhand">uttrakhand</option>
                            <option value="sikkim">sikkim</option>
                            <option value="west bengal">west bengal</option>
                            <option value="andhrapradesh">andhrapradesh</option>
                            <option value="telangna">telangna</option>
                            <option value="karnatka">karnatka</option>
                            <option value="tamilnadu">tamilnadu</option>
                            <option value="keral">keral</option>
                            <option value="maharastra">maharastra</option>

                        </select>
                    </div>

                </div>
            </h4>
            <h4>
                <div class="row">
                    <div class="col col-md-5">
                        <label for="district">district</label>
                        <input type="text" name="district" placeholder="district" class="form-control" aria-label="district" required>
                    </div>
                    <div class="col col-md-2">
                        <label for="district">pin code</label>
                        <input required type="text" name="pincode" placeholder="pin code" class="form-control" aria-label="pincode">
                    </div>

                    <div class="col col-md-5">
                        <label for="address">address</label>
                        <input required type="text" name="address" placeholder="address" class="form-control" aria-label="address">
                    </div>


                </div>
            </h4>
            <h4>
                <div class="row">
                    <div class="col col-md-6">
                        <label for="eamil">Email Id</label>
                        <input type="email" name='email' disabled class="form-control" placeholder="email id" aria-label="email" value="<?php echo $row['email'] ?>
                            ">
                    </div>
                    <div class="col col-md-6">
                        <label for="mobile">Mobile Number</label>
                        <input type="number" disabled name='mobile' class="form-control" placeholder="mobile number" aria-label="mobile" value="<?php echo $row['mobile'] ?>">
                    </div>



                </div>
            </h4>
            <fieldset>
                <legend class="text-center bg-dark text-light">Educational details</legend>

            </fieldset>
            <h4>
                <div class="row">
                    <div class="col col-md-3">
                        <label for="exampassed">exampassed</label>

                        <select name="exampassed" id="exampassed">
                            <option value="matric">matric</option>
                            <option value="inter">inter</option>
                            <option value="graguation">graguation</option>
                        </select><!-- <input type="de" name='dob' class="form-control" aria-label="date of birth"> -->
                    </div>

                    <div class="col col-md-4">
                        <label for="boardname">board name</label><br>
                        <input required type="text" name='boardname' class="form-control" aria-label="board name">
                    </div>
                    <div class="col col-md-5">
                        <label for="schoolname">School Name</label><br>
                        <input required type="text" name='schoolname' class="form-control" aria-label="school name">
                    </div>

                    <h4>
                        <div class="row">
                            <div class="col col-md-2">
                                <label for="passingyear">passing year</label>
                                <select name="passingyear" id="passingyear">
                                    <option value="none">select option</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>

                                </select>
                            </div>

                            <div class="col col-md-4">
                                <label for="totalmarks">total marks</label>
                                <input required type="text" name='totalmarks' class="form-control" aria-label="total marks">
                            </div>

                            <div class="col col-md-4">
                                <label for="obtainmarks">obtion marks</label>
                                <input required type="text" name='obtainmarks' class="form-control" aria-label="obtain marks">
                            </div>

                        </div><br>
                    </h4>

                </div>
            </h4>
            <fieldset>
                <legend class="text-center bg-dark text-light">Uploads</legend>

                <h4>
                    <div class="row">
                        <div class="col col-md-6">
                            <label for="photo">Select photo</label>
                            <input required type="file" id="photo" name="photo">

                        </div>
                        <div class="col col-md-6">
                            <label for="senglish">Select english signature</label>
                            <input required type="file" id="senglish" name="senglish">

                        </div>
                    </div>
                </h4>
                <h4>
                    <div class="row">
                        <div class="col col-md-6">
                            <label for="shindi">Select hindi signature</label>
                            <input required type="file" id="shindi" name="shindi">

                        </div>
                        <div class="col col-md-6">
                            <label for="marksheet">Select marksheet</label>
                            <input required type="file" id="marksheet" name="marksheet">

                        </div>

                    </div>
                </h4>
            </fieldset>
            <div>


                <h5> Enter the Captcha Text:</h5>

                <input type="text" id="txtCompare" />
                <input type="text" id="txtCaptcha" style="text-align: center; border: none; font-weight: bold; font-size: 20px; font-family: Modern" />
                <input type="button" id="btnrefresh" value="Refresh" onclick="GenerateCaptcha();" />


                <br />
                <br />
            </div>
            <div class="container">

                <h4> <span class="text-danger"><?php echo "$alerterr"; ?></span>
                </h4>
                <h3><input type="submit" name="submit" value="submitform" class="bg-success" onclick=" return formvalidate()">
                    <input type="reset" onclick="GenerateCaptcha();" value='reset' class="bg-danger">
                </h3>
            </div>
        </form>

    </div>


    <script>
        function formvalidate() {

            if (document.getElementsByName("gender")[0].value == "none") {
                alert("please select gender");
                return false;
            }
            if (document.getElementsByName("cast")[0].value == "none") {
                alert("please select cast");
                return false;
            }


            if (document.getElementsByName("religion")[0].value == "none") {
                alert("please select religion");
                return false;
            }
            if (document.getElementsByName("country")[0].value == "none") {
                alert("please select country");
                return false;
            }
            if (document.getElementsByName("state")[0].value == "none") {
                alert("please select state");
                return false;
            }
            if (document.getElementsByName("exampassed")[0].value == "none") {
                alert("please select exampassed");
                return false;
            }
            if (document.getElementsByName("passingyear")[0].value == "none") {
                alert("please select passing year");
                return false;
            }


            if (ValidCaptcha() == false) {
                alert("enter valid captch");
                return false;
            }


        }

        function GenerateCaptcha() {
            var chr1 = Math.ceil(Math.random() * 10) + '';
            var chr2 = Math.ceil(Math.random() * 10) + '';
            var chr3 = Math.ceil(Math.random() * 10) + '';

            var str = new Array(4).join().replace(/(.|$)/g, function() {
                return ((Math.random() * 36) | 0).toString(36)[Math.random() < .5 ? "toString" : "toUpperCase"]();
            });
            var captchaCode = str + chr1 + ' ' + chr2 + ' ' + chr3;
            document.getElementById("txtCaptcha").value = captchaCode
        }

        /* Validating Captcha Function */
        function ValidCaptcha() {
            var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
            var str2 = removeSpaces(document.getElementById('txtCompare').value);

            if (str1 == str2) return true;
            return false;
        }

        /* Remove spaces from Captcha Code */
        function removeSpaces(string) {
            return string.split(' ').join('');
        }
    </script>


    <?php require('footer.inc.php') ?>

</body>

</html>