<?php
    include "header.php";
?>
    <!-- ---------payment----------------------------- -->
    <section class="payment">
        <div class="container">
            <div class="payment-top-wrap">
                <div class="payment-top">
                    <div class="payment-top-cart cart-top-item">
                        <i class="fa fa-shopping-cart " aria-hidden="true"></i>
                    </div>
                    <div class="payment-top-marker cart-top-item">
                        <i class="fa fa-map-marker " aria-hidden="true"></i>
                    </div>
                    <div class="payment-top-card cart-top-item">
                        <i class="fa fa-credit-card " aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="payment-content row">
                <div class="payment-content-left">
                    <div class="payment-content-left-method-pay">
                        <p style="font-weight: bold;">Phương thức giao hàng</p>
                        <div class="payment-content-left-method-pay-item">
                            <input type="radio">
                            <label for="" style="font-size: 14px;">Giao hàng chuyển phát nhanh</label>
                            <p style="font-size: 12px;">Chuyển hàng tới địa chỉ khách hàng.</p>
                        </div>
                    </div>
                    <div class="payment-content-left-method-payment">
                        <p style="font-weight: bold;">Phương thức thanh toán</p>
                        <p style="font-size: 12px;">Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                        <div class="payment-content-left-method-payment-item">
                            <input type="radio">
                            <label for="" style="font-size: 14px;">Thanh toán bằng thẻ tín dụng(OnePay)</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="image\pay1.jpg" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input type="radio">
                            <label for="" style="font-size: 14px;"> Thanh toán bằng thẻ ATM(OnePay)</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="image\pay2.jpg" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input type="radio">
                            <label for="" style="font-size: 14px;"> Thanh toán Momo </label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="image\pay3.jpg" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input type="radio">
                            <label for="" style="font-size: 14px;">  Thu tiền tận nơi </label>
                        </div>
                        <div class="payment-content-left-method row">
                            <a href=""> &lt;&lt; Quay lại </a>
                            <button><p style="font-weight: bold;">HOÀNG THÀNH</p></button>
                        </div>
                    </div>
                </div>
                <div class="payment-content-right">
                     <div class="payment-content-right-buttom">
                         <input type="text" placeholder="Mã giảm giá/Quà tặng">
                         <button><i class="fa fa-check" aria-hidden="true"></i></button>
                     </div>
                     <div class="payment-content-right-buttom">
                        <input type="text" placeholder="Mã cộng tác viên">
                        <button><i class="fa fa-check" aria-hidden="true"></i></button>
                     </div>
                     <div class="payment-content-right-nv">
                        <select name="" id="">
                            <option value="0">Chọn nhân viên thân thiết</option>
                            <option value="">pt07</option>
                            <option value="">pt12</option>
                            <option value="">ot45</option>
                            <option value="">ut65</option>
                            <option value="">ht12</option>
                            <option value="">kt23</option>
                            <option value="">kh15</option>
                        </select>
                    </div>
                    <div class="payment-content-right-table">
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
                            <tr>
                                <td colspan="3">Giao hàng chuyển phát nhanh</td>
                                <td><p>0<sup>đ</sup></p></td>
                            </tr>
                            <tr>
                                <td colspan="3">Tiền thanh toán</td>
                                <td><p>4.000.000<sup>đ</sup></p></td>
                            </tr>
                        </table>
                    </div>
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