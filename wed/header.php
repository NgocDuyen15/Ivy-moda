<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../giaodien.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title> wed bán hàng </title>
</head>
<body>
    <?php
      include "xuly/giaodien_class.php";
    ?>

    <header>
        <div class="logo">
            <a href="giaodien.php"><img src="image/logo.png"></a> 
        </div>
        <div class="menu">
            
            <?php
                $giaodien = new giaodien;
                $show_cartegory = $giaodien -> show_cartegory();
            ?>

            <?php
                if ($show_cartegory){ $i = 0;
                    while ($result = $show_cartegory -> fetch_assoc()) { $i++;
            
            ?>
                <li id="<?php echo  $result['cartegory_id'] ?>"> <a href="cartegory.php?cartegory_id=<?php echo $result['cartegory_id'] ?>"> <?php echo  $result['cartegory_name'] ?></a>
                    <ul class="sub-menu">
                    <?php
                        $giaodien = new giaodien;
                        $cartegory_id = $result['cartegory_id'];
                        $show_bran = $giaodien -> show_bran($cartegory_id);
                    ?>
                    <?php
                        if ($show_bran){ $i = 0;
                            while ($result = $show_bran -> fetch_assoc()) { $i++;
                     ?>
                        <li> <a href=""><?php echo  $result['bran_name'] ?></a>
                            <ul>
                            <?php
                                $giaodien = new giaodien;
                                $bran_id = $result['bran_id'];
                                $show_product_type = $giaodien -> show_product_type($bran_id);
                            ?>
                            <?php
                                if ( $show_product_type){ $i = 0;
                                    while ($result =  $show_product_type -> fetch_assoc()) { $i++;
                            ?>
                                <a href=""> <li><?php echo  $result['product_type_name'] ?></li></a>
                                <?php
                                    }
                                }
                            ?>
                            </ul>
                        </li>
                        <?php
                                }
                            }
                        ?>

                    </ul>
                 </li>
            <?php
                    }
                }
            ?>
            
            
        </div>
        <div class="others">
            <li> <input type="text"> <i class="fa fa-search"> </i> </li>
            <li><i class="fa fa-paw" aria-hidden="true"></i></li>
            <li> <a href="../login/dangnhap.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            <li><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
        </div>
    </header>