<?php
    include "header.php";
    include "slider.php";
    include "xuly/category_class.php";
?>

<?php
    $cartegory = new cartegory;
    $show_cartegory = $cartegory -> show_cartegory();
?>

<div class="amin-contenr-right">
            <div class="amin-contenr-right-cartegory-list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th id="1">STT</th>
                        <th id="2">ID</th>
                        <th id="3">Danh mục</th>
                        <th id="4">Tùy biến</th>
                    </tr>
                    <?php
                        if ($show_cartegory){ $i = 0;
                            while ($result = $show_cartegory -> fetch_assoc()) { $i++;
                    
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['cartegory_id'] ?> </td>
                        <td><?php echo $result['cartegory_name'] ?></td>
                        <td><a href="cartegoryupdate.php?cartegory_id=<?php echo $result['cartegory_id'] ?>">SỬA</a>|
                        <a href="cartegorydelete.php?cartegory_id=<?php echo $result['cartegory_id'] ?>">XÓA</a></td>
                    </tr>
                    <?php
                            }
                        }
                        ?>
                </table>
            </div>
        </div>
        </div>
    </section>
</body>
</html>