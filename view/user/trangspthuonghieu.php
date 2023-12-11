<style>
.card {
    text-align: center;
}

.card a {
    color: black;
    text-decoration: none;
}

.card a:hover {
    color: red;
    text-decoration: underline red;
    /* Hiển thị gạch chân khi rê chuột qua */
}

.card img {
    width: 160px;
    height: 200px;
    object-fit: cover;
    /* Đảm bảo ảnh không bị méo khi thay đổi kích thước */
}
</style>
<br>
<div class="container mt-4">
    <h2 class="mb-4 text-center"><?php echo $dssp['name']?></h2>
    <div class="col-md-6 home-link">
        <a href="index.php?type=thuonghieu">
            <i class="fas fa-arrow-left"></i> Quay trở về trang thương hiệu
        </a>
    </div>
    <div class="row">
        <?php foreach ($loadSpth as $key) { ?>
        <div class="col-md-3 mb-4">

            <div class="card">
                <a href="index.php?type=trangchitiet&id_sp=<?php echo $key['id_sanpham'] ?>"><img
                        src="./upload/<?php echo $key['img'] ?>" width="100%"></a>
                <a href="index.php?type=trangchitiet&id_sp=<?php echo $key['id_sanpham']?>">
                    <p class="text-center m-1"><?php echo $key['ten_sp']?></p>
                </a>
                <p class="small text-center"><?php echo $key['loai_may']?></p>
                <a href="index.php?type=trangchitiet&id_sp=<?php echo $key['id_sanpham']?>">
                    <h4 class="text-center"><?php echo $key['gia']?></h4>
                </a>
            </div>

        </div>
        <?php } ?>
    </div>
</div>