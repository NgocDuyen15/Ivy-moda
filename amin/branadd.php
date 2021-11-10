<?php
    include "header.php";
    include "slider.php";
    include "xuly/bran_class.php";
?>

<?php
    $bran = new bran;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $cartegory_id = $_POST['cartegory_id'];
        $bran_name = $_POST['bran_name'];
        $insert_bran= $bran -> insert_bran($cartegory_id,  $bran_name);
    }
?>
<style>
    select{
        width: 200px;
        height: 30px;
        text-align: center;
        font-size: 14px;
        margin: 12px;
    }
    input{
        margin: 6px 12px;
        width: 200px;
        height: 30px;
        text-align: center;
    }
    button{
        width: 200px;
        height: 30px;
        margin: 2px 12px;
        background-color: brown;
        color: #fff;
    }
</style>
<div class="amin-contenr-right">
            <div class="amin-contenr-right-bran-add">
                <h1>THÊM SẢN PHẨM</h1>
                <form action="" method="POST">
                    <select name="cartegory_id" id="">
                        <option value="#"> -----CHỌN------ </option>
                            <?php
                                $show_cartegory = $bran ->show_cartegory();
                                if ($show_cartegory){while($result = $show_cartegory ->fetch_assoc()){
                            ?>
                            <option value="<?php echo $result['cartegory_id'] ?>"> <?php echo $result['cartegory_name'] ?> </option>
                            <?php
                                }
                            }
                            ?>
                        
                    </select><br>
                    <input type="text" name="bran_name" placeholder="Nhập tên loại sản phẩm"> <br>
                    <button type="submit">THÊM</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>