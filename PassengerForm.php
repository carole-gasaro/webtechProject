<?php
require_once("tables.php");
$dent = new Search;
$dent->db_connect();
  $passenger_id="";
  $fname="";
  $lname="";
  $dob=""
  $gender="";
  $passport=""
  $issued_date="";
  $expiration_date="";
  $issued_place="";
  $ticket_nbr="";
  $departure="";
  $arrival="";

  $errors = array("passenger_id" => "", "fname" => "","lname" => "","dob" => "",
  "gender" => "", "passport" => "","issued_date" => "", "expiration_date" => "", 
  "issued_place" => "", "ticket_nbr" => "", "departure" => "", "arrival" => "");

  if(isset($_POST["SUBMIT"])){



    if(!array_filter($errors)){
     
      //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //$errors['email'] ='email must be a valid email address';
      //}
      
      //check regex for first name
      if (!preg_match('/^[a-zA-Z]+$/', $fname)) {
        $errors['firstname'] = 'first name must be letters only';
      }

      //check regex for last name
      if (!preg_match('/^[a-zA-Z]+$/', $lname)) {
         $errors['lastname'] = 'last name must be letters only';
      }

    

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['date'];
        $gender = $_POST['gender'];
        $passport = $_POST['passport'];
        $passenger = $_POST['passengerID'];
        $issued_date= $_POST['issued_date'];;
        $expiration_date= $_POST['expiration_date'];;
        $issued_place= $_POST['issued_place'];;
        $ticket_nbr= $_POST['ticket_nbr'];;
        $departure= $_POST['departure'];;
        $arrival= $_POST['arrival'];;
        

        $dent->createDentistry($passenger_id, $fname, $lname, $dob, $gender, $passport, $issued_date, $expiration_date, $issued_place, $ticket_nbr, $departure, $arrival);
        echo "Done";

        header("Location: PassengerForm.php");
      }
    
  }
  

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Passenger Form</title>
    <link rel="stylesheet" href="style/form-style.css">
  </head>
  <body>
    <form class="signup-form" action="DentistForm.php" method="post">

      <!-- form header -->
      <div class="form-header">
        <h1>Passenger Form</h1>
        <h4>Kindly fill out this form to complete check in</h4>
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">First name</label>
            <input type="text" id="firstname" class="form-input" placeholder="enter your first name" required="required" name='firstname'/>
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">Last name</label>
            <input type="text" id="lastname" class="form-input" placeholder="enter your last name" name='lastname'/>
          </div>
        </div>

        <!-- DOB -->
        <div class="form-group">
          <label for="date" class="label-title">Date of Birth</label>
          <input type="date" id="date" class="form-input" placeholder="enter your DOB" required="required" name='date'>
        </div>

        <!-- Gender -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Gender:</label>
            <div class="input-group">
              <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
            </div>
          </div> 

         <!-- passport -->
         <div class="form-group">
          <label for="date" class="label-title">Passport</label>
          <input type="date" id="date" class="form-input" placeholder="enter your DOB" required="required" name='date'>
        </div>

        <!-- PassengerID  -->
        <div class="horizontal-group">
            <div class="form-group left">
                <label for="PatientID" class="label-title">Patient ID</label>
                <input type="text" id="PatientID" class="form-input" placeholder="ESS - XXXX - XXXX- XXXX" required="required" name='patientID'>
              </div>
          <div class="form-group right">
            <label for="Start-Time" class="label-title">Preferred Date and Time</label>
            <input type="datetime-local" class="form-input" id="Start-Time" placeholder="enter your preferred Start-time" required="required" name='date'>
          </div>
        </div>

        
          


        <!-- Any Extra Health Details to be aware Of -->
        <div class="form-group">
          <label for="extraDetails" class="label-title">Extra Health Details</label>
          <textarea class="form-input" rows="4" cols="50" style="height:auto" name='details'></textarea>
        </div>
      </div>

      <!-- form-footer -->
      <div class="form-footer">
        <span>* required</span>
        <input type="submit" class="btn" name="SUBMIT" value="Create">
      </div>

    </form>

    <!-- Script for range input label -->
    <script>
      var rangeLabel = document.getElementById("range-label");
      var experience = document.getElementById("experience");

      function change() {
      rangeLabel.innerText = experience.value + "K";
      }
    </script>

  </body>
</html>