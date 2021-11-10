<?php
    include "header.php";
?>
    <!----------------- product -------------------------->
    <section class="product">
        <div class="container">
           <div class="product-contenr row">
               <div class="product-contenr-left row">
               <?php
                    $giaodien = new giaodien;
                    $product_id = $_GET['product_id'];
                    $show_product = $giaodien -> show_product_a($product_id);
                ?>

                <?php
                    if ($show_product){ $i = 0;
                        while ($result =  $show_product -> fetch_assoc()) { $i++;
                
                ?>
                     <div class="product-contenr-left-big-img">
                        <img src="../image/<?php echo $result['product_img'] ?>">
                    </div>
                    <div class="product-contenr-left-small-img">
                        <img src="../image/<?php echo $result['product_imga'] ?>">
                        <img src="../image/<?php echo $result['product_imgb'] ?>">
                        <img src="../image/<?php echo $result['product_imgc'] ?>">
                        <img src="../image/<?php echo $result['product_imgd'] ?>">
                    </div>
                 
               </div>
               <div class="product-contenr-right">
                    <div class="product-contenr-right-name">
                        <h1><?php echo $result['product_name'] ?></h1>
                        <p>MSP: 47M6675</p>
                    </div>
                    <div class="product-contenr-right-price">
                        <p><?php echo $result['product_price'] ?><sup>đ</sup></p>
                    </div>
                    <div class="product-contenr-right-color">
                        <p> <span style="font-weight: bold;">Màu sắc: </span>  <span style="color:red;">*</span></p>
                        <div class="product-contenr-right-color-img">
                            <img src="../image/<?php echo $result['product_color'] ?>">
                    </div>
                    <div class="product-contenr-right-size">
                        <p style="font-weight: bold;">Size:</p>
                        <div class="size">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                            <span>XL</span>
                            <span>XXL</span>
                        </div>
                        <div class="quantity">
                            <p style="font-weight: bold;">Số lượng:</p>
                            <input type="text" value="1" min="0" >
                        </div>
                        <p style="color: red;">Vui lòng chọn size *</p>
                        <div class="product-contenr-right-bottum">
                            <button> <a href="cart.php?product_id=<?php echo $result['product_id'] ?>">
                             <i class="fa fa-shopping-basket"></i> MUA HÀNG </a></button>
                            <button> <p>TÌM TẠI CỬA HÀNG </p> </button>
                        </div>
                        <div class="product-contenr-right-icon">
                            <div class="product-contenr-right-icon-item">
                                <i class="fa fa-phone" aria-hidden="true"></i> <p>Holine</p>
                            </div>
                            <div class="product-contenr-right-icon-item">
                                <i class="fa fa-comments-o fa-lg" aria-hidden="true"></i> <p>Chat</p>
                            </div>
                            <div class="product-contenr-right-icon-item">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p>Mail</p>
                            </div>
                        </div>
                        <div class="product-contenr-right-QR">
                            <img src="image/QR.jpg">
                        </div>
                        <div class="product-contenr-right-text">
                            <div class="product-contenr-right-text-top">
                                <i class="fa fa-angle-down productDetail_buttonShow_btn" aria-hidden="true"></i>
                            </div>
                            <div class="product-contenr-right-text-contenr-big">
                                <div class="product-contenr-right-text-contenr-title row">
                                    <div class="product-contenr-right-text-contenr-title-item chitiet">
                                        <p>Chi tiết </p>
                                    </div>
                                    <div class="product-contenr-right-text-contenr-title-item baoquan">
                                        <p>Bảo quản</p>
                                    </div>
                                    <div class="product-contenr-right-text-contenr-title-item">
                                        <p>Tham khảo size</p>
                                    </div>
                                </div>
                                <div class="product-contenr-right-text-contenr">
                                    <div class="product-contenr-right-text-contenr-chitiet">
                                        Đầm suông cổ tim, tay liền. 2 túi chéo. Dáng suông dài qua gối. Eo có đỉa và đai rời cùng màu đi kèm. Xẻ gấu 2 bên tùng. Vải lụa bóng 1 lớp.<br>

Bạn hoàn toàn không cần phải e ngại vì những nhược điểm cơ thể sẽ không thể phô bày nhờ dáng đầm suông với độ rộng vừa phải, thoải mái. Bên cạnh đó, điểm nhấn ở phần tay áo cách điệu mang đến nét độc đáo, cuốn hút hơn.<br>

Màu sắc: Gold - Đỏ Thẫm <br>
Mẫu mặc size S: <br>

Chiều cao: 1m74 <br>
Cân nặng: 51kg <br>
Số đo 3 vòng: 83-61-90 <br>
                                    </div>
                                    <div class="product-contenr-right-text-contenr-baoquan">
                                        Chi tiết bảo quản sản phẩm : <br>

* Vải dệt kim : sau khi giặt sản phẩm phải được phơi ngang tránh bai dãn.<br>

* Vải voan , lụa , chiffon nên giặt bằng tay.<br>

* Vải thô , tuytsy , kaki không có phối hay trang trí đá cườm thì có thể giặt máy.<br>

* Vải thô , tuytsy, kaki có phối màu tường phản hay trang trí voan , lụa , đá cườm thì cần giặt tay.<br>

* Đồ Jeans nên hạn chế giặt bằng máy giặt vì sẽ làm phai màu jeans.Nếu giặt thì nên lộn trái sản phẩm khi giặt , đóng khuy , kéo khóa, không nên giặt chung cùng đồ sáng màu , tránh dính màu vào các sản phẩm khác. <br>

* Các sản phẩm cần được giặt ngay không ngâm tránh bị loang màu , phân biệt màu và loại vải để tránh trường hợp vải phai. Không nên giặt sản phẩm với xà phòng có chất tẩy mạnh , nên giặt cùng xà phòng pha loãng.<br>

* Các sản phẩm có thể giặt bằng máy thì chỉ nên để chế độ giặt nhẹ , vắt mức trung bình và nên phân các loại sản phẩm cùng màu và cùng loại vải khi giặt.<br>

* Nên phơi sản phẩm tại chỗ thoáng mát , tránh ánh nắng trực tiếp sẽ dễ bị phai bạc màu , nên làm khô quần áo bằng cách phơi ở những điểm gió sẽ giữ màu vải tốt hơn.<br>

* Những chất vải 100% cotton , không nên phơi sản phẩm bằng mắc áo mà nên vắt ngang sản phẩm lên dây phơi để tránh tình trạng rạn vải.<br>

* Khi ủi sản phẩm bằng bàn là và sử dụng chế độ hơi nước sẽ làm cho sản phẩm dễ ủi phẳng , mát và không bị cháy , giữ màu sản phẩm được đẹp và bền lâu hơn. Nhiệt độ của bàn là tùy theo từng loại vải. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
               </div>
               <?php
                        }
                    }
                ?>
           </div>
        </div>
    </section>
    <!-- product-ralated -------------------------->
    <section class="product-ralated">
        <hr>
        <div class="product-ralated-title row">
            <p>MÀU KHÁC</p>
            <P>MUA CÙNG VỚI</P>
        </div>
        <div class="product-ralated-contenr row">
            <div class="product-ralated-item">
                <img src="image/sp111.jpg" alt="">
                <h1>ĐẦM SUÔNG CỔ TIM MS 47M6675</h1>
                <p>1.290.000<sup>đ</sup></p>
            </div>
            <div class="product-ralated-item">
                <img src="image/sp112.jpg" alt="">
                <h1>ĐẦM THUN DÁNG SUÔNG MS 42B8680</h1>
                <p>990.000<sup>đ</sup></p>
            </div>
            <div class="product-ralated-item">
                <img src="image/sp113.jpg" alt="">
                <h1>ĐẦM SUÔNG VAI HOA MS 48M6361</h1>
                <p>1.590.000<sup>đ</sup></p>
            </div>
            <div class="product-ralated-item">
                <img src="image/sp114.jpg" alt="">
                <h1>ĐẦM SUÔNG PHỐI ĐĂNG REN MS 47M6685</h1>
                <p>1.590.000<sup>đ</sup></p>
            </div>
            <div class="product-ralated-item">
                <img src="image/sp115.jpg" alt="">
                <h1>ĐẦM SUÔNG CỔ CÁCH ĐIỆU MS 40B8744</h1>
                <p>1.390.000<sup>đ</sup></p>
            </div>
        </div>
    </section>
    <!--------------- footer ---------------------------->
    <hr>
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
    const baoquan = document.querySelector(".baoquan")
    const chitiet = document.querySelector(".chitiet")
    if (baoquan){
        baoquan.addEventListener("click", function(){
            document.querySelector(".product-contenr-right-text-contenr-chitiet").style.display = "none"
            document.querySelector(".product-contenr-right-text-contenr-baoquan").style.display = "block"
        })
    }
    if (chitiet){
        chitiet.addEventListener("click", function(){
            document.querySelector(".product-contenr-right-text-contenr-chitiet").style.display = "block"
            document.querySelector(".product-contenr-right-text-contenr-baoquan").style.display = "none"
        })
    }
    const bottum = document.querySelector(".product-contenr-right-text-top")
    if (bottum){
        bottum.addEventListener("click", function(){
            document.querySelector(".product-contenr-right-text-contenr-big").classList.toggle("ativiB") 
        })
    }
</script>
</html>