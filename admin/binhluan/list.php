<style>
/* CSS cho phần danh sách bình luận */
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
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th> NỘI DUNG BÌNH LUẬN</th>
                        <th>IDUSER</th>
                        <th>IDPRO</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th></th>
                    </tr>

                    <?php
                foreach ($listbl as $bl) {
                    extract($bl);
                    $suabl="index.php?act=suabl&id=".$id;
                    $xoabl="index.php?act=xoabl&id=".$id;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td><a href="'.$suabl.'"><input type="button" value="Sửa"></a>   <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                }
            ?>


                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            </div>
        </form>
    </div>
</div>