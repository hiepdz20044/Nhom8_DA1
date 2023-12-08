<style>
.anmt {
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 30px;
    margin-top: 30px;
    animation: fadeInUp 1s ease-in-out;
}

.btnDx {
    border: 1px solid #9b7221;
    width: 100px;
    float: right;
    background-color: #9b7221;
    border-radius: 20px;
}

.btnAdm {
    border: 1px solid #9b7221;
    width: 100px;
    float: left;
    background-color: #9b7221;
    border-radius: 20px;
}

a {
    text-decoration: none;
    color: white;
}

a:hover {
    color: black;
    text-decoration: none;
}
</style>
<div class="container mt-5 animate__animated animate__fadeInUp anmt">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Thông tin tài khoản</h2>
            <form action="index.php?type=qlitaikhoan" method="post">
                <div class="form-group">
                    <label for="fullName">Họ tên:</label>
                    <input type="text" class="form-control" name="ho_ten" value="<?php echo $loadUser['ho_ten'] ?> "
                        required />
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại:</label>
                    <input type="text" class="form-control" name="sdt" value="<?php echo $loadUser['sdt'] ?>"
                        required />
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $loadUser['email'] ?>"
                        required />
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ:</label>
                    <input type="text" class="form-control" name="dia_chi" value="<?php echo $loadUser['dia_chi'] ?>"
                        required />
                </div>
                <button name="updateTk" type="submit" class="btn btn-primary" style="background-color: #9b7221;">
                    Đổi thông tin
                </button>
            </form>
            <form action=" index.php?type=qlitaikhoan" method="post">
                <hr />
                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" class="form-control" name="mat_khau" placeholder="Nhập mật khẩu" required />
                </div>
                <div class="form-group">
                    <label for="newPassword">Mật khẩu mới:</label>
                    <input type="password" class="form-control" name="mat_khau1" placeholder="Nhập mật khẩu mới"
                        required />
                </div>
                <button name="updateMk" type="submit" class="btn btn-primary" style="background-color: #9b7221;">
                    Đổi mật khẩu
                </button>
                <p class="text-danger"><?= isset($messUpdateMk)?$messUpdateMk:"" ?></p>
            </form>
            <hr />
            <?php
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
            }?>
            <?php
            if($vai_tro==1){?>
            <a href="admin/index.php" class="text-center btnAdm">Admin</a>
            <?php } ?>

            <div class="text-center btnDx">
                <a href="index.php?type=dangxuat">Đăng Xuất</a>
            </div>
        </div>
    </div>
</div>