<?php
if (isset($_SESSION['cart']) && count($_SESSION['cart']) ==0) {
    echo '<h1>Chưa có sản phẩm nào trong giỏ hàng</h1>';
} else {
?>
    <table border="1" width="100%" style="margin: 0 auto;">
        <thead>
            <tr align="center">
                <td>STT</td>
                <td>Image</td>
                <td>Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total Price</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody id="order">
            <?php
            $sum_total = 0;
            $i=1;
                // kiểm tra số lượng sản phẩm trong giỏ hàng
                foreach ($_SESSION['cart'] as $item) {
                ?>
                <tr align="center">
                    <td><?=$i?></td>
                    <td>
                        <img src="view/user/asset/image/<?= $item['img'] ?>" alt="<?= $item['nameProduct'] ?>" style="width: 100px; height: auto">
                    </td>
                    <td><?= $item['nameProduct'] ?></td>
                    <td><?= number_format((int)$item['price'], 0, ",", ".")  ?> <u>đ</u></td>
                    <td>
                        <input type="number" value="<?= $item['quantity'] ?>" min="1" id="quantity_<?= $item['idsp'] ?>" oninput="updateQuantity(<?= $item['idsp'] ?>, <?= $i ?>)">
                    </td>
                    <td>
                        <?= number_format((int)$item['price'] * (int)$item['quantity'], 0, ",", ".") ?> <u>đ</u>
                    </td>
                    <td>
                        <button onclick="removeFormCart(<?= $item['idsp'] ?>)">Xóa</button>
                    </td>
                </tr>
            <?php
                // Tính tổng giá đơn hàng
                $sum_total = $sum_total+$item['total'];
                $i++;
                // Lưu tổng giá trị vào sesion
                }
            ?>

            <tr>
                <td colspan="5" align="center">
                    <h2>Tổng tiền hàng:</h2>
                </td>
                <td colspan="2" align="center">
                    <h2>
                        <span>
                            <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>đ</u>
                        </span>
                    </h2>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <form action="index.php?type=order" method="post">
        <input type="submit" style="padding:10px;" name="order" value="Đặt Hàng">
    </form>
    <!-- <form action="index.php?type=spdamua" method="post">
        <input type="submit" style="padding:10px;" name="order" value="Sản phẩm đã mua">
    </form> -->
<?php
}
?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // hàm cập nhật số lượng
    function updateQuantity(id_sanpham, index) {
        // lấy giá trị của ô input
        let newQuantity = $('#quantity_' + id_sanpham).val();
        if (newQuantity <= 0) {
            newQuantity = 1
        }

        // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: './view/user/updateQuantity.php',
            data: {
                id_sanpham: id_sanpham,
                quantity: newQuantity
            },
            success: function(response) {
                window.location.href = "index.php?type=listCart";
            },
            error: function(error) {
                console.log(error);
            },
        })
    }

    function removeFormCart(id_sanpham) {
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
            // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
            $.ajax({
                type: 'POST',
                url: './view/user/removeFormCart.php',
                data: {
                    id_sanpham: id_sanpham
                },
                success: function(response) {
                    window.location.href = "index.php?type=listCart";
                },
                error: function(error) {
                    console.log(error);
                },
            })
        }
    }
</script>