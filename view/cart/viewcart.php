<div class="row mb">
    <div class="menu-main mb">
                    <?php include "view/menu-main.php"?>
                </div>
    <div class="boxtrai1 mr">
        <div class="row mb">
        <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table>
                    <?php 
                        viewcart(1);
                    ?>
                </table>
            </div>
        </div>
            
        <div class="row mb bill">
                    <?php 
                            if(isset($_SESSION['user'])){
                        ?>
                            <a class="mr" href="index.php?act=bill">
                                <input style="padding:5px;" type="button" value="TIẾP TỤC ĐẶT HÀNG">
                            </a><a href="index.php?act=delcart">
                                <input style="padding:5px;" type="button" value="XÓA GIỎ HÀNG">
                            </a>
                        </form>
                        <?php
                            }else{ 
                        ?>
                            <h1 style="color: red; text-align: center;">Vui lòng đăng nhập để tiếp tục đặt hàng!</h1>         
                        <?php } ?>                   
        </div>
        
    </div>
    <div class="boxphai">
            <?php include "view/boxright.php";?>
        </div>
    
</div>




