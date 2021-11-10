<?php
     include "xuly/product_class.php";
     $product = new product;
     
     $bran_id = $_GET['bran_id']
?>

<?php
    $show_product_type = $product -> show_product_type($bran_id);
    if ($show_product_type){while($result =  $show_product_type ->fetch_assoc()){
?>
<option value="<?php echo $result['product_type_id'] ?>"> <?php echo $result['product_type_name'] ?> </option>
<?php
    }
}
?>