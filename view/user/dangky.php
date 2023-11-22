<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.css"
    />
    <link rel="stylesheet" href="css.css" />
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
      <h1 class="py-3">ĐĂNG KÝ</h1>
      <div class="row">
        <div class="col">
          <h5>Thông tin khách hàng</h5>
          <label for="">Họ và tên:</label><br />
          <input type="text" class="form-control" name="" id="" /><br />
          <div class="d-flex justify-content-between">
            <div>
              <label for="">Email:</label><br />
              <input type="text" class="form-control" name="" id="" /><br />
            </div>
            <div>
              <label for="">Điện thoại:</label><br />
              <input type="text" class="form-control" name="" id="" /><br />
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <label for="">Ngày sinh:</label><br />
              <input type="datetime" class="form-control" name="" id="" /><br />
            </div>
            <div>
              <label>Giới tính:</label><br />
              <select
                id=""
                name=""
                class="form-control"
                style="width: 200px; height: 29px"
              >
                <option value="">Nam</option>
                <option value="">Nữ</option>
              </select>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <label for="">Tỉnh/TP:</label><br />
              <input type="text" class="form-control" name="" id="" /><br />
            </div>
            <div>
              <label for="">Quận/Huyện::</label><br />
              <input type="text" class="form-control" name="" id="" /><br />
            </div>
          </div>
          <div class="">
            <label for="">Phường/Xã:</label><br />
            <input
              class="w-100 form-control"
              type="text"
              name=""
              id=""
            /><br /><br />
          </div>
          <div class="">
            <label for="">Địa chỉ:</label><br />
            <input
              class="w-100 form-control"
              type="text"
              style="height: 90px"
              name=""
              id=""
            />
          </div>
        </div>

        <div class="col">
          <h5>Thông tin mật khẩu</h5>
          <label for="">Mật khẩu:</label>
          <input type="text" class="form-control" name="" id="" /><br />
          <label for="">Nhập lại mật khẩu:</label>
          <input type="text" class="form-control" name="" id="" /><br />
          <button
            class="btn btn-dark text-light btn-block p-3"
            style="
              border-top-right-radius: 25px;
              border-bottom-left-radius: 25px;
            "
          >
            ĐĂNG KÝ
          </button>
          <div class="row flex-row justify-content-end mt-3">
            <a href="dangnhap.html" class="text-dark">Đăng nhập</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid email d-flex align-items-center mt-4 pl-5">
      <div class="col-sm d-flex pt-4 pl-5 pb-4">
        <div class="pl-5">
          <i
            class="fa-regular fa-clock mr-3"
            style="color: #ffffff; font-size: 50px"
          ></i>
        </div>
        <div class="text-white">
          <h5 class="">MUA HÀNG ONLINE</h5>
          <p>Tất cả các ngày trong tuần</p>
        </div>
      </div>
      <div class="col-sm d-flex pt-4 pl-5">
        <div class="pl-5">
          <i
            class="fa-solid fa-phone mr-3"
            style="color: #ffffff; font-size: 50px"
          ></i>
        </div>
        <div class="text-white">
          <h5>HỖ TRỢ MUA HÀNG</h5>
          <p>0965706764</p>
        </div>
      </div>
      <div class="col-sm d-flex pt-4 pl-5">
        <div class="pl-5">
          <i
            class="fa-solid fa-envelope mr-3"
            style="color: #ffffff; font-size: 50px"
          ></i>
        </div>
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
          <a href="" class="">Giới thiệu về đồng hồ</a><br />
          <a href="">Triết lí kinh doanh</a><br />
          <a href="">Khách hàng nói gì về chúng tôi</a>
        </div>
        <div class="footer">
          <h4 class="">CHĂM SÓC KHÁCH HÀNG</h4>
          <a href="">Hướng dân mua hàng</a><br />
          <a href="">Chính sách đổi trả</a><br />
          <a href="">Dịch vụ và sửa đồng hồ</a>
        </div>
        <div class="footer">
          <h4>TIỆN ÍCH</h4>
          <a href="">Thanh toán</a><br />
          <a href="">Mua hàng online</a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="footer2 row text">
        <hr class="line" />
        <h4 class="pl-4 pr-4 pt-1 pb-1">HÀ NỘI</h4>
        <hr class="line" />
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
</html>