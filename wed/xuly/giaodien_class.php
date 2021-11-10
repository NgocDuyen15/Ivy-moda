<?php
    include "database.php";
?>

<?php
    class giaodien {
        private $db;

        public function __construct()
        {
            $this -> db = new Database();
        }
        public function show_slider(){
            $query = "SELECT slider_img FROM tbl_slider WHERE slider_active = '1' ORDER BY slider_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_cartegory(){
            $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product_img($cartegory_id){
            $query = "SELECT * FROM tbl_product WHERE cartegory_id = '$cartegory_id' ORDER BY product_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product_a($product_id){
            $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id' ORDER BY product_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_bran($cartegory_id){
            $query = "SELECT *FROM tbl_bran WHERE cartegory_id = '$cartegory_id' ORDER BY bran_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product_type($bran_id){
            $query = "SELECT * FROM tbl_product_type WHERE bran_id = '$bran_id' ORDER BY product_type_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
    }
?>