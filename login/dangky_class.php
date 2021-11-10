<?php
    include "database.php";
    
?>

<?php
    class dangky {
        private $db;

        public function __construct()
        {
            $this -> db = new Database();
        }
        public function insert_dangky(){

            $customer_name = $_POST['customer_name'];
            $customer_pass = $_POST['customer_pass'];
            $query = "INSERT INTO tbl_customer
            (
                customer_name,
                 customer_pass
            ) 
            VALUES 
            (
                '$customer_name',
                '$customer_pass'
            )";
            $result = $this -> db -> insert($query);
            header('Location:dangnhap.php');
            return $result;
        }
        public function show_dangky(){
            $query = "SELECT * FROM tbl_customer ORDER BY customer_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
    }
?>