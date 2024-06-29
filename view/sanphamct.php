    
        
        <div class="row mb">
            <div class="boxtrai mr">
            <div class="menu-main mb">
                <?php include "menu-main.php"?>
            </div>
                <div class="row mb">
                        <?php 
                            extract($onesp);
                        ?>
                        <div class="boxtitle">
                            <h1 class="spct text-size">Chi tiết sản phẩm</h1>
                        </div>
                        <div class="boxcontent row">

                            <div class="ct-main">
                                <div class="ct-left">
                                    <?php 
                                    $images = $img_path.$img;
                                    echo '<img style="height:410px" src="'.$images.'">';
                                    ?>
                                </div>
                                <div class="ct-right">
                                    <div class="tensp mb10"><?=$name?></div>
                                    <div class="masp mb20"><span style="color:gray ;">Mã sản phẩm: </span> <?=$id?></div>

                                    <div class="ct-mota mb20"><?=$mota?></div>

                                    <div class="mb20" style="color: red;font-size: 2vw;font-weight: bolder;"><?=$price?><ins style="color: red;font-size: 2vw">đ</ins></div>
                                   
                                    
                                    <div class="mb10" style="font-size: 1vw">Giá thị trường: <del style="font-size: 1.3vw;color: gray;"><?=$price_old?><ins style="font-size: 1.3vw;color: gray;">đ</ins></del></div>

                                    <div style="font-size: 1vw;color:#73a91d">Tiết kiệm lên đến: <?=$price_old - $price?> <ins>đ</ins></div>
                                    
                                    
                                    <div class="sl-name mb10 mt10">Số lượng</div>
                                        <div class="main-sl">
                                            <button class="btn-cts1" onclick="var result = document.getElementById('qty');var result1 = document.getElementById('qty1'); var qty = result.value; var qty1 = result1.value; if( !isNaN(qty) && qty > 1 && !isNaN(qty1) && qty1 > 1) {result.value--;result1.value--} return false;" type="button">–</button>
                                            
                                            <input class="btn-ct" id="qty" name="quantity" type="text" value="1" readonly="true">
                                           

                                            <button class="btn-cts2" onclick=" var result = document.getElementById('qty');var result1 = document.getElementById('qty1'); var qty = result.value; var qty1 = result1.value; if( !isNaN(qty) && !isNaN(qty1)) {result.value++;result1.value++;}  return false;" type="button">+</button>
                                        </div>
                                    
                                    
                                    <?php
                                        echo '
                                        <form class="mt30" action="index.php?act=addtocart" method="post">
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <input type="hidden" name="name" value="'.$name.'">
                                            <input type="hidden" name="img" value="'.$img.'">
                                            <input class="btn-ct" id="qty1" name="soluong" value="1" type="hidden">
                                            <input type="hidden" name="price" value="'.$price.'">
                                            <input class="btn-add-pr" type="submit" name="addtocart"  value="Thêm vào giỏ hàng">
                                        </form>
                                        '
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bình luận -->
                    
                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script>
                        $(document).ready(function(){
                            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                        });
                    </script>
                    <div>
                        <div class="boxtrai1" id="binhluan">
                        
                        </div>

                        <div class="boxphai" style="position: static;">
                            <?php include "boxright.php"?>;
                        </div>
                    </div>


                    <!-- Hàng cùng loại -->

                    <div class="row">
                        <div class="boxtitle">HÀNG CÙNG LOẠI</div>
                        <div class="boxcontent row boxsp1">
                            <?php 
                                foreach ($sp_cung_loai as $sp_cung_loai){
                                    extract($sp_cung_loai);
                                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                                    // echo '<li class="spcl"><a style="text-decoration: none;color: black" href="'.$linksp.'">'.$name.'</a></li>';

                                    $hinh  = $img_path.$img;
                                echo '
                                
                                <div class="boxsp">
                                    <a href="'.$linksp.'">
                                        <div class="sp9">
                                            <img class="sp9-anh"  src="'.$hinh.'" alt="">
                                            
                                            <h1>'.$name.'</h1>
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
                    </div>
                </div>

                
        </div>





























































































































































































































































































































































        

        <script>
            function soluong(){
                    var sltinhtien = document.getElementById("qty");
                    document.getElementById("bty").value = Number(sltinhtien.value)*1;
                }
        </script>