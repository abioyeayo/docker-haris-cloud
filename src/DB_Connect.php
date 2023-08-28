<?php
date_default_timezone_set('Europe/London');

class DB_Connect {
    
    public function connect() {
        //  define("DB_HOST", "localhost");
        //  define("DB_USER", "hutsim_web");
        //  define("DB_PASSWORD", "JubyY5!WtV0N");
        //  define("DB_DATABASE", "uos-hutsim-cloud-db");
        //  define("DB_PORT", 3308);
         define("DB_HOST", "mysql");
         define("DB_USER", "helloworld");
         define("DB_PASSWORD", "<db-password>");
         define("DB_DATABASE", "helloworld");
         define("DB_PORT", 3306);
         
         $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT)or die(mysqli_connect_error());
         $con->set_charset("utf8");
         
       // mysqli_select_db($con,DB_DATABASE)or die(mysqli_error());
        return $con;
    }
    public function close() {
        mysqli_close($con) or die(mysqli_connect_error());
    }
}
?>