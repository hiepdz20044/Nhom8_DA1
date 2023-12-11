<div class="container">
    <div class="row">
        <div class="col-md-6 home-link">
            <a href="index.php?type=home">
                <i class="fas fa-arrow-left"></i> Mua thêm sản phẩm khác
            </a>
        </div>
        <div class="col-md-6 home-link">
            <a href="index.php?type=donhang">
                <i class="fas fa-arrow-right"></i> Đơn hàng của bạn
            </a>
        </div>
        <div class="col-md-6">
            <h2>Giỏ hàng của bạn</h2>
        </div>
    </div>
    <form action="index.php?type=donhang" method="post">
        <div class="cart-container">
            <!-- Mỗi sản phẩm là một hàng dọc -->
            <?php $total_payment = 0;
        $p = [];
        $q = [];
        $tp = [];
        foreach ($pro as $key ) { 
          $sol = $key['quantity'];
          $pr = $key['gia'];
          $total_price = (int)$sol * $pr;
          $total_payment += $total_price;
          // die;
          $p[] = $key['id_pro'];
          $q[] = $key['quantity'];
          $tp[] = $total_price;

          ?>
            <div class="row mb-3">
                <div class="col-md-3">
                    <a href="index.php?act=trangchitiet"><img src="./upload/<?php echo $key['img'] ?>" alt="Sản phẩm 1"
                            class="product-image"></a>
                </div>
                <div class="col-md-3"><?php echo $key['ten_sp'] ?></div>
                <div class="col-md-2">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <button class="btn btn-outline-secondary quantity-btn" type="button" onclick="decreaseQuantity(this)">-</button> -->
                            <button class="btn btn-outline-secondary quantity-btn" type="button"><a
                                    href="index.php?type=giohang&act=less&id=<?php echo $key['id'] ?>">-</a></button>
                        </div>
                        <input type="text" class="form-control text-center quantity"
                            value="<?php echo $key['quantity'] ?>" readonly>
                        <div class="input-group-append">
                            <!-- <button class="btn btn-outline-secondary quantity-btn" type="button" onclick="increaseQuantity(this)">+</button> -->
                            <button class="btn btn-outline-secondary quantity-btn" type="button"><a
                                    href="index.php?type=giohang&act=add&id=<?php echo $key['id'] ?>">+</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 product-price"><?php echo $total_price ?>.000</div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger"><a
                            href="index.php?type=giohang&act=del&id=<?php echo $key['id'] ?>">Xóa</a></button>
                </div>
            </div>
            <?php } ?>
        </div>


        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <h2>Tổng tiền tạm tính:</h2>
                <span class="badge badge-primary badge-pill"><?php echo $total_payment ?>.000 VNĐ</span>
            </li>
        </ul>
        <?php 
$ipro = implode(', ', $p);
$qt = implode(', ', $q);
$ttp = implode(', ', $tp);
?>
        <hr>
        <input type="hidden" name="total_payment" value="<?php echo $total_price ?>">
        <input type="hidden" name="total_price" value="<?php echo $ttp ?>">
        <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
        <input type="hidden" name="id_pro" value="<?php echo $ipro ?>">
        <input type="hidden" name="quantity" value="<?php echo $qt ?>">
        <button type="submit" name="checkout" class="btn btn-outline-warning btn-lg btn-block mt-3 sbit">Thanh
            toán</button>
    </form>
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
promise.then(function(result) {
    renderCity(result.data);
});

function renderCity(data) {
    for (const x of data) {
        citis.options[citis.options.length] = new Option(x.Name, x.Id);
    }
    citis.onchange = function() {
        district.length = 1;
        ward.length = 1;
        if (this.value != "") {
            const result = data.filter(n => n.Id === this.value);

            for (const k of result[0].Districts) {
                district.options[district.options.length] = new Option(k.Name, k.Id);
            }
        }
    };
    district.onchange = function() {
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