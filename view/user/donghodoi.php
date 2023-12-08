
<br>
    <div class="banneranh">
        <img class="slide" src="view/user/asset/image/banner1.jpg" alt="Image 1">
        <img class="slide" src="view/user/asset/image/banner2.jpg" alt="Image 2">
      </div>

    <div id="bannerchu">
        <span>Chào bạn đến với DDH-08 Store!</span>
    </div>

    <br>
    <div class="container-fluid text-dhnam ">
        <h3 class="p-3">ĐỒNG HỒ ĐÔI</h3>
    </div>
    <br>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
            <?php
            foreach ($loadall_donghodoi as $key) {
                echo '
                <div class="col-2 ">
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><img src="view/user/asset/image/'.$key['img'].'" width="100%" alt="Ảnh sản phẩm" >
                </a>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><p  class="text-center m-1">'.$key['ten_sp'].'</p></a>
                <p class="small text-center">'.$key['loai_may'].'</p>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><h4 class="">Giá: '.$key['gia'].'</h4></a>
            </div>';
            }
            ?>
            


        </div>
        
        
    </div>
    <!-- <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
        <?php
            foreach ($loadall_donghodoi as $key) {
                echo '
                <div class="col-2 ">
                <a href="trangchitiet.html"><img src="view/user/asset/image/'.$key['img'].'" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src=\'img/dhdoi.webp\'" onmouseout="this.src=\'img/dhdoi.webp\'">
                </a>
                <a href="trangchitiet.html"><p  class="text-center m-1">'.$key['ten_sp'].'</p></a>
                <p class="small text-center">'.$key['loai_may'].'</p>
                <a href="trangchitiet.html"><h4 class="">Giá: '.$key['gia'].'</h4></a>
            </div>';
            }
            ?>

        </div>
        
        
    </div>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
        <?php
            foreach ($loadall_donghodoi as $key) {
                echo '
                <div class="col-2 ">
                <a href="index.php?type=trangchitiet&id='.$key['id_sanpham'].'"><img src="view/user/asset/image/'.$key['img'].'" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src=\'img/dhdoi.webp\'" onmouseout="this.src=\'img/dhdoi.webp\'">
                </a>
                <a href="index.php?type=trangchitiet&id='.$key['id_sanpham'].'"><p  class="text-center m-1">'.$key['ten_sp'].'</p></a>
                <p class="small text-center">'.$key['loai_may'].'</p>
                <a href="index.php?type=trangchitiet&id='.$key['id_sanpham'].'"><h4 class="">Giá: '.$key['gia'].'</h4></a>
            </div>';
            }
            ?>

        </div>
        
        
    </div>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
        <?php
            foreach ($loadall_donghodoi as $key) {
                echo '
                <div class="col-2 ">
                <a href="trangchitiet.html"><img src="view/user/asset/image/'.$key['img'].'" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src=\'img/dhdoi.webp\'" onmouseout="this.src=\'img/dhdoi.webp\'">
                </a>
                <a href="trangchitiet.html"><p  class="text-center m-1">'.$key['ten_sp'].'</p></a>
                <p class="small text-center">'.$key['loai_may'].'</p>
                <a href="trangchitiet.html"><h4 class="">Giá: '.$key['gia'].'</h4></a>
            </div>';
            }
            ?>

        </div>
        
        
    </div>
    <div class="container d-flex ">
        <div class="row justify-content-center py-2 my-2">
        <?php
            foreach ($loadall_donghodoi as $key) {
                echo '
                <div class="col-2 ">
                <a href="trangchitiet.html"><img src="view/user/asset/image/'.$key['img'].'" width="100%" alt="Ảnh sản phẩm" onmouseover="this.src=\'img/dhdoi.webp\'" onmouseout="this.src=\'img/dhdoi.webp\'">
                </a>
                <a href="trangchitiet.html"><p  class="text-center m-1">'.$key['ten_sp'].'</p></a>
                <p class="small text-center">'.$key['loai_may'].'</p>
                <a href="trangchitiet.html"><h4 class="">Giá: '.$key['gia'].'</h4></a>
            </div>';
            }
            ?>

        </div>
        
        
    </div> -->
    <ul class="pagination justify-content-center">
        <li><a href="#" data-page="first"><i class="fas fa-angle-double-left"></i></a></li>
        <li><a href="#" data-page="1">1</a></li>
        <li><a href="#" data-page="2">2</a></li>
        <li><a href="#" data-page="3">3</a></li>
        <li><a href="#" data-page="4">4</a></li>
        <li><a href="#" data-page="last"><i class="fas fa-angle-double-right"></i></a></li>
    </ul>
      <!-- <div class="container">
        <h4>Các hãng đồng hồ hot</h4>
        <div class="row justify-content-between">
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg"  alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg"  alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
            <div class="col-2">
                <a href=""><img src="img/thuonghieu1.jpg" alt=""></a>
            </div>
        </div>
      </div> -->

    
    <!-- <div class="container">
        <div class="text row">
          <hr class="line" />
          <span class="content">VÌ SAO LẠI CHỌN CHÚNG TÔI</span>
          <hr class="line" />
        </div>
        <div class="d-flex justify-content-between align-items-center vscct p-4 my-4 pt-3">
          <div class="d-flex pt-3"><i class="fa-solid fa-medal pt-2 pr-2" style="color: #000000;"></i><p >100% HÀNG CHÍNH HÃNG</p></div>
          <div class="d-flex pt-3"><i class="fa-solid fa-truck-fast pt-1 pr-2" style="color: #000000;"></i><p>MIỄN PHÍ VẬN CHUYỂN</p></div>
          <div class="d-flex pt-3"><i class="fa-solid fa-shield-halved pt-1 pr-2" style="color: #000000;"></i><p>BẢO HÀNH 5 NĂM</p></div>
          <div class="d-flex pt-3"><i class="fa-solid fa-7 pt-1 pr-2" style="color: #000000;"></i></i><p>ĐỔIHÀNG TRONG 7 NGÀY</p></div>
    
    
        </div>
        <div class="iframe">
          <div class="d-flex text">
            <h4 class="text-white bg-secondary p-2">Tin tức - Video</h4>
          <hr class="line" />
          </div>
          <div class="iframe2">
            <iframe src="tintuc.html" frameborder="0" width="60%" height="400px"></iframe>
            <iframe width="40%" height="400px" src="https://www.youtube.com/embed/AAS_KH9ZphY" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>
          </div>
        </div>
    
        
      </div> -->
    
