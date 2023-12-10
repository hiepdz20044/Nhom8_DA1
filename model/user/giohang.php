<?php 
// HIỂN THỊ THÔNG TIN NGƯỜI DÙNG 
function load_taikhoan($sdt) {
    $sql = "SELECT * FROM `khach_hang` WHERE sdt = '$sdt';";
    $rs = pdo_query_one($sql);
    return $rs;
}
// THÊM SẢN PHẨM VÀO GIỎ HÀNG
function insert_giohang($id_user,$id_pro) {
    $sql = "INSERT INTO `carts`(`id_pro`, `id_user`) 
            VALUES ('$id_pro','$id_user')";
    pdo_execute($sql);
}

// HIỂN THỊ TOÀN BỘ SẢN PHẨM TRONG GIỎ HÀNG
function loadall_sanpham_giohang() {
    $sql = "SELECT * FROM `carts` INNER JOIN sanpham 
        ON carts.id_pro = sanpham.id_sanpham";
        $rs = pdo_query($sql);
    return $rs;
}
// CHỈNH SỬA SỐ LƯỢNG SẢN PHẨM
function change_quantity($act,$id) {
    if ($act == 'less') {
        $sql = "UPDATE `carts`
                SET `quantity` = CASE
                    WHEN `quantity` > 1 THEN `quantity` - 1
                    ELSE `quantity`
                END
                WHERE `id` = $id;";
    } else if ($act == 'add') {
        $sql = "UPDATE `carts` SET `quantity`= quantity + 1 WHERE id = $id;";
    } else {
        $sql = "DELETE FROM `carts` WHERE id = $id;";
    }
    
    pdo_execute($sql);
}
// THÊM VÀO ĐƠN HÀNG
function insert_donhangg($id_user,$id_sp,$payment,$quantity,$totalprice,$status){
    $sql = "INSERT INTO `orders`(`id_user`, `total_payment`) VALUES ('$id_user','$payment');";
    pdo_execute($sql);
    $sql="SELECT id FROM orders ORDER BY id desc limit 1";
    $d = pdo_query_one($sql);
    $id_od = $d['id'];
    $id_pro = explode(', ', $id_sp);
    $total_price = explode(', ', $totalprice);
    $soluong = explode(', ', $quantity);
    $status = explode(', ', $status);

    for ($i=0; $i < count($id_pro) ; $i++) { 
        $id_odd = $id_od;
        $id_proo = $id_pro[$i];
        $soluongg = $soluong[$i];
        $total_pricee = $total_price[$i];
        $status = $status[$i];
        $sql = "INSERT INTO `detail_orders`(`id_od`,`id_user`, `id_pro`, `quantity`, `total_price`, `status`) 
                VALUES ('$id_odd','$id_user','$id_proo','$soluongg','$total_pricee','$status')";
        pdo_execute($sql);
    }
    $sql = "DELETE FROM carts";
    pdo_execute($sql);
}

// HIỂN THỊ ĐƠN HÀNG 
function loadall_donhangg($id_user) {
    $sql = "SELECT orders.id, khach_hang.ho_ten, orders.total_payment, khach_hang.sdt, khach_hang.email, khach_hang.dia_chi 
            FROM orders INNER JOIN khach_hang
            ON orders.id_user = khach_hang.id_khachhang
            WHERE orders.id_user = $id_user;";
    $rs = pdo_query($sql);
    return $rs;
}
//  LOAD SẢN PHẨM ĐƠN HÀNG
function loadall_sanpham_donhang($id_od, $id_user) {
    $sql = "SELECT * FROM detail_orders 
    WHERE id_od = $id_od AND id_user = $id_user";
    $rs = pdo_query($sql);
    return $rs;
}
// HIỂN THỊ THÔNG TIN SẢN PHẨM
function load_khachhang_giohang($id) {
    $sql = "SELECT * FROM `khach_hang` WHERE id_khachhang = $id";
    $rs = pdo_query_one($sql);
    return $rs;
}
// HIỂN THỊ TÊN SẢN PHẨM
function load_sanpham_giohang($id) {
    $sql = "SELECT * FROM `sanpham` WHERE id_sanpham = $id";
    $rs = pdo_query_one($sql);
    return $rs;
}
?>