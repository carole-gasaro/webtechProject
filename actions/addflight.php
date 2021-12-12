<?php
require("../controllers/flight_controller.php");
if(isset($_POST['addflight'])){
    $flight_nbr=$_POST['fnumber'];
    $eseats=$_POST['eseat'];
    $bseats=$_POST['bseat'];
    $departure_date=$_POST['d_date'];
    $departure=$_POST['dtime'];
    $arrival=$_POST['atime'];
    $arrival_date=$_POST['adate'];
    $duration=$_POST['duration'];
    $comingfrom=$_POST['from'];
    $destination=$_POST['dest'];
    
    //create flight
    var_dump($flight_nbr, $eseats, $bseats, $departure, $departure_date, $arrival, $arrival_date, $duration, $comingfrom, $destination);
    $result=createFlight_controller( $flight_nbr, $eseats, $bseats, $departure, $departure_date, $arrival, $arrival_date, $duration, $comingfrom, $destination);
    
    if($result){
        echo"amakaka";
    }
    else{
        echo"oops";
    }
}

?>