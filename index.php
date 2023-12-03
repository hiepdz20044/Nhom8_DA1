<?php
session_start();

include("model/pdo.php");
include("model/user/sanphamModel.php");
include("model/user/binhluan.php");
include("model/user/trangchitiet.php");
include("view/user/header.php");
include("global.php");
if (isset($_GET["type"])){
    switch ($_GET["type"]) {
        case 'home':
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
            if(isset($_GET['id_sp'])&& ($_GET['id_sp']>0)){
                $trangCT=trangCT($_GET['id_sp']);
                extract($trangCT);
                $spct=load_spct($id_sanpham, $id_dm);

                include("view/user/trangchitiet.php");
            }else{
            include("view/user/home.php");

            }
                break;
                case "listCart":
                    // Kiểm tra xem giỏ hàng có dữ liệu hay không
                    if (!empty($_SESSION['cart'])) {
                        $cart = $_SESSION['cart'];
        
                        // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
                        $productId = array_column($cart, 'id');
                        
                        // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
                        $idList = implode(',', $productId);
                        
                        // Lấy sản phẩm trong bảng sản phẩm theo id
                        $dataDb = loadone_sanphamCart($idList);
                        // var_dump($dataDb);
                    }
                    include "view/user/listCartOrder.php";
                    break;
        case 'trangbaohanh':
            include("view/user/trangbaohanh.php");
            break;
        case 'chinhsachbaohanh':
            include("view/user/chinhsachbaohanh.php");
            break;
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
                header('location: index.php?pg=dangnhap');
        case 'trangspdamua':
            include("view/user/trangspdamua.php");
            break;
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
    }
}else {
    include("view/user/home.php");
    
}
include("view/user/footer.php");
?>