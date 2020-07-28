<?php include "header.php" ?>

    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Departments
            </h1>
            <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="departments.php"> Departments</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start offered-service Area -->
    <section class="offered-service-area dep-offred-service" >
      <div class="container">
        <div class="row offred-wrap section-gap">
          <div class="col-lg-8 offered-left">
            <h1>Our Consultants</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>
            <img class="img-fluid pt-10 pb-10" src="img/department/a1.jpg" alt="">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>
            <h1 class="pt-120">Our Offered Services</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.
            </p>
            <div class="service-wrap row">
              <div class="col-lg-6 col-md-6">
                <div class="single-service">
                  <div class="thumb">
                    <img class="img-fluid" src="img/s1.jpg" alt="">
                  </div>
                  <a href="#">
                    <h4>Cardiac Treatment</h4>
                  </a>
                  <p>
                    inappropriate behavior Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="single-service">
                  <div class="thumb">
                    <img class="img-fluid" src="img/s2.jpg" alt="">
                  </div>
                  <a href="#">
                    <h4>Routine Checkup</h4>
                  </a>
                  <p>
                    inappropriate behavior Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="offered-right relative sidebar-offered-service">
              <div class="overlay overlay-bg"></div>
              <h3 class="relative text-white">Departments</h3>
              <ul class="relative dep-list">
                <li><a href="#">Pediatric Diagnosis</a></li>
                <li><a href="#">Outpatient Rehabilitation</a></li>
                <li><a href="#">Laryngological Functions</a></li>
                <li><a href="#">Ophthalmology Unit</a></li>
                <li><a href="#">Cardiac Unit</a></li>
                <li><a href="#">Outpatient Surgery</a></li>
                <li><a href="#">Gynaecological Wings</a></li>
              </ul>
              <a class="viewall-btn" href="#">View all Department</a>
            </div>


            <form class="form-wrap sidebar-appointment" id="scroll1" method="post">
              <h3 class="pb-20 text-center">Book an Appointment</h3>
              <input type="text" class="form-control" name="name" placeholder="Patient Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Name'" >
              <input type="text" class="form-control" name="phone" placeholder="Phone " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" >
              <input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" >
              <input id="datepicker1" name="dob" class="dates form-control"  placeholder="Date of Birth" type="date">
              <div class="form-select" id="service-select">
                <select name="dname">
                  <option data-display="">Disease Type</option>
                  <option value="1">Type One</option>
                  <option value="2">Type Two</option>
                  <option value="3">Type Three</option>
                  <option value="4">Type Four</option>
                </select>
              </div>
              <input id="datepicker2" name="appoint" class="dates form-control"  placeholder="Appointment Date" type="date">
              <textarea name="message" class="" rows="5" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required></textarea>
              <input type="submit" name="submit" value="Confirm Booking" class="primary-btn text-uppercase">
            </form>

            <div class="appointment-left sidebar-service-hr" style="margin-top:50px;">
                          <h3 class="pb-20">
                            Servicing Hours
                          </h3>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.
                          </p>
                          <ul class="time-list">
                            <li class="d-flex justify-content-between">
                              <span>Monday-Friday</span>
                              <span>09.00 am - 06.00 pm</span>
                            </li>
                            <li class="d-flex justify-content-between">
                              <span>Saturday</span>
                              <span>09.00 am - 06.00 pm</span>
                            </li>
                            <li class="d-flex justify-content-between">
                              <span>Sunday</span>
                              <span>Closed</span>
                            </li>
                          </ul>
                        </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>


<?php
    if(isset($_POST['submit'])){
      include ("dbcon.php");

      $pname=$_POST['name'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $dob=$_POST['dob'];
      $dname=$_POST['dname'];
      $appoint=$_POST['appoint'];
      $message=$_POST['message'];


      $qry="INSERT INTO `booking`(`pname`, `phone`, `email`, `dob`, `dname`, `appoint`, `message`)
            VALUES ('$pname','$phone','$email','$dob','$dname','$appoint','$message')";
      $run=mysqli_query($con,$qry);

      if($run==true){
        ?>
        <script>
          alert('You will recieve confirmation message on your phone number.\nThank you have a nice day.');
        </script>
        <?php
      }
    }
 ?>





    <!-- End offered-service Area -->

    <!-- Start team Area -->
      <section class="team-area pt-120">
          <div class="container">
              <div class="row d-flex justify-content-center">
                  <div class="menu-content pb-70 col-lg-7">
                      <div class="title text-center">
                          <h1 class="mb-10">Our Consultants</h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                      </div>
                  </div>
              </div>
              <div class="row justify-content-center d-flex align-items-center">
                  <div class="col-lg-3 col-md-6 single-team">
                      <div class="thumb">
                          <img class="img-fluid" src="img/t1.jpg" alt="">
                          <div class="align-items-end justify-content-center d-flex">
                <div class="social-links">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-behance"></i></a>
                </div>
                              <p>
                                inappropriate behavior
                              </p>
                              <h4>Andy Florence</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 single-team">
                      <div class="thumb">
                          <img class="img-fluid" src="img/t2.jpg" alt="">
                          <div class="align-items-end justify-content-center d-flex">
                <div class="social-links">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-behance"></i></a>
                </div>
                              <p>
                                inappropriate behavior
                              </p>
                              <h4>Andy Florence</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 single-team">
                      <div class="thumb">
                          <img class="img-fluid" src="img/t3.jpg" alt="">
                          <div class="align-items-end justify-content-center d-flex">
                <div class="social-links">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-behance"></i></a>
                </div>
                              <p>
                                inappropriate behavior
                              </p>
                              <h4>Andy Florence</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 single-team">
                      <div class="thumb">
                          <img class="img-fluid" src="img/t4.jpg" alt="">
                          <div class="align-items-end justify-content-center d-flex">
                <div class="social-links">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-behance"></i></a>
                </div>
                              <p>
                                inappropriate behavior
                              </p>
                              <h4>Andy Florence</h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End team Area -->

      <!-- Start brands Area -->
      <section class="brands-area">
          <div class="container">
              <div class="brand-wrap section-gap">
                  <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                      <div class="col single-brand">
                          <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                      </div>
                      <div class="col single-brand">
                          <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                      </div>
                      <div class="col single-brand">
                          <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                      </div>
                      <div class="col single-brand">
                          <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                      </div>
                      <div class="col single-brand">
                          <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End brands Area -->

  <?php include ('footer.php');?>
