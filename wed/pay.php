<?php
    include "header.php";
?>
   <!-- ------------------pay------------------------ -->
    <section class="pay">
        <div class="container">
            <div class="pay-top-wrap">
                <div class="pay-top">
                    <div class="pay-top-cart cart-top-item">
                        <i class="fa fa-shopping-cart " aria-hidden="true"></i>
                    </div>
                    <div class="pay-top-marker cart-top-item">
                        <i class="fa fa-map-marker " aria-hidden="true"></i>
                    </div>
                    <div class="pay-top-card cart-top-item">
                        <i class="fa fa-credit-card " aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pay-container row">
                <div class="pay-container-left">
                    <p>Vui lòng chọn địa chỉ giao hàng</p>
                    <div class="pay-container-left-dangnhap">
                        <p><i class="fa fa-sign-in" aria-hidden="true"></i> <a href="">Đăng nhập</a> (nếu bạn đã có tài khoảng của IVY)</p>
                    </div>
                    <div class="pay-container-left-khachle row">
                        <input checked type="radio" name="loaikhach" >
                        <span style="font-weight: bold;">Khách lẻ</span>
                        <p>(Nếu bạn không muốn lưu lại thông tin)</p>
                    </div>
                    <div class="pay-container-left-dangky row">
                        <input type="radio" name="loaikhach" >
                        <span style="font-weight: bold;">Đăng ký</span>
                        <p>(Tạo mới tài khoảng với thông tin bên dưới)</p>
                    </div>
                    <div class="pay-container-left-input-top row">
                        <div class="pay-container-left-input-top-item">
                            <label for="">Họ tên <span style="color: red;">*</span></label>
                            <input type="text" name="hoten">
                        </div>
                        <div class="pay-container-left-input-top-item">
                            <label for="">Điện thoại <span style="color: red;">*</span></label>
                            <input type="text" name="dienthoai">
                        </div>
                        <div class="pay-container-left-input-top-item">
                            <label for="">Tỉnh/TP <span style="color: red;">*</span></label>
                            <input type="menu" name="tinh">
                        </div>
                        <div class="pay-container-left-input-top-item">
                            <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                            <input type="text" name="quan">
                        </div>
                    </div>
                    <div class="pay-container-left-input-bottum">
                        <div class="pay-container-left-input-bottum-item">
                            <label for="">Phường/Xã <span style="color: red;">*</span></label>
                            <input type="text" name="quan">
                        </div>
                        <div class="pay-container-left-input-bottum-item">
                            <label for="">Địa chỉ <span style="color: red;">*</span></label>
                            <input type="text" name="quan">
                        </div>
                    </div>
                    <div class="pay-container-left-input-bottum row">
                        <a href=""> &lt;&lt; Quay lại giỏ hàng </a>
                        <button> <a href="payment.php"><p style="font-weight: bold;">THANH TOÁNG VÀ GIAO HÀNG</a></p></button>
                    </div>
                </div>
                <div class="pay-container-right">
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giảm giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <tr>
                            <td>
                                <p>Đầm suông cổ tim MS 47M6675 <br>

                                    L / Đỏ Thẫm <br>
                                    
                                    47M6675 / 2.400.000<sup>đ</sup>
                                </p>
                            </td>
                            <td>30%</td>
                            <td>1</td>
                            <td><p>2.400.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Đầm suông cổ tim MS 47M6675<br>

                                    L / Đỏ Thẫm <br>
                                    
                                    47M6675 / 2.400.000<sup>đ</sup>
                                </p>
                            </td>
                            <td>30%</td>
                            <td>1</td>
                            <td><p>2.400.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td colspan="3">Tổng tiền</td>
                            <td><p>4.800.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td colspan="3"> Tạm tính</td>
                            <td><p>4.000.000<sup>đ</sup></p></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--------------- footer ---------------------------->
    <hr style="border-top: 2px solid #333333; margin-top: 20px;">
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

</html>