    <div class="banneranh">
        <img class="slide" src="view/user/asset/image/banner1.jpg" alt="Image 1">
        <img class="slide" src="view/user/asset/image/banner2.jpg" alt="Image 2">
    </div>

    <div id="bannerchu">
        <span>Chào bạn đến với DDH-08 Store!</span>
    </div>


    <div class="gallery">


        <div class="image-container1">

            <a href="#"><img class="image" src="view/user/asset/image/tintuc1.jpg" alt="Image 1"></a>
            <a href="#"><img class="image" src="view/user/asset/image/tintuc2.jpg" alt="Image 2"></a>
        </div>

        <div class="image-container2">

            <a href="#"><img class="image" src="view/user/asset/image/thuonghieu1.jpg" alt="Image 3"></a>
            <a href="#"><img class="image" src="view/user/asset/image/thuonghieu1.jpg" alt="Image 4"></a>
            <a href="#"><img class="image" src="view/user/asset/image/thuonghieu1.jpg" alt="Image 5"></a>
            <a href="#"><img class="image" src="view/user/asset/image/thuonghieu1.jpg" alt="Image 6"></a>
            <a href="#"><img class="image" src="view/user/asset/image/thuonghieu1.jpg" alt="Image 7"></a>
        </div>
    </div>


    <div id="bannerduoi">
        <img id="currentImagee" src="view/user/asset/image/bannerduoi1.jpg" alt="Image 1">
    </div>
    <div class="thumbnail-container">
        <button onclick="previousImage()">&#8249;</button>
        <button onclick="changeImage(0)">1</button>
        <button onclick="changeImage(1)">2</button>
        <button onclick="changeImage(2)">3</button>
        <button onclick="changeImage(3)">4</button>
        <button onclick="changeImage(4)">5</button>
        <button onclick="changeImage(5)">6</button>
        <button onclick="changeImage(6)">7</button>
        <button onclick="nextImage()">&#8250;</button>
    </div>
    <h2 class="mt-5 text-center kh container p-2">ĐỒNG HỒ HOT</h2>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <p style="color: white;">p</p>
            <?php
            foreach ($loadall_sanpham_hot as $key) {
                echo '
                <div class="col-2 ">
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><img src="view/user/asset/image/'.$key['img'].'" width="100%" >
                </a>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><p  class="text-center m-1">'.$key['ten_sp'].'</p></a>
                <p class="small text-center">'.$key['loai_may'].'</p>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><h5 class="">Giá: '.$key['gia'].'.000</h5></a>
            </div>';
            }
            ?>
        </div>
    </div>

    <h2 class="kh container mt-5 text-center p-2">SẢN PHẨM MỚI</h2>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <p style="color: white;">p</p>
            <?php
            foreach ($loadall_sanpham_moi as $key) {
                echo '
                <div class="col-2 ">
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><img src="view/user/asset/image/'.$key['img'].'" width="100%" >
                </a>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><p  class="text-center m-1">'.$key['ten_sp'].'</p></a>
                <p class="small text-center">'.$key['loai_may'].'</p>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><h5 class="">Giá: '.$key['gia'].'.000</h5></a>
            </div>';
            }
            ?>
        </div>
    </div>

    <div class="container mt-4">
        <div class="text row">
            <hr class="line" />
            <span class="content">VÌ SAO LẠI CHỌN CHÚNG TÔI</span>
            <hr class="line" />
        </div>
        <div class="d-flex justify-content-between align-items-center vscct p-4 my-4 pt-3">
            <div class="d-flex pt-3"><i class="fa-solid fa-medal pt-2 pr-2" style="color: #000000;"></i>
                <p>100% HÀNG CHÍNH HÃNG</p>
            </div>
            <div class="d-flex pt-3"><i class="fa-solid fa-truck-fast pt-1 pr-2" style="color: #000000;"></i>
                <p>MIỄN PHÍ VẬN CHUYỂN</p>
            </div>
            <div class="d-flex pt-3"><i class="fa-solid fa-shield-halved pt-1 pr-2" style="color: #000000;"></i>
                <p>BẢO HÀNH 5 NĂM</p>
            </div>
            <div class="d-flex pt-3"><i class="fa-solid fa-7 pt-1 pr-2" style="color: #000000;"></i></i>
                <p>ĐỔIHÀNG TRONG 7 NGÀY</p>
            </div>


        </div>
        <div class="iframe">
            <div class="d-flex text">
                <h4 class="text-white bg-secondary p-2">Tin tức - Video</h4>
                <hr class="line" />
            </div>
            <div class="iframe2">
                <iframe src="view/user/tintuc.php" frameborder="0" width="60%" height="400px"></iframe>
                <iframe width="40%" height="400px" src="https://www.youtube.com/embed/AAS_KH9ZphY" style="border: none;"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>


    </div>