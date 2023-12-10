<style>
/* CSS cho phần danh sách danh mục */
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

.formds_loai {
    overflow-x: auto;
}

.formds_loai table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.formds_loai th,
.formds_loai td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.formds_loai th {
    background-color: #f2f2f2;
}

.formds_loai tr:nth-child(even) {
    background-color: #f9f9f9;
}

.formds_loai tr:hover {
    background-color: #f1f1f1;
}

.formds_loai input[type="checkbox"] {
    cursor: pointer;
}

.formds_loai a {
    text-decoration: none;
}

.formds_loai input[type="button"] {
    cursor: pointer;
    padding: 8px 15px;
    border: none;
    color: #fff;
    background-color: #9b7221;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.formds_loai input[type="button"]:hover {
    background-color: #555;
}

/* Responsive styles */
@media screen and (max-width: 600px) {
    .formds_loai table {
        width: 100%;
        overflow-x: auto;
    }
}

/* CSS cho phần button */
.form_content input[type="button"] {
    cursor: pointer;
    padding: 10px 15px;
    border: none;
    color: #fff;
    background-color: #9b7221;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.form_content input[type="button"]:hover {
    background-color: #555;
}

.form_content input[type="submit"],
.form_content input[type="reset"] {
    cursor: pointer;
    padding: 10px 15px;
    border: none;
    color: #fff;
    background-color: #9b7221;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.form_content input[type="submit"]:hover,
.form_content input[type="reset"]:hover {
    background-color: #555;
}

/* Responsive styles */
@media screen and (max-width: 600px) {

    .form_content input[type="button"],
    .form_content input[type="submit"],
    .form_content input[type="reset"] {
        width: 100%;
    }
}
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH DANH MỤC</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>

                    <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id_dm=".$id_dm;
                    $xoadm="index.php?act=xoadm&id_dm=".$id_dm;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id_dm.'</td>
                            <td>'.$name.'</td>
                            <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>   <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                }
            ?>


                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=adddm"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>