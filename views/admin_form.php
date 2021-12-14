<?php

// $dent = new Search;
// $dent->db_connect();
//   $passenger_id="";
//   $fname="";
//   $lname="";
//   $dob="";
//   $gender="";
//   $passport="";
//   $issued_date="";
//   $expiration_date="";
//   $issued_place="";
//   $ticket_nbr="";
//   $departure="";
//   $arrival="";
//   $Destination="";

//   $errors = array("passenger_id" => "", "fname" => "","lname" => "","dob" => "",
//   "gender" => "", "passport" => "","issued_date" => "", "expiration_date" => "", 
//   "issued_place" => "", "ticket_nbr" => "", "departure" => "", "arrival" => "", "Destination" => "");

//   if(isset($_POST["SUBMIT"])){



//     if(!array_filter($errors)){
     
//       //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         //$errors['email'] ='email must be a valid email address';
//       //}
      
//       //check regex for first name
//       if (!preg_match('/^[a-zA-Z]+$/', $fname)) {
//         $errors['firstname'] = 'first name must be letters only';
//       }

//       //check regex for last name
//       if (!preg_match('/^[a-zA-Z]+$/', $lname)) {
//          $errors['lastname'] = 'last name must be letters only';
//       }

    

//         $fname = $_POST['firstname'];
//         $lname = $_POST['lastname'];
//         $dob = $_POST['date'];
//         $gender = $_POST['gender'];
//         $passport = $_POST['passport'];
//         $passenger = $_POST['passengerID'];
//         $issued_date= $_POST['issued_date'];;
//         $expiration_date= $_POST['expiration_date'];;
//         $issued_place= $_POST['issued_place'];;
//         $ticket_nbr= $_POST['ticket_nbr'];;
//         $departure= $_POST['departure'];;
//         $arrival= $_POST['arrival'];;
//         $Destination= $_POST['Destination'];;
        

//         $dent->createDentistry($passenger_id, $fname, $lname, $dob, $gender, $passport, $issued_date, $expiration_date, $issued_place, $ticket_nbr, $departure, $arrival, $Destination);
//         echo "Done";

//         header("Location: PassengerForm.php");
//       }
    
//   }
  

// ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <!-- <link rel="stylesheet" href="style/form-style.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title> Add Flight</title>
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body
      {
        background: lightgrey;
        padding: 30px 30px 75px;
        font-size: 18px;
        /* background-image: url(../img/inside.jpg); */
      }
      h1 
      {
        text-align: center;
      }
      .label-title{
        padding-top: 10px;
        width: 15%;
      } 
      .input-group{
        padding-left: 230px;
      } 
      .btn
      {
        border: none;
        outline: none;
        height: 50px;
        width: 15%;
        background-color: orange;
        border: radius 4px;
        font-weight:bold ;
      }
      .btn:hover
      {
        background: white;
        border: 1px solid;
        color: black;
      }
    </style>
    
  </head>
  <body>
    <form class="signup-form" action="../actions/addflight.php" method="post">

      <!-- form header -->
      <div class="form-header">
        <h1>Add flight</h1>
        
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="fnumber" class="label-title">Flight Number: </label>
            <input type="text" id="fnumber" class="form-input" placeholder="enter the flight number" required="required" name='fnumber'/>
          </div>
          <div class="form-group right">
            <label for="eseat" class="label-title">Seats Available in Economy Class: </label>
            <input type="number" id="eseat" class="form-input"  name='eseat'/>
          </div>
        </div>

        <!-- DOB -->
        <div class="form-group">
          <label for="bseat" class="label-title">Seats Available in Business Class: </label>
          <input type="number" id="bseat" class="form-input" required="required" name='bseat'>
        </div>

  

         <!-- passport -->
         <div class="form-group">
          <label for="dtime" class="label-title">Departure time:</label>
          <input type="time" id="dtime" class="form-input" required="required" name='dtime'>
        </div>

        <!-- passport -->
        <div class="form-group">
          <label for="ddate" class="label-title">Departure date:</label>
          <input type="date" id="d_date" class="form-input" required="required" name='d_date'>
        </div>
        <!-- Issued date -->
        <div class="form-group">
          <label for="atime" class="label-title">Arrival time:</label>
          <input type="time" id="atime" class="form-input" required="required" name='atime'>
        </div>

         <!-- Issued date -->
         <div class="form-group">
          <label for="adate" class="label-title">Arrival date:</label>
          <input type="date" id="adate" class="form-input"required="required" name='adate'>
        </div>

        <!-- Expiration date -->
        <div class="form-group">
          <label for="duration" class="label-title">Duration: </label>
          <input type="time" id="duration" class="form-input" placeholder="" required="required" name='duration'>
        </div> 

        <!-- Issued place -->
        <div class="form-group right">
            <label for="from" class="label-title">From:</label>
            <input type="text" id="from" class="form-input" placeholder="" name='from'/>
          </div>
        </div> 

        <!-- Ticket Nbr -->
        <div class="form-group right">
            <label for="to" class="label-title">To:</label>
            <input type="text" id="dest" class="form-input" placeholder="" name='dest'/>
          </div>
        </div> 

        
      <!-- form-footer -->
      <div class="form-group">
        <button class="btn" name="addflight" type="submit">SUBMIT</button>
      </div>

    </form>

 

  </body>
</html>