<style>
/* CSS cho phần danh sách tài khoản */
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

form table {
    width: 100%;
    border-collapse: collapse;
}

form th,
form td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

form th {
    background-color: #f2f2f2;
}

form input[type="checkbox"] {
    margin-left: 5px;
}

form input[type="button"] {
    cursor: pointer;
    padding: 10px 15px;
    background-color: #9b7221;
    border: none;
    color: #fff;
    border-radius: 5px;
    transition: background-color 0.3s;
}

form input[type="button"]:hover {
    background-color: #555;
}

/* Responsive styles */
@media screen and (max-width: 600px) {
    form table {
        width: 100%;
    }

    form th,
    form td {
        display: block;
        width: 100%;
        box-sizing: border-box;
    }

    form th,
    form td {
        text-align: center;
        padding: 10px;
    }

    form input[type="button"] {
        margin-top: 10px;
    }
}
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>SĐT</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ROLE</th>
                        <th></th>
                    </tr>

                    <?php
                foreach ($listtk as $tk) {
                    extract($tk);
                    $xoatk="index.php?act=xoatk&id_khachhang=".$id_khachhang;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id_khachhang.'</td>
                            <td>'.$ho_ten.'</td>
                            <td>'.$mat_khau.'</td>
                            <td>'.$sdt.'</td>
                            <td>'.$email.'</td>
                            <td>'.$dia_chi.'</td>
                            <td>'.$vai_tro.'</td>
                            <td><a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                }
            ?>


                </table>
            </div>
        </form>
    </div>
</div>