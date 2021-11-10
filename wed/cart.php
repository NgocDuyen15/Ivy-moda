<?php
    include "header.php";
?>
   <!-- ------------------cart------------------------ -->
    <section class="cart">
        <div class="container">
            <div class="cart-top-wrap">
                <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                        <i class="fa fa-shopping-cart " aria-hidden="true"></i>
                    </div>
                    <div class="cart-top-marker cart-top-item">
                        <i class="fa fa-map-marker " aria-hidden="true"></i>
                    </div>
                    <div class="cart-top-card cart-top-item">
                        <i class="fa fa-credit-card " aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cart-container  row">
                <div class="cart-container-left">
                    <table>
                        <tr>
                            <th>SẢN PHẨM</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>MÀU</th>
                            <th>SIZE</th>
                            <th>SL</th>
                            <th>THÀNH TIỀN</th>
                            <th>XÓA</th>
                        </tr>
                        <?php
                    $giaodien = new giaodien;
                    $product_id = $_GET['product_id'];
                    $show_product = $giaodien -> show_product_a($product_id);
                ?>

                <?php
                    if ($show_product){ $i = 0;
                        while ($result =  $show_product -> fetch_assoc()) { $i++;
                
                ?>
                        <tr>
                            <td> <img src="../image/<?php echo $result['product_img'] ?>"> </td>
                            <td> <p><?php echo $result['product_name'] ?></p> </td>
                            <td> <img src="../image/<?php echo $result['product_color'] ?>"> </td>
                            <td> M </td>
                            <td> <span>1</span> </td>
                            <td>  <p><?php echo $result['product_price'] ?><sup>đ</sup></p></td>
                            <td> <span>X</span> </td>
                        </tr>
                <?php
                        }
                    }
                ?>
                    </table>
                </div>
                <div class="cart-container-right">
                    <table>
                        <tr>
                            <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                        </tr>
                        <tr>
                            <td>TỔNG SẢN PHẨM</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>TỔNG TIỀN HÀNG</td>
                            <td>  <p>2.400.000<sup>đ</sup></p> <td> 
                        </tr>
                        <tr>
                            <td>THÀNH TIỀN</td>
                            <td><p>2.400.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td>TẠM TÍNH</td>
                            <td><p>2.400.000<sup>đ</sup></p></td>
                        </tr>
                    </table>
                    <div class="cart-container-right-text">
                        <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000 đ</p>
                        <p style="color: red; font-weight: bold;">Mua thêm <span style="font-size: 19px;">194.000đ</span> để được miễn phí SHIP</p>
                    </div>
                    <div class="cart-container-right-buttom">
                        <button>TIẾP TỤC MUA SẮM</button>
                        <button> <a href="pay.php"> <span style="color : white">THANH TOÁN</span></a> </button>
                    </div>
                    <div class="cart-container-right-dangnhap">
                        <p>TÀI KHOẢN IVY</p>
                        <p>Hãy <a href="" style="color: red;">đăng nhập</a> tài khoản của bạn để tích điểm thành viên.</p>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <!--------------- footer ---------------------------->
    
    <section class="app-contenr">
        <hr>
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

</html>