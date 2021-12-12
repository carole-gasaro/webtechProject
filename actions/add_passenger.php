<?php
require_once("../controllers/passenger_controller.php");

  $passenger_id="";
  $fname="";
  $lname="";
  $dob="";
  $gender="";
  $passport="";
  $issued_date="";
  $expiration_date="";
  $issued_place="";
  $ticket_nbr="";
  $class="";
  $departure="";
  $arrival="";
  $Destination="";

  $errors = array("passenger_id" => "", "fname" => "","lname" => "","dob" => "",
  "gender" => "", "passport" => "","issued_date" => "", "expiration_date" => "", 
  "issued_place" => "", "ticket_nbr" => "", "class" => "", "departure" => "", "arrival" => "", "Destination" => "");

  if(isset($_POST["addpassenger"])){

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
        $issued_date= $_POST['issued_date'];
        $expiration_date= $_POST['exp_date'];
        $issued_place= $_POST['issued_place'];
        $ticket_nbr= $_POST['ticket_nbr'];
        $class=$_POST['class'];
        $departure= $_POST['departure'];
        $arrival= $_POST['arrival'];
        $destination= $_POST['Destination'];
        
        var_dump($destination);
        $result=createPassenger_controller($fname, $lname, $dob, $gender, $passport, $issued_date, $expiration_date, $issued_place, $ticket_nbr, $class, $departure, $arrival, $destination);
        if($result){
            echo "Done";
        }
        else{
            echo"oops";
        }

        // header("Location: PassengerForm.php");
      }
    
  }
  

?>
