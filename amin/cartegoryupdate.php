<?php
    include "header.php";
    include "slider.php";
    include "xuly/category_class.php";
?>

<?php
    $cartegory = new cartegory;
    if (!isset($_GET['cartegory_id']) or $_GET['cartegory_id'] == NULL){
        echo "<script> window.location = 'cartegorylist.php' </script>";
    }else{
        $cartegory_id = $_GET['cartegory_id'];
    }
    $get_cartegory = $cartegory -> get_cartegory($cartegory_id);
    if ($get_cartegory){
        $result = $get_cartegory -> fetch_assoc();
    }
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $cartegory_name = $_POST['cartegory_name'];
        $update_cartegory = $cartegory -> update_cartegory( $cartegory_id, $cartegory_name);
    }
?>

<div class="amin-contenr-right">
            <div class="amin-contenr-right-cartegory-add">
                <h1>SỬA DANG MỤC</h1>
                <form action="" method="POST">
                    <input type="text" name="cartegory_name" placeholder="Nhập tên danh mục" 
                    value="<?php echo $result['cartegory_name'] ?>">
                    <button type="submit">SỬA</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>