<?php
    include "database.php";
    
?>

<?php
    class product_type{
        private $db;

        public function __construct()
        {
            $this -> db = new Database();
        }
        public function show_cartegory(){
            $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product(){
            $query = "SELECT tbl_product.*, tbl_cartegory.cartegory_name 
            FROM tbl_product INNER JOIN tbl_cartegory
            ON tbl_product.cartegory_id = tbl_cartegory.cartegory_id
            ORDER BY tbl_product.product_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_branax($cartegory_id){
                $query = "SELECT * FROM tbl_bran WHERE cartegory_id = '$cartegory_id'";
                $result = $this -> db -> select($query);
                return $result;
        }
        public function show_bran(){
            $query = "SELECT tbl_bran.*, tbl_cartegory.cartegory_name 
            FROM tbl_bran INNER JOIN tbl_cartegory ON tbl_bran.cartegory_id = tbl_cartegory.cartegory_id 
            ORDER BY tbl_bran.bran_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function insert_product_type(){

            $product_type_name = $_POST['product_type_name'];
            $cartegory_id = $_POST['cartegory_id'];
            $bran_id = $_POST['bran_id'];
 
            $query = "INSERT INTO tbl_product_type 
            (
                cartegory_id,
                bran_id,
                product_type_name
            ) 
            VALUES 
            (
                '$cartegory_id',
                '$bran_id',
                '$product_type_name'
            )";
            $result = $this -> db -> insert($query);
            return $result;
        }
        public function update_bran( $bran_id, $bran_name){
            $query = "UPDATE tbl_bran SET bran_name = '$bran_name' WHERE bran_id = '$bran_id'";
            $result = $this -> db -> update($query);
            header('Location:branlist.php');
            return $result;
        }
        public function  delete_product($product_id){
            $query = "DELETE FROM tbl_product WHERE product_id = '$product_id'";
            $result = $this -> db -> delete($query);
            header('Location:productlist.php');
            return $result;
        }
    }
?>