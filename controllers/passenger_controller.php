<?php
    require("../classes/passenger.php");

    //functions of the respective tables create

 function createPassenger_controller( $fname, $lname, $dob, $gender, $passport, $issued_date, $expiration_date, $issued_place, $ticket_nbr, $departure, $arrival){
    //sql query
    $passenger = new passenger();
    return $passenger-> createPassenger($fname, $lname, $dob, $gender, $passport, $issued_date, $expiration_date, $issued_place, $ticket_nbr, $departure, $arrival);
}
        

      
            

        
?>
