<style>
.card {
    margin-top: 50px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: scale(1.02);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.btn-primary {
    background-color: #9b7221;
    border-color: #9b7221;
    transition: background-color 0.3s, border-color 0.3s;
}

.btn-primary:hover {
    background-color: #5d4007;
    border-color: #5d4007;
}

.form-group label {
    color: #9b7221;
    transition: color 0.3s;
}

.form-group input:focus,
.form-group input:active {
    border-color: #9b7221;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-group input::placeholder {
    color: #6c757d;
}

.form-group input:focus::placeholder,
.form-group input:active::placeholder {
    color: #9b7221;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Quên Mật Khẩu</h4>
                    <form action="" method="post">

                        <div class="form-group">
                            <label for="email">Địa chỉ Email:</label>
                            <input type="email" class="form-control" id="email" name="email" />
                            <span style="color:red;"><?php if(isset($error['email'])) echo $error['email'] ?></span>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary btn-block">
                            Gửi Yêu Cầu
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>