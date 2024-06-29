<div class="row menu-main">
        <ul class="nav">
            <li><a class="home" href="index.php">Trang chủ</a></li>
            <li>
                <a class="product" href="#">Sản phẩm</a>
                <ul class="sub-menu">
                    <?php 
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            
                            $linkdm = "index.php?act=sanpham&iddm=".$id; 
                            
                            echo '
                                <li><a href="'.$linkdm.'">'.$name.'</a></li>
                            ';
                        }
                    ?>
                    
                </ul>
            </li>
            <li><a class="introduce" href="index.php?act=gioithieu">Giới thiệu</a></li>
            <li><a class="news" href="index.php?act=tintuc">Tin tức</a></li>
            <li><a class="contact" href="index.php?act=lienhe">Liên hệ</a></li>
        </ul>    

    <div class="">
        <form class="form-tk" action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" id="" placeholder="Từ khóa tìm kiếm" required>
            <button type="submit" name="timkiem"><i class="fa-solid fa-magnifying-glass"></i>
        </form>
    </div>
</div>