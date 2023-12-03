<?php 
function loadall_sanpham(){
    $sql="select * from sanpham order by id_sanpham desc";
    return pdo_query($sql); 
}
function loadall_sanpham_hot(){
    $sql="select * from sanpham ORDER by id_sanpham DESC limit 0,10";
    return pdo_query($sql); 
}
function loadall_sanpham_moi(){
    $sql="select * from sanpham ORDER by id_sanpham DESC limit 0,10";
    return pdo_query($sql); 
}
function loadall_donghonu(){
    $sql="select * from sanpham ORDER by id_sanpham DESC limit 0,10";
    return pdo_query($sql); 
}
function loadall_donghodoi(){
    $sql="select * from sanpham ORDER by id_sanpham DESC limit 0,10";
    return pdo_query($sql); 
}
function loadall_donghotreotuong(){
    $sql="select * from sanpham ORDER by id_sanpham DESC limit 0,10";
    return pdo_query($sql); 
}
function loadall_daydh(){
    $sql="select *from sanpham ORDER by id_sanpham DESC limit 0,10";
    return pdo_query($sql); 
}
function loadall_donghonam(){
    $sql="select * from sanpham ORDER by id_sanpham DESC limit 0,10";
    return pdo_query($sql); 
}
function loadmot_sanpham($id){
    $sql="select * from sanpham where id_sanpham = $id";
    return pdo_query_one($sql); 
}
function timkiemm($kyw){
    $sql="SELECT *
    FROM sanpham
    
    WHERE 1";
    if($kyw!=""){
        $sql.=" AND ten_sp LIKE '%".$kyw."%'";
    }
    return pdo_query($sql);
}
?>