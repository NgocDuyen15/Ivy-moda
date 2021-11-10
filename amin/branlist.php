<?php
    include "header.php";
    include "slider.php";
    include "xuly/bran_class.php";
?>

<?php
    $bran = new bran;
    $show_bran = $bran -> show_bran();
?>

<div class="amin-contenr-right">
            <div class="amin-contenr-right-cartegory-list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th id="1">STT</th>
                        <th id="2">ID</th>
                        <th id="3">TÊN DANH MỤC</th>
                        <th id="4"> LOẠI SẢN PHẨM</th>
                        <th id="4">Tùy biến</th>
                    </tr>
                    <?php
                        if ($show_bran){ $i = 0;
                            while ($result = $show_bran -> fetch_assoc()) { $i++;
                    
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['bran_id'] ?> </td>
                        <td><?php echo $result['cartegory_name'] ?> </td>
                        <td><?php echo $result['bran_name'] ?></td>
                        <td><a href="branupdate.php?bran_id=<?php echo $result['bran_id'] ?>">SỬA</a>|
                        <a href="brandelete.php?bran_id=<?php echo $result['bran_id'] ?>">XÓA</a></td>
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