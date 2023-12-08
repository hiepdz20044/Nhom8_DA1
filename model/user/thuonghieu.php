<?php
    function loadAll_thuongHieu(){
        $sql = "SELECT * FROM thuonghieu";
        $rs=pdo_query($sql);
        return $rs;
    }
    function loadOne_thuongHieu($id_thuonghieu){
        $sql="select * from thuonghieu where id_thuonghieu=$id_thuonghieu";
        $rs=pdo_query_one($sql);
        return $rs;
    }
    function loadSpth($id_thuonghieu){
        $sql="SELECT `id_sanpham`, `id_dm`, `img`, `ten_sp`, `mo_ta`, `gia`, `loai_may`, `id_thuonghieu` FROM `sanpham` WHERE id_thuonghieu=$id_thuonghieu" ;
        $rs=pdo_query($sql);
        return $rs;
    }
?>