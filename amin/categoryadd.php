<?php
    include "header.php";
    include "slider.php";
    include "xuly/category_class.php";
?>

<?php
    $cartegory = new cartegory;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $cartegory_name = $_POST['cartegory_name'];
        $insert_cartegory = $cartegory -> insert_cartegory($cartegory_name);
    }
?>

<div class="amin-contenr-right">
            <div class="amin-contenr-right-cartegory-add">
                <h1>Thêm danh mục</h1>
                <form action="" method="POST">
                    <input type="text" name="cartegory_name" placeholder="Nhập tên danh mục">
                    <button type="submit">THÊM</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>