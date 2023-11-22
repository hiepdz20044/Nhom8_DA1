<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDH-08 Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="css.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <div class="container-fluid header">
        <div class="container d-flex justify-content-between">
            <div class="img">
                <img src="../img/logo.jpg" class="logo" alt="">
            </div>
            <div class="d-flex align-items-center justify-content-between chiu">
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm">
                    <button><i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i></button>
                </div>
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
                    <a href="dangnhap.html"><i class="fa-regular fa-user fa-xl" style="color: #ffffff;"></i></a>
                </div>

                <div class="cart">
                    <a href="giohang.html"><i class="fa-solid fa-cart-shopping fa-xl" style="color: #ffffff;"></i></a>
                </div>


            </div>
        </div>
    </div>
    <div class="menu ">
        <nav>
            <ul>
                <li><a href="home.html"><i class="fa-solid fa-house fa-xl"></i></a></li>
                <li><a href="#">Thương hiệu</a></li>
                <li><a href="donghonam.html">Đồng hồ nam</a></li>
                <li><a href="donghonu.html">Đồng hồ nữ</a></li>
                <li><a href="donghodoi.html">Đồng hồ đôi</a></li>
                <li><a href="donghotreotuong.html">Đồng hồ treo tường</a></li>
                <li><a href="daydh.html">Dây đồng hồ</a></li>
                <li><a href="trangbaohanh.html">Bảo hành</a></li>
            </ul>
        </nav>
    </div>
    <br>
    <div class="banneranh">
        <img class="slide" src="/img/banner1.jpg" alt="Image 1">
        <img class="slide" src="/img/banner2.jpg" alt="Image 2">
    </div>

    <div id="bannerchu">
        <span>Chào bạn đến với DDH-08 Store!</span>
    </div>


    <div class="gallery">


        <div class="image-container1">

            <a href="#"><img class="image" src="/img/tintuc1.jpg" alt="Image 1"></a>
            <a href="#"><img class="image" src="/img/tintuc2.jpg" alt="Image 2"></a>
        </div>

        <div class="image-container2">

            <a href="#"><img class="image" src="/img/thuonghieu1.jpg" alt="Image 3"></a>
            <a href="#"><img class="image" src="/img/thuonghieu1.jpg" alt="Image 4"></a>
            <a href="#"><img class="image" src="/img/thuonghieu1.jpg" alt="Image 5"></a>
            <a href="#"><img class="image" src="/img/thuonghieu1.jpg" alt="Image 6"></a>
            <a href="#"><img class="image" src="/img/thuonghieu1.jpg" alt="Image 7"></a>
        </div>
    </div>


    <div id="bannerduoi">
        <img id="currentImagee" src="/img/bannerduoi1.jpg" alt="Image 1">
    </div>
    <div class="thumbnail-container">
        <button onclick="previousImage()">&#8249;</button>
        <button onclick="changeImage(0)">1</button>
        <button onclick="changeImage(1)">2</button>
        <button onclick="changeImage(2)">3</button>
        <button onclick="changeImage(3)">4</button>
        <button onclick="changeImage(4)">5</button>
        <button onclick="changeImage(5)">6</button>
        <button onclick="changeImage(6)">7</button>
        <button onclick="nextImage()">&#8250;</button>
    </div>
    <br>
    <div class="container-fluid text-dhnam ">
        <h3 class="p-3">ĐỒNG HỒ NAM</h3>
    </div>
    <br>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <div class="col-2 ">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                </a>
                <a href="#">
                    <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                </a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#">
                    <h4 class="">Giá: 6.456.000</h4>
                </a>
            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center ">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">

                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2 ">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">

                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>

        </div>


    </div>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <div class="col-2 ">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                </a>
                <a href="#">
                    <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                </a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#">
                    <h4 class="">Giá: 6.456.000</h4>
                </a>
            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center ">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">

                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2 ">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">

                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>

        </div>


    </div>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <div class="col-2 ">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                </a>
                <a href="#">
                    <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                </a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#">
                    <h4 class="">Giá: 6.456.000</h4>
                </a>
            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center ">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">

                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2 ">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">

                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>

        </div>


    </div>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <div class="col-2 ">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                </a>
                <a href="#">
                    <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                </a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#">
                    <h4 class="">Giá: 6.456.000</h4>
                </a>
            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center ">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">

                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2 ">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">

                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>

        </div>


    </div>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <div class="col-2 ">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                </a>
                <a href="#">
                    <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                </a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#">
                    <h4 class="">Giá: 6.456.000</h4>
                </a>
            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center ">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">
                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">

                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>
            <div class="col-2 ">
                <a href="#"><img src="img/dhtreotuong.webp" width="100%" alt="Ảnh sản phẩm"
                        onmouseover="this.src='img/dhtreotuong.webp'" onmouseout="this.src='img/dhtreotuong.webp'">

                    <a href="#">
                        <p class="text-center m-1">Đồng hồ nam Citizen Quartz</p>
                    </a>
                    <p class="small text-center">AUTOMATIC</p>
                    <a href="#">
                        <h4 class="">Giá: 6.456.000</h4>
                    </a>

            </div>

        </div>


    </div>
    <ul class="pagination justify-content-center">
        <li><a href="#" data-page="first"><i class="fas fa-angle-double-left"></i></a></li>
        <li><a href="#" data-page="1">1</a></li>
        <li><a href="#" data-page="2">2</a></li>
        <li><a href="#" data-page="3">3</a></li>
        <li><a href="#" data-page="4">4</a></li>
        <li><a href="#" data-page="last"><i class="fas fa-angle-double-right"></i></a></li>
    </ul>
    <div class="container">
        <h4>Các hãng đồng hồ hot</h4>
        <div class="row justify-content-between">
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
        </div>
    </div>
    <div class="xemthem container">
        <h3 style="background-color: #cfcfcf;" class="p-3 my-3 ">NÂNG TẦM PHONG CÁCH TRANG TRÍ CỦA BẠN VỚI ĐỒNG HỒ TREO
            TƯỜNG</h3>
        <p>Bạn đã bao giờ nghĩ đến trước khi đồng hồ được phát minh, người xưa đã theo dõi thời gian nhờ chuyển động của
            mặt trời như thế nào chưa. Đồng hồ giúp chúng ta quản lý cuộc sống của mình. Đồng hồ là một vật dụng quan
            trọng giúp bạn luôn đúng giờ, đến đúng nơi, đúng lúc để có được thành công trong cuộc sống.</p>
        <div id="more" style="display:none;">
            <img src="img/banner1.jpg" width="100%">
            Nếu muốn cạnh tranh với thế giới ngày nay để thành công, điều rất quan trọng là phải biết ảnh hưởng của thời
            gian đối với cuộc sống của chúng ta. Để coi trọng thời gian, bạn nên đúng giờ, bạn cần có đồng hồ treo tường
            xung quanh mình.
            <img src="img/banner1.jpg" alt="" width="100%">
            Đồng hồ treo tường không chỉ giúp bạn nhìn thấy đúng thời điểm và nó cũng là một phần trang trí rất tuyệt
            vời cho ngôi nhà, văn phòng làm việc hay bất cứ không gian nào khác. Bên cạnh đó, lựa chọn đồng hồ treo
            tường là một trong những ưu tiên hàng đầu khi nghĩ đến thiết kế nội thất trong căn nhà của bạn. Một không
            gian sống hiện đại được hưởng lợi từ những đường nét tinh tế trên đồng hồ treo tường.
            <img src="img/banner1.jpg" alt="" width="100%">
            <p>Được tạo ra vào năm 1853 tại Jura Thụy Sĩ, Tissot tự hào có truyền thống chế tác đồng hồ rất lâu đời.
                Ngày nay thuộc sở hữu của Tập đoàn Swatch, đồng hồ Tissot liên tục đưa ra những mẫu đồng hồ chất
                lượng cao với mức giá tương đối phải chăng. Họ cũng là một trong những thương hiệu thành công nhất
                của Thụy Sĩ cung cấp những chiếc đồng hồ nam thời trang, phong cách.</p>
            <img src="img/banner1.jpg" alt="" width="100%">
            Cho dù bạn đang tìm kiếm một chiếc đồng hồ treo tường phong cách cổ điển hay sang trọng và tinh tế, đồng hồ
            Duy Anh có hàng trăm mẫu cho bạn lựa chọn đến từ thương hiệu Seiko và Rhythm, với nhiều kiểu dáng và mức giá
            khác nhau…

            Chúng tôi mang đến cho khách hàng những chiếc đồng hồ treo tường lý tưởng cho cuộc sống đương đại, thể hiện
            nét thẩm mỹ tối giản và thêm sức hấp dẫn trực quan cho không gian sống!
        </div>
        <center><button class="btn p-2 " style="background-color: #cfcfcf;" onclick="myFunction() ">Xem thêm</button>
        </center>
    </div>

    <script>
        function myFunction() {
            var x = document.querySelector("#more");
            if (x.style.display === "none") {
                x.style.display = "block";
                document.querySelector(".btn").textContent = "Thu gọn";
            } else {
                x.style.display = "none";
                document.querySelector(".btn").textContent = "Xem thêm";
            }
        }

    </script>

    <div class="container">
        <div class="text row">
            <hr class="line" />
            <span class="content">VÌ SAO LẠI CHỌN CHÚNG TÔI</span>
            <hr class="line" />
        </div>
        <div class="d-flex justify-content-between align-items-center vscct p-4 my-4 pt-3">
            <div class="d-flex pt-3"><i class="fa-solid fa-medal pt-2 pr-2" style="color: #000000;"></i>
                <p>100% HÀNG CHÍNH HÃNG</p>
            </div>
            <div class="d-flex pt-3"><i class="fa-solid fa-truck-fast pt-1 pr-2" style="color: #000000;"></i>
                <p>MIỄN PHÍ VẬN CHUYỂN</p>
            </div>
            <div class="d-flex pt-3"><i class="fa-solid fa-shield-halved pt-1 pr-2" style="color: #000000;"></i>
                <p>BẢO HÀNH 5 NĂM</p>
            </div>
            <div class="d-flex pt-3"><i class="fa-solid fa-7 pt-1 pr-2" style="color: #000000;"></i></i>
                <p>ĐỔIHÀNG TRONG 7 NGÀY</p>
            </div>


        </div>
        <div class="iframe">
            <div class="d-flex text">
                <h4 class="text-white bg-secondary p-2">Tin tức - Video</h4>
                <hr class="line" />
            </div>
            <div class="iframe2">
                <iframe src="tintuc.html" frameborder="0" width="60%" height="400px"></iframe>
                <iframe width="40%" height="400px" src="https://www.youtube.com/embed/AAS_KH9ZphY"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>


    </div>

    <div class="container-fluid email  d-flex mt-4 pl-5">
        <div class="col-sm d-flex pt-4 pl-5 pb-4">
            <div class="pl-5"><i class="fa-regular fa-clock  mr-3" style="color: #ffffff; font-size: 50px;"></i></div>
            <div class="text-white">
                <h5 class="">MUA HÀNG ONLINE</h5>
                <p>Tất cả các ngày trong tuần</p>
            </div>
        </div>
        <div class="col-sm d-flex pt-4 pl-5">
            <div class="pl-5"><i class="fa-solid fa-phone mr-3" style="color: #ffffff; font-size: 50px;"></i></div>
            <div class="text-white ">
                <h5>HỖ TRỢ MUA HÀNG</h5>
                <p>0965706764</p>
            </div>
        </div>
        <div class="col-sm d-flex pt-4 pl-5">
            <div class="pl-5"><i class="fa-solid fa-envelope mr-3" style="color: #ffffff; font-size: 50px;"></i></div>
            <div class="text-white">
                <h5>EMAIL</h5>
                <p>productddh8@gmail.com</p>
            </div>
        </div>


    </div>
    <div class="container">
        <div class="d-flex justify-content-between p-5">
            <div class="footer">
                <h4>VỀ DDH STORE</h4>
                <a href="" class="">Giới thiệu về đồng hồ</a><br>
                <a href="">Triết lí kinh doanh</a><br>
                <a href="">Khách hàng nói gì về chúng tôi</a>

            </div>
            <div class="footer">
                <h4 class="">CHĂM SÓC KHÁCH HÀNG</h4>
                <a href="">Hướng dân mua hàng</a><br>
                <a href="">Chính sách đổi trả</a><br>
                <a href="">Dịch vụ và sửa đồng hồ</a>

            </div>
            <div class="footer">
                <h4>TIỆN ÍCH</h4>
                <a href="">Thanh toán</a><br>
                <a href="">Mua hàng online</a>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="footer2 row text">
            <hr class="line">
            <h4 class="pl-4 pr-4 pt-1 pb-1">HÀ NỘI</h4>
            <hr class="line">
        </div>
        <div class="d-flex footer3">
            <div class="footer3_1">
                <h5>Trịnh Văn Bô - Hà Nội</h5>
                <p>Địa chỉ: 22P.Trịnh Văn Bô, Xuân Phương, Nam từ liêm, Hà nội</p>
                <p>Điện thoại: 0965706764</p>
                <p>email: productddh8@gmail.com</p>
            </div>
            <div class="footer3_1">
                <h5>Trịnh Văn Bô - Hà Nội</h5>
                <p>Địa chỉ: 22P.Trịnh Văn Bô, Xuân Phương, Nam từ liêm, Hà nội</p>
                <p>Điện thoại: 0965706764</p>
                <p>email: productddh8@gmail.com</p>
            </div>
        </div>
    </div>

</body>
<script src="home.js"></script>

</html>