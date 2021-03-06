<?php include "header.php" ?>


    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Contact Us
            </h1>
            <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.php"> Contact Us</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap">
      <div class="container">
        <div class="row">
          <div class="map-wrap" style="width:100%; height: 445px;" id="map" style="align:center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.8073637440752!2d76.36251251496589!3d30.356424181770024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391028ab86533db5%3A0x93cc1f72eae1c9a8!2sTIET%20-%20Thapar%20Institute%20of%20Engineering%20And%20Technology!5e0!3m2!1sen!2sin!4v1586366877837!5m2!1sen!2sin" width="1100" height="445" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>

          <div class="col-lg-4 d-flex flex-column address-wrap">
            <div class="single-contact-address d-flex flex-row">
              <div class="icon">
                <span class="lnr lnr-home"></span>
              </div>
              <div class="contact-details">
                <h5>Binghamton, New York</h5>
                <p>
                  4343 Hinkle Deegan Lake Road
                </p>
              </div>
            </div>
            <div class="single-contact-address d-flex flex-row">
              <div class="icon">
                <span class="lnr lnr-phone-handset"></span>
              </div>
              <div class="contact-details">
                <h5>00 (958) 9865 562</h5>
                <p>Mon to Fri 9am to 6 pm</p>
              </div>
            </div>
            <div class="single-contact-address d-flex flex-row">
              <div class="icon">
                <span class="lnr lnr-envelope"></span>
              </div>
              <div class="contact-details">
                <h5>support@colorlib.com</h5>
                <p>Send us your query anytime!</p>
              </div>
            </div>
          </div>
        <div class="col-lg-8">
          <form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
            <div class="row">
              <div class="col-lg-6 form-group">
                <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
              </div>
              <div class="col-lg-6 form-group">
                <textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
              </div>
              <div class="col-lg-12">
                <div class="alert-msg" style="text-align: left;"></div>
                <button class="genric-btn primary" style="float: right;" name="submit" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
 </body>
</html>



   <?php include ('footer.php');?>
