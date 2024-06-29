<div class="menu-main mb">
                    <?php include "view/menu-main.php"?>
                </div>
<div class="box-right">
                <div class="row frmtitle mb10">
                    <h1>CHI TIẾT ĐƠN HÀNG</h1>
                </div>
                <div class="row frmcontent">
                    <form action="#" method="post">
                        <div class="row mb10 frmdsloai">

                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>MÃ ĐƠN HÀNG</th>
                                        <th>TÊN NGƯỜI MUA</th>
                                        <th>SỐ ĐIỆN THOẠI</th>
                                        <th>ĐỊA CHỈ</th>
                                        <th>EMAIL</th>
                                        <th>TÊN SẢN PHẨM</th>
                                        <th>ẢNH</th>
                                        <th>SỐ LƯỢNG</th>
                                        <th>GIÁ TIỀN</th> 
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php   
                                        foreach($listbill as $item){
                                            extract($item); 
                                            $ten = $bill['bill_name'];
                                            $phone = $bill['bill_tel'];
                                            $address = $bill['bill_address'];
                                            $email = $bill['bill_email'];
                                            $price = $bill['total'];
                                            $photo = "./upload/".$img;
                                            if(!is_file($photo)){
                                                $hinhanh = "<img src='".$photo."' height = '60px'>";
                                            }else{
                                                $hinhanh = "<img src='".$photo."' height = '60px'>";
                                            }
                                            ?>
                                            <tr>
                                                    <td><?=$id?></td>
                                                    <td><?=$idbill?></td>
                                                    <td><?=$ten?></td>
                                                    <td><?=$phone?></td>
                                                    <td><?=$address?></td>
                                                    <td><?=$email?></td>
                                                    <td><?=$name?></td>
                                                    
                                                    <td><?=$hinhanh?></td>
                                                    
                                                    <td><?=$soluong?></td>
                                                    
                                                    <td><?=$price?></td>
                                                    
                                                </tr>
                                                <?php } 
                                         ?>
                                </tbody>
                                <a href="index.php?act=mybill"><input style="margin-bottom:10px ;" type="button" type="button" value="Quay lại"></a> 
                            </table>
                        </div>
                       
                    </form> 
                </div>
        </div>
        </div>