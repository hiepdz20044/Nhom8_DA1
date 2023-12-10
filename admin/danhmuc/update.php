<?php
    if (is_array($dm)) {
        extract($dm);
    }
?>
<style>
/* CSS cho phần cập nhật danh mục */
.row2 {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.font_title h1 {
    margin: 0;
}

.form_content {
    margin-top: 20px;
    width: 100%;
}

.form_content_container {
    max-width: 300px;
    margin: 0 auto;
}

.form_content label {
    display: block;
    margin-bottom: 5px;
}

.form_content input[type="text"] {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

.form_content input[type="submit"],
.form_content input[type="reset"],
.form_content input[type="button"] {
    cursor: pointer;
    padding: 10px 15px;
    border: none;
    color: #fff;
    background-color: #9b7221;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.form_content input[type="submit"]:hover,
.form_content input[type="reset"]:hover,
.form_content input[type="button"]:hover {
    background-color: #555;
}

/* Responsive styles */
@media screen and (max-width: 600px) {
    .form_content_container {
        width: 100%;
        box-sizing: border-box;
        padding: 0 10px;
    }
}
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT DANH MỤC</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatedm" method="POST">
            <div class="row2 mb10 form_content_container">
                <label> Mã Danh Mục </label> <br>
                <input type="text" name="maloai" placeholder="Mã danh mục tự động">
            </div>
            <div class="row2 mb10">
                <label>Tên Danh Mục </label> <br>
                <input type="text" name="tenloai" placeholder="Cập nhật tên danh mục"
                    value="<?php if(isset($name)&&($name!="")) echo $name ;?>" required>
            </div>
            <div class="row mb10 ">
                <input type="hidden" name="id_dm" value="<?php if(isset($id_dm)&&($id_dm>0)) echo $id_dm ;?>">
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