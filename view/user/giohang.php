
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giỏ hàng DDH-08 Store</title>
    <link
      rel="stylesheet"
      href="/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.css"
    />
    <link rel="stylesheet" href="css.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container-fluid header">
      <div class="container d-flex justify-content-between">
        <div class="img">
          <img src="../img/logo.jpg" class="logo" alt="" />
        </div>
        <div class="d-flex align-items-center justify-content-between chiu">
          <div class="search">
            <input type="text" placeholder="Tìm kiếm" />
            <button>
              <i
                class="fa-solid fa-magnifying-glass fa-lg"
                style="color: #000000"
              ></i>
            </button>
          </div>
          <div class="all_phone">
            <div class="icon-phone">
              <i class="fa-solid fa-phone-volume" style="color: #ffffff"></i>
            </div>
            <div class="phone">
              <p>
                Gọi nhanh<br />
                0888.425.100
              </p>
            </div>
          </div>
          <div class="user">
            <a href="dangnhap.html"
              ><i class="fa-regular fa-user fa-xl" style="color: #ffffff"></i
            ></a>
          </div>

          <div class="cart">
            <a href="#"
              ><i
                class="fa-solid fa-cart-shopping fa-xl"
                style="color: #ffffff"
              ></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <div class="menu">
      <nav>
        <ul>
          <li>
            <a href="home.html"><i class="fa-solid fa-house fa-xl"></i></a>
          </li>
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

    <div class="container">
      <div class="row mt-5 mb-4 roww">
        <div class="col-md-6 home-link">
          <a href="home.html">
            <i class="fas fa-arrow-left"></i> Mua thêm sản phẩm khác
          </a>
        </div>
        <div class="col-md-6">
          <h2>Giỏ hàng của bạn</h2>
        </div>
      </div>

    <div class="cart-container">
        <!-- Mỗi sản phẩm là một hàng dọc -->
        <div class="row mb-3">
            <div class="col-md-3">
              <a href="chitietsanpham.html"><img src="/img/anhgiohang.jpg" alt="Sản phẩm 1" class="product-image"></a>
            </div>
            <div class="col-md-3">Casio 40mm Nam -VT01L01-1BUDE </div>
            <div class="col-md-2">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary quantity-btn" type="button" onclick="decreaseQuantity(this)">-</button>
                </div>
                <input type="text" class="form-control text-center quantity" value="2" readonly>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary quantity-btn" type="button" onclick="increaseQuantity(this)">+</button>
                </div>
              </div>
            </div>
            <div class="col-md-2 product-price">$20</div>
            <div class="col-md-2">
              <button type="button" class="btn btn-danger" onclick="removeProduct(this)">Xóa</button>
            </div>
          </div>
          <!-- Mỗi sản phẩm là một hàng ngang -->
          <div class="row mb-3">
            <div class="col-md-3">
              <a href="chitietsanpham.html"><img src="/img/anhgiohang2.jpg" alt="Sản phẩm 2" class="product-image"></a>
            </div>
            <div class="col-md-3">Olym Pianus 42mm Nam OP990-45ADGS-GL-T</div>
            <div class="col-md-2">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary quantity-btn" type="button" onclick="decreaseQuantity(this)">-</button>
                </div>
                <input type="text" class="form-control text-center quantity" value="1" readonly>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary quantity-btn" type="button" onclick="increaseQuantity(this)">+</button>
                </div>
              </div>
            </div>
            <div class="col-md-2 product-price">$15</div>
            <div class="col-md-2">
              <button type="button" class="btn btn-danger" onclick="removeProduct(this)">Xóa</button>
            </div>
          </div>
          <!-- Thêm sản phẩm khác nếu cần -->
        </div>
  

        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <h2>Tổng tiền tạm tính:</h2>
            <span class="badge badge-primary badge-pill" id="total-price">0</span>
          </li>
        </ul>

<hr>
      <form>
        <h2>Thông tin đặt hàng</h2>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fullName">Họ và tên:</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
          </div>
          <div class="form-group col-md-6">
            <label for="phoneNumber">Số điện thoại:</label>
            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
          </div>
        </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
        <div class="form-row">
            <div class="form-group col-md-4">
              <label for="city">Tỉnh/Thành phố:</label>
              <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
                <option value="" selected>Chọn tỉnh/thành phố</option>
              </select>
            </div>
          
            <div class="form-group col-md-4">
              <label for="district">Quận/Huyện:</label>
              <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm">
                <option value="" selected>Chọn quận/huyện</option>
              </select>
            </div>
          
            <div class="form-group col-md-4">
              <label for="ward">Phường/Xã:</label>
              <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
                <option value="" selected>Chọn phường/xã</option>
              </select>
            </div>
          
        </div>
        <div class="form-group">
          <label for="street">Số nhà:</label>
          <input type="text" class="form-control" id="street" name="street" required>
        </div>
        <div class="form-group">
          <label for="note">Ghi chú:</label>
          <textarea class="form-control" id="note" name="note" rows="3"></textarea>
        </div>
        <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="paymentMethod" name="paymentMethod" value="cash" required>
              <label class="form-check-label" for="paymentMethod">Thanh toán khi nhận hàng</label>
            </div>
          </div>
        <button type="button" class="btn btn-outline-warning btn-lg btn-block mt-3 sbit">Thanh toán</button>
      </form>
    </div>
  </div>
  
</div>
<hr class="line1">
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="/giohang.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");
    var Parameter = {
    url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", 
    method: "GET", 
    responseType: "application/json", 
    };
    var promise = axios(Parameter);
    promise.then(function (result) {
        renderCity(result.data);
    });
                
    function renderCity(data) {
        for (const x of data) {
            citis.options[citis.options.length] = new Option(x.Name, x.Id);
        }
        citis.onchange = function () {
            district.length = 1;
            ward.length = 1;
                if(this.value != ""){
                    const result = data.filter(n => n.Id === this.value);
                
                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
        };
        district.onchange = function () {
        ward.length = 1;
        const dataCity = data.filter((n) => n.Id === citis.value);
        if (this.value != "") {
            const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;
                
                for (const w of dataWards) {
                    wards.options[wards.options.length] = new Option(w.Name, w.Id);
                }
            }
        };
    }
</script>
</html>