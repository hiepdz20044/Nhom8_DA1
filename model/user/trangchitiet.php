<?php
function trangCT($id_sanpham){
    $sql = "select * from sanpham where id_sanpham = $id_sanpham";
    return pdo_query_one($sql);
} 
function loadall_sub_size(){
    $sql="select * from sub_size";
    return pdo_query($sql); 
}
function load_spct($id_sanpham, $id_dm){
    $sql = "select * from sanpham where id_dm = $id_dm AND id_sanpham <> $id_sanpham";
    return pdo_query($sql);
} 
function loadone_sanphamCart ($idList) {
    $sql = 'SELECT * FROM sanpham WHERE id_sanpham IN ('. $idList . ')';
    $sanpham = pdo_query($sql);
    return $sanpham;
}

?>