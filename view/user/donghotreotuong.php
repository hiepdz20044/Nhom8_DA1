
    <div class="banneranh">
        <img class="slide" src="./upload/banner1.jpg" alt="Image 1">
        <img class="slide" src="./upload/banner2.jpg" alt="Image 2">
    </div>

    <div id="bannerchu">
        <span>Chào bạn đến với DDH-08 Store!</span>
    </div>

    <br>
    <div class="container-fluid text-dhnam ">
        <h3 class="p-3">ĐỒNG HỒ TREO TƯỜNG</h3>
    </div>
    <br>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <?php
                foreach ($loadall_donghotreotuong as $key) {
                    echo '
                    <div class="col-2 ">
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><img src="./upload/'.$key['img'].'" width="100%" alt="Ảnh sản phẩm"
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
    </div> -->
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

 

 