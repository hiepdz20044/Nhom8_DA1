<br>
<div class="container d-flex justify-content-between">
    <div class="col">
        <h2>Bạn đã có tài khoản DDH-08</h2>
        <form action="index.php?type=dangnhap" method="post">
            <input type="tel" placeholder="Số điện thoại" name="sdt" class="form-control" required><br>
            <input type="password" placeholder="Mật khẩu" name="mat_khau" class="form-control" required>
            <div class="d-flex align-items-center">
                <input type="checkbox" name="" id="">
                <p class="m-1">Ghi nhớ mật khẩu</p>
            </div><br>
            <p><?php echo isset($mess)?$mess:"";?></p>
            <button type="submit" name="dangnhap" class="btn btn-dark text-light btn-block p-3"
                style="border-top-right-radius: 25px; border-bottom-left-radius: 25px;">ĐĂNG NHẬP</button>
        </form>
    </div>

    <div class="duongke m-4"></div>

    <div class="col">
        <div class="row justify-content-center">
            <h2 class="">Khách hàng mới của DDH-08</h2>
            <div class="text-center">
                <p>Nếu bạn chưa có tài khoản trên ivymoda.com, hãy sử dụng tùy chọn này để truy cập biểu mẫu đăng ký
                <div class="br"></div>

                Bằng cách cung cấp cho IVY moda thông tin chi tiết của bạn,
                quá trình mua hàng trên ivymoda.com sẽ là một trải nghiệm thú vị và nhanh chóng hơn!</p>
            </div>
            <a href="index.php?type=dangky" style="border-top-right-radius: 25px; border-bottom-left-radius: 25px; "
                class=" btn-dark  btn-block text-decoration-none"><button class="btn btn-dark text-light btn-block p-3 "
                    style="border-top-right-radius: 25px; border-bottom-left-radius: 25px; ">ĐĂNG KÝ</button></a>
        </div>
    </div>
</div>