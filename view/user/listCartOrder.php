<?php
if (empty($dataDb)) {
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
            foreach ($dataDb as $key => $product):
                // kiểm tra số lượng sản phẩm trong giỏ hàng
                $quantityInCart = 0;
                foreach ($_SESSION['cart'] as $item) {
                    if ($item['id'] == $product['id_sanpham']) {
                        $quantityInCart = $item['quantity'];
                        break;
                    }
                }
            ?>
                <tr align="center">
                    <td><?= $key + 1 ?></td>
                    <td>
                        <img src="view/user/asset/image/<?= $product['img'] ?>" alt="<?= $product['ten_sp'] ?>" style="width: 100px; height: auto">
                    </td>
                    <td><?= $product['ten_sp'] ?></td>
                    <td><?= number_format((int)$product['gia'], 0, ",", ".")  ?> <u>đ</u></td>
                    <td>
                        <input type="number" value="<?= $quantityInCart ?>" min="1" id="quantity_<?= $product['id_sanpham'] ?>" oninput="updateQuantity(<?= $product['id_sanpham'] ?>, <?= $key ?>)">
                    </td>
                    <td>
                        <?= number_format((int)$product['gia'] * (int)$quantityInCart, 0, ",", ".") ?> <u>đ</u>
                    </td>
                    <td>
                        <button onclick="removeFormCart(<?= $product['id_sanpham'] ?>)">Xóa</button>
                    </td>
                </tr>
            <?php
                // Tính tổng giá đơn hàng
                $sum_total += ((int)$product['gia'] * (int)$quantityInCart);

                // Lưu tổng giá trị vào sesion
                $_SESSION['resultTotal'] = $sum_total;
            endforeach;
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
    <form action="index.php?act=order" method="post">
        <input type="submit" style="padding:10px;" name="order" value="Đặt Hàng">
    </form>
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
                // Sau khi cập nhật thành công
                $.post('view/user/tableCartOrder.php', function(data) {
                    $('#order').html(data);
                })
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
                    // Sau khi cập nhật thành công
                    $.post('view/user/tableCartOrder.php', function(data) {
                        $('#order').html(data);
                    })
                },
                error: function(error) {
                    console.log(error);
                },
            })
        }
    }
</script>