<br><br><br>
<div class="container">
    <form action="index.php?type=dangky" method="post">
        <h1 class="py-3">ĐĂNG KÝ</h1>
        <div class="row">
            <div class="col">
                <h5>Thông tin khách hàng</h5>
                <label for="">Họ và tên:</label><br />
                <input type="text" class="form-control" name="ho_ten" id="" /><br />
                <div class="d-flex justify-content-between">
                    <div>
                        <label for="">Email:</label><br />
                        <input type="text" class="form-control" name="email" id="" /><br />
                    </div>
                    <div>
                        <label for="">Điện thoại:</label><br />
                        <input type="text" class="form-control" name="sdt" id="" /><br />
                    </div>
                </div>
                <div class="">
                    <label for="">Địa chỉ:</label><br />
                    <input class="w-100 form-control" type="text" style="height: 90px" name="dia_chi" id="" />
                </div>
            </div>

            <div class="col">
                <h5>Thông tin mật khẩu</h5>
                <label for="">Mật khẩu:</label>
                <input type="text" class="form-control" name="pass" id="" /><br />
                <p><?= isset($messDk)?$messDk:"" ?></p>
                <button name="dangky" type="submit" class="btn btn-dark text-light btn-block p-3" style="
              border-top-right-radius: 25px;
              border-bottom-left-radius: 25px;
            ">
                    ĐĂNG KÝ
                </button>
    </form>
    <div class="row flex-row justify-content-end mt-3">
        <a href="index.php?type=dangnhap" class="text-dark">Đăng nhập</a>
    </div>
</div>
</div>
</div>