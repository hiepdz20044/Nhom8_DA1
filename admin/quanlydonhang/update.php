<?php
    if (is_array($donhang)) {
        extract($donhang);
    }
?>
<style>
/* CSS cho phần cập nhật đơn hàng */
.row2 {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.font_title h1 {
    margin: 0;
}

form {
    display: flex;
    flex-direction: column;
}

.form_content_container {
    width: 100%;
    max-width: 400px;
}

form label {
    margin-bottom: 5px;
}

form input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

form input[type="submit"],
form input[type="reset"],
form input[type="button"] {
    padding: 10px;
    margin-top: 10px;
    cursor: pointer;
}

/* Responsive styles */
@media screen and (max-width: 600px) {
    form input[type="text"] {
        width: 100%;
    }
}
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT ĐƠN HÀNG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatedonhang" method="POST">
            <div class="row2 mb10 form_content_container">
                <label> TÊN USER </label> <br>
                <input type="text" name="name" placeholder="nhập vào mã loại" value="<?=$ho_ten?>">
            </div>
            <div class="row2 mb10">
                <label>Tên sp </label> <br>
                <input type="text" name="tensp" placeholder="nhập vào tên" value="<?=$ten_sp?>">
            </div>
            <div class="row2 mb10">
                <label>Số lượng </label> <br>
                <input type="text" name="soluong" placeholder="nhập vào tên" value="<?=$so_luong?>">
            </div>
            <div class="row2 mb10">
                <label>Tổng tiền </label> <br>
                <input type="text" name="tongtien" placeholder="nhập vào tên" value="<?=$tong_don?>">
            </div>
            <div class="row2 mb10">
                <label>Địa chỉ </label> <br>
                <input type="text" name="diachi" placeholder="nhập vào tên" value="<?=$address?>">
            </div>
            <div class="row mb10 ">
                <input type="hidden" name="id_donhangct"
                    value="<?php if(isset($id_donhangct)&&($id_donhangct>0)) echo $id_donhangct ;?>">
                <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>

            <?php
            if (isset($thongbao)&&($thongbao!="")) {
                echo $thongbao;
            }
           ?>

        </form>
    </div>
</div>