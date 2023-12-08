<?php
session_start();
// include("/path/to/server/htdocs/duan1/Nhom8_da1/model/user/trangchitiet.php");
// include("view/user/footer.php");

include "../da_1/Nhom8_da1/model/pdo.php";
include "../da_1/Nhom8_da1/model/user/trangchitiet.php";



// Kiểm tra xem giỏ hàng có dữ liệu hay không
if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
    $productId = array_column($cart, 'id');

    // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
    $idList = implode(',', $productId);

    // Lấy sản phẩm trong bảng sản phẩm theo id
    $dataDb = loadone_sanphamCart($idList);
    $sum_total = 0;
    foreach ($dataDb as $key => $product) :
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
                <img src="<?= $img_path, $product['img'] ?>" alt="<?= $product['ten_sp'] ?>" style="width: 100px; height: auto">
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
                <button>Xóa</button>
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
<?php
}
?>