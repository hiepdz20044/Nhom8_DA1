<?php
session_start();
ob_start();
include("model/pdo.php");
include("model/user/sanphamModel.php");
include("model/user/order.php");
include("model/user/binhluan.php");
include("model/user/trangchitiet.php");
include("view/user/header.php");
include("global.php");
include("./mail/index.php");
include "model/user/thuonghieu.php";
include "model/user/giohang.php";
if (isset($_SESSION['sdt'])) {
    $id_u = load_taikhoan($_SESSION['sdt']);
    $id_user = $id_u['id_khachhang'];
}
$mail= new Mailer();
if (isset($_GET["type"])){
    switch ($_GET["type"]) {
        case'order':
            if(isset($_SESSION['user'])){
                if(isset($_POST['pay'])){
                    $updonhang=updonhang($_SESSION['user']['id_khachhang'],$_POST['name'],$_POST['phone'],$_POST['email'],$_POST['address']);
                    foreach ($_SESSION['cart'] as $key) {
                        $check=upChiTiet($updonhang['id_donhang'],$key['idsp'],$key['quantity'],$key['total']);
                    }
                    if($check){
                        unset($_SESSION['cart']);
                        header("Location: index.php?type=home&order=1");
                    }else{
                        echo"<script>alert('Đặt hàng thất bại')</script>";
                    }
                }
                include("view/user/thanhtoan.php");
            }else{
                header("Location: index.php?type=dangnhap&yet=1");
            }
            break;
        case 'home':
            if(isset($_GET['order'])){
                echo '<script>alert("Đặt hàng thành công!")</script>';
            }
            $loadall_sanpham=loadall_sanpham();
            $loadall_sanpham_hot= loadall_sanpham_hot();
            $loadall_sanpham_moi= loadall_sanpham_moi();
            include("view/user/home.php");
            break;
        case 'daydh':
            $loadall_daydh= loadall_daydh();
            include("view/user/daydh.php");
            break;
        case 'donghodoi':
            $loadall_donghodoi= loadall_donghodoi();
            include("view/user/donghodoi.php");
            break;
        case 'donghonam':
            $loadall_donghonam= loadall_donghonam();
            include("view/user/donghonam.php");
            break;
        case 'donghonu' :
            $loadall_donghonu= loadall_donghonu();
            include("view/user/donghonu.php");
            break;
        case 'donghotreotuong':
            $loadall_donghotreotuong= loadall_donghotreotuong();
            include("view/user/donghotreotuong.php");
            break;
        case 'trangchitiet':
                $trangCT=trangCT($_GET['id_sp']);
                extract($trangCT);
                $spct=load_spct($id_sanpham, $id_dm);

                include("view/user/trangchitiet.php");
                break;



                case "giohang":
                    // Kiểm tra xem giỏ hàng có dữ liệu hay không
                    // if (!isset($_SESSION['cart'])) {
                    //     $_SESSION['cart']=[];
                    // }
                    echo "<pre>";
                    // var_dump($_POST);
                    // var_dump($_GET);
                    // var_dump($_SESSION);
                    if (isset($_POST["add-cart"])) {
                        if ($_SESSION['sdt']) {
                            $id_u = load_taikhoan($_SESSION['sdt']);
                            $id_user = $id_u['id_khachhang'];
                        }
                        $id_pro = $_POST['idsp'];
                        insert_giohang($id_user,$id_pro);
                    }
                    if (isset($_GET["act"])) {
                        $act = $_GET["act"];
                        $id = $_GET["id"];
                        change_quantity($act,$id);
                    }
                    $pro = loadall_sanpham_giohang();
                    // var_dump($pro);
                    include "view/user/giohang.php";
                    break;

        case 'donhang':
            // echo "<pre>";
            // var_dump($_POST);
            if (isset($_POST['checkout'])) {
                $id_pro = $_POST['id_pro'];
                $id_user = $_POST['id_user'];
                $total_payment = $_POST['total_payment'];
                $quantity = $_POST['quantity'];
                $total_price = $_POST['total_price'];
                $status= $_POST['status'];
                if ($id_pro != '') {
                    insert_donhangg($id_user,$id_pro,$total_payment,$quantity,$total_price,$status);
                } else {
                    header('location: index.php?type=giohang');
                }
              }
            $dh = loadall_donhangg($id_user);
            // echo "<pre>";
            // var_dump($dh);
            include "view/user/donhang.php";        
            break;


        case 'trangbaohanh':
            include("view/user/trangbaohanh.php");
            break;
        case 'chinhsachbaohanh':
            include("view/user/chinhsachbaohanh.php");
            break;
        // case 'spdamua':
        //     if (isset($_GET['spdamua'])&&($_GET['spdamua']>0)) {
        //     $loadall_spdamua= loadall_spdamua($_GET['spdamua']);
        // }
        //     include("view/user/spdamua.php");
        //     break;
        case 'dangky':
            if (isset($_POST['dangky'])) {
                $ho_ten=$_POST['ho_ten'];
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                $dia_chi=$_POST['dia_chi'];
                $pass=$_POST['pass'];
                $messDk = registerUser($ho_ten,$email,$sdt,$dia_chi,$pass);
            }
        include("view/user/dangky.php");
            break;
        case 'dangnhap':
            if(isset($_GET['yet'])){
                echo '<script>alert("Đăng nhập để mua hàng!")</script>';
            }

        if (isset($_POST['dangnhap'])) {
            $sdt=$_POST['sdt'];
            $mat_khau=$_POST['mat_khau'];
                $rs= checkuser($sdt,$mat_khau);
                if($rs){
                    $_SESSION['sdt']=$rs['sdt'];
                    $_SESSION['user']=$rs;
                    header('location: index.php');
                } 
                $mess="Mat khau hoac tai khoan khong hop le!";
        }
        include("view/user/dangnhap.php");
           
        break;
        
        case 'qlitaikhoan':
            $sdt=$_SESSION['sdt'];
            $loadUser=loadUser($sdt);
            if (isset($_POST['updateTk'])) {
                    $ho_ten=$_POST['ho_ten'];
                    $email=$_POST['email'];
                    $dia_chi=$_POST['dia_chi'];
                    $updateTk=updateUser($ho_ten,$sdt,$email,$dia_chi,$mat_khau);
                     header('location: index.php?type=qlitaikhoan');
                 }
            if (isset($_POST['updateMk'])) {
                $mat_khau=$_POST['mat_khau'];
                $mat_khau1=$_POST['mat_khau1'];
                $messUpdateMk=updatePass($sdt,$mat_khau,$mat_khau1);
            }    
                
            include("view/user/qlitaikhoan.php");
                break;
            case 'dangxuat':
                unset($_SESSION['sdt']);
                header('location: index.php?type=dangnhap');
        // case 'trangspdamua':
        //     include("view/user/trangspdamua.php");
        //     break;
        case 'sanpham':
            if(isset($_POST['kyw'])&&($_POST['kyw']!=0)){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $timkiem=timkiemm($kyw);
            include("view/user/sanpham.php");
            break;
            default:
            include("view/user/home.php");
            break;
            case 'quenmk':
                if (isset($_POST['submit'])) {
                    $error = array();
                    $email = $_POST['email'];
                    if ($emali='') {
                        echo '<p style="color: red;">Vui lòng nhập email!</p>';
                    }
                    if (empty($error)) {
                         $rs= loadMail($email);
                         $code= substr(rand(0,999999),0,6);
                         $title = "Quen mat khau";
                         $content = "Ma xac nhan cua ban la: <span style='color:red'>".$code."</span>";
                         $mail->sendMail($title,$content,$email);
    
                         $_SESSION['mail']=$email;
                         $_SESSION['code']=$code;
                         header('location: index.php?type=xacnhansms');
                    }
                }
                include "view/user/quenmk.php";
                break;     
            case 'xacnhansms':
                if (isset($_POST['submit'])) {
                    $error = array();
                    if ($_POST['confirmationCode'] != $_SESSION['code']) {
                        $error['fail'] = 'Ma xac nhan khong hop le!';
                    }else{
                        header('location: index.php?type=datlaimk');
                    }
                }
                include "view/user/xacnhansms.php";
                break;    
            case 'datlaimk':
                if (isset($_POST['submit'])) {
                    $error = array();
                    if ($_POST['mat_khau1'] != $_POST['mat_khau']) {
                        $error['fail']= "Nhập lại mật khẩu không khớp !";
                    }else{
                        $error['success']="Đổi mật khẩu thành công. Chuyển hướng sau 3 giây!";
                        $updatePassMail=updatePassMail($_POST['mat_khau'],$_SESSION['mail']);
                        sleep(3);
                        header('location: index.php?type=dangnhap');
                    }
                }
                include "view/user/datlaimk.php";
                break;
            case 'thuonghieu':
                $list_th=loadAll_thuongHieu();
                include "view/user/thuonghieu.php";
                break;   
            case 'trangspthuonghieu':
                if (isset($_GET['idth'])&&($_GET['idth']>0)) {
                $dssp=loadOne_thuongHieu($_GET['idth']);
                $loadSpth=loadSpth($_GET['idth']);
                }
                include "view/user/trangspthuonghieu.php";
                break;  
    }
}else {
    $loadall_sanpham_hot=loadall_sanpham_hot(); 
    $loadall_sanpham_moi=loadall_sanpham_moi(); 
    include("view/user/home.php");
    
}
include("view/user/footer.php");
?>