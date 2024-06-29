<div class="row mb">
<div class="menu-main mb">
                    <?php include "view/menu-main.php"?>
                </div>
<div class="boxtrai1 mr">
    
    <div class="row mb">
                
           
            <div class="boxtitle">
                <h1 class="spct text-size">ĐĂNG KÝ TÀI KHOẢN</h1>
            </div>
            <div class="boxcontent row formtaikhoan">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb">
                        Email
                        <input type="Email" placeholder="Email" id="email" name="email" autocomplete="off" />
            <small style="color:red"></small>
                    </div>
                    <div class="row mb">
                        Username
                        <input type="text" placeholder="Họ tên" id="user" name="user" autocomplete="off" />
            <small style="color:red"></small>
                    </div>
                    <div class="row mb">
                        Phone Number                       
                        <input type="text" placeholder="Số điện thoại" id="phone" name="tel"  autocomplete="off"/>
            <small style="color:red"></small>
                    </div>
                    <div class="row mb">
                        Address
                        <input type="text" name="address" required placeholder="Địa Chỉ">
                    </div>
                    <div class="row mb">
                        Password
                        <input type="password" name="pass" required placeholder="Mật Khẩu" id="pass">
                        <input type="checkbox" onclick="showPassword()"> Show Password
                    <script>
                        function showPassword() {
                            var pass = document.getElementById("pass");
                            if (pass.type === "password") {
                                pass.type = "text";
                            } else {
                                pass.type = "password";
                            }
                        }
                    </script>
                    </div>
                        <!-- Loại tài khoản O là tài khoản của khách-->
                        <input type="number" name="role" value="0" disabled hidden>
                  
                    <div class="row mb">
                        <input type="submit" value="Đăng ký" name="dangky" id="btn-register">
                        <input type="reset" value="Nhập lại">
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
        
        
    </div>

    
    <div class="boxphai">
        <?php include "view/boxright.php"?>;
    </div>
</div>