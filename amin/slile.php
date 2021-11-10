<?php
    include "header.php";
    include "slider.php";
    include "xuly/slider_class.php";
?>

<?php
    $slider = new slider ;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $insert_slider= $slider -> insert_slider();
    }
?>

<div class="amin-contenr-right">
            <div class="amin-contenr-right-bran-add">
                <h1>THÊM SLIDER</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Ảnh: </label>
                    <input type="file" name="slider_img">
                    <button type="submit">THÊM</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>