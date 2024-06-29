<div class="row">
    <div class="menu-main mb">
        <?php include "menu-main.php"?>
    </div>
    <div class="boxtitle">LIÊN HỆ</div>
    <div class="boxcontent row">
        <main style="display: grid;
                    grid-template-columns: 30% auto;
                    grid-gap: 10px;">
        <section class="contact">
            <p ><strong style="color: #772f2d;">FOODY</strong> chuyên cung cấp các món ăn vặt ngon ngon chất lượng #1, các món ăn vặt phổ biến nhất như: cơm cháy chà bông, khô bò, khồ gà, mực xé sợi, rong biển,...</p>
            <p>Địa chỉ: 124/49 Hòe Thị, Phương Canh, Nam Từ Niêm, Hà Nội</p>
            <p>Điện thoại: 035.37.12.030</p>
            <p>Email : tranbaoai2004@gmail.com</p>
        </section>
        <section class="contact-form">
            <form action="index.php?act=addlh" method="post">
                <h1 style="font-size:30px;
                margin-bottom:20px; color: #772f2d;">Liên hệ với chúng tôi</h1>
                <div class="row-form">
                    <div>
                    <label for="">Họ và tên</label>
                    <input type="text" name="name" placeholder="Nhập họ và tên">
                    </div>
                    <div>
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="Nhập địa chỉ email">
                    </div>
                    <div>
                    <label for="">Điện Thoại</label>
                    <input type="number" placeholder="Nhập số điện thoại" name="sdt">
                    </div>
                </div>
                <label for="">Nội dung</label><textarea name="noidung" id="" cols="30" rows="10"></textarea>
                <button name="themmoi-lh"><a href="index.php" style="text-decoration: none; color:white;">GỬI TIN NHẮN</a></button>
            </form>
        </section>
        </main>
    </div>
</div>