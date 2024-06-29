<?php 
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    include "../../model/taikhoan.php";

    $idpro = $_REQUEST['idpro'];

    $dsbl = loadall_binhluan($idpro);
    $dstk = loadall_taikhoan();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .binhluan table{
            width: 100%;
            background-color: aliceblue;
        }
        .binhluan td,.binhluan th{
            border: none;
        }
        .binhluan table td:nth-child(1){
            width: 50%;
        }
        .binhluan table td:nth-child(2){
            width: 20%;
        }
        .binhluan table td:nth-child(3){
            width: 30%;
        }

    </style>
</head>
<body>

    <div class="row mb">
        <div class="boxtitle">BÌNH LUẬN</div>
        <div class="boxcontent2 binhluan">
            <table class="">
                <tr>    
                    <th>Nội dung bình luận</th>
                    <th>Tài khoản</th>
                    <th>Thời gian bình luận</th>
                </tr>
                <?php 
                    // echo "Nội dung bình luận ở đây: ".$idpro;
                    foreach ($dsbl as $bl) {
                        extract($bl);
                         
                        
                        echo '<tr>
                                <td>'.$noidung.'</td>
                                
                                ';
                                $testtk = $iduser;
                                foreach ($dstk as $tk) {
                                    extract($tk);
                                    if($id == $testtk)
                                    echo '
                                    <td>'.$user.'</td>
                                ';
                                }
                                echo '
                                <td>'.$ngaybinhluan.'</td>
                            </tr>
                        ';
                    }
                ?>
                
            </table>
        </div>
        <div class="boxfooter searbox" style=" text-align: center;">
            
        <?php 
                            if(isset($_SESSION['user'])){
                        ?>
                            <form class="formtkiem" action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                            <input type="hidden" name="idpro" value="<?=$idpro?>">
                            <input style="width: 80%;padding: 5px;" type="text" name="noidung" id="" required>
                            <input style="width: 18%;" type="submit" name="guibinhluan" value="Gửi">
                        </form>
                        <?php
                            }else{ 
                        ?>
                            <h1 style="color: red">Vui lòng đăng nhập để được bình luận !</h1>         
                        <?php } ?>
            
        </div>

        <?php 
            if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
                $noidung = $_POST['noidung'];
                $idpro = $_POST['idpro'];
                $iduser = $_SESSION['user']['id'];
                $ngaybinhluan = date('h:i:sa d/m/Y'); 
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                header("location: ".$_SERVER['HTTP_REFERER']);
            }
        ?>
    </div>
    
</body>
</html>


