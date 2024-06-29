<div class="box-right">
    <div class="row frmtitle mb10">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input class="tk-form" type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input class="tk-form-bt" type="submit" name="listok" value="Check">
    </form>
    <div class="row frmcontent">
        <form action="#" method="post">
            <div class="row mb10 frmdsloai">

                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>KHÁCH HÀNG
                            <th>
                            <th>SỐ LƯỢNG HÀNG
                            <th>
                            <th>GIÁ TRỊ ĐƠN HÀNG
                            <th>
                            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                            <th>PHƯƠNG THỨC THANH TOÁN<th>
                            <th>TRẠNG THÁI THANH TOÁN<th>
                            <th>NGÀY ĐẶT HÀNG
                            <th>
                            <th>THAO TÁC
                            <th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                        foreach($listbill as $bill){
                                            extract($bill);
                                            $ctbill = "index.php?act=ctbill&idbill=".$id;
                                            $xoabill = "index.php?act=xoabill&id=".$id;
                                            $suabill = "index.php?act=suabill&id=".$id;
                                            
                                            $kh=$bill["bill_name"].'<br> '.$bill["bill_email"].'<br> '.$bill["bill_address"].'<br> '.$bill["bill_tel"];
                                            $ttdh  = get_ttdh($bill["bill_status"]);
                                            $countsp = loadall_cart_count($bill["id"]);?>


                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?=$id?></td>
                            <td><?=$kh?></td>
                            <td></td>
                            <td><?=$countsp?></td>
                            <td></td>
                            <td><strong><?=$total?></strong> VND</td>
                            <td></td>
                            <td><?=$ttdh?></td>
                            <!-- '.$ttdh.' -->
                            <td>
                                <?php
                                    if ($bill_pttt == 0) {
                                        echo '<span class="badge badge-danger">Trả tiền khi nhận hàng</span>';
                                    }
                                    if ($bill_pttt == 1) {
                                        echo '<span class="badge badge-warning">Chuyển khoản ngân hàng</span>';
                                    }
                                    if ($bill_pttt == 2) {
                                        echo '<span class="badge badge-warning">Thanh toán VNPAY</span>';
                                    }
                                    ?>
                            </td>
                            <td></td>
                            <td>
                            <?php
                                    if ($ttdh == 'Hoàn tất') {
                                        echo '<span class="badge badge-danger">Đã thanh toán</span>';
                                    }else{
                                        echo '<span class="badge badge-danger">Chưa thanh toán</span>';
                                    }
                                ?>
                            </td>
                            <td></td>
                            <td><?=$ngaydathang?></td>
                            <td></td>
                            <td>
                                <a href="<?=$suabill?>"><input style="margin-bottom:10px ; padding:10px;" type="button" type="button"
                                        value="Sửa"></a>
                                <!-- <a href="<?=$xoabill?>"><input style="margin-bottom:10px ;" type="button" value="Xóa"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"></a> -->
                                <a href="<?=$ctbill?>"><input name="goct" type="button" value="Chi tiết"></a>

                            </td>
                            <td></td>
                        </tr>
                        <?php }
                                         ?>
                    </tbody>
                </table>
            </div>
            <div class="row mb10 mt10">

                <input type="button" class="mr5" value="Chọn tất cả">
                <input type="button" class="mr5" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục tất tả">
            </div>
        </form>
    </div>
</div>
</div>