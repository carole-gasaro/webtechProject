<?php
    require("../settings/db_connection.php");

    //functions of the respective tables created


    class login extends Database{
        public function getCred($uemail, $pass){
            $sql = "SELECT * FROM login WHERE email='$uemail' AND password='$pass'";
            return $this->db_query($sql);
        }


            

        }
?>
