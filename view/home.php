<div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner mb5">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->

                        <div class="mySlides fade">
                        
                            <img src="images/products/banner2.png" style="width:100%">
                        
                        </div>

                        <div class="mySlides fade">
                        
                            <img src="images/products/banner3.png" style="width:100%">
                        
                        </div>

                        <div class="mySlides fade">
                        
                            <img src="images/products/banner4.png" style="width:100%">
                        
                        </div>

                        <div class="mySlides fade">
                        
                            <img src="images/products/banner5.png" style="width:100%">
                        
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)"></a>
                        <a class="next" onclick="plusSlides(1)"></a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <!-- <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        </div> -->
                    </div>
                </div>
                <div style="background-color: white;color: #772f2d;" >
                
                    <marquee behavior="Scroll" scrollamount="12" sytle="" direction="">
                        <span style="font-size: 2vh">Chương trình giảm giá 30% nhân dịp khai trương shop diễn ra từ 1/12 đến 31/12 << Mua ngay >></span>
                    </marquee>
                    
                </div>
                <br>
                <div class="menu-main clear">
                    <?php include "menu-main.php"?>
                </div>

                

                <div class="row boxtrai1 ">
                    <div class="boxsp1 ">
                        <?php 
                            foreach ($loadhh as $sp){
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&idsp=".$id;
                                $hinh  = $img_path.$img;
                                echo '
                                
                                <div class="boxsp">
                                    <a href="'.$linksp.'">
                                        <div class="sp9">
                                            <img class="sp9-anh"   src="'.$hinh.'" alt="">
                                            
                                            <span>'.$name.'</span>
                                            <div style="display: flex;justify-content: center;align-items: center;">
                                                <p><b>'.$price.'</b><ins>đ</ins></p> &nbsp  &nbsp  &nbsp
                                                <p style="color:gray"><del>'.$price_old.'</del><ins>đ</ins></p>
                                            </div>
                                        </div>
                                            
                                            
                                        <form action="index.php?act=addtocart" method="post">
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <input type="hidden" name="name" value="'.$name.'">
                                            <input type="hidden" name="img" value="'.$img.'">
                                            <input type="hidden" name="soluong" value="1">
                                            <input type="hidden" name="price" value="'.$price.'">
                                            <input type="submit" name="addtocart" id="addtocart" value="Thêm vào giỏ hàng">
                                        </form>
                                    </a>
                                </div>
                                
                                ';
                            }
                        
                        ?>
                    
                    </div>

                    <!-- Load trang sản phẩm -->
                    <?php
                        $sl = count($result);
                        $tong = ceil($sl/9);
                        echo '<div class= "phantrang"><div class="pagination">';
                        echo '<a href="#">&laquo;</a>';                       
                        
                        for($page = 0; $page< $tong; $page++) {
                                echo '<a href="index.php?act=page&page=' . $page . '">' . $page+1 . '</a>';  
                        }
                        echo '<a href="#">&raquo;</a>'; 
                        echo '</div> </div>';
                    ?>
                    
                </div>
                <div class="boxphai mt20 codinh">
                        <?php include "boxright.php"?>
                </div>
            </div>
        <div class="clear"></div>
        <h1 class="mt30 mb topmain" >Top 6 sản phẩm yêu thích</h1>
        
        <div>
            <div class="boxsp2 boxtrai1">
                <?php 
                    foreach ($dstop6 as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        $img = $img_path.$img;
                        echo '
                            <div class="boxsp" >
                                <a href="'.$linksp.'" style="display: flex;justify-content: center;align-items: center;">
                                    <div style="width:100%">
                                        <div class="sp9" >
                                            <img class="sp9-anh"  src="'.$img.'" alt="" >
                                        </div>
                                    </div>

                                    <div style="width:100%">
                                        <span style="color:black;">'.$name.'</span>
                                        <br>
                                        <br>
                                        <div style="display: flex;justify-content: center;align-items: center;">
                                            <p><b>'.$price.'</b><ins>đ</ins></p> &nbsp  &nbsp  &nbsp
                                            <p style="color:gray"><del>'.$price_old.'</del><ins>đ</ins></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        ';
                    }
                ?> 
            </div>

        </div>
            
        </div>