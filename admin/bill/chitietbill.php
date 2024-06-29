
<div class="box-right">
                <div class="row frmtitle mb10">
                    <h1>CHI TIẾT ĐƠN HÀNG</h1>
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
                                        <th>ID</th>
                                        <th>MÃ ĐƠN HÀNG</th>
                                        <th>SỐ ĐIỆN THOẠI</th>
                                        <th>ĐỊA CHỈ</th>
                                        <th>TÊN NGƯỜI MUA</th>
                                        <th>EMAIL</th>
                                        <th>TÊN SẢN PHẨM</th>
                                        <th>ẢNH</th>
                                        <th>SỐ LƯỢNG</th>
                                        <th>GIÁ TIỀN</th>
                                        <!-- <th>THAO TÁC</th> -->
                                            
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php 
                                        
                                        foreach($listbill as $item){
                                            extract($item);
                                            $phone = $bill['bill_tel'];
                                            $address = $bill['bill_address'];
                                            $userName = $bill['bill_name'];
                                            $email = $bill['bill_email'];
                                            $price = $bill['total'];
                                            $xoacart = "index.php?act=xoacart&idbill"."=$idbill&id=".$id;                                   
                                            $photo = "../upload/".$img;
                                            if(is_file($photo)){
                                                $hinhanh = "<img src='".$photo."' height = '50px' width = '60px'>";
                                            }else{
                                                $hinhanh = "No Photo";
                                            }
                                            ?>
                                            <tr>
                                                    <td><input type="checkbox" name="" id=""></td>
                                                    <td><?=$id?></td>
                                                    <td><?=$idbill?></td>
                                                    <td><?=$phone?></td>
                                                    <td><?=$address?></td>
                                                    <td><?=$userName?></td>
                                                    <td><?=$email?></td>
                                                    <td><?=$name?></td>
                                                    <td><?=$hinhanh?></td>
                                                    <td><?=$soluong?></td>
                                                    <td><?=$price?></td>
                                                    <!-- <td> 
                                                        <a href="<?=$xoacart?>"><input type="button" value="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"></a>   
                                                    </td> -->
                                                </tr>
                                                <?php }
                                         ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb10 mt10">
                            <a href="index.php?act=listbill"><input style="margin-bottom:10px ;" type="button" type="button" value="Quay lại"></a> 
                            <input type="button" class="mr5" value="Chọn tất cả">
                            <input type="button" class="mr5" value="Bỏ chọn tất cả">
                            <input type="button" value="Xóa các mục tất tả"> 
                        </div>
                    </form> 
                </div>
        </div>
        </div>