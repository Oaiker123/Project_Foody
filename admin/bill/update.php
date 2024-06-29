<?php 
    if(is_array($bill)){
        extract($bill);
    }
?>
<div class="box-right">
    <div class="row frmtitle">
        <h1>CẬP NHẬT TÌNH TRẠNG ĐƠN HÀNG</h1>
    </div>
    <div class="row frmcontent">

        <strong>Tình trạng đơn hàng</strong>
        <br>
        <br>
        <form action="index.php?act=updatebill" method="post">
            <div>
                <select name="bill_stt" id="bill_stt" style="padding:5px;>
                    <?php
                         $statusDescriptions = array(
                            'Đơn hàng mới',
                            'Đang xử lý',
                            'Đang giao hàng',
                            'Đã giao hàng',
                            'Hủy đơn'
                     );

                    foreach ($statusDescriptions as $index => $description) {
                        echo '<option value="' . $index . '"';
                        if ($index == $bill_status) {
                            echo ' selected';
                        }
                        echo '>' . $description . '</option>';
                    }
                    ?>
                </select>
                <p style="color: red;" id="bill_stt_err"></p>
            </div>
            <div class="row mb kh-one">
            </div>
            <div class="row mb mt10 ">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                <input type="submit" class="mr5" onclick="validateForm()" value="Cập nhật" name="capnhat">
            </div>
        </form>
        <h2 class="thongbao">
            <?php 
                        if(isset($thongbao) && ($thongbao != "")){
                            echo $thongbao;
                        }
                    ?>
        </h2>
    </div>
</div>

<script>
function validateForm() {
    let bill_stt = document.getElementById("bill_stt").value;

    let text;
    if (bill_stt == "") {
        text = "Số bạn điền vào không hợp lệ";
        document.getElementById("bill_stt_err").innerHTML = text;
        return false;
    } else {
        text = "";
        document.getElementById("bill_stt_err").innerHTML = text;
    }


}
</script>
</div>
</div>