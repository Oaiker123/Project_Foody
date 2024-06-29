<div class="row mb">
    <div class="menu-main mb">
        <?php include "view/menu-main.php"?>
    </div>
    <div class="boxtrai1 mr">

        <div class="row mb">
            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>SỐ LƯỢNG MẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>TRẠNG THÁI THANH TOÁN</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php 
                        if(is_array($mybill)){
                            
                            foreach ($mybill as $bill) {
                                extract($bill);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $countsp = loadall_cart_count($bill['id']);
                                echo '  
                                <tr>
                                <td>'.$bill['id'].'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'].'</td>
                                <td>'.$ttdh.'</td>
                                <td>';

                                    if ($ttdh == 'Hoàn tất') {
                                        echo 'Đã thanh toán';
                                    } else {
                                        echo 'Chưa thanh toán';
                                    }
echo '</td>
        <td>
            <a href="index.php?act=ctbill&idbill=' . $bill['id'] . '"><input style="padding:5px;" type="button" value="Chi Tiết"></a>
        </td>
        <td>
            <a href="index.php?act=cancelOrder&id=' . $bill['id'] . '"><input style="padding:5px;" type="button" value="Hủy Đơn"></a>
        </td>
    </tr>
';
                            }
                        }
                    ?>

                </table>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php";?>
    </div>

</div>