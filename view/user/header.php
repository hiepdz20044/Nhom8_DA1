<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDH-08 Store</title>
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="view/user/asset/css/css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid header">
        <div class="container d-flex justify-content-between">
            <div class="img">
                <img src="view/user/asset/image/logo.jpg" class="logo" alt="">
            </div>
            <div class="d-flex align-items-center justify-content-between chiu">
                <!-- <div class="search">
                  
              </div> -->
                <form action="index.php?type=sanpham" method="POST" class="search">
                    <input type="text" name="kyw" placeholder="Tìm kiếm">
                    <button name="timkiem"><i class="fa-solid fa-magnifying-glass fa-lg"
                            style="color: #000000;"></i></button>
                </form>
                <div class="all_phone">
                    <div class="icon-phone">
                        <i class="fa-solid fa-phone-volume" style="color: #ffffff;"></i>
                    </div>
                    <div class="phone">
                        <p>
                            Gọi nhanh<br>
                            0888.425.100
                        </p>
                    </div>
                </div>
                <div class="user">
                    <?php
                    if (!isset($_SESSION['sdt'])) {
                        ?>
                    <a href="index.php?type=dangnhap"><i class="fa-regular fa-user fa-xl"
                            style="color: #ffffff;"></i></a>

                    <?php }elseif (isset($_SESSION['sdt'])){
                        ?>
                    <a href="index.php?type=qlitaikhoan"><i class="fa-regular fa-user fa-xl"
                            style="color: #9b7221;"></i></a>
                    <?php }
                    ?>
                </div>

                <div class="cart">
                    <a href="index.php?type=listCart"><i class="fa-solid fa-cart-shopping fa-xl"
                            style="color: #ffffff;"></i></a>
                    <span id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                </div>


            </div>
        </div>
    </div>
    <div class="menu ">
        <nav>
            <ul>
                <li><a href="index.php?type=home"><i class="fa-solid fa-house fa-xl"></i></a></li>
                <li><a href="index.php?type=thuonghieu">Thương hiệu</a></li>
                <li><a href="index.php?type=donghonam">Đồng hồ nam</a></li>
                <li><a href="index.php?type=donghonu">Đồng hồ nữ</a></li>
                <li><a href="index.php?type=donghodoi">Đồng hồ đôi</a></li>
                <li><a href="index.php?type=donghotreotuong">Đồng hồ treo tường</a></li>
                <li><a href="index.php?type=daydh">Dây đồng hồ</a></li>
                <li><a href="index.php?type=trangbaohanh">Bảo hành</a></li>
            </ul>
        </nav>
    </div>
    <br>