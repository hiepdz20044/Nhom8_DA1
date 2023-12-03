<?php
function loadall_thongke(){
    $sql="select danhmuc.id_dm as madm, danhmuc.name as tendm, count(sanpham.id_sanpham) as countsp, min(sanpham.gia) as minprice, max(sanpham.gia) as maxprice,avg (sanpham.gia) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id_dm=sanpham.id_dm";
    $sql.=" group by danhmuc.id_dm  order by danhmuc.id_dm desc";
    $listtk=pdo_query($sql);
    return $listtk;
}
?>