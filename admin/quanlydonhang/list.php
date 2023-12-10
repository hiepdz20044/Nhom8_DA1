<style>
/* CSS cho danh sách đơn hàng */
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

th,
td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.status-select {
    width: 100%;
    padding: 8px;
}

input[type="submit"] {
    margin-top: 10px;
    padding: 10px;
    cursor: pointer;
}

/* Responsive styles */
@media screen and (max-width: 600px) {
    form table {
        overflow-x: auto;
    }
}

/* CSS cho button */
input[type="submit"] {
    margin-top: 10px;
    padding: 10px;
    cursor: pointer;
    background-color: #4CAF50;
    /* Màu nền */
    color: #fff;
    /* Màu chữ */
    border: none;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
    /* Màu nền khi di chuột qua */
}

/* CSS cho background của select */
.status-select {
    width: 100%;
    padding: 8px;
    background-color: #f8f8f8;
    /* Màu nền */
    border: 1px solid #ccc;
    /* Viền */
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 14px;
}

/* CSS cho background của select khi được chọn */
.status-select:focus {
    outline: none;
    border-color: #4CAF50;
    /* Màu viền khi được chọn */
}
</style>

<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=dsdonhang" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th>ID_ĐƠN HÀNG</th>
                        <th>TÊN USER</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>SỐ LƯỢNG</th>
                        <th>TỔNG TIỀN</th>
                        <th>ĐỊA CHỈ</th>
                        <th>TRẠNG THÁI</th>
                        <th>THỜI GIAN</th>
                    </tr>
                    <?php foreach ($loadAll_dh as $key): ?>
                    <tr>
                        <td><?= $key['id_od'] ?></td>
                        <td><?=$key['ho_ten']?></td>
                        <td><?=$key['ten_sp']?></td>
                        <td><?=$key['quantity']?></td>
                        <td><?=$key['total_price']?>.000</td>
                        <td><?=$key['dia_chi']?></td>
                        <td>
                            <select name="status[<?= $key['id_od'] ?>]" class="status-select">
                                <option value="Đang giao" <?= ($key['status'] == 'Đang giao' ? ' selected' : '') ?>>Đang
                                    giao</option>
                                <option value="Giao thành công"
                                    <?= ($key['status'] == 'Giao thành công' ? ' selected' : '') ?>>Giao thành công
                                </option>
                                <option value="Hủy" <?= ($key['status'] == 'Hủy' ? ' selected' : '') ?>>Hủy</option>
                            </select>
                        </td>
                        <td><?= $key['day'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <input type="submit" value="Cập nhật trạng thái">
            </div>
        </form>
    </div>
</div>