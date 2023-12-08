
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <?php  
            $img=$img_path.$img;
            echo '
                <img  class="product-image" src="view/user/asset/image/'.$trangCT['img'].'" alt="Product Image" style="height: 501px;"> ';?>
                        <button class="btn btn-primary xem" onclick="openModal()"><i class="fa-solid fa-list fa-lg" style="color: #000000;"></i></button>
                        <button class="btn btn-primary xem2" data-toggle="modal" data-target="#imageModal"><i class="fa-solid fa-camera fa-xl" style="color: #000000;"></i></button>
                        
            </div>
            <div class="col-md-6 product-info">
              <form action="index.php?type=trangchitiet&id_sp=<?php echo $_GET['id_sp'] ?>" method="POST">
              <?php
              // var_dump($trangCT);
              echo'
              
                <h1 class="product-title">'.$trangCT['ten_sp'].'</h1>
                <p class="product-description">Mã sản phẩm: T127.407.11.091.01</p>
                <p class="product-description">Loại máy: '.$trangCT['loai_may'].'</p>
                <p class="product-description">Đường kính: 40mm</p>
                <p class="product-price text-danger">Giá: '.$trangCT['gia'].'</p>
               
                <input type="text" value="'.$trangCT['ten_sp'].'" name="nameProduct" hidden/>
                <input type="number" value="'.$trangCT['gia'].'" name="price" hidden/>
                <input type="number" value="'.$trangCT['id_sanpham'].'" name="idsp" hidden/>
                <input type="text" value="'.$trangCT['img'].'" name="img" hidden/>
                <button data-id="'.$trangCT['id_sanpham'].'" class="btn btn-primary add" name="add-cart"  type="submit">Thêm vào giỏ hàng</button>
                ';
                ?>
                </form>
            </div>
        </div>
    </div>
    <!-- hình ảnh liên quan -->
    <div id="imageModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Hình ảnh liên quan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="imageGallery" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#imageGallery" data-slide-to="0" class="active"></li>
                  <li data-target="#imageGallery" data-slide-to="1"></li>
                  <li data-target="#imageGallery" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/img/bannerduoi1.jpg" class="img-fluid" alt="Ảnh 1">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/bannerduoi3.jpg" class="img-fluid" alt="Ảnh 2">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/bannerduoi7.jpg" class="img-fluid" alt="Ảnh 3">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#imageGallery" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageGallery" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Modal HTML -->
    <div id="modal" class="modal-overlay">
        <div class="modal-content">
            <div class="text-center">
                <button class="btn btn-primary" onclick="openModal()">Xem chi tiết</button>
                <button class="btn btn-primary" onclick="showWarranty()">Chế độ bảo hành</button>
                <button class="btn btn-primary" onclick="showInstructions()">Hướng dẫn sử dụng</button>
            </div>
            <span class="close-modal" onclick="closeModal()">&times;</span>
            <table class="table">
                <!-- Xem chi tiết -->
                <tr id="rating1-row">
                    <th>Thông tin</th>
                    <td>Thông tin chi tiết</td>
                </tr>
                <tr id="rating2-row">
                    <th>Giới tính:</th>
                    <td>Nam</td>
                    <th>Kiểu dáng:</th>
                    <td>Mặt tròn</td>
                </tr>
                <tr id="rating3-row">
                    <th>Loại máy:</th>
                    <td>Automatic (Máy cơ tự động)</td>
                    <th>Phong cách:</th>
                    <td>Hiện đại</td>
                </tr>
                <tr id="rating4-row">
                    <th>Mặt kính:</th>
                    <td>Sapphire</td>
                    <th>Đường kính:</th>
                    <td>40mm</td>
                </tr>
                <tr id="rating5-row">
                    <th>Chất liệu vỏ: </th>
                    <td>Thép không gỉ 316L</td>
                    <th>Độ dày:</th>
                    <td>11.5mm</td>
                </tr>
                <tr id="rating6-row">
                    <th>Chất liệu dây:</th>
                    <td>Thép không gỉ 316L</td>
                    <th>Size dây:</th>
                    <td>21mm</td>
                </tr>
                <tr id="rating7-row">
                    <th>Độ chịu nước:</th>
                    <td>100m</td>
                    <th>Bảo hành chính hãng:</th>
                    <td>2 năm quốc tế</td>
                </tr>
                <tr id="rating8-row">
                    <th>Tính năng khác: </th>
                    <td>Lịch ngày. Caliber Powermatic 80.811, 25 chân kính, trữ cót 80h.</td>
                    <th>Bảo hành DDH:</th>
                    <td>5 năm (đã bao gồm Bảo hành Quốc tế)</td>
                </tr>
                <tr id="rating9-row">
                    <th>Màu mặt:</th>
                    <td>Xanh Lá</td>
                    <th>Xuất xứ thương hiệu:</th>
                    <td>Thụy Sỹ</td>
                </tr>

                <!-- Xem chi tiết -->
                <!-- Hướng dẫn sử dụng -->
                <tr id="instructions-row">
                    <td colspan="4">
                        <div class="container mt-4">
                            <div class="list-group">
                              <button onclick="showSection('section1')" class="list-group-item list-group-item-action">HƯỚNG DẪN VỆ SINH ĐỒNG HỒ</button>
                              <button onclick="showSection('section2')" class="list-group-item list-group-item-action">CÁCH CHỈNH ĐỒNG HỒ</button>
                              <button onclick="showSection('section3')" class="list-group-item list-group-item-action">MỨC ĐỘ CHỐNG NƯỚC CỦA ĐỒNG HỒ</button>
                              <button onclick="showSection('section4')" class="list-group-item list-group-item-action">HƯỚNG DẪN CHỌN SIZE</button>
                            </div>
                      
                            <div id="section1" class="card mt-4">
                              <div class="card-body">
                                <h5 class="card-title">HƯỚNG DẪN VỆ SINH ĐỒNG HỒ</h5>
                                <h5 class="card-title">1. Vật dụng cần chuẩn bị:  </h5>
                                <p class="card-text">- Nước ấm, dung dịch xà phòng loãng hoặc dung dịch tẩy rửa nhẹ<br>
                                    - Khăn vi sợi mềm, mỏng<br>
                                    - Bàn chải lông mềm</p>
                                <h5 class="card-title">2. Quy trình chung vệ sinh đồng hồ</h5>
                                <p class="card-text">- Tháo dây đeo ra khỏi mặt đồng hồ. Nếu như dây đeo đồng hồ của bạn là dây không tháo rời, hãy luôn chú ý khi vệ sinh chúng.<br>
                                    - Vệ sinh nhẹ nhàng phần dây đeo và mặt đồng hồ.<br>
                                    - Để khô tự nhiên trước khi đeo lại vào tay.</p>
                                    <h5 class="card-title">3. Vệ sinh dây đồng hồ</h5>
                                <p class="card-text">+ Với đồng hồ dây kim loại:<br>
                                    Bước 1: Ngâm dây đồng hồ vào dung dịch nước ấm pha một ít xà phòng trong khoảng 3-5 phút<br>
                                    Bước 2: Sử dụng bàn chải lông mềm để làm sạch nốt những vết bẩn còn sót lại<br>
                                    Bước 3: Lau lại bằng nước sạch rồi để khô tự nhiên.<br>
                                    Ngoài ra, bạn có thể sử dụng kem đánh răng hay dung dịch dấm với nước để làm sạch và giúp dây sáng bóng hơn.<br>                                    
                                    + Với đồng hồ dây da:<br>
                                    Bước 1: Dùng khăn mềm hơi ẩm lau nhẹ phần bề mặt của dây da.<br>
                                    Bước 2: Thấm một ít dung dịch có tính tẩy rửa nhẹ hoặc dầu ô liu lên bề mặt dây và sử dụng bàn chải lông mềm để làm sạch dây.<br>                                    
                                    Bước 3: Lau sạch chúng bằng một chiếc khăn ẩm.<br>
                                    Lưu ý:<br>
                                    Không ngâm dây da trong nước vì có thể làm dây bị ẩm, mốc và nhanh hỏng.<br>
                                    Không sử dụng máy sấy đề làm khô, điều này dẫn đến hiện tượng dây bị co cứng lại không giữ được sự thoải mái khi đeo như ban đầu.<br>                                    
                                    + Với đồng hồ dây vải:<br>
                                    Bước 1: Sử dụng dung dịch xà phòng loãng hoặc dung dịch tẩy rửa nhẹ để làm sạch dây vải rồi dùng nước sạch để làm tan hết xà phòng.<br>
                                    Bước 2: Phơi dây ra nơi thoáng mát để chúng khô hoàn toàn trước khi đeo lại.<br>
                                    + Với đồng hồ dây cao su<br>
                                    Bước 1: Dùng khăn mềm sạch, nhúng ẩm vào trong dung dịch xà phòng loãng hay dung dịch có tính tẩy rửa nhẹ rồi dùng để lau bề mặt dây. Đối với các vết bẩn “cứng đầu” hơn, bạn có thể để một lát rồi dùng bàn chải lông mềm để làm sạch.<br>
                                    Bước 2: Sử dụng khăn mềm để lau sạch xà phòng. Đối với các mẫu dây đeo này, bạn nên chú ý chất tẩy rửa mình sử dụng, hãy luôn chắc chắn về việc chúng không làm mất màu dây đeo của bạn.<br>
                                    Một số lưu ý khi vệ sinh đồng hồ:<br>
                                    - Do quá trình vệ sinh luôn gắn liền với nước hoặc một số các loại dung dịch khác nên hãy luôn cẩn thận để tránh việc nước vào bộ máy làm hỏng đồng hồ<br>
                                    - Luôn thử các loại dung dịch tẩy rửa ở một phần nhỏ của dây đeo để tránh hiện tượng chúng làm đổi màu dây, …<br>
                                    - Nếu đeo đồng hồ vào thời tiết oi bức, nắng nóng thì nên nới lỏng dây đeo và thường xuyên lau đồng hồ bằng khăn mềm để trách việc bụi bẩn tích tụ lâu ngày.<br>
                                    Ngoài dây đeo, phần vỏ đồng hồ cũng như mặt kính cũng nên được vệ sinh thường xuyên. Trong khi đợi các dây đeo khô, bạn dùng khăn ẩm thấm nước ấm lau nhẹ nhàng mặt kính cũng như vỏ đồng hồ.<br></p>
                              </div>
                            </div>
                      
                            <div id="section2" class="card mt-4 hidden">
                              <div class="card-body">
                                <h5 class="card-title">CÁCH CHỈNH ĐỒNG HỒ</h5>
                                <img src="/img/chinhdongho.jpg" alt="chỉnh đồng hồ" width="600px">
                                <p class="card-text">- Đối với đồng hồ có 2 kim (giờ/phút) và đồng hồ 3 kim (giờ/phút/giây): Bạn kéo nhẹ nút điều chỉnh ra 1 nấc để chỉnh giờ phút.<br>
                                    - Đối với đồng hồ có 2 kim 1 lịch (giờ/phút/lịch ngày) và đồng hồ có 3 kim 1 lịch (giờ/phút/giây/lịch ngày): có 2 nấc chỉnh, bạn kéo nhẹ nút điều chỉnh ra nấc đầu tiên để chỉnh ngày (chỉ có thể chỉnh được 1 chiều, nếu cố vặn chiều còn lại có thể bị gãy lịch) và kéo tiếp ra nấc thứ 2 để chỉnh giờ phút.<br>
                                    - Đối với đồng hồ có 6 kim 1 lịch thì 3 nút điều chỉnh bên cạnh, tuy nhiên tùy vào máy của đồng hồ để có cách chỉnh:</p>
                                <h5 class="card-title">Đồng hồ có chức năng bấm giờ thể thao Chronograph:</h5>
                                <img src="/img/chinhdongho2.jpg" alt="chinhdongho2" width="600px">
                                <p class="card-text">+ Nút điều chỉnh nằm ở giữa có 2 nấc chỉnh, kéo nhẹ nấc đầu tiên ra để chỉnh ngày, tiếp đến nấc thứ 2 để chỉnh giờ và phút.<br>
                                    + Nút trên cùng để cho chạy/dừng chức năng bấm giờ thể thao (chronograph).<br>
                                    + Khi nút trên đang dừng (chức năng bấm giờ chronograph đang dừng) bấm nút dưới để đưa 2 kim về vị trí ban đầu số 12 giờ và đặt lại từ đầu.</p>
                                    <h5 class="card-title">Đồng hồ tự động (Automatic):</h5>
                                    <p class="card-text">Thông thường nút điểu chỉnh ở giữa kéo ra để chỉnh ngày và giờ.<br>
                                        Lưu ý:<br>
                                        -  Một số dòng đồng hồ cao cấp hay một số dòng đồng hồ có sử dụng gioăng cao su để chống vào nước thì nút điều chỉnh không kéo ra ngay được mà phải xoay vặn (theo chiều ngược kim đồng hồ) để mở nút điều chỉnh, sau đó mới kéo nhẹ ra các nấc cần điều chỉnh. Sau khi điều chỉnh xong phải đóng nút điều chỉnh về vị trí ban đầu, ấn nút điều chỉnh vào đồng thời xoay vặn (theo chiều kim đồng hồ) đóng chặt nút điều chỉnh để tránh nước bị thẩm thấu vào máy.</p>
                              </div>
                            </div>
                      
                            <div id="section3" class="card mt-4 hidden">
                              <div class="card-body">
                                <h5 class="card-title">MỨC ĐỘ CHỊU NƯỚC CỦA ĐỒNG HỒ</h5>
                                <p class="card-text">- Độ chịu nước 30 mét(3BAR, 3ATM):<br>
                                    + Có thể đeo đồng hồ khi rửa tay hoặc đi mưa nhẹ<br>                            
                                    - Độ chịu nước 50 mét(5BAR, 5ATM):<br>  
                                    + Có thể đeo đồng hồ khi đi mưa, rửa tay ở mức áp lực nước lớn hơn so với mức 30 mét(3BAR, 3ATM).<br>
                                    - Độ chiụ nước 100 mét(10BAR, 10ATM):<br>
                                    + Có thể đeo đồng hồ khi đi mưa lớn, rửa tay dưới vòi nước có áp lực nước lớn, đi bơi, lướt sóng hoặc kết hợp một số môn thể thao dưới nước nhẹ nhàng.<br>                                    
                                    - Độ chịu nước 200 mét(20BAR, 20ATM):<br>                 
                                    + Có thể đeo đồng hồ khi đi mưa, rửa tay, bơi, lướt sóng, tham gia các môn thể thao dưới nước, lặn bằng ống thở.<br>                                
                                    - Độ chịu nước trên 200 mét(20BAR, 20ATM):<br>                           
                                    + Có thể đeo đồng hồ khi đi mưa, rửa tay, bơi, lướt sóng, tham gia các môn thể thao dưới nước, lặn sâu bằng bình dưỡng khí.<br>
                                    - Lưu ý:<br>                                   
                                    + Phải luôn đóng chặt núm đồng hồ trong mọi hoàn cảnh nhằm tránh đồng hồ bị vào nước.<br>                         
                                    + Tuyệt đối không đeo đồng hồ khi dùng nước nóng, tắm nóng lạnh hoặc xông hơi.<br>                                   
                                    + Không sử dụng đồng hồ vượt quá mức độ chịu nước của nó.</p>
                              </div>
                            </div>
                      
                            <div id="section4" class="card mt-4 hidden">
                              <div class="card-body">
                                <h5 class="card-title">I. Tìm kích thước cổ tay và lựa chọn đồng hồ phù hợp</h5>
                                <p class="card-text">Trước khi có thể tìm được chiếc đồng hồ phù hợp với cổ tay, bạn cần biết kích thước cổ tay của mình. Cổ tay của bạn mảnh, trung bình hay dày sẽ ảnh hưởng đến việc chiếc đồng hồ nào trông đẹp nhất đối với bạn. Như vậy, việc đo kích thước cổ sẽ là một phần không thể thiếu trong việc chọn đồng hồ phù hợp. Khi biết kích thước cổ tay của mình, bạn sẽ có thể chọn một chiếc đồng hồ hoàn hảo và thoải mái. Biết kích thước cũng sẽ vô cùng hữu ích nếu bạn thích mua sắm trực tuyến vì bạn sẽ có thể mua một kiểu đồng hồ vừa vặn mà không cần thử. Nó cũng có thể giúp bạn thu hẹp lựa chọn thiết kế sản phẩm. Ví dụ, nếu cổ tay mảnh, bạn nên chọn một chiếc đồng hồ đeo tay tinh xảo, nếu cổ tay dày, đồng hồ thể thao có thể là lựa chọn phù hợp hơn.<br>
                                    1. Cách đo cổ tay của bạn<br>
                                    Lấy một thước dây hoặc một sợi dây để đo kích thước cổ tay.<br>
                                    Để lòng bàn tay hướng lên, mở bàn tay của bạn ra (làm như vậy sẽ đảm bảo bạn có được kích thước thật của cổ tay khi nó lớn nhất). <br>
                                    Quấn thước quanh cánh tay của bạn sao cho đó là vị trí mà dây đeo đồng hồ thường đeo ở đó đặt, thường là ngay dưới xương cổ tay.  <br>
                                    Nếu bạn đang sử dụng đoạn dây, hãy lấy bút và đánh dấu điểm mà đầu cuối gặp nhau sau đó đo lại kích thước đoạn dây trên một cái thước phẳng</p><br>
                                    <img src="/img/huongdanchonsize.jpg" alt="huongdanchonsize" width="600px">
                                    <p class="card-text">2. Cách lựa chọn đồng hồ phù hợp đối với nam:<br>
                                        Sau khi đo chu vi tay, bạn sẽ quy ra được đường kính tối đa có thể đeo với công thức sau:<br>
                                        Đối với những đồng hồ có thiết kế đơn giản, sang trọng: (Chu vi/4) + 1 = chu vi mặt đồng hồ tối đa có thể đeo.    <br>
                                        Ví dụ chu vi cổ tay là 16cm thì (16/4) + 1 = 41 (kích thước mặt đồng hồ tối đa có thể đeo là 41mm) <br>
                                        Đối với những đồng hồ thể thao có nhiều kim: (Chu vi/4) + 4 = chu vi mặt đồng hồ tối đa có thể đeo<br>
                                        Ví dụ chu vi cổ tay là 16cm thì (16/4) + 4 = 44 (kích thước mặt đồng hồ tối đa có thể đeo là 44mm)<br>
                                        Ngoài ra cách đo mặt phẳng tay Lug to Lug thường là chuẩn nhất (không phải đường kính mặt mà là khoảng cách giữa 2 càng gắn dây của đồng hồ). Với đồng hồ nam thì không để vấu thừa ra ngoài mặt phẳng cổ tay. Theo đó bạn có thể căn cứ vào bảng size dưới đây:</p>
                                        <img src="/img/hongdanchonsize2.jpg" alt="huongdanchonsize2" width="600px">
                                        <img src="/img/huongdanchonsize3.jpg" alt="huongdanchonsize3" width="600px">
                                        <table class="table">
                                            <tr id="instructions-row">
                                                <td>Inch</td>
                                                <td>Centimet</td>
                                                <td>Kích thước vỏ đồng hồ</td>
                                                <td>Khoảng cách Lug to Lug</td>
                                            </tr>
                                            <tr id="instructions-row">
                                                <td>5,50 ”</td>
                                                <td>14,0 cm</td>
                                                <td>Từ 27,9 đến 34,9 mm</td>
                                                <td>Từ 34,9 đến 43,7 mm</td>
                                            </tr>
                                            <tr id="instructions-row">
                                                <td>5,75 ”</td>
                                                <td>14,6 cm</td>
                                                <td>Từ 29,2 đến 36,5 mm</td>
                                                <td>Từ 36,5 đến 45,6 mm</td>
                                            </tr>
                                            <tr id="instructions-row">
                                                <td>6,00 ”</td>
                                                <td>15,2 cm</td>
                                                <td>Từ 30,5 đến 38,1 mm</td>
                                                <td>Từ 38,1 đến 47,6 mm</td>
                                            </tr>
                                            <tr id="instructions-row">
                                                <td>6,25 ”</td>
                                                <td>15,9 cm</td>
                                                <td>Từ 31,8 đến 39,7 mm</td>
                                                <td>Từ 39,7 đến 49,6 mm</td>
                                            </tr>
                                            <tr id="instructions-row">
                                                <td>6,50 ”</td>
                                                <td>16,5 cm</td>
                                                <td>Từ 33,0 đến 41,3 mm</td>
                                                <td>Từ 41,3 đến 51,6 mm</td>
                                            </tr>
                                            <tr id="instructions-row">
                                                <td>6,75 ”</td>
                                                <td>17,1 cm</td>
                                                <td>Từ 34,3 đến 42,9 mm</td>
                                                <td>Từ 42,9 đến 53,6 mm</td>
                                            </tr>
                                            <tr id="instructions-row">
                                                <td>7,00 ”</td>
                                                <td>17,8 cm</td>
                                                <td>Từ 35,6 đến 44,5 mm</td>
                                                <td>Từ 44,5 đến 55,6 mm</td>
                                            </tr>
                                            <tr id="instructions-row">
                                                <td>7,25 ”</td>
                                                <td>18,4 cm</td>
                                                <td>Từ 36,8 đến 46,0 mm</td>
                                                <td>Từ 46 đến 57,5 ​​mm</td>
                                            </tr>
                                            <tr id="instructions-row">
                                                <td>7,50 ”</td>
                                                <td>19,1 cm</td>
                                                <td>Từ 38,1 đến 47,6 mm</td>
                                                <td>Từ 47,6 đến 59,5 mm</td>
                                            </tr>
                                            <tr id="instructions-row">
                                                <td>7,75 ”</td>
                                                <td>19,7 cm</td>
                                                <td>Từ 39,4 đến 49,2 mm</td>
                                                <td>Từ 49,2 đến 61,5 mm</td>
                                            </tr>
                                            <tr id="instructions-row">
                                                <td>8,00 ”</td>
                                                <td>20,3 cm</td>
                                                <td>Từ 40,6 đến 50,8 mm</td>
                                                <td>Từ 50,8 đến 63,5 mm</td>
                                            </tr>
                                            <tr id="instructions-row">
                                                <td>8,25 ”</td>
                                                <td>21,0 cm</td>
                                                <td>Từ 41,9 đến 52,4 mm</td>
                                                <td>Từ 52,4 đến 65,5 mm</td>
                                            </tr>
                                        </table>
                                        <p class="card-text">Ví dụ: kích thước đồng hồ hoàn hảo cho cổ tay 15,2 cm sẽ là 38,1 đến 47,6 mm.<br>
                                            Lưu ý rằng hiện tại các hãng chưa cung cấp thông tin thông số Lug to Lug nhiều nên chủ yếu vẫn phải dùng công thức đo chu vi tay.<br>
                                            Ngoài ra khi đo kích thước cổ tay bạn cần đo chính xác, không áng chừng vì sai số lớn và cách này không áp dụng cho dòng Casio G-Shock vì thiết kế ngoại cỡ đặc trưng của chúng. <br>
                                            3. Cách lựa chọn đồng hồ phù hợp đối với nữ:<br>
                                            Đối với đồng hồ nữ thì không dùng công thức trên mà có chuẩn chung: đường kính 28 - 31 là trung bình, trên 31 cm là size lớn, dưới 28 cm là size nhỏ.</p>
                                <h5 class="card-title">II. Một số tiêu chí lựa chọn đồng hồ phù hợp với tay</h5>
                                <p class="card-text">Khi nói đến việc chọn một chiếc đồng hồ, điều quan trọng cần lưu ý là một kích thước không phù hợp với tất cả mọi người. Do đó, khi mua đồng hồ, bạn cần biết cách chọn đồng hồ phù hợp với cổ tay của mình. Mặc dù không có quy tắc tính toán cho kích thước hoặc hình dạng hoàn hảo cho khung tay của bạn, nhưng có những mẹo mà bạn có thể làm theo để có được một chiếc đồng hồ cân đối và tương xứng.<br>
                                    Đồng hồ vừa vặn với cổ tay không chỉ bao gồm vỏ đồng hồ mà còn bao gồm cả dây đeo. Đồng hồ đeo tay của bạn quá chật nếu nó để lại dấu hằn trên da, còn nếu đồng hồ quá lỏng nó sẽ dễ bị lệch khỏi vị trí gây nên sự bất tiện. Đối với người mới dùng, đồng hồ của bạn phải cảm thấy thoải mái trên cổ tay và phải vừa đủ chặt để ngăn đồng hồ theo chiều dọc cổ tay trong quá trình chuyển động nhưng đủ lỏng để không hằn vào da của bạn. <br>
                                    Đối với vị trí trên cổ tay, bạn không nên đeo đồng hồ của mình quá thấp. Thông thường, bạn nên đeo nó ở đầu của xương trụ (phần xương trên cổ tay của bạn nhô ra ngoài). Nếu bạn đeo đồng hồ của mình vào phần xương đó, bạn có thể sẽ cảm thấy hơi khó chịu.<br>
                                    Hầu hết mọi người thường đeo đồng hồ trên tay đối diện với tay thuận của họ. Điều này có nghĩa là nếu bạn thuận tay phải, bạn sẽ đeo đồng hồ trên cổ tay trái. Hầu hết các nhà sản xuất đồng hồ thiết kế đồng hồ cho cổ tay trái vì phần lớn mọi người thuận tay phải. <br>Lưu ý rằng núm chỉnh đồng hồ thường nằm ở phía bên phải của vỏ vì thế đối với những người thuận tay phải, điều này dễ dàng lên dây cót hoặc sử dụng chronograph khi đang di chuyển. Tuy nhiên, nếu bạn là người thuận tay trái thì bạn cần lưu ý điều này.</p>
                                <img src="/img/huongdanchonsize4.png" alt="huongdanchonsize4" width="600px">
                                <p class="card-text">Hãy nhớ rằng không có công thức hoàn hảo nào khi nói về kích thước một chiếc đồng hồ có thể vừa vặn trên cổ tay của bạn. Tuy nhiên, với những lời khuyên trên và các chi tiết quan trọng cần nhớ, có thể đảm bảo rằng bạn sẽ tìm ra chiếc đồng hồ đeo tay tốt nhất mà bạn đang tìm kiếm!<br>
                                    Bước 1: Đo “size tay” của bạn (Chu vi cổ tay)    <br>
                                    Để đo chu vi cổ tay bạn chỉ cần thực hiện theo một số cách đơn giản như sau:<br>
                                    Cách 1: Dùng thước dây đo 1 vòng quanh cổ tay, bạn lưu ý là đo ở vị trí mà bạn đeo đồng hồ ấy nha.<br>
                                    Cách 2: Trường hợp bạn không có thước dây thì bạn có thể dùng một tờ giấy quấn quanh cổ tay, sau đó hãy đo lại bằng thước kẻ tay thông thường. <br>
                                    Bước 2:  Tra bảng cách chọn Size đồng hồ đeo tay ở bên dưới (áp dụng cho nam và nữ luôn nhé)<br>
                                    Sau khi biết được chu vi cổ tay rồi bạn hãy dùng nó để đối chiếu với bảng bên dưới xem với số đo như thế ta nên chọn Size đồng hồ nào là tối ưu nhất nhé.</p>
                              </div>
                            </div>
                          </div>
                    </td>
                  </tr>
                  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <!-- Hướng dẫn sử dụng -->
                <!-- Bảo hành -->
                <tr id="warranty1-row">
                    <th colspan="4">Theo chính sách bảo hành của các hãng đồng hồ, tất cả các đồng hồ chính hãng bán ra đều kèm theo 01 thẻ/ sổ/ giấy bảo hành Quốc tế có giá trị bảo hành theo thời gian qui định của từng hãng đồng hồ khác nhau. 
                        Mỗi thẻ/ sổ/ giấy bảo hành chỉ được phát hành kèm theo mỗi chiếc đồng hồ bán ra một lần duy nhất và không cấp lại dưới bất kỳ hình thức nào.</th>
                </tr>
                <tr id="warranty2-row">
                    <th colspan="4">I. CHÍNH SÁCH BẢO HÀNH QUỐC TẾ</th>
                </tr>
                <tr id="warranty3-row">
                    <td colspan="4">-  Bảo hành chỉ có giá trị khi đồng hồ có thẻ/ sổ/ giấy bảo hành chính thức đi kèm. Thẻ/ sổ/ giấy bảo hành phải được ghi đầy đủ và chính xác các thông tin như: Mã số đồng hồ, mã đáy đồng hồ (nếu có), địa chỉ bán, ngày mua hàng, ....Thẻ/ sổ/ giấy bảo hành phải được đóng dấu của Đại lý ủy quyền chính thức hoặc Cửa hàng bán ra. <br>
                        - Thời gian bảo hành của đồng hồ được tính kể từ ngày mua ghi trên thẻ/ sổ/ giấy bảo hành và không được gia hạn sau khi hết thời hạn bảo hành. Cụ thể như sau:<br>
                        + Thời hạn bảo hành theo tiêu chuẩn Quốc tế của các hãng Đồng hồ Nhật Bản là 1 năm (riêng đối với đồng hồ Orient Star là 2 năm). Bao gồm các thương hiệu: Seiko, Citizen, Orient.<br>
                        + Thời hạn bảo hành theo tiêu chuẩn Quốc tế của các hãng Đồng hồ Thụy Sỹ là 2 năm (riêng đối với dòng máy Chronometer của Tissot, Mido là 3 năm). Bao gồm các thương hiệu: Longines, Mido, Tissot, Calvin Klein, Frederique Constant, Certina, Claude Bernard, Rotary, Charriol, Candino.<br>
                        + Các thương hiệu khác có chế độ bảo hành riêng như sau: 2 năm đối với thương hiệu Daniel Wellington, Freelook, Olympia Star, Olym Pianus và bảo hành máy trọn đời đối với thương hiệu Skagen.<br>
                        - Chỉ bảo hành miễn phí cho trường hợp hư hỏng về máy và các linh kiện bên trong của đồng hồ khi được xác định là do lỗi của nhà sản xuất.<br>
                        - Chỉ bảo hành, sửa chữa hoặc thay thế mới cho các linh kiện bên trong đồng hồ. Không thay thế hoặc đổi bằng 1 chiếc đồng hồ khác.<br>
                        
                        Lưu ý: Đặc thù của đồng hồ là không có kết nối với mạng máy tính bên ngoài nên không thể áp dụng Bảo hành điện tử như điện thoại, máy tính, …. Quý khách vui lòng lưu trữ, bảo quản kỹ lượng thẻ/ sổ/ giấy bảo hành để được hưởng đầy đủ quyền lợi bảo hành cam kết mua hàng.<br> 
                        DDH và các Trung tâm bảo hành Quốc tế của hãng có quyền từ chối bảo hành khi Quý khách không cung cấp được thẻ/ sổ/ giấy bảo hành Quốc tế đi kèm sản phẩm.</td>
                </tr>
                <tr id="warranty4-row">
                    <th colspan="4">II. CHÍNH SÁCH BẢO HÀNH RIÊNG CỦA ĐỒNG HỒ DUY ANH</th>
                </tr>
                <tr id="warranty5-row">
                    <td colspan="4"><img src="/img/banner1.jpg" style="width: 600px;" alt="">
                        Bắt đầu từ ngày 01/09/2018, khi mua đồng hồ tại Duy Anh (trừ đồng hồ treo tường, đồng hồ để bàn, đồng hồ thông minh), Quý khách còn nhận được các chính sách bảo hành khác, cụ thể như sau:<br>
                        + Bảo hành máy đồng hồ trong thời hạn 5 năm kể từ ngày mua hàng: miễn phí công lắp đặt, sửa chữa, kiểm tra chống nước, căn chỉnh nhanh chậm, giao trả đồng hồ bảo hành,…<br>
                        + Miễn phí thay linh kiện lần đầu tiên và giảm 50% cho các lần thay kế tiếp<br>
                        + Miễn phí lau dầu, bảo dưỡng 5 năm đối với đồng hồ cơ (trừ các dòng đồng hồ Kinetic, Auto Quartz, Hybrid - đồng hồ thông minh máy cơ)<br>
                        + Miễn phí thay pin trọn đời đối với đồng hồ pin (ngoại trừ các dòng đồng hồ Eco-Drive, Solar, Kinetic, Auto Quartz, đồng hồ thông minh) <br>
                        + Miễn phí đánh bóng kính cứng đồng hồ trong vòng 06 tháng kể từ ngày mua<br>
                        + Tặng ngay 01 dây ZRC(ROCHET) (trị giá 500.000 VNĐ) nếu dây nguyên bản bị hỏng trong vòng 06 tháng(Áp dụng cho đồng hồ có giá niêm yết từ 5.000.000VNĐ trở lên).<br>
                        () Đã áp dụng từ ngày 01/09/2015 <br>
                        Lưu ý:<br>
                        - Chế độ bảo hành mở rộng này đi kèm giấy bảo hành do Đồng hồ Duy Anh cấp khi Quý khách mua hàng. Quý khách vui lòng bảo quản các giấy tờ liên quan và cung cấp cho Duy Anh khi có nhu cầu sử dụng ưu đãi. Duy Anh có quyền từ chối cung cấp dịch vụ ưu đãi theo cam kết nếu khách hàng không cung cấp được các giấy tờ liên quan.<br>
                         
                        KHÔNG BẢO HÀNH TRONG CÁC TRƯỜNG HỢP SAU:<br>
                        
                        - Không bảo hành phần bên ngoài của đồng hồ như: vỏ đồng hồ, mặt kính, dây đồng hồ, khóa đồng hồ, trừ trường hợp lỗi kỹ thuật do nhà sản xuất thông báo.<br>
                        - Không bảo hành cho những hậu quả gián tiếp của việc sử dụng không đúng cách của người sử dụng như: đeo đồng hồ khi xông hơi, tắm nước nóng, đồng hồ tiếp xúc với các loại nước hoa, mỹ phẩm hay các loại hóa chất, axit, chất tẩy rửa có độ ăn mòn cao....<br>
                        - Không bảo hành cho đồng hồ bị hư hỏng do ảnh hưởng của thiên tai, hỏa hoạn, lũ lụt, tai nạn hoặc cố tình gây hư hỏng...
                    </td>
                </tr>
                <!-- Bảo hành -->
            </table>
        </div>
    </div>
    
      <!-- Sản phẩm liên quan -->
      <div class="container-fluid text-dhnam ">
        <h3 class="p-3 ">SẢN PHẨM LIÊN QUAN</h3>
      </div>
    <br>
      <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
          <?php
              foreach ($spct as $key) {
                echo '
                <div class="col-2 ">
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><img src="view/user/asset/image/'.$key['img'].'" width="160" height="200" alt="Ảnh sản phẩm">
                </a>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><p  class="text-center m-1">'.$key['ten_sp'].'</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><h4 class="">Giá: '.$key['gia'].'</h4></a>
            </div>';
              }
          ?>
            <!-- <div class="col-2 ">
                <a href="#"><img src="/img/sanpham1.webp" width="160" height="200" alt="Ảnh sản phẩm" onmouseover="this.src='/img/sanpham2.webp'" onmouseout="this.src='/img/sanpham1.webp'">
                </a>
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>
            </div>
            <div class="col-2">
                <a href="#"><img src="/img/sanpham1.webp" width="160" height="200" alt="Ảnh sản phẩm" onmouseover="this.src='/img/sanpham2.webp'" onmouseout="this.src='/img/sanpham1.webp'">
                <a href="#"><p class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center " >AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="/img/sanpham1.webp" width="160" height="200" alt="Ảnh sản phẩm" onmouseover="this.src='/img/sanpham2.webp'" onmouseout="this.src='/img/sanpham1.webp'">
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="/img/sanpham1.webp" width="160" height="200" alt="Ảnh sản phẩm" onmouseover="this.src='/img/sanpham2.webp'" onmouseout="this.src='/img/sanpham1.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2 ">
                <a href="#"><img src="/img/sanpham1.webp" width="160" height="200" alt="Ảnh sản phẩm" onmouseover="this.src='/img/sanpham2.webp'" onmouseout="this.src='/img/sanpham1.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div> -->

        </div>
    
      </div>
      <!-- Sản phẩm đã xem -->
      <div class="container-fluid text-dhnam ">
        <h3 class="p-3 spdx">Sản phẩm đã xem</h3>
      </div>
    <br>
      <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <div class="col-2 ">
                <a href="#"><img src="/img/sanpham1.webp" width="160" height="200" alt="Ảnh sản phẩm" onmouseover="this.src='/img/sanpham2.webp'" onmouseout="this.src='/img/sanpham1.webp'">
                </a>
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>
            </div>
            <div class="col-2">
                <a href="#"><img src="/img/sanpham1.webp" width="160" height="200" alt="Ảnh sản phẩm" onmouseover="this.src='/img/sanpham2.webp'" onmouseout="this.src='/img/sanpham1.webp'">
                <a href="#"><p class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center " >AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="/img/sanpham1.webp" width="160" height="200" alt="Ảnh sản phẩm" onmouseover="this.src='/img/sanpham2.webp'" onmouseout="this.src='/img/sanpham1.webp'">
                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2">
                <a href="#"><img src="/img/sanpham1.webp" width="160" height="200" alt="Ảnh sản phẩm" onmouseover="this.src='/img/sanpham2.webp'" onmouseout="this.src='/img/sanpham1.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>
            <div class="col-2 ">
                <a href="#"><img src="/img/sanpham1.webp" width="160" height="200" alt="Ảnh sản phẩm" onmouseover="this.src='/img/sanpham2.webp'" onmouseout="this.src='/img/sanpham1.webp'">

                <a href="#"><p  class="text-center m-1">Đồng hồ nam Citizen Quartz</p></a>
                <p class="small text-center">AUTOMATIC</p>
                <a href="#"><h4 class="">Giá: 6.456.000</h4></a>

            </div>

        </div>
    
      </div>

        <!-- Bình luận -->
    <div class="container">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
$(document).ready(function(){
    $("#binhluan").load("view/user/binhluanform.php", {idpro: <?=$id_sanpham?>});
});








// js của giỏ hàng
let totalProduct = document.getElementById('totalProduct');
    function addToCart(productId, productName, productPrice) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './view/user/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
      <h1 style="background-color: #c6c6c6;" id="binhluan">Bình luận</h1>
      <!-- <form>
        
        <div class="mb-3">
          <label for="comment" class="form-label">Bình luận:</label>
          <textarea class="form-control" id="comment" rows="3" placeholder="Nhập bình luận của bạn"></textarea>
        </div>
        <button type="submit" class="btn btn-primary bl">Gửi bình luận</button>
      </form> -->
<script src="view/user/asset/js/home.js"></script>
