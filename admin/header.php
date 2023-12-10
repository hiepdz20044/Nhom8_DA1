<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án 1</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #f4f4f4;
    }

    .boxcenter {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* HEADER STYLES */
    header {
        background-color: #9b7221;
        color: #fff;
        text-align: center;
        padding: 10px 0;
    }

    /* MENU STYLES */
    .menu,
    .additional-navigation {
        background-color: #eee;
        padding: 10px;
        border-radius: 5px;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: space-around;
    }

    li {
        margin: 0;
    }

    .a {
        text-decoration: none;
        color: #9b7221;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
        display: flex;
        align-items: center;
    }

    .a:hover {
        background-color: #9b7221;
        color: #fff;
    }

    .icon {
        margin-right: 8px;
    }

    .additional-icon {
        font-size: 24px;
        color: #fff;
    }

    .additional-icon:hover {
        color: #9b7221;
    }
    </style>
</head>

<body>
    <div class="boxcenter">
        <!-- BEGIN HEADER -->
        <header>
            <div class="row mb header_admin">
                <h1>Admin</h1>
            </div>
        </header>
        <!-- END HEADER -->

        <!-- BEGIN MENU -->
        <div class="row mb menu">
            <ul>
                <li><a class="a" href="index.php"><i class="fas fa-home icon"></i>Trang chủ</a></li>
                <li><a class="a" href="index.php?act=adddm"><i class="fas fa-th icon"></i>Danh mục</a></li>
                <li><a class="a" href="index.php?act=addsp"><i class="fas fa-box icon"></i>Hàng hóa</a></li>
                <li><a class="a" href="index.php?act=dskh"><i class="fas fa-users icon"></i>Khách hàng</a></li>
                <li><a class="a" href="index.php?act=dsbl"><i class="fas fa-comment icon"></i>Bình luận</a></li>
                <li><a class="a" href="index.php?act=thongke"><i class="fas fa-chart-bar icon"></i>Thống kê</a></li>
                <li><a class="a" href="index.php?act=dsdonhang"><i class="fas fa-clipboard-list icon"></i>Quản lí đơn
                        hàng</a>
                </li>
            </ul>
        </div>
    </div>


</html>