<?php
    include "header.php";
?>
    <!-- category -->
    <section class="cartegory">
        <div class="contenr">
            <div class="cartegory-top row">
                <p>Trang chủ</p> <span>&#10230;</span> <p>Nữ</p> <span>&#10230;</span> <p>Hàng mới về</p>
            </div>
        </div>
        <div class="contenr">
            <div class="row">
                <div class="cartegory-left">
                    <ul>
                        <li class="cartegory-left-li"> <a href="#">NỮ</a> 
                            <ul>
                                <li> <a href="">Áo croptop</a></li>
                                <li> <a href="">Áo vest nữ</a></li>
                                <li> <a href="">Áo peplum</a></li>
                                <li> <a href="">Áo thun nữ</a></li>
                                <li> <a href="">Áo sơ mi nữ</a></li>
                            </ul>
                        </li>
                        <li class="cartegory-left-li"> <a>NAM</a>
                            <ul>
                                <li> <a href="">Áo sơ mi nam</a></li>
                                <li> <a href="">Áo vest nam</a></li>
                                <li> <a href="">Áo polo nam</a></li>
                                <li> <a href="">Áo thun nam</a></li>
                                <li> <a href="">Áo khoác</a></li>
                            </ul>
                        </li>
                        <li class="cartegory-left-li"> <a>TRẺ EM</a> </li>
                        <li class="cartegory-left-li"> <a>SALE</a> </li>
                    </ul>
                </div>
                <div class="cartegory-right row ">
                    <div class="category-right-top-item">
                        <p>Hàng nữ mới về</p>
                    </div>
                    <div class="category-right-top-item">
                        <button> <span>Bộ lọc</span><i class="fa fa-sort-down"></i></button>
                    </div>
                    <div class="category-right-top-item">
                        <select name="" id="">
                            <option value=""> Sắp xếp </option>
                            <option value=""> Giá cao đến thấp </option>
                            <option value=""> Giá thấp đến cao </option>
                        </select>
                    </div>
                    <div class="cartegory-right-content row">
                        <?php
                            $giaodien = new giaodien;
                            $cartegory_id = $_GET['cartegory_id'];
                            $show_cartegory_img = $giaodien -> show_product_img($cartegory_id);
                        ?>

                        <?php
                            if ( $show_cartegory_img){ $i = 0;
                                while ($result =  $show_cartegory_img -> fetch_assoc()) { $i++;
                        
                        ?>
                            <div class="cartegory-right-content-item">
                                <a href="product.php?product_id=<?php echo $result['product_id'] ?>">
                                <img src="../uploads/<?php echo $result['product_img'] ?>" alt="">
                                <h1><?php echo $result['product_name'] ?></h1>
                                <p><?php echo $result['product_price'] ?><sup>đ</sup></p>
                                </a>
                             </div>
                        <?php
                                }
                            }
                        ?>
                       
                       
    

                        <div class="cartegory-right-bottom row">
                            <div class="cartegory-right-bottom-items">
                                <p>Hiển thị 2 <span>|</span> 4 sản phẩm </p>
                            </div>
                            <div class="cartegory-right-bottom-items">
                                <p> Trang đầu <span>&#171;</span> 1 2 3 4 5<span>&#187;</span> Trang cuối</p>
                            </div>
                        </div>

                    
                </div>
                
                </div>
               
            </div>
            
        </div>
    </section>
    <hr>
    <!-- footer -->
    <section class="app-contenr">
        <p> Tải ứng dụng IVY moda </p>
        <div class="app-google">
            <img src="image/app-store.png">
            <img src="image/gg-play.png">
        </div>
        <p> Nhập bản tin của IVY moda</p>
        <input type="text" placeholder="Nhập email của bạn....">
    </section>
    <div class="footer-top">
        <li> <a href=""><img src="image/thongbao.png"></a></li>
        <li> <a href="">Liên hệ</a></li>
        <li> <a href="">Tuyển dụng</a></li>
        <li> <a href="">Giới thiệu</a></li>
        <li>
            <a href=""><img src="image/fb.png"></a>
            <a href=""><img src="image/yt.jpg"></a>
            <a href=""><img src="image/tw.png"></a>
        </li>
    </div>
    <div class="footer-center">
        <p>
            Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650 <br>
            Địa chỉ đăng ký: Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam - 0243 205 2222<br>
            Đặt hàng online : <b>0246 662 3434</b> .
        </p>
    </div>
    <div class="footer-bottom">
        ©Ivymoda All rights reserved
    </div>

</body>
<script>
    const itemliderbar = document.querySelectorAll(".cartegory-left-li")
    itemliderbar.forEach(function(menu, index){
    menu.addEventListener("click", function(){
        menu.classList.toggle("block")
    }) 
    })
</script>
</html>