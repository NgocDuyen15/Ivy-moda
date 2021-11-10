<?php
    include "dangky_class.php";
?>


<?php
    class dangnhap {
 
        public function show_dangnhap( $username, $pass){
            $customer = new dangky;
            $show_customer = $customer -> show_dangky();
                if ($show_customer){$i=0;
                    while ($result = $show_customer -> fetch_assoc()) { 
                        if ($username == $result['customer_name'] && $pass == $result['customer_pass']){
                            $i++;
                        }
                    }
                    if ($i == 1){
                        echo "THÀNH CÔNG";
                    }else{
                        echo "THẤT BẠI";
                    }
                }
        }
    }
?>