<div class="row mb">
                <div class="menu-main mb">
                    <?php include "view/menu-main.php"?>
                </div>
    <div class="boxtrai1 mr">

        <div class="row mb">
            <div class="boxtitle">CẢM ƠN</div>
            <div class="row boxcontent" style="text-align:center">
                <h2>Cảm ơn quý khách đã đặt hàng!</h2>
            </div>
        </div>
        <?php 
            if(isset($bill) && (is_array($bill))){
                extract($bill);
            }
        ?>
        <div class="row mb">
            <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
            <div class="row boxcontent billform">
                <table>

                    <tr>
                        <td><li>Mã đơn hàng:</li></td>
                        <td><?=$bill['id'];?></td>
                    </tr>
                    <tr>
                        <td><li>Ngày đặt hàng:</li></td>
                        <td><?=$bill['ngaydathang'];?></td>
                    </tr>
                    <tr>
                        <td><li>Tổng đơn hàng:</li></td>
                        <td><?=$bill['total'];?></td>
                    </tr>
                    <tr>
                        <td><li>Phương thức thanh toán:</li></td>
                        <td><?=$bill['bill_pttt'];?>(0:Trả tiền khi nhận hàng 1:Thanh Toán Qua Vnpay)</td>
                    </tr>
                </table>
                
            </div>
        </div>
     
        <div class="row mb">

            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="row boxcontent billform">
                <table>

                    <tr>
                        <td><li>Người đặt hàng</li></td>
                        <td><?=$bill['bill_name'];?></td>
                    </tr>
                    <tr>
                        <td><li>Địa chỉ</li></td>
                        <td><?=$bill['bill_address'];?></td>
                    </tr>
                    <tr>
                        <td><li>Email</li></td>
                        <td><?=$bill['bill_email'];?></td>
                    </tr>
                    <tr>
                        <td><li>Điện thoại</li></td>
                        <td><?=$bill['bill_tel'];?></td>
                    </tr>
                </table>
            </div>
        </div>

            
        <div class="row mb">
                <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
                    <div class="row boxcontent cart">
                        <table>
                            <?php 
                                bill_chi_tiet($billct);
                            ?>
                      </table>
                      </div>
            </div>
        <div class="row mb bill dongydathang1">
            <a class="myCart" href="index.php?act=mybill" style="font-size: 1vw;"><input style="padding:5px;" type="button" value="Đơn Hàng Của Tôi"></a>
        </div>
        
    </div>
    <div class="boxphai">
            <?php include "view/boxright.php";?>
        </div>
    
</div>




