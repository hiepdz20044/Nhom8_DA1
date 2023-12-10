<style>
/* CSS cho phần danh sách sản phẩm */
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
    margin-bottom: 20px;
}

form input[type="text"],
form select {
    padding: 8px;
    margin-right: 10px;
    box-sizing: border-box;
}

form input[type="submit"] {
    cursor: pointer;
    padding: 8px 15px;
    background-color: #9b7221;
    border: none;
    color: #fff;
    border-radius: 5px;
    transition: background-color 0.3s;
}

form input[type="submit"]:hover {
    background-color: #555;
}

.form_content {
    width: 100%;
}

.formds_loai table {
    width: 100%;
}

.formds_loai th,
.formds_loai td {
    padding: 10px;
    text-align: center;
}

.formds_loai img {
    max-width: 200px;
    height: 250px;
}

.form_content input[type="button"] {
    cursor: pointer;
    padding: 10px 15px;
    background-color: #9b7221;
    border: none;
    color: #fff;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.form_content input[type="button"]:hover {
    background-color: #555;
}

/* Responsive styles */
@media screen and (max-width: 600px) {
    form {
        flex-direction: column;
    }

    form input[type="text"],
    form select {
        width: 100%;
        margin-bottom: 10px;
    }

    form input[type="submit"] {
        margin-top: 10px;
    }
}
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <form action="index.php?type=listsp" method="POST">
        <input type="text" name="kyw">
        <select name="id_dm">
            <option value="0" selected>Tất cả</option>
            <?php
                    foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id_dm.'">'.$name.'</option>';
                    }
                ?>
        </select>
        <input type="submit" name="listok" value="go">
    </form><br>
    <div class="row2 form_content ">

        <div class="row2 mb10 formds_loai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>GIÁ</th>
                    <!-- <th>LOẠI MÁY</th> -->
                    <th>THƯƠNG HIỆU</th>
                    <th>HÌNH ẢNH</th>
                    <th></th>
                </tr>

                <?php
                foreach ($listsp as $sanpham) {
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id_sanpham;
                    $xoasp="index.php?act=xoasp&id=".$id_sanpham;
                    $hinhpath="../upload/".$img;
                    if(is_file($hinhpath)){
                        $hinh="<img src='".$hinhpath."' height='70'>";
                    }else {
                        $hinh= "no photo";
                    }
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id_dm.'</td>
                            <td>'.$ten_sp.'</td>
                            <td>'.$gia.'</td>
                            <td>'.$id_thuonghieu.'</td>
                            <td>'.$hinh.'</td>
                            <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>   <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                }
            ?>


            </table>
        </div>
        <div class="row mb10 ">
            <input class="mr20" type="button" value="CHỌN TẤT CẢ">
            <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
        </div>
        </form>
    </div>
</div>