<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDH-08 Store</title>
    <link rel="stylesheet" href="/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .card-title {
        color: #c0902f;
      }
      .text-hover{
        color: #c0902f;
        display: inline-block;
        position: relative;
        text-align: center  ;
        text-decoration: none; /* Loại bỏ gạch chân mặc định */
        transition: color 0.3s ease; /* Hiệu ứng chuyển đổi màu chữ */
      }
      .text-hover:hover{
        text-decoration: none;
        color: #ff9500; /* Màu chữ khi di chuột vào */
      }

      .card-text {
        color: #6c757d;
      }

      #total-section {
        background-color: rgb(255, 223, 158);
        padding: 10px;
        border-radius: 5px;
      }

      #total-amount {
        font-size: 1.2em;
        color: #000000;
      }

      /* Màu và hover cho nút thanh toán */
      button.btn-success {
        background-color: #9b7221;
        border: none;
      }

      button.btn-success:hover {
        background-color: #ffd062;
      }
    </style>
  </head>
  <body>
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h1 class="card-title mb-4">Thông tin thanh toán</h2>

              <!-- Hiển thị danh sách sản phẩm -->
              <div class="row">
                <?php
                $tong=0;
                  foreach ($_SESSION['cart'] as $item) {
                    $tong=$tong+$item['total'];
                    echo '
                    <div class="col-md-4 mb-4">
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="./upload/'.$item['img'].'" width="100%" alt="Ảnh sản phẩm" >
                        <div class="card-body">
                            <a href="#"><h5  class="text-hover m-1">'.$item['nameProduct'].'</h5></a>
                            <p class="small text-center " >AUTOMATIC</p>
                            <a href="trangchitiet.html"><h5 class="text-hover">Giá:'.$item['price'].'</h5></a>
                            <p class="small text-center " >x'.$item['quantity'].'</p>
                            <p class="small text-center " >'.$item['total'].'</p>
                        </div>
                      </div>
                </div>
                    ';
                  }
                ?>
                <!-- Thêm các sản phẩm khác nếu cần -->
              </div>

              <!-- Hiển thị tổng tiền -->
              <div id="total-section" class="mb-4">
                <h4>Tổng tiền:</h4>
                <p id="total-amount"><?php echo  $tong; ?></p>
              </div>

              <form action="index.php?type=order" method="post">
                <div class="form-group">
                  <label for="name">Họ và tên:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    value="<?php echo $_SESSION['user']['ho_ten'];?>"
                    required
                  />
                </div>

                <div class="form-group">
                  <label for="phone">Số điện thoại:</label>
                  <input
                    type="tel"
                    class="form-control"
                    id="phone"
                    name="phone"
                    value="<?php echo $_SESSION['user']['sdt'];?>"
                    pattern="[0-9]{10}"
                    required
                  />
                  <small class="text-danger">Định dạng: 0123456789</small>
                </div>

                <div class="form-group">
                  <label for="address">Địa chỉ nhận hàng:</label>
                  <textarea
                    class="form-control"
                    id="address"
                    name="address"
                    rows="3"
                    required
                  ><?php echo $_SESSION['user']['dia_chi'];?></textarea>
                </div>

                <div class="form-group">
                  <label for="payment-method">Phương thức thanh toán:</label>
                  <select
                    class="form-control"
                    id="payment-method"
                    name="payment-method"
                    required
                  >
                    <option value="cash-on-delivery" selected> 
                      Thanh toán khi nhận hàng
                    </option>
                  </select>
                </div>
                </div>
                  <input type="text" name="email" value="<?php echo $_SESSION['user']['email'];?>" hidden>
                <button type="submit" name="pay" class="btn btn-success btn-block">
                  Thanh toán
                </button>
              </form>
            </div>
          </div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
      // // Tính tổng giá trị của các sản phẩm tự động
      // var totalAmount = 0;
      // var products = [
      //   { name: "Product 1", price: 6.456},
      //   { name: "Product 2", price: 6.456},
      //   // Thêm các sản phẩm khác nếu cần
      // ];

      // window.onload = function () {
      //   calculateTotalAmount();
      // };

      // function calculateTotalAmount() {
      //   totalAmount = products.reduce((sum, product) => sum + product.price, 0);
      //   updateTotalAmount();
      // }

      // function updateTotalAmount() {
      //   var totalAmountElement = document.getElementById("total-amount");
      //   totalAmountElement.innerText = totalAmount.toFixed(3)+ ".000" + "VND" ;
      // }
    </script>
  </body>
</html>
