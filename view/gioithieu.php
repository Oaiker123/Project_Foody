<div class="row">
  <div class="menu-main mb">
    <?php include "menu-main.php" ?>
  </div>
  <div class="boxtitle">GIỚI THIỆU</div>
  <div class="boxcontent row">
    <style>
      * {
        box-sizing: border-box;
        font-family: sans-serif;
      }

      img {
        vertical-align: middle;
      }

      .flex {
        margin-top: 3vw;

        display: flex;
        align-items: center;
        column-gap: 2vw;
      }

      .flex img {
        border-radius: 10px;
      }
      /* Caption text */
      .text {
        color: #f2f2f2;
        font-size: 20px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }
      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      .choose{
        margin-top: 40px;
        display: flex;
        width: 85%;
        text-align: center;
        margin: 0 auto;
        padding: 0 auto;
      }

      .content strong{
        font-size: 0.9vw;
      }
      .content p{
        font-size: 0.9vw;
      }
      /* Nhân sự */
      .employee {
        margin-top: 40px;
        margin-bottom: 60px;
        text-align: center;
      }

      .name {
        font-weight: bolder;
        font-size: 1.1vw;
      }

      .member {
        border: 1px solid gray;
        padding: 10px;
        border-radius: 10px;
        margin-left: 1vw;
        margin-right: 1vw;
      }

      .member p {
        margin-top: 0.5vw;
      }

      .member img {
        border-radius: 10px;
      }

      .grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
      }

      @keyframes fade {
        from {
          opacity: .4
        }

        to {
          opacity: 1
        }
      }

      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .text {
          font-size: 11px
        }
      }
    </style>
    <div class="">
      <div class="">
        <h1 class="mb" style=" text-align: center; font-size: xx-large;">Vì sao nên lựa chọn Foody - DHPD</h1>
        <div class="choose" style="margin-top: 50px;margin-bottom: 80px;">
          <div class="content">
              <img width="15%" src="./view/images/users/anh1.jpg" alt="">
              <br>
              <strong> Luôn có món ngon mà bạn  thích</strong>
              <p>Khám phá hàng trăm món ăn ngon mà chúng tôi làm mới mỗi ngày </p>
          </div>
          <div class="content">
              <img width="30%" src="./view/images/users/dathang.png" alt="">
              <br>
              <strong>Đặt hàng nhanh giao cũng siêu nhanh</strong>
              <p>Món ngon sẽ được giao thần tốc đến nơi bạn muốn</p>
          </div>
          <div class="content">
              <img width="15%" src="./view/images/users/ungho.jpg" alt="">
              <br>
              <strong> Ủng hộ người Việt</strong>
              <p>Khi đặt món tại DHPD , bạn đã góp phần giúp chúng tôi phát triển thương hiệu</p>
          </div>
        </div>
        <div class="flex">
          <img src="./view/images/post/com-chay-kho-quet.png" alt="" style="display: block; margin-left: auto; margin-right: auto; width: max-width; height: 250px;">
          <div style="font-family: Times New Roman, Times, serif;font-size: x-large;">Xuất phát từ tình yêu với ẩm thực, đặc biệt là ẩm thực chế biến sẵn cùng mong muốn
            mang tới tận tay thực khách những món ngon đã được nấu nướng và chăm chút hoàn chỉnh,
            với đa dạng các đầu thực phẩm cũng như phong cách chế biến cùng hương vị đi kèm...
            giúp các thực khách có thêm nhiều cảm nhận mới mẻ khi thưởng thức những món ngon đã
            được chế biến thơm ngon, tinh tế, thương hiệu DHPD đã chính thức ra đời.</div>
        </div>
        <div class="flex">

          <div style="font-family: Times New Roman, Times, serif; font-size: x-large;">Với đội ngũ đầu bếp chuyên nghiệp, giàu kinh nghiệm trên 20 năm, Shop DHPD luôn tự
            tin đảm nhận làm nên các món ngon không đâu trộn lẫn với nhiều dấu ấn. Với cách biến
            hóa thực phẩm đa dạng nhiều vùng miền, Shop DHPD khẳng định sẽ luôn mang lại hương
            vị thơm ngon hòa quyện trong từng món ăn, giúp thực khách khám phá sự thú vị khi thưởng thức. </div>
          <img src="./view/images/post/com-chay-mam-toi.png" alt="" style="display: block; margin-left: auto; margin-right: auto; width: max-width; height: 250px;">
        </div>
        <div class="flex">
          <img src="./view/images/post/kho-bo-soi-xe-cay.png" alt="" style="display: block; margin-left: auto; margin-right: auto; width: max-width; height: 250px;">
          <div style="font-family: Times New Roman, Times, serif; font-size: x-large;">Quán tọa lạc tại P. Trịnh Văn Bô Phương Canh Hà Nội. Với diện tích thoáng đãng, sạch sẽ, ngăn nắp.
            Đảm bảo về chất lượng là những gì mà thương hiệu luôn muốn gửi tới thực khách, thay cho một
            lời cảm ơn từ sự ủng hộ từ phía thực khách. Với phong thái nhiệt tình chu đáo, nhân viên đồng
            phục thống nhất, theo phương châm" khách hàng là thượng đế", "đến một lần để rồi nhiều lần
            sau lại đến"... Shop DHPD muốn xây dựng trong mắt thực khách, một quán ẩm thực văn hóa,
            đến không vì miếng ngon mà đến vì tình thân gia đình, ủng hộ Shop DHPD thành thương hiệu số 1 Hà thành.</div>
        </div>

      </div>
      <br>

      <h2 class="mt30" style=" text-align: center; font-size: xx-large;">Bộ phận nhân sự</h2>
      <div class="employee">
        <div class="grid">
          <div class="member">
            <img style="width: 200px;height: 300px" src="./images/sv1.jpg" alt="">
            <p class="name"> Trần Bá Oai </p>
            <p class="role">Chức vụ :Coder, Trưởng Nhóm </p>
            <p class="email"> Email : oaitbph36440@fpt.edu.vn</p>
          </div>
          <div class="member">
            <img style="width: 200px;height: 300px" src="./images/sv2.jpg" alt="">
            <p class="name"> Nguyễn Sỹ Long</p>
            <p class="role">Chức vụ :Quản Lý, Coder </p>
            <p class="email"> Email : longnsph43473@fpt.edu.vn</p>
          </div>
          <div class="member">
            <img style="width: 200px;height: 300px" src="./images/sv3.png" alt="">
            <p class="name"> Lý Trường Giang </p>
            <p class="role">Chức vụ : Coder , Quản Lý </p>
            <p class="email"> Email : giangltph33114@gmail.com</p>
          </div>
          <div class="member">
            <img style="width: 200px;height: 300px" src="./images/tg1.jpg" alt="">
            <p class="name"> Nguyễn Thành Trung </p>
            <p class="role">Chức vụ : Hỗ Trợ Code </p>
            <p class="email"> Email : trungnt173@fpt.edu.vn</p>
          </div>
        </div>
      </div>

      </script>
      <div class="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8410320579424!2d105.74095901476346!3d21.039045785992847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454962c0b6523%3A0x5c76c67564d9d1b9!2zUGjhu5EgVHLhu4tuaCBWxINuIELDtCwgUGjGsMahbmcgQ2FuaCwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1635607330848!5m2!1sen!2s" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>