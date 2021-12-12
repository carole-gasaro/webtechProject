<?php
    require("../settings/db_connection.php");

    //functions of the respective tables created


    class flight extends Database{
        // public function getCred($uemail, $pass){
        //     $sql = "SELECT * FROM login WHERE email='$uemail' AND password='$pass'";
        //     return $this->db_query($sql);
        // }

        // public function createPassenger($passenger_id, $fname, $lname, $dob, $gender, $passport, $issued_date, $expiration_date, $issued_place, $ticket_nbr, $departure, $arrival){

        //     //sql query
        //     $sql = "INSERT INTO `passenger` VALUES ('$passenger_id', '$fname', '$lname', '$dob', '$gender', '$passport', '$issued_date', '$expiration_date', '$issued_place', '$ticket_nbr', '$departure', '$arrival' );";
        //     return $this->db_query($sql);
        // }
        

        // public function createAirline($airline_id, $airline_name, $passenger_id){
        //     $sql = "INSERT INTO `airline` VALUES ('$airline_id', '$airline_name', '$passenger_id' );";
        //     return $this->db_query($sql);
        // }

        public function createFlight($flight_nbr, $eseats, $bseats, $departure, $departure_date, $arrival, $arrival_date, $duration, $comingfrom, $destination){
            //sql query
            $sql = "INSERT INTO `flight`(`flight_nbr`, `eseats`, `bseats`, `departure`, `departure_date`, `arrival`, `arrival_date`, `duration`, `comingfrom`, `destination`)
            VALUES ('$flight_nbr', '$eseats', '$bseats', '$departure', '$departure_date', '$arrival', '$arrival_date', '$duration', '$comingfrom', '$destination' ) ";


            return $this->db_query($sql);
        }

        // public function createContact($fullname, $email, $message){

        //     //sql query
        //     $sql = "INSERT INTO `contact` VALUES ('$fullname', '$email', '$message' );";
        //     return $this->db_query($sql);
        // }       

        }
?>
