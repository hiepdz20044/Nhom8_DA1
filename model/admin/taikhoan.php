<?php
    function insert_taikhoan($user,$email,$pass){
        $sql="insert into taikhoan(user,email,pass) values('$user','$email','$pass')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql="select * from taikhoan where user='".$user."'and pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkuser_admin($sđt,$mat_khau){
        $sql="select * from khach_hang where sdt=? and mat_khau=? ";
        $admin=pdo_query_one($sql, $sđt, $mat_khau);
        return $admin;
    }
    function update_taikhoan($id,$user,$pass,$email,$address,$tel){
        $sql="update taikhoan set user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;
        pdo_execute($sql);
    }
    function checkemail($email){
        $sql="select * from taikhoan where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    
    function loadall_tk(){
        $sql="select * from khach_hang order by id_khachhang desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }
    function delete_tk($id_khachhang){
        $sql="delete from khach_hang where id_khachhang=".$id_khachhang;
        pdo_execute($sql);
    }
?>