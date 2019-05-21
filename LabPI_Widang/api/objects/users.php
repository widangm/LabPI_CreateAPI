<?php
    class Users{
        private $conn;
        private $table_name = "users";
    
        // object properties. Sesuaikan dengan nama-nama kolom pada tabel.
        public $id;
        public $user;
        public $password;
        public $nama;
        public $email;

        // constructor with $db as database connection
        public function __construct($db){
            $this->conn = $db;
        }

        function read(){
 
            // select all query
            $query = "SELECT
                        *
                    FROM
                        " . $this->table_name;
         
            // prepare query statement
            $stmt = $this->conn->prepare($query);
         
            // execute query
            $stmt->execute();
         
            return $stmt;
    }
}
?>