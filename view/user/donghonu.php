
    <div class="banneranh">
        <img class="slide" src="view/user/asset/image/banner1.jpg" alt="Image 1">
        <img class="slide" src="view/user/asset/image/banner2.jpg" alt="Image 2">
      </div>

    <div id="bannerchu">
        <span>Chào bạn đến với DDH-08 Store!</span>
    </div>


    
    <div class="container-fluid text-dhnam ">
        <h3 class="p-3">ĐỒNG HỒ NỮ</h3>
    </div>
    <br>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
        <?php
                foreach ($loadall_donghonu as $key) {
                    echo '
                    <div class="col-2 ">
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><img src="view/user/asset/image/'.$key['img'].'" width="100%" alt="Ảnh sản phẩm"
                       >
                </a>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'">
                    <p class="text-center m-1">'.$key['ten_sp'].'</p>
                </a>
                <p class="small text-center">'.$key['loai_may'].'</p>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'">
                    <h4 class="">Giá: '.$key['gia'].'</h4>
                </a>
            </div>';
                }
            ?>
            
            

        </div>
        
        
    </div>
    <!-- <div class="container d-flex ">
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
        
        
    </div> -->
    <ul class="pagination justify-content-center">
        <li><a href="#" data-page="first"><i class="fas fa-angle-double-left"></i></a></li>
        <li><a href="#" data-page="1">1</a></li>
        <li><a href="#" data-page="2">2</a></li>
        <li><a href="#" data-page="3">3</a></li>
        <li><a href="#" data-page="4">4</a></li>
        <li><a href="#" data-page="last"><i class="fas fa-angle-double-right"></i></a></li>
    </ul>
      <!-- <div class="container">
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
      </div> -->
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
    
  