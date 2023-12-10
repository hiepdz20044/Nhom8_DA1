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
        $i = 0 ;
        foreach ($dh as $key) { 
           $i++; 
            ?>
    <div class="don">
        <div class="in4">
            <p>Đơn hàng <?php echo $i ?></p>
            <p>Thành tiền: <span><?php echo $key['total_payment'] ?>.000</span></p>
            <!-- Thêm $i vào ID để đảm bảo sự duy nhất -->
            <button class="toggleButton" data-target="infoDiv<?php echo $i; ?>">Chi tiết</button>

        </div>
        <!-- Thêm $i vào ID để đảm bảo sự duy nhất -->
        <div id="infoDiv<?php echo $i; ?>" class="in4-detail">

            <?php 
                $spp = loadall_sanpham_donhang($key['id'], $id_user);
                foreach ($spp as $keyy ) {  
                    $sp = load_sanpham_giohang($keyy['id_pro']);
                    ?>
            <div class="sanpham">
                <p><?php echo $sp['ten_sp']; ?> <span
                        style="font-weight: bold;"><?php echo 'x'.$keyy['quantity'] ?></span></p>
                <p>Tổng tiền: <span><?php echo $keyy['total_price'] ?>.000</span></p>
                <p>Trạng thái đơn hàng: <span><?php echo $keyy['status'] ?></span></p>
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

        </div>
    </div>
    <?php } ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sử dụng class thay vì ID, và sử dụng forEach để ánh xạ từng button với infoDiv tương ứng
    var toggleButtons = document.querySelectorAll('.toggleButton');

    toggleButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var targetId = button.getAttribute('data-target');
            var infoDiv = document.getElementById(targetId);
            infoDiv.classList.toggle('in4-detail');
        });
    });
});
</script>
</body>

</html>