<style>
/* CSS cho phần thống kê */
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
        <h1>THỐNG KÊ</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th>MÃ DANH MỤC</th>
                        <th>TÊN DANH MỤC</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>

                    <?php
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    echo '<tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$maxprice.'.000</td>
                            <td>'.$minprice.'.000</td>
                            <td>'.$avgprice.'.000</td>
                        </tr>';
                }
            ?>


                </table>
            </div>
            <div class="row mb10 ">
                <a href="index.php?act=bieudo"><input class="mr20" type="button" value="XEM BIỂU ĐỒ"></a>
            </div>
        </form>
    </div>
</div>