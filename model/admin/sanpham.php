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
?>