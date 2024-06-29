<?php
    session_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "model/binhluan.php";
    include "model/cart.php";
    include "model/lienhe.php";


    
    include "global.php";

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

    $spnew = loadall_sanpham_home();
    $loadhh = hh_selectall_home(0);
    $dsdm = loadall_danhmuc();
    $result = hh_all();
    $dstop6 = loadall_sanpham_top6();

    include "view/header.php";
    
    if((isset($_GET['act'])) && ($_GET['act'] != "")){
        $act = $_GET['act'];
        switch ($act) {
            case 'dangky':
                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = 0;
                    insert_taikhoan($email,$user,$pass,$address,$tel,$role);
                    $thongbao="Chúc mừng bạn đã đăng ký thành công !";
                    
                }
                
            case 'dangnhap':
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user'] = $checkuser;
                        // $thongbao = "Bạn đã đăng nhập thành công !";
                        header('location: index.php');
                    }else{
                    $thongbao = "Tài khoản không tồn tại !";
                    }
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'edit_taikhoan':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    
                    $_SESSION['user'] = checkuser($user,$pass);
                    $thongbao="Chúc mừng bạn đã cập nhật thành công !";
                    header('location: index.php?act=edit_taikhoan');

                }
                include "view/taikhoan/edit_taikhoan.php";
                
                break;
            case 'quenmk':
                if(isset($_POST['guiemail']) && ($_POST['guiemail'])){

                    $email = $_POST['email'];

                    $checkemail = checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao = "Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                        $thongbao = "Email không tồn tại !";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'thoat':
                session_unset();
                header('location: index.php'); 
                break;
            case 'addtocart':
                if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $soluong = $_POST['soluong'];
                    $ttien = $soluong * $price;
                    $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                
                    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                    $productExists = false;
                    foreach ($_SESSION['mycart'] as &$cartItem) {
                        if ($cartItem[0] == $id) {
                            // Sản phẩm đã tồn tại,  cập nhật số lượng
                            $cartItem[4] += $soluong;
                            $productExists = true;
                            break;
                        }
                    }
                    header('location: index.php?act=viewcart');
                    // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
                    if (!$productExists) {
                        array_push($_SESSION['mycart'], $spadd);
                        header('location: index.php?act=viewcart');
                    }
                }
                include "view/cart/viewcart.php";
                break;
                case 'updatequantity':
                    if (isset($_POST['id']) && isset($_POST['newquantity'])) {
                        $id = $_POST['id'];
                        $newQuantity = $_POST['newquantity'];
                
                        // Kiểm tra id
                        if (isset($_SESSION['mycart'][$id])) {
                        //    Cập nhật số lượng
                            $_SESSION['mycart'][$id][4] = $newQuantity;
                        }
                    }
                    include "view/cart/viewcart.php";
                    break;
            case 'delcart':
                if(isset($_GET['idcart'])){ 
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1); 
                }else{
                    $_SESSION['mycart'] = []; 
                }
                header('location: index.php?act=viewcart');
                break;
            case 'viewcart':
                include "view/cart/viewcart.php";
                break;
            case 'bill':
                include "view/cart/bill.php";
                break;
            case 'ctbill':
                    if(isset($_POST["kyw"]) && $_POST["kyw"] != ""){
                        $kyw = $_POST['kyw'];
                    }else{
                        $kyw = "";
                    }
                    if(isset($_GET['idbill']) && ($_GET['idbill'] >0)){
                        $listbill =  loadall_bill_ct($_GET['idbill']);
                        $bill = loadone_bill($_GET['idbill']);
                    }
                    include "view/cart/billdetail.php";
                    break;
            case 'billcomfirm':
                
                if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])){
                    if(isset($_SESSION['user'])) {$iduser = $_SESSION['user']['id'];}
                    else $id=0;
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $pttt = $_POST['pttt'];
                    $ngaydathang = date('h:i:sa d/m/Y');
                    $tongdonhang = tongdonhang();

                    
                    // Tạo bill
                    $idbill = insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang);

                    // Insert into cart: $session['mycart'] $idbill

                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                    } 
                    // Xóa session cart
                    $_SESSION['cart'] = [];
                }
                $bill = loadone_bill($idbill);
                $billct = loadall_cart($idbill);
                include "view/cart/billcomfirm.php";
                break;
            case 'mybill':
                $mybill = loadall_bill("",$_SESSION['user']['id']);
                include "view/cart/mybill.php";
                break;
                case 'cancelOrder':
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $ttdh = $_GET['ttdh'];
                        
                        if ($ttdh < 2) {
                            cancel_order($id);
                            $thongbao = "Hủy thành công đơn hàng";
                            echo '<script>alert("' . $thongbao . '");</script>';
                        }else {
                            $thongbao = "Đơn hàng đang giao hoặc đã hoàn thành không thể hủy";
                            echo '<script>alert("' . $thongbao . '");</script>';
                        }
                
                        echo '<script>window.location.href = "index.php?act=mybill";</script>';
                        exit();
                    }
                    break;
            case 'sanpham':
                if(isset($_POST['kyw']) && ($_POST['kyw'] != "")){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']> 0)){
                    $iddm = $_GET['iddm']; 
 
                }else{
                    $iddm = 0; 
                }
                $dssp = loadall_sanpham($kyw,$iddm);
                $tendm = load_ten_dm($iddm);  
                include "view/sanpham.php";         
                break;
            case 'sanphamct':
                if(isset($_GET['idsp']) && ($_GET['idsp']> 0)){
                    $id = $_GET['idsp'];
                    sp_update_view($id);
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai = load_sanpham_cungloai($id,$iddm);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }                
                break;
            case 'page':
                $page =  $_GET['page'];
                $pages = $page*9;
                $loadhh = hh_selectall_home($pages);
                include "view/home.php";
                break;
            case 'vnpay':
                include "./vnpay_php/index.php";
                break;  
            // Liên hệ
            case 'addlh':
                if(isset($_POST['themmoi-lh'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $noidung = $_POST['noidung'];
                }
                insert_lienhe($name,$email,$sdt,$noidung);

                header('location: index.php');
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'tintuc':
                include "view/tintuc.php";
                break;
            case 'muahang':
                include "view/muahang.php";
                break;
            case 'doitra':
                include "view/doitra.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            case 'post':
                include "view/post.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    }
    else{
        include "view/home.php";
    }
    include "view/footer.php";
?>