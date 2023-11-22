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

      <div class="container-fluid header" >
        <div class="container d-flex justify-content-between">
            <div class="img">
                <img src="../img/logo.jpg" class="logo" alt="">
            </div>
            <div class="d-flex align-items-center justify-content-between chiu">
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm" >
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
                    <a href="#"><i class="fa-solid fa-cart-shopping fa-xl" style="color: #ffffff;"></i></a>
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
        <h3 class="p-3">ĐỒNG HỒ NỮ</h3>
    </div>
    <br>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <div class="col-2 ">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                </a>
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>
            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                <a href="#"><p class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center " >AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2 ">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>

        </div>
        
        
    </div>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <div class="col-2 ">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                </a>
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>
            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                <a href="#"><p class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center " >AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2 ">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>

        </div>
        
        
    </div>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <div class="col-2 ">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                </a>
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>
            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                <a href="#"><p class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center " >AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2 ">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>

        </div>
        
        
    </div>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <div class="col-2 ">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                </a>
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>
            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                <a href="#"><p class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center " >AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2 ">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>

        </div>
        
        
    </div>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <div class="col-2 ">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                </a>
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>
            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                <a href="#"><p class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center " >AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2 ">
                <a href="#"><img src="img/dhnu.webp" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src='img/dhnu.webp'" onmouseout="this.src='img/dhnu.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

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
                <a href=""><img src="img/thuonghieu1.jpg"  alt=""></a>
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
                <a href=""><img src="img/thuonghieu1.jpg"  alt=""></a>
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
        <h3 style="background-color: #cfcfcf;" class="p-3 my-3 ">TƯ VẤN LỰA CHỌN ĐỒNG HỒ NỮ TỪ A-Z</h3>
            <p>Làm sao để phái đẹp có thể lựa chọn được một mẫu đồng hồ nữ phù hợp nhất, đáp ứng mọi tiêu chí, sở thích
                của bản thân? Hãy cùng Duy Anh Watch đi tìm đáp án trong nội dung dưới đây nhé!</p>
            <div id="more" style="display:none;">
                <img src="img/banner1.jpg" width="100%">
                <h2>1. Các thương hiệu đồng hồ nữ được ưa chuộng nhất</h2>
                <p>Thế giới đồng hồ nữ hàng hiệu luôn đa dạng, phong phú với sự cạnh tranh gay gắt của hàng trăm thương
                    hiệu nổi tiếng trên thế giới từ Nhật Bản, Thụy Sỹ, Mỹ, Thụy Điển…khiến cho phái nữ sẽ bị “nhiễu
                    loạn” khi không biết phải lựa chọn cái tên nào.</p>
                <p>Hiện nay, thương hiệu đồng hồ nữ được ưa chuộng bao gồm: MIDO, Tissot, Seiko, Citizen, Orient, Daniel
                    Wellington, Calvin Klein, Olympia Star, Olym Pianus…với mức giá khá dễ tiếp cận mang thiết kế rất
                    trẻ trung, năng động hoặc đầy đủ các phong cách mà phái đẹp theo đuổi. Cao cấp hơn cho sự lựa chọn
                    của phái đẹp chính là thương hiệu Longines - một trong những nhà sản xuất rất được ưa chuộng trên
                    thị trường Việt Nam nói riêng và thế giới nói chung khi giới thiệu các thiết kế đậm tính thanh lịch,
                    sang trọng.</p>
                <h2>2. Tư vấn lựa chọn đồng hồ nữ phù hợp</h2>
                <h3>2.1 Lựa chọn đồng hồ nữ theo nghề nghiệp</h3>
                <p>Đối với dân công sở: Phái nữ nên chọn những mẫu đồng Dress Watch với những đường nét tinh tế, đơn
                    giản, lịch sự và hoàn toàn không cần để tâm đến chất liệu dây cũng như độ chịu nước của đồng hồ.</p>
                <img src="img/banner1.jpg" alt="" width="100%">
                <p>Đối với nữ doanh nhân: Lý tưởng nhất đối với nữ doanh nhân là những mẫu đồng hồ nữ đẳng cấp, sang
                    trọng, lịch sự ở phân khúc giá cao cấp hơn, có sự xuất hiện của những trang bị đắt giá như đá quý,
                    kim cương hay vàng 18K.</p>
                <p>Đối với cô nàng hoạt động trong lĩnh vực thể thao hoặc môi trường ngoài trời: Trong những môi trường
                    như vậy, mẫu phụ kiện đồng hành cùng mỗi cô gái phải có khả năng chống chịu lực tốt và phải thật bền
                    trong những điều kiện bụi bẩn, mưa gió, nắng cháy. Đáp ứng điều này thì một mẫu đồng hồ nữ thể thao
                    năng động, chắc chắn, dây kim loại sẽ là lựa chọn lý tưởng số 1.</p>
                <h3>2.2 Lựa chọn đồng hồ nữ theo thương hiệu</h3>
                <p>Tùy vào sở thích cá nhân, phái đẹp có thể lựa chọn cho mình bất kỳ một thương hiệu nào mình ấn tượng
                    nhất. </p>
                <p>- Thương hiệu đồng hồ Nhật Bản: Seiko, Citizen, Orient, Casio </p>
                <p>- Thương hiệu đồng hồ Thụy Sỹ: Longines, Frederique Constant, Tissot, MIDO, Certina… </p>
                <p>- Thương hiệu đồng hồ nữ thời trang Mỹ: Calvin Klein… </p>
                <p>- Thương hiệu đồng hồ Thụy Điển: Daniel Wellington</p>
                <p>- Thương hiệu đồng hồ Pháp: Freelook</p>
                <h3>2.3 Lựa chọn đồng hồ nữ theo loại máy</h3>
                <p>Cũng giống như thế giới đồng hồ nam thì đồng hồ nữ cũng được giới thiệu với đầy đủ loại máy nhưng sẽ
                    gồm 3 loại máy cơ bản: Máy quartz, máy Automatic, máy Eco-Drive. Trong đó thì máy quartz sẽ được nữ
                    giới ưu tiên lựa chọn hơn bởi ưu điểm mức giá dễ tiếp cận, thiết kế nhỏ gọn và rất dễ sử dụng, tiện
                    lợi khi kết hợp với áo sơ mi, áo dài tay. Với những cô nàng theo đuổi phong cách thể thao thì máy
                    quartz Chronograph sẽ là lựa chọn thích hợp, trong khi đó máy automatic sẽ dành cho những cô gái yêu
                    thích chuyển động mê hoặc của các chi tiết.</p>
                <h3>2.4 Lựa chọn đồng hồ nữ theo kích thước cổ tay</h3>
                <p>Lựa chọn đồng hồ nữ vừa vặn cổ tay luôn quan trọng hơn bao giờ hết. Bởi chỉ khi cân đối với bề mặt cổ
                    tay mới tạo ra phong cách và sự cuốn hút của phái đẹp. Với những cô nàng có tay siêu nhỏ nên chọn
                    mẫu đồng hồ có đường kính từ 19 - 24mm. Trong khi đó, cô nàng có cổ tay vừa phải sẽ thích hợp với
                    phiên bản có đường kính 24-32mm. Còn nếu nàng có chu vi tay lớn, nên mua phụ kiện có đường kính từ
                    khoảng 32-36mm.</p>
                <img src="img/banner1.jpg" alt="" width="100%">
                <h2>3. Địa chỉ mua đồng hồ nữ chính hãng uy tín</h2>
                <p>“Mua đồng hồ nữ chính hãng ở đâu uy tín?”. Đáp án chính xác cho câu hỏi này chính là Duy Anh Watch -
                    Đại lý Ủy Quyền Chính Thức của hơn 20 thương hiệu danh tiếng Nhật Bản, Thụy Sỹ, Pháp, Mỹ, Thụy
                    Điển,…</p>
                    <p>Toàn bộ sản phẩm do Duy Anh phân phối đều đảm bảo 100% chính hãng với chế độ bảo hành chính hãng và bảo hành riêng biệt của Duy Anh.</p>
                    <p>Hiện hệ thống của Duy Anh đang có mặt tại Hà Nội và Thành phố Hồ Chính với hàng ngàn mẫu đồng hồ nữ đẹp nhất, mới nhất, hot nhất liên tục được cập nhật để đáp ứng đầy đủ nhu cầu của khách hàng. Vì thế nếu muốn mua đồng hồ nữ chính hãng, bạn hãy ghé qua showroom của Duy Anh để trải nghiệm nhé!</p>
            </div>
        <center><button class="btn p-2 " style="background-color: #cfcfcf;" onclick="myFunction() " >Xem thêm</button></center>
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
          <div class="d-flex pt-3"><i class="fa-solid fa-medal pt-2 pr-2" style="color: #000000;"></i><p >100% HÀNG CHÍNH HÃNG</p></div>
          <div class="d-flex pt-3"><i class="fa-solid fa-truck-fast pt-1 pr-2" style="color: #000000;"></i><p>MIỄN PHÍ VẬN CHUYỂN</p></div>
          <div class="d-flex pt-3"><i class="fa-solid fa-shield-halved pt-1 pr-2" style="color: #000000;"></i><p>BẢO HÀNH 5 NĂM</p></div>
          <div class="d-flex pt-3"><i class="fa-solid fa-7 pt-1 pr-2" style="color: #000000;"></i></i><p>ĐỔIHÀNG TRONG 7 NGÀY</p></div>
    
    
        </div>
        <div class="iframe">
          <div class="d-flex text">
            <h4 class="text-white bg-secondary p-2">Tin tức - Video</h4>
          <hr class="line" />
          </div>
          <div class="iframe2">
            <iframe src="tintuc.html" frameborder="0" width="60%" height="400px"></iframe>
            <iframe width="40%" height="400px" src="https://www.youtube.com/embed/AAS_KH9ZphY" title="YouTube video player"
              frameborder="0"
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