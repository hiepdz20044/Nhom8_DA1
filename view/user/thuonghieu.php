<style>
/* Add this to your existing styles */

/* Hover effect for images */
.col-md-3:hover {
    transform: scale(1.05);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

/* Transition effect for image captions */
.col-md-3 p {
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}

.col-md-3:hover p {
    opacity: 1;
}

/* Bouncing animation for navigation buttons */
#prevBtn,
#nextBtn {
    animation: bounce 0.5s infinite alternate;
}

@keyframes bounce {
    from {
        transform: translateY(0);
    }

    to {
        transform: translateY(-5px);
    }
}

/* Adjusted style for navigation buttons */
#prevBtn,
#nextBtn {
    position: absolute;
    width: 40px;
    font-size: 24px;
    color: #ffaa00;
    cursor: pointer;
    text-decoration: none;
    display: block;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

#prevBtn {
    left: 190px;
}

#nextBtn {
    right: 210px;
}

#imageRow {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 300px;
    /* Thay đổi tùy theo chiều cao mong muốn */
}

.img-fluid.mb-2 {
    max-width: 250px;
    /* Thay đổi giá trị tùy theo kích thước mong muốn */
    height: 200px;
    margin-bottom: 10px;
    /* Thay đổi giá trị tùy theo khoảng cách mong muốn */
}
</style>

<div class="container mt-5">
    <h4 class="text-center" style="border: 1px solid #9b7221;
    background-color: #9b7221;
    border-width: 10px;
    color: #ffffff;
    font-weight: bolder;">THƯƠNG HIỆU NỔI BẬT</h4>
    <br>
    <!-- Brand images -->
    <div class="row" id="imageRow">
        <?php
            foreach ($list_th as $key) { ?>
        <?php
            if ($key['id_thuonghieu']>4) { ?>
        <div class="col-md-3" style="display: none;">
            <a href="index.php?type=trangspthuonghieu&idth=<?php echo $key['id_thuonghieu']?>"><img
                    src="./upload/<?php echo $key['img_logo']?>" alt="<?php echo $key['name']?>"
                    class="img-fluid mb-2" /></a>
            <p class="text-center"><?php echo $key['name']?></p>
        </div>
        <?php } else{ ?>
        <div class="col-md-3">
            <a href="index.php?type=trangspthuonghieu&idth=<?php echo $key['id_thuonghieu']?>"><img
                    src="./upload/<?php echo $key['img_logo']?>" alt="<?php echo $key['name']?>"
                    class="img-fluid mb-2" /></a>
            <p class="text-center"><?php echo $key['name']?></p>
        </div>
        <?php } ?>
        <?php }
        ?>
    </div>
    <!-- Navigation bar -->

    <a class="nav-link" id="prevBtn" href="#">
        <i class="fa-solid fa-angles-left"></i>
    </a>
    <a class="nav-link" id="nextBtn" href="#">
        <i class="fa-solid fa-angles-right"></i>
    </a>

</div>

<div class="container mt-5">
    <h4 class="text-center" style="border: 1px solid #9b7221;
    background-color: #9b7221;
    border-width: 10px;
    color: #ffffff;
    font-weight: bolder;">TẤT CẢ THƯƠNG HIỆU</h4>
    <br>
    <div class="row">
        <?php
            foreach ($list_th as $key) { ?>
        <div class="col-md-3 mb-4">
            <a href="index.php?type=trangspthuonghieu&idth=<?php echo $key['id_thuonghieu']?>"><img
                    src="./upload/<?php echo $key['img_logo']?>" alt="<?php echo $key['name']?>"
                    class="img-fluid mb-2" /></a>
            <p class="text-center"><?php echo $key['name']?></p>
        </div>
        <?php }
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var startIndex = 0;
    var endIndex = 3;
    var totalImages = document.querySelectorAll(
        "#imageRow .col-md-3"
    ).length;

    function showImages(start) {
        var images = document.querySelectorAll("#imageRow .col-md-3");

        // Ẩn tất cả ảnh
        for (var i = 0; i < totalImages; i++) {
            images[i].style.display = "none";
        }

        // Hiển thị 4 ảnh
        for (var i = 0; i < 4; i++) {
            var index = (start + i) % totalImages;
            if (index < 0) {
                index += totalImages; // Xử lý khi index âm
            }
            images[index].style.display = "block";
        }
    }

    document
        .getElementById("nextBtn")
        .addEventListener("click", function(event) {
            event.preventDefault();
            startIndex = (startIndex + 1) % totalImages;
            showImages(startIndex);
        });

    document
        .getElementById("prevBtn")
        .addEventListener("click", function(event) {
            event.preventDefault();
            startIndex = (startIndex - 1 + totalImages) % totalImages;
            showImages(startIndex);
        });
});
</script>