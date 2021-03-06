<?php
require_once("db_cred.php");

class Database{
    public $db = null;
    public $results = null;

    public function db_connect(){
        $this->db = mysqli_connect(servername, username, password, db);

        // $this->db = mysqli_connect(SERVER,USERNAME,PASSWD,DATABASE);
		//testing the database connection
		if (mysqli_connect_errno()) {
			return false;
		}else{
			return true;
		}
    }

    public function db_query($sql){
        if (!$this->db_connect()) {
			return false;
		} 
		elseif ($this->db==null) {
			return false;
		}

        $this->results = mysqli_query($this->db, $sql);

        if($this->results == false){
            return false;
        }
        return true;

    }

    public function db_fetch(){
        if($this->results == null){
            return false;
        }
        elseif ($this->results == false){
            return false;
        }
        return mysqli_fetch_all($this->results, MYSQLI_ASSOC);
    }
}

?>