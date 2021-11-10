<?php
    include "header.php";
?>

    <?php
        $giaodien = new giaodien;
        $show_slider = $giaodien -> show_slider();
    ?>
    <section id="slider">
        <div class="aspect-ratio-169">
            <?php
                if ($show_slider){ $i = 0;
                    while ($result = $show_slider -> fetch_assoc()) { $i++;
            
            ?>
                <img src="image\<?php echo  $result['slider_img'] ?>" alt="">
            <?php
                    }
                }
            ?>
        </div>
        <div class="dot-contenr">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>
    <section class="app-contenr">
        <p> Tải ứng dụng IVY moda </p>
        <div class="app-google">
            <img src="image/app-store.png">
            <img src="image/gg-play.png">
        </div>
        <p> Nhập bản tin của IVY moda</p>
        <input type="text" placeholder="Nhập email của bạn....">
    </section>
    <!-- fon -->
    <div class="footer-top">
        <li> <a href=""><img src="image/thongbao.png"></a></li>
        <li> <a href="">Liên hệ</a></li>
        <li> <a href="">Tuyển dụng</a></li>
        <li> <a href="">Giới thiệu</a></li>
        <li>
            <a href="https://www.facebook.com/trongqui2712/"><img src="image/fb.png"></a>
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
    const header = document.querySelector("header")
    window.addEventListener("scroll", function(){
        x = window.pageYOffset
        if (x > 0){
            header.classList.add("sticky")
        }else{
            header.classList.remove("sticky")
        }
    })
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContenr = document.querySelector(".aspect-ratio-169")
    const dotItem = document.querySelectorAll(".dot")
    let imgNuber = imgPosition.length
    let index = 0
    imgPosition.forEach(function(image, index){
         image.style.left = index*100 + "%"
         dotItem[index].addEventListener("click", function (){
            slide (index)
         })
    })
    function imgSlide (){
        index++
        if ( index >= imgNuber ) {index=0}
        slide (index)
    }
    function slide (index){
        imgContenr.style.left = '-' + index*100 + '%'
        const dotActive = document.querySelector(".active")
        dotActive.classList.remove('active')
        dotItem[index].classList.add('active')
    }
 setInterval(imgSlide, 5000)
</script>
</html>