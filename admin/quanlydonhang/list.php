<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>ID_ĐƠN HÀNG</th>
                        <th>TÊN USER</th>
                        <th>TÊN SP</th>
                        <th>SỐ LƯỢNG</th>
                        <th>TỔNG TIỀN</th>
                        <th>ĐỊA CHỈ</th>
                        <th></th>
                        <th></th>
                    </tr>

                    <?php
                foreach ($listdonhang as $donhang) {
                    extract($donhang);
                    $suadonhang="index.php?act=suadonhang&id_donhangct=".$id_donhangct;
                    $xoadonhang="index.php?act=xoadonhang&id_donhangct=".$id_donhangct;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id_donhangct.'</td>
                            <td>'.$ho_ten.'</td>
                            <td>'.$ten_sp.'</td>
                            <td>'.$so_luong.'</td>
                            <td>'.$tong_don.'</td>
                            <td>'.$address.'</td>
                            <td><a href="'.$suadonhang.'"><input type="button" value="Sửa"></a>   <a href="'.$xoadonhang.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                }
            ?>


                </table>
        </form>
    </div>
</div>