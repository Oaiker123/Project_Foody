<div class="box-right">
    <div class="row frmtitle">
        <h1>DANH SÁCH PHẢN HỒI</h1>
    </div>
    <div class="row frmcontent">
        <form action="#" method="post">
            <div class="row mb10 frmdsloai">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>HỌ VÀ TÊN</th>
                            <th>EMAIL</th>
                            <th>SỐ ĐIỆN THOẠI</th>
                            <th>NỘI DUNG<th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($listlienhe as $lienhe){
                                extract($lienhe);
                                $xoalh = "index.php?act=xoalh&id=".$id;
                                ?>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td><?=$id?></td>
                                        <td><?=$name?></td>
                                        <td><?=$email?></td>
                                        <td><?=$sdt?></td>
                                        <td><?=$noidung?></td>
                                            <td>
                                            <a href="<?=$xoalh?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><input type="button" value="Xóa"></a>      
                                        </td>
                                    </tr>
                            <?php } ?>                                   
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