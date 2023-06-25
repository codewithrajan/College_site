  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="images/images/1.jpg" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">
                          <h3>Home</h3>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="aboutus.php">
                          <h3>About</h3>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="contactus.php">
                          <h3>Contact</h3>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="admission.php">
                          <h3> Admission </h3>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="images.php">
                          <h3>Images</h3>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="courses.php">
                          <h3>Courses</h3>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="event.php">
                          <h3>Event</h3>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="faq.php">
                          <h3>Faq</h3>
                      </a>
                  </li>
                  <!-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="courses.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <h3 class="text-dark"> Courses</h3>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="bca.php">
                                  <h3>BCA</h3>
                              </a></li>
                          <li><a class="dropdown-item" href="mca.php">
                                  <h3>MCA</h3>
                              </a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="othercourses.php">
                                  <h3>Other Courses</h3>
                              </a></li>
                      </ul>
                  </li> -->


                  <!-- <li class="nav-item">
                      <?php

                        if (isset($_SESSION['loggedin'])) { ?>
                          <a href="logout.php" class="text-success">
                              <h3>      Logout</h3>
                          </a>
                      <?php  }  ?>

                      <?php if (!isset($_SESSION['loggedin'])) { ?>
                          <a href="login.php" class="text-success">
                              <h3>       Login <br>
                                  <h3>
                          </a>
                      <?php  }  ?>

                  </li> -->
              </ul>

              <?php

                if (isset($_SESSION['loggedin'])) { ?>
                  <a href="logout.php" style="text-decoration:none;" class="text-success">
                      <h3> Logout</h3>
                  </a>
              <?php  }  ?>

              <?php if (!isset($_SESSION['loggedin'])) { ?>
                  <a href="login.php" class="text-success" style="text-decoration:none;">
                      <h3> Login <br>
                          <h3>
                  </a>
              <?php  }  ?>




          </div>
      </div>

  </nav>

  <div class="container-fluid">
  
          <marquee scrolldelay="50" behavior="alternate" direction="right" style="color:aqualight;font-size:35;">
             <h4 style="color: rgb(80%, 45%, 78%);">Welcome to Rajan Singh College</h4> </marquee>
      

     
          <marquee scrolldelay="50" onmouseover="this.stop();" onmouseout="this.start();" behavior="alternate" direction="left" style="color:aqualight;font-size:35;">
             <h5><a href="admission.php" style="color:green;text-decoration:none;">Admission is started click here to apply</a></h5> </marquee>
      
  </div>