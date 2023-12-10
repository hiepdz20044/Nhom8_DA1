<?php

    function insert_sanpham($tensp,$giasp,$id_img, $id_thuonghieu,$mota,$iddm){
        $sql="insert into sanpham(ten_sp,gia,img,id_thuonghieu,mo_ta,id_dm) values('$tensp','$giasp','$id_img','$id_thuonghieu','$mota','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql="delete from sanpham where id_sanpham=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham($kyw,$id_dm){
        $sql="select * from sanpham where 1";
        if ($kyw!='') {
            $sql.=" and ten_sp like '%".$kyw."%'";
        }
        if ($id_dm>0) {
            $sql.=" and id_dm = '".$id_dm."'";
        }

        $sql.=" order by id_dm desc";
        $listsp=pdo_query($sql);
        return $listsp;
    }
    function loadone_sanpham($id){
        $sql="select * from sanpham where id_sanpham=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function updatesp_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
        if ($hinh!="") {
            $sql="update sanpham set id_dm='".$iddm."',ten_sp='".$tensp."',gia='".$giasp."',mo_ta='".$mota."',img='".$hinh."' where id_sanpham=".$id;
        }else {
            $sql="update sanpham set id_dm='".$iddm."',ten_sp='".$tensp."',gia='".$giasp."',mo_ta='".$mota."' where id_sanpham=".$id;
        }
        
        pdo_execute($sql);
    }

    function loadall_sanpham_home(){
        $sql="select * from sanpham where 1 order by id desc limit 0,9"; 
        $listsp=pdo_query($sql);
        return $listsp;
    }
    // function loadall_loaimay(){
    //     $sql="select * from sanpham order by loai_may desc";
    //     $listdm=pdo_query($sql);
    //     return $listdm;
    // }

    // function loadall_sanpham_top10(){
    //     $sql="select * from sanpham where 1 order by luotxem desc limit 0,10"; 
    //     $listsp=pdo_query($sql);
    //     return $listsp;
    // }
    function load_sanpham_cungloai($id,$iddm){
        $sql="select * from sanpham where iddm=".$iddm." and id <>".$id;
        $listsp=pdo_query($sql);
        return $listsp;
    }
    function load_ten_dm($iddm){
        if ($iddm>0) {
            $sql="select * from danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else {
            return "";
        }
    }
    // function loadall_donhang(){
    //     $sql="SELECT donhang_chitiet.id_donhangct, donhang.ho_ten, sanpham.ten_sp, donhang_chitiet.so_luong, donhang_chitiet.tong_don, donhang.address
    //     FROM donhang_chitiet
    //     JOIN sanpham ON donhang_chitiet.id_sanpham = sanpham.id_sanpham
    //     JOIN donhang ON donhang_chitiet.id_donhang = donhang.id_donhang";
    //     $listdonhang=pdo_query($sql);
    //     return $listdonhang;
    // }
    // function loadone_donhangct($id_donhangct){
    //     $sql = "SELECT donhang_chitiet.id_donhangct, donhang.ho_ten, sanpham.ten_sp, donhang_chitiet.so_luong, donhang_chitiet.tong_don, donhang.address
    //             FROM donhang_chitiet
    //             JOIN sanpham ON donhang_chitiet.id_sanpham = sanpham.id_sanpham
    //             JOIN donhang ON donhang_chitiet.id_donhang = donhang.id_donhang 
    //             WHERE donhang_chitiet.id_donhangct = ".$id_donhangct;
    
    //     $donhang = pdo_query_one($sql);
    //     return $donhang;
    // }
    // function updatedm_donhang($so_luong, $tong_don, $ho_ten, $ten_sp, $address, $id_donhangct) {
    //     $sql = "UPDATE donhang_chitiet
    //             JOIN donhang
    //             ON donhang_chitiet.id_donhang = donhang.id_donhang
    //             JOIN sanpham
    //             ON donhang_chitiet.id_sanpham = sanpham.id_sanpham
    //             SET
    //             donhang_chitiet.so_luong = '".$so_luong."',
    //             donhang_chitiet.tong_don = '".$tong_don."',
    //             donhang.ho_ten = '".$ho_ten."',
    //             sanpham.ten_sp = '".$ten_sp."',
    //             donhang.address = '".$address."'
    //             WHERE donhang_chitiet.id_donhangct = ".$id_donhangct;
    
    //     pdo_execute($sql);
    // }
    // function delete_donhang($id_donhangct){
    //     $sql="delete from donhang_chitiet where id_donhangct=".$id_donhangct;
    //     pdo_execute($sql);
    // }
    function loadall_donhang(){
        $sql="SELECT detail_orders.id_od, khach_hang.ho_ten, sanpham.ten_sp, detail_orders.quantity, detail_orders.total_price, khach_hang.dia_chi, detail_orders.status, detail_orders.day
        FROM detail_orders
        JOIN khach_hang ON detail_orders.id_user = khach_hang.id_khachhang
        JOIN sanpham ON detail_orders.id_pro = sanpham.id_sanpham;
        ";
        $rs=pdo_query($sql);
        return $rs;
    }
?>