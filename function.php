<?php
    class crudApp{

        private $conn;

            public function __construct(){
                #database host, database user, database pass, database name.
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = 'asaddynamiccrudapp'; 

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            if(!$this->conn){
                die("Database Connection Error!!");
            }

         }
            
            public function add_data($data){
                $std_name = $data['std_name'];
                $std_email = $data['std_email'];
                $std_roll = $data['std_roll'];
                


            }



    }




?>