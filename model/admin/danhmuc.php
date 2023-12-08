<?php
    function insert_danhmuc($tenloai){
        $sql="insert into danhmuc(name) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id_dm){
        $sql="DELETE FROM danhmuc WHERE id_dm=".$id_dm;
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql="select * from danhmuc order by id_dm desc";
        $listdm=pdo_query($sql);
        return $listdm;
    }
    function loadall_thuonghieu(){
        $sql="select * from thuonghieu order by id_thuonghieu desc";
        $listth=pdo_query($sql);
        return $listth;
    }
    // function loadall_size(){
    //     $sql="select * from sub_size order by id_size desc";
    //     $listsize=pdo_query($sql);
    //     return $listsize;
    // }

    function loadone_danhmuc($id_dm){
        $sql="select * from danhmuc where id_dm=".$id_dm;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function updatedm_danhmuc($id_dm,$tenloai){
        $sql="update danhmuc set name='".$tenloai."' where id_dm=".$id_dm;
        pdo_execute($sql);
    }
?>