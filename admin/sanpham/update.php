<?php
    if (is_array($sp)) {
        extract($sp);
    }

    $hinhpath="../upload/".$img;
      if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='70'>";
      }else {
        $hinh= "no photo";
      }
?>
<style>
/* CSS cho phần cập nhật sản phẩm */
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

form select,
form input[type="text"],
form textarea,
form input[type="file"] {
    margin-bottom: 10px;
    padding: 8px;
    box-sizing: border-box;
}

form input[type="submit"],
form input[type="reset"],
form input[type="button"] {
    cursor: pointer;
    padding: 10px 15px;
    background-color: #9b7221;
    border: none;
    color: #fff;
    border-radius: 5px;
    transition: background-color 0.3s;
}

form input[type="submit"]:hover,
form input[type="reset"]:hover,
form input[type="button"]:hover {
    background-color: #555;
}

/* Responsive styles */
@media screen and (max-width: 600px) {
    form {
        width: 100%;
    }

    form input[type="text"],
    form select,
    form textarea,
    form input[type="file"] {
        width: 100%;
        margin-bottom: 10px;
    }

    form input[type="submit"],
    form input[type="reset"],
    form input[type="button"] {
        margin-top: 10px;
    }
}
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10">
                <select name="iddm">
                    <option value="0">Tất cả</option>
                    <?php
                    foreach ($listdm as $danhmuc) {
                    // extract($danhmuc);
                    if ($id_dm==$danhmuc['id_dm']) {
                      echo '<option value="'.$danhmuc['id_dm'].'" selected >'.$danhmuc['name'].'</option>';
                    }else {
                      echo '<option value="'.$danhmuc['id_dm'].'">'.$danhmuc['name'].'</option>';
                    }
                    
                    }
                ?>
                </select>
            </div>
            <div class="row2 mb10 form_content_container">
                <label> Tên sản phẩm </label> <br>
                <input type="text" name="tensp" placeholder="nhập vào mã loại" value="<?=$ten_sp?>">
            </div>
            <div class="row2 mb10">
                <label>Giá </label> <br>
                <input type="text" name="giasp" placeholder="nhập vào tên" value="<?php echo $gia?>">
            </div>
            <div class="row2 mb10">
                <label>Hình ảnh </label> <br>
                <input type="file" name="hinh" id="">
            </div>
            <div class="row2 mb10">
                <label>Mô tả </label> <br>
                <textarea name="mota" id="" cols="30" rows="10"><?=$mo_ta?></textarea>
            </div>
            <div class="row mb10 ">
                <input type="hidden" name="id" value="<?=$id_sanpham?>">
                <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
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