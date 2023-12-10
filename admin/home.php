<style>
/* CSS để làm cho biểu tượng to hơn và chính giữa trong ô và hạn chế chiều rộng tối đa của .controll */
.container {
    max-width: 1200px;
    margin: 0 auto;
}

.controll {
    text-align: center;
    margin-top: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.controll .aa {
    width: calc(25% - 20px);
    /* 20px là tổng của margin và padding, giữa các ô */
    margin: 10px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.controll a {
    text-decoration: none;
    color: #9b7221;
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    transition: transform 0.3s;
}

.controll a:hover {
    transform: scale(1.2);
}

.controll .iconn {
    font-size: 400%;
    /* Đặt kích thước tùy chọn cho biểu tượng */
}
</style>
<!-- HTML với thêm một thẻ div cho mỗi thẻ a và thêm màu sắc cho icon -->
<div class="container">
    <div class="controll">
        <div class="aa"><a href="../index.php"><i class="fas fa-store iconn" style="color: #3498db;"></i></a></div>
        <div class="aa"><a href="index.php"><i class="fas fa-globe-americas iconn" style="color: #e74c3c;"></i></a>
        </div>
        <div class="aa"><a href="index.php?act=adddm"><i class="fas fa-layer-group iconn"
                    style="color: #2ecc71;"></i></a>
        </div>
        <div class="aa"><a href="index.php?act=addsp"><i class="fas fa-shopping-bag iconn"
                    style="color: #f39c12;"></i></a>
        </div>
        <div class="aa"><a href="index.php?act=dskh"><i class="fas fa-users iconn" style="color: #9b59b6;"></i></a>
        </div>
        <div class="aa"><a href="index.php?act=dsbl"><i class="fas fa-comment-dots iconn"
                    style="color: #34495e;"></i></a>
        </div>
        <div class="aa"><a href="index.php?act=thongke"><i class="fas fa-chart-pie iconn"
                    style="color: #e67e22;"></i></a>
        </div>
        <div class="aa"><a href="index.php?act=dsdonhang"><i class="fas fa-clipboard-check iconn"
                    style="color: #1abc9c;"></i></a></div>
    </div>