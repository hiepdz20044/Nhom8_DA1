<style>
/* CSS cho phần thêm mới sản phẩm */
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

.form_content select,
.form_content input[type="text"],
.form_content input[type="file"],
.form_content textarea {
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
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Danh Mục </label> <br>
                <select name="iddm" id="">
                    <?php
                foreach ($listdm as $danhmuc) {
                  extract($danhmuc);
                  echo '<option value="'.$id_dm.'">'.$name.'</option>';
                }
              ?>

                </select>
            </div>
            <div class="row2 mb10">
                <label>Tên sản phẩm </label> <br>
                <input type="text" name="tensp" placeholder="Nhập tên sản phẩm" required>
            </div>
            <div class="row2 mb10">
                <label>Giá </label> <br>
                <input type="text" name="giasp" placeholder="Nhập giá sản phẩm" required>
            </div>
            <div class="row2 mb10">
                <label>Thương hiệu </label> <br>
                <select name="thuonghieu" id="">
                    <?php
                foreach ($listth as $thuonghieu) {
                  extract($thuonghieu);
                  echo '<option value="'.$id_thuonghieu.'">'.$name.'</option>';
                }
              ?>

                </select>
            </div>
            <div class="row2 mb10">
                <label>Hình ảnh </label> <br>
                <input type="file" name="hinhsp" id="" required>
            </div>
            <div class="row2 mb10">
                <label>Mô tả </label> <br>
                <textarea name="mota" id="" cols="30" rows="10" required></textarea>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>

            <?php
            if (isset($thongbao)&&($thongbao!="")) {
                echo $thongbao;
            }
           ?>

        </form>
    </div>
</div>