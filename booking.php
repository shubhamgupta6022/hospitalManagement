

<div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
  <form class="form-wrap" action="index.php" method="post">
    <h3 class="pb-20 text-center mb-30">Book an Appointment</h3>
    <input type="text" class="form-control" name="pname" placeholder="Patient Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Name'" >
    <input type="text" class="form-control" name="phone" placeholder="Phone " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" >
    <input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" >
    <input id="datepicker1" name="dob" value="dob" class="dates form-control"  placeholder="Date of Birth" type="date">
    <div class="form-select" id="service-select">
      <select name="dname" required>
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
</div>


<?php
    if(isset($_POST['submit'])){
      include ("dbcon.php");

      $pname=$_POST['pname'];
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
