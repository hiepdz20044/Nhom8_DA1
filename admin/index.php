<?php
    include "../model/pdo.php";
    include "header.php";
    include "../model/admin/danhmuc.php";
    include "../model/admin/sanpham.php";
    include "../model/admin/taikhoan.php";
    include "../model/admin/binhluan.php";
    include "../model/admin/thongke.php";
    include "../global.php";
    //controler
    session_start();
    ob_start();
    if(isset($_SESSION['s_user']) && (is_array($_SESSION['s_user'])) && (count($_SESSION['s_user'])>0)){
        if (isset($_GET['act'])) {
            $act=$_GET['act'];
            switch ($act) {
                case 'adddm':
                    //kiem tra xem nguoi dung co click vao nut add hay k
                    if (isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $tenloai=$_POST['tenloai'];
                        insert_danhmuc($tenloai);
                        $thongbao="Them thanh cong";
                    }
                        
                    
                    include "danhmuc/add.php";
                    break;
                case 'listdm':
                    $listdm=loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;    
                
                case 'xoadm':
                    if (isset($_GET['id_dm'])&&($_GET['id_dm']>0)) {
                        delete_danhmuc($_GET['id_dm']);
                    }
    
                    $listdm=loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;    
                
                case 'suadm':
                    if (isset($_GET['id_dm'])&&($_GET['id_dm']>0)) {
                        $dm=loadone_danhmuc($_GET['id_dm']);
                    }
                    
                    include "danhmuc/update.php";
                    break; 
                case 'updatedm':
                    if (isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $tenloai=$_POST['tenloai'];
                        $id_dm=$_POST['id_dm'];
                        updatedm_danhmuc($id_dm,$tenloai);
                        $thongbao="Cap nhat thanh cong";
                    }
    
                    $listdm=loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;  
                    /** contronller san pham */
                    
                    case 'addsp':
                        //kiem tra xem nguoi dung co click vao nut add hay k
                        if (isset($_POST['themmoi'])&&($_POST['themmoi'])){
                            $id_dm=$_POST['iddm'];
                            $ten_sp=$_POST['tensp'];
                            $gia=$_POST['giasp'];
                            // $loai_may=$_POST['loaimay'];
                            $thuonghieu=$_POST['thuonghieu'];
                            $mo_ta=$_POST['mota'];
                            $id_img=$_FILES['hinhsp']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES['hinhsp']['name']); 
                            if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                                //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                              } else {
                                //echo "Sorry, there was an error uploading your file.";
                              }
                            //   joiin();
                            insert_sanpham($ten_sp, $gia, $id_img, $thuonghieu, $mo_ta, $id_dm);
                            $thongbao="Them thanh cong";
                        }
                        // $listlm=loadall_loaimay();
                        $listdm=loadall_danhmuc(); 
                        $listth=loadall_thuonghieu();   
                        // $listsize=loadall_size();
                        
                        include "sanpham/add.php";
                        break;
                    case 'listsp':
                        if (isset($_POST['listok'])&&($_POST['listok'])){
                            $kyw=$_POST['kyw'];
                            $id_dm=$_POST['id_dm'];
                        }else {
                            $kyw='';
                            $id_dm=0;
                        }
                        $listdm=loadall_danhmuc(); 
                        $listsp=loadall_sanpham($kyw,$id_dm);
                        include "sanpham/list.php";
                        break;    
                    
                    case 'xoasp':
                        if (isset($_GET['id'])&&($_GET['id']>0)) {
                            delete_sanpham($_GET['id']);
                        }
        
                        $listsp=loadall_sanpham("",0);
                        include "sanpham/list.php";
                        break;    
                    
                    case 'suasp':
                        if (isset($_GET['id'])&&($_GET['id']>0)) {
                            $sp=loadone_sanpham($_GET['id']);
                        }
                        $listdm=loadall_danhmuc(); 
                        include "sanpham/update.php";
                        break; 
                    case 'updatesp':
                        if (isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $id=$_POST['id'];
                            $iddm=$_POST['iddm'];
                            $tensp=$_POST['tensp'];
                            $giasp=$_POST['giasp'];
                            $mota=$_POST['mota'];
                            $hinh=$_FILES['hinh']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES['hinh']['name']); 
                            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                              } else {
                                //echo "Sorry, there was an error uploading your file.";
                              }
                            updatesp_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                            $thongbao="Cap nhat thanh cong";
                        }
                        $listdm=loadall_danhmuc(); 
                        $listsp=loadall_sanpham("",0);
                        include "sanpham/list.php";
                        break;
                    case 'dskh':
                        $listtk=loadall_tk();
                        include "taikhoan/list.php";
                        break; 
                        case 'dsdonhang':
                            
                            $loadAll_dh=loadall_donhang();
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Kiểm tra xem có dữ liệu từ form không
                                if(isset($_POST['status']) && is_array($_POST['status'])) {
                                    $newStatusArray = $_POST['status'];
                            
                                    // Dùng vòng lặp để cập nhật trạng thái từ mảng $_POST
                                    foreach ($newStatusArray as $index => $newStatus) {
                                        // Lấy ID đơn hàng từ dữ liệu đơn hàng đã hiển thị
                                        $orderId = $loadAll_dh[$index]['id_od'];
                            
                                        // Thực hiện câu lệnh UPDATE để cập nhật trạng thái
                                        $updateQuery = "UPDATE detail_orders SET status = '$newStatus' WHERE id_od = $orderId";
                            
                                        // Thực hiện câu lệnh UPDATE (thực hiện kiểm tra lỗi trong ứng dụng thực tế)
                                        // Đối với MySQLi
                                        // $mysqli->query($updateQuery);
                                        
                                        // Đối với PDO
                                        $rs=pdo_query_one($updateQuery);
                                        return $rs;
                                    }
                            
                                    // Sau khi cập nhật, bạn có thể chuyển hướng người dùng đến trang khác
                                    header("Location: index.php?act=dsdonhang");
                                    exit();
                                }
                            }
                            include "quanlydonhang/list.php";
                            break;        
                    // case 'suadonhang':
                        
                                
                    //     include "quanlydonhang/update.php";
                    //     break;
                    // case 'updatedonhang':
                    //     if (isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    //         $name=$_POST['name'];
                    //         $tensp=$_POST['tensp'];
                    //         $soluong=$_POST['soluong'];
                    //         $tongtien=$_POST['tongtien'];
                    //         $diachi=$_POST['diachi'];
                    //         $id_donhangct=$_POST['id_donhangct'];
                    //         // updatedm_donhang($soluong, $tongtien, $name, $tensp, $diachi, $id_donhangct);
                    //         $thongbao="Cap nhat thanh cong";
                    //     }
            
                    //     // $listdonhang=loadall_donhang();
                    //     include "quanlydonhang/list.php";
                    //     break;
                    // case 'xoadonhang':
                    //     if (isset($_GET['id_donhangct'])&&($_GET['id_donhangct']>0)) {
                    //         // delete_donhang($_GET['id_donhangct']);
                    //     }
            
                    //     // $listdonhang=loadall_donhang();
                    //     include "quanlydonhang/list.php";
                    //     break;
                    case 'xoatk':
                        if (isset($_GET['id_khachhang'])&&($_GET['id_khachhang']>0)) {
                            delete_tk($_GET['id_khachhang']);
                        }
            
                        $listtk=loadall_tk("",0);
                        include "taikhoan/list.php";
                        break;
    
                    case 'dsbl':
                        $listbl=loadall_binhluan(0);
                        include "binhluan/list.php";
                        break;
                    case 'xoabl':
                        if (isset($_GET['id'])&&($_GET['id']>0)) {
                            delete_binhluan($_GET['id']);
                        }
            
                        $listbl=loadall_binhluan(0);
                        include "binhluan/list.php";
                        break;
                    case 'thongke':
                        $listthongke=loadall_thongke();
                        include "thongke/list.php";
                        break;
                    case 'bieudo':
                        $listthongke=loadall_thongke();
                        include "thongke/bieudo.php";
                        break;
                    
                    default:
                        include "home.php";
                        break;
            }
        }
        else {
            include "home.php";
        }
        include "footer.php";
    }else{
        header('location: login.php');
    }

?>