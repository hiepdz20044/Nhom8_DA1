<style>
.container-donhang {
    min-height: 100vh;
    width: 100%;
}

.container-donhang .don {
    min-height: 50px;
    width: 90%;
    margin: 0 auto;
    background-color: wheat;
    font-size: 20px;
    margin-bottom: 20px;
}

.container-donhang .don .in4 {
    display: flex;
    justify-content: space-around;
    align-items: center;

}

.container-donhang .don .in4-detail {
    display: none;
}
</style>
<div class="container-donhang">
    <?php 
    $i = 0;
    foreach ($dh as $key) { 
        $i++; 
    ?>
    <div class="don">
        <div class="in4">
            <p>Đơn hàng <?php echo $i ?></p>
            <p>Thành tiền: <span><?php echo $key['total_payment'] ?>.000</span></p>
            <button class="toggleButton" data-target="infoDiv<?php echo $i; ?>">Chi tiết</button>

        </div>
        <div id="infoDiv<?php echo $i; ?>" class="in4-detail">

            <?php 
            $spp = loadall_sanpham_donhang($key['id'], $id_user);
            foreach ($spp as $keyy) {  
                $sp = load_sanpham_giohang($keyy['id_pro']);
            ?>
            <div class="sanpham">
                <p><?php echo $sp['ten_sp']; ?> <span
                        style="font-weight: bold;"><?php echo 'x'.$keyy['quantity'] ?></span></p>
                <p>Tổng tiền: <span><?php echo $keyy['total_price'] ?>.000</span></p>

            </div>
            <?php } 
                $id_userrr = $keyy['id_user'];
                $name = load_khachhang_giohang($id_userrr);
            ?>
            <div class="name">
                <p>Tên: <span style="font-weight: bold;"><?php echo $name['ho_ten']; ?></span></p>
            </div>
            <div class="diachi">
                <p>Số điện thoại: <?php echo $name['sdt'] ?> <span> Địa chỉ: <?php echo $name['dia_chi'] ?></span>
                </p>
            </div>
            <form action="index.php?act=capnhatdh" method="post">
                <p>Trạng thái đơn hàng: <span>
                        <?php 
                    if ($keyy['status']=='') {
                        echo "Đang chờ xử lí";
                    } else {
                        echo $keyy['status'];
                    }
                    ?>
                    </span></p>

                <!-- Thêm nút Hủy đơn hàng -->
                <button class="cancelOrderButton" data-order-id="<?php echo $key['id']; ?>">Hủy đơn hàng</button>
            </form>
        </div>
    </div>
    <?php } ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var toggleButtons = document.querySelectorAll('.toggleButton');
    var cancelOrderButtons = document.querySelectorAll('.cancelOrderButton');

    toggleButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var targetId = button.getAttribute('data-target');
            var infoDiv = document.getElementById(targetId);
            infoDiv.classList.toggle('in4-detail');
        });
    });

    cancelOrderButtons.forEach(function(cancelButton) {
        cancelButton.addEventListener('click', function() {
            var orderId = cancelButton.getAttribute('data-order-id');
            // Thực hiện xử lý hủy đơn hàng (có thể sử dụng AJAX để gửi yêu cầu hủy đơn hàng)
            alert("Hủy đơn hàng có ID: " + orderId);
        });
    });
});
</script>



</html>