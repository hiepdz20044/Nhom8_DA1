<div class="container d-flex ">
    <div class="row justify-content-center py-2 my-2">
        <?php
            foreach ($timkiem as $key) {
                echo '
                <div class="col-2 ">
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><img src="view/user/asset/image/'.$key['img'].'" width="100%" >
                </a>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><p  class="text-center m-1">'.$key['ten_sp'].'</p></a>
                <p class="small text-center">'.$key['loai_may'].'</p>
                <a href="index.php?type=trangchitiet&id_sp='.$key['id_sanpham'].'"><h4 class="">Giá: '.$key['gia'].'</h4></a>
            </div>';
            }
            ?>
        </div>
    </div>
