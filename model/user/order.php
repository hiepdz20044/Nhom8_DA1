<?php
    function updonhang($id_khachhang,$ho_ten,$phone_number,$email_address,$address){
        $sql="INSERT INTO donhang(id_khachhang,ho_ten,phone_number,email_address,address) VALUES($id_khachhang,'$ho_ten',$phone_number,'$email_address','$address')";
        pdo_execute($sql);

        $sql="SELECT * FROM donhang order by id_donhang DESC LIMIT 1";
        return pdo_query_one($sql);
    }
    function upChiTiet($id_donhang,$id_sanpham,$so_luong,$tong_don){
        $sql="INSERT INTO donhang_chitiet(id_donhang,id_sanpham,so_luong,tong_don) VALUES($id_donhang,$id_sanpham,$so_luong,$tong_don)";
        return pdo_execute($sql);
    }
?>