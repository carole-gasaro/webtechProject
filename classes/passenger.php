<?php
    require("../settings/db_connection.php");

    // functions of the respective tables created


    class passenger extends Database{
        public function createPassenger( $fname, $lname, $dob, $gender, $passport, $issued_date, $expiration_date, $issued_place, $ticket_nbr, $class, $departure, $arrival, $destination){
            // //sql query
           $sql = "INSERT INTO `passenger` VALUES ( '$fname', '$lname', '$dob', '$gender', '$passport', '$issued_date', '$expiration_date', '$issued_place', '$ticket_nbr', '$class', '$departure', '$arrival', '$destination');";
           return $this->db_query($sql);

        //    $query = "SELECT fname, lname, dob, gender, passport, issued_date, expiration_date, issued_place, ticket_nbr, class, departure, arrival, destination FROM passenger";
        //    $result =  $this->db($query);
       }
    }


?>
