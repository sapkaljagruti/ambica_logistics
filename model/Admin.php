<?php
@session_start();
class Admin {

    public $conn;

    public function Admin() {
        $this->conn=mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn,"ambica_logistics");
    }
    
    public function check_login($username,$password)
    {
        $log_query=mysqli_query($this->conn,"SELECT * FROM admins WHERE username='".$username."' and password='".$password."'");
        if ($log_query->num_rows > 0) {
            $_SESSION['username'] = $username;
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>