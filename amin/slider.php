<section class="amin-contenr">
        <div class="amin-contenr-left">
            <p><i class="fa fa-home"></i> USER</p>
                <ul>
                    <li class="list"> <a href="#"><i class="fa fa-angle-right"></i>
                        TAI KHOẢN</a>
                    </li>
                    <li class="list"> <a href="#"><i class="fa fa-angle-right"></i>
                        GIỎ HÀNG</a>
                    </li>
                </ul>
            <p><i class="fa fa-plus-square"></i> DATABASE </p>
                <ul>
                    <li class="list"> <a href="#"><i class="fa fa-angle-right"></i>
                        Danh mục</a>
                        <ul>
                            <li><a href="categoryadd.php">Danh mục</a></li>
                            <li><a href="cartegorylist.php">Danh sách Danh mục</a></li>
                        </ul>
                    </li>
                    <li class="list"> <a href="#"><i class="fa fa-angle-right"></i>
                        Loại sản phẩm</a>
                        <ul>
                            <li><a href="branadd.php">Thêm loại sản phẩm</a></li>
                            <li><a href="branlist.php">Danh sách loại sản phẩm</a></li>
                        </ul>
                    </li>
                    <li class="list"> <a href="#"><i class="fa fa-angle-right"></i>
                        Sản phẩm</a>
                        <ul>
                            <li><a href="productadd.php">Thêm sản phẩm</a></li>
                            <li><a href="productlist.php">Danh sách sản phẩm</a></li>
                        </ul>
                    </li>
                </ul>
        </div>
        <script>
    const itemliderbar = document.querySelectorAll(".list")
    itemliderbar.forEach(function(menu, index){
    menu.addEventListener("click", function(){
        menu.classList.toggle("block")
    }) 
    })
</script>