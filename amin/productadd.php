<?php
    include "header.php";
    include "slider.php";
    include "xuly/product_class.php";
?>

<?php
    $product = new product;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $cartegory_id = $_POST['cartegory_id'];
    $insert_product = $product -> insert_product();
    }
?>

<div class="amin-contenr-right">
<div class="amin-contenr-right-product-add">
                <h1>THÊM SẢN PHẨM</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Tên sản phẩm: </label>
                    <input required type="text" name="product_name"> 
                    <label for="">Danh mục sản phẩm:</label>
                    <select name="cartegory_id" id="cartegory_id">
                        <option value="#">-----CHỌN------</option>
                         <?php
                                $show_cartegory = $product ->show_cartegory();
                                if ($show_cartegory){while($result = $show_cartegory ->fetch_assoc()){
                            ?>
                            <option value="<?php echo $result['cartegory_id'] ?>"> <?php echo $result['cartegory_name'] ?> </option>
                            <?php
                                }
                            }
                        ?>
                    </select>
                    <label for="">Loại doanh mục:</label>
                    <select name="bran_id" id="bran_id">
                        <option value="#">-----CHỌN------</option>

                    </select>

                    <label for="">Loại sản phẩm:</label>
                    <select name="product_type_id" id="product_type_id">
                        <option value="#">-----CHỌN------</option>

                    </select>

                    <label for="">Giá sản phẩm <span style="color: red;">*</span>:</label>
                    <input name="product_price" required type="text">
                    <label for="">Giá đã giảm <span style="color: red;">*</span>:</label>
                    <input name="product_slump" type="text">
                    <label for="">Mô tả sản phẩm :</label>
                    <textarea required name="product_desc" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                    <label for="">Ảnh sản phẩm <span style="color: red;">*</span>:</label>
                    <input name="product_img" required type="file" accept=".jpg, .png">
                    <label for="">Ảnh mô tả <span style="color: red;">*</span>:</label>
                    <input name="product_imga" required type="file" accept=".jpg, .png">
                    <input name="product_imgb" required type="file" accept=".jpg, .png">
                    <input name="product_imgc" required type="file" accept=".jpg, .png">
                    <input name="product_imgd" required type="file" accept=".jpg, .png">
                    <label for="">Màu sắc <span style="color: red;">*</span>:</label>
                    <input name="product_color" required type="file" accept=".jpg, .png">
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
    $(document).ready(function(){
        $("#bran_id").change(function(){
            var x = $(this).val()
            $.get("product_type_ax.php",{bran_id:x},function(data){
                $("#product_type_id").html(data);
            })
        })
    })
</script>
</html>