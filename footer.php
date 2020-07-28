<!-- start footer Area -->
<footer class="footer-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-2  col-md-6">
        <div class="single-footer-widget">
          <h6>Top Products</h6>
          <ul class="footer-nav">
            <li><a href="#">Managed Website</a></li>
            <li><a href="#">Manage Reputation</a></li>
            <li><a href="#">Power Tools</a></li>
            <li><a href="#">Marketing Service</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4  col-md-6">
        <div class="single-footer-widget mail-chimp">
          <h6 class="mb-20">Contact Us</h6>
          <p>
            56/8, Santa bullevard, Rocky beach, San fransisco, Los angeles, USA
          </p>
          <h3>012-6532-568-9746</h3>
          <h3>012-6532-568-97468</h3>
        </div>
      </div>
      <div class="col-lg-6  col-md-12">
        <div class="single-footer-widget newsletter">
          <h6>Newsletter</h6>
          <p>You can trust us. we only send promo offers, not a single spam.</p>
          <div id="mc_embed_signup">
            <form target="_blank" action="footer.php" method="post" class="form-inline">

              <div class="form-group row" style="width: 100%">
                <div class="col-lg-8 col-md-12">
                  <input name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                </div>

                <div class="col-lg-4 col-md-12">
                  <button class="nw-btn primary-btn circle" name="subscribe">Subscribe<span class="lnr lnr-arrow-right"></span></button>
                </div>
              </div>
              <div class="info"></div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php
      if(isset($_POST['subscribe'])){
        $email=$_POST['EMAIL'];
        if(mail($email,'Welcome to MEDICAL','Thanks for subscribing.')){
          echo "Thanks for subscribing";
        }else{
          echo "Try again";
        }
      }

     ?>

    <div class="row footer-bottom d-flex justify-content-between">
      <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      <div class="col-lg-4 col-sm-12 footer-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
      </div>
    </div>
  </div>
</footer>
<!-- End footer Area -->


<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
  <script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.tabs.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
