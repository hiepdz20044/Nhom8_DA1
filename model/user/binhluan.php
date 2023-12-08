<?php 
// dang nhap user
function checkuser($sdt,$mat_khau) {
    $sql="select * FROM khach_hang where sdt = '$sdt' and mat_khau = '$mat_khau'";
    $rs= pdo_query_one($sql);
    
    return $rs;
}
//  dang ky user
function registerUser($ho_ten,$email,$sdt,$dia_chi,$mat_khau) {
    $sql="insert into khach_hang(ho_ten,email,sdt,dia_chi, mat_khau) values ('$ho_ten','$email','$sdt','$dia_chi', '$mat_khau')";
    $sql1="select sdt from khach_hang where sdt = '$sdt' ";
    if (pdo_query($sql1)){
        return "So dien thoai da ton tai!";
    }
    pdo_query($sql); 
    return "Dang ky thanh cong";
}
// quản lí tk
function loadUser($sdt){
    $sql="SELECT * FROM `khach_hang` where sdt = $sdt";
    $rs=pdo_query_one($sql);
    return $rs;
}
// Update tài khoản
function updateUser($ho_ten,$sdt,$email,$dia_chi,$mat_khau){
    $sql="UPDATE `khach_hang` SET ho_ten='$ho_ten', dia_chi='$dia_chi',
    email='$email', mat_khau='$mat_khau' WHERE sdt=$sdt";
    pdo_execute($sql);
    return 'Cập nhật thành công';
}
function updatePass($sdt,$mat_khau,$mat_khau1){
    $sql="select sdt from khach_hang where mat_khau = '$mat_khau' ";
    if (!pdo_query($sql)){
        return 'Mật khẩu cũ sai';
    }
    else{
        $sql1="UPDATE `khach_hang` SET mat_khau='$mat_khau1' WHERE sdt=$sdt";
        pdo_execute($sql1);
        header('location: index.php?pg=qlitaikhoan');
        }
}
// load mail
function loadMail($email){
    $sql="SELECT * FROM `khach_hang` where email = '$email'";
    $rs=pdo_query_one($sql);
    if ($rs) {
        return $rs;
    } else {
        echo "Email khong ton tai!";
    }
}
//quen mk bang mail
function updatePassMail($mat_khau,$email){
    $sql="UPDATE `khach_hang` SET mat_khau='$mat_khau' WHERE email='$email'";
    pdo_execute($sql);
}
?>