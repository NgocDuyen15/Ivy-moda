<?php
    include "header.php";
    include "slider.php";
    include "xuly/product_type_class.php";
?>

<?php
    $product_type = new product_type;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $cartegory_id = $_POST['cartegory_id'];
        $insert_product_type = $product_type -> insert_product_type();
    }
?>

<div class="amin-contenr-right">
<div class="amin-contenr-right-product-add">
                <h1>THÊM SẢN PHẨM</h1>
                <form action="" method="POST" enctype="multipart/form-data"> 
                    <label for="">Danh mục sản phẩm:</label>
                    <select name="cartegory_id" id="cartegory_id">
                        <option value="#">-----CHỌN------</option>
                         <?php
                                $show_cartegory = $product_type ->show_cartegory();
                                if ($show_cartegory){while($result = $show_cartegory ->fetch_assoc()){
                            ?>
                            <option value="<?php echo $result['cartegory_id'] ?>"> <?php echo $result['cartegory_name'] ?> </option>
                            <?php
                                }
                            }
                        ?>
                    </select>
                    <label for="">Loại danh mục:</label>
                    <select name="bran_id" id="bran_id">
                        <option value="#">-----CHỌN------</option>

                    </select>
                    <label for="">Loại sản phẩm:</label>
                    <input required type="text" name="product_type_name"> 
                    <button type="submit">THÊM</button>
                </form>
            </div>
        </div>
    </section>
</body>
<script>
    $(document).ready(function(){
        $("#cartegory_id").change(function(){
            var x = $(this).val()
            $.get("productax.php",{cartegory_id:x},function(data){
                $("#bran_id").html(data);
            })
        })
    })
</script>
</html>