
    <div class="banneranh">
        <img class="slide" src="view/user/asset/image/banner1.jpg" alt="Image 1">
        <img class="slide" src="view/user/asset/image/banner2.jpg" alt="Image 2">
      </div>

    <div id="bannerchu">
        <span>Chào bạn đến với DDH-08 Store!</span>
    </div>

    <br>
    <div class="container-fluid text-dhnam ">
        <h3 class="p-3">ĐỒNG HỒ NAM</h3>
    </div>
    <br>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
        <?php
            foreach ($loadall_donghonam as $key) {
                echo '
                <div class="col-2 ">
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><img src="view/user/asset/image/'.$key['img'].'" width="100%" >
                </a>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><p  class="text-center m-1">'.$key['ten_sp'].'</p></a>
                <p class="small text-center">'.$key['loai_may'].'</p>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><h4 class="">Giá: '.$key['gia'].'.000</h4></a>
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
        <h3 style="background-color: #cfcfcf;" class="p-3 my-3 ">TẤT CẢ NHỮNG ĐIỀU BẠN CẦN BIẾT VỀ CÁCH CHỌN ĐỒNG HỒ NAM</h3>
        <p>Những chiếc đồng hồ đeo tay không chỉ để xem thời gian mà còn khẳng định phong cách và đẳng cấp của phái
            mạnh. Đồng hồ nam mang lại sự khác biệt nhất là khi đặt vào tổng thể trang phục, nhưng không phải ai
            cũng chọn được một chiếc đồng hồ phù hợp ở lần đầu tiên. Duy Anh Watch sẽ giúp bạn lựa chọn đồng hồ nam
            đẹp và phù hợp với sở thích của từng người!</p>
        <div id="more" style="display:none;">
            <img src="img/banner1.jpg" width="100%">
            <h2>1. Các thương hiệu đồng hồ nam nổi tiếng tại Việt Nam</h2>
            <h3>1.1 Longines</h3>
            <p>Không nhiều người biết rằng Longines là một trong những thương hiệu đồng hồ lâu đời nhất thế giới.
                Với gần hai thế kỷ ra đời và phát triển, cái tên Longines có thể được xem như “lão làng” trong giới
                chơi đồng hồ. Quy tụ tinh hoa hàng trăm năm chế tác cùng tinh thần thanh lịch bất biến với thời
                gian, những chiếc đồng hồ Longines chính là vật sở hữu đáng giá nhờ độ tin cậy cao, đa dạng về kiểu
                dáng và mẫu mã với thiết kế cổ điển, nhiều phiên bản dress watch lý tưởng.</p>
            <img src="img/banner1.jpg" alt="" width="100%">
            <p>Dù là đồng hồ unisex, đồng hồ nam hay nữ, Longines vẫn mang đến hàng loạt phiên bản nổi tiếng đáp ứng
                nhiều thị hiếu khác nhau.</p>
            <h3>1.2 Rolex</h3>
            <p>Dù là người đam mê đồng hồ hay không, bạn sẽ khó có thể tìm thấy một người nào chưa từng nghe qua cái
                tên Rolex trong đời. Vương miện Rolex là một trong những biểu tượng dễ nhận diện nhất trên thế giới.
                Đeo đồng hồ Rolex không chỉ thể hiện địa vị mà còn cho phép bạn bước vào thế giới của những khả năng
                không giới hạn. Đó là lý do tại sao Rolex sản xuất và bán khoảng một triệu chiếc đồng hồ nam cao cấp
                mỗi năm.</p>
            <img src="img/banner1.jpg" alt="" width="100%">
            <h3>1.3 Tissot</h3>
            <p>Được tạo ra vào năm 1853 tại Jura Thụy Sĩ, Tissot tự hào có truyền thống chế tác đồng hồ rất lâu đời.
                Ngày nay thuộc sở hữu của Tập đoàn Swatch, đồng hồ Tissot liên tục đưa ra những mẫu đồng hồ chất
                lượng cao với mức giá tương đối phải chăng. Họ cũng là một trong những thương hiệu thành công nhất
                của Thụy Sĩ cung cấp những chiếc đồng hồ nam thời trang, phong cách.</p>
            <img src="img/banner1.jpg" alt="" width="100%">
            <h2>2. Tư vấn lựa chọn đồng hồ nam phù hợp</h2>
            <p>Nếu bạn đang muốn mua một chiếc đồng hồ để đeo nhưng chưa biết nên lựa chọn như thế nào, từ việc cân
                nhắc những ưu và nhược điểm của các loại đồng hồ khác nhau, đến các kiểu đồng hồ nam khác nhau… thì
                bài viết này là dành cho bạn!</p>
            <p>Hơn thế nữa việc trang bị cho mình những thông tin liên quan có thể đơn giản hóa quá trình mua hàng
                và không bị lạc giữa hàng trăm loại đồng hồ khác nhau và để chắc chắn rằng bạn không mua một chiếc
                đồng hồ yêu thích hôm nay để rồi chán nó vào ngày mai!</p>
            <q>Bạn sẽ tìm thấy hướng dẫn cơ bản về đồng hồ đeo tay nam - tất cả thông tin cần thiết để lựa chọn được
                những mẫu đồng hồ nam đẹp và phù hợp với từng người.</q>
            <h3>2.1 Chọn đồng hồ nam theo thương hiệu</h3>
            <p>Thế giới đồng hồ nam rất đa dạng và phong phú với sự góp mặt của các thương hiệu đồng hồ Thụy Sĩ và
                Nhật Bản – 2 cường quốc về sản xuất đồng hồ hàng đầu thế giới. Ở các shop đồng hồ nam, họ thường
                chia các mẫu đồng hồ theo thương hiệu. Thông thường những thương hiệu phân khúc cao cấp nhất như
                Rolex, Omega, Patek Philippe, Grand Seiko… sẽ có giá đến hàng trăm triệu. Các mẫu đồng hồ thuộc
                thương hiệu Longines – thương hiệu cao cấp của tập đoàn đồng hồ lớn nhất Thụy Sĩ Swatch có giá từ
                vài chục đến vài trăm triệu tùy theo mẫu đồng hồ bạn chọn. Trong khi đó các thương hiệu tầm trung
                như Tissot, Mido, Certina, Hamilton, Seiko… có mức giá từ vài triệu đến vài chục triệu. Ngoài ra nếu
                bạn muốn một chiếc đồng hồ nam hàng hiệu với mức giá mềm thì có thể kể đến thương hiệu Seiko,
                Citizen, Orient, Casio, Daniel wellington… chỉ từ 3 triệu trở lên.</p>
            <h3>2.2 Chọn đồng hồ nam theo loại máy</h3>
            <p>Biết được chuyển động của đồng hồ có thể rất cần thiết vì mức độ tin cậy có thể khác nhau giữa các bộ
                chuyển động và các thương hiệu khác nhau có mức sai số khác nhau. Nếu bạn cần độ chính xác cao có
                thể lựa chọn mua đồng hồ pin thạch anh do độ chính xác cao của chúng. Nếu bạn đang nghiêng về một
                chiếc đồng hồ cơ, thì mức độ dung sai là điều bạn chắc chắn cần biết hoặc ít nhất là hỏi về nó để
                bạn không bị thất vọng.</p>
            <p>Một số thương hiệu đồng hồ sản xuất các bộ máy riêng của họ (in house), đây thường là các thương hiệu
                cao cấp đi kèm với mức giá cao. Nếu bạn có đủ ngân sách và cần chính xác, tìm một thương hiệu đồng
                hồ sản xuất các bộ máy của riêng mình.</p>
            <h3>2.3 Chọn đồng hồ nam theo kích thước cổ tay</h3>
            <p>Một trong những yếu tố cần cân nhắc khi chọn đồng hồ nam là chiếc đồng hồ có kích thước cân đối với
                cổ tay và bàn tay của bạn. Nếu nó quá lớn so với cổ tay của bạn, nó sẽ nổi bật và trông sặc sỡ; quá
                nhỏ và nó sẽ trông giống như bạn đang đeo một chiếc đồng hồ của phụ nữ.</p>
            <p>Hãy nhớ rằng không có công thức hoàn hảo nào khi nói về kích thước một chiếc đồng hồ có thể vừa vặn
                trên cổ tay của bạn. Do đó khi mua đồng hồ, bạn cần biết cách chọn đồng hồ phù hợp với cổ tay của
                mình. </p>
            <h2>3. Địa chỉ mua đồng hồ nam chính hãng uy tín</h2>
            <p>Cuối cùng, lựa chọn một cửa hàng đồng hồ nam để mua chiếc đồng hồ ưng ý nhất cũng là vấn đề quan
                trọng.</p>
            <p>Duy Anh Watch là nhà phân phối được ủy quyền chính thức của các thương hiệu đồng hồ hàng đầu thế giới
                của Thụy Sĩ: Longines, Tissot, Mido, Hamilton, Certina, Titoni, Frederique Constant… và các thương
                hiệu đồng hồ Nhật Bản như Seiko, Citizen, Orient, Casio… Với hệ thống cửa hàng nằm ở những vị trí
                đắc địa, cơ sở vật chất đẳng cấp cho phép khách hàng đánh giá cao trải nghiệm mua sắm đồng hồ đồng
                thời được hưởng lợi từ dịch vụ chuyên nghiệp và xuất sắc.</p>
            <p>Tất cả các sản phẩm hiện có trong hệ thống cửa hàng của chúng tôi đều được bảo hành chính hãng từ 1
                đến 3 năm tùy theo mặt hàng và điều kiện riêng của thương hiệu. Bên cạnh đó bạn còn nhận được gói
                bảo hành 5 năm cùng nhiều quyền lợi hấp dẫn tại Đồng hồ King clock.</p>
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
    

