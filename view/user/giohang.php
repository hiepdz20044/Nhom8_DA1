
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
<button type="button" class="btn btn-outline-warning btn-lg btn-block mt-3 sbit">Thanh toán</button>

      <!-- <form>
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
      </form> -->
    </div>
  </div>
  
</div>
<hr class="line1">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="view/user/asset/js/giohang.js"></script>
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
