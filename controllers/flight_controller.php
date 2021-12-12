<?php
require("../classes/flight.php");

function createFlight_controller($flight_nbr, $eseats, $bseats, $departure, $departure_date, $arrival, $arrival_date, $duration, $comingfrom, $destination){
    //create flight instance
    $flight= new flight();
return $flight->createFlight($flight_nbr, $eseats, $bseats, $departure, $departure_date, $arrival, $arrival_date, $duration, $comingfrom, $destination);
}
?>