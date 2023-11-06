<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/header.css">
    <title>Trang Chủ</title>
</head>

<body>
    <div class="container">
<header>
    <nav class="navbar navbar-expand-lg navbar-light ct-header">
        <a class="navbar-brand" href="index.php">
            <img class="logo" width="150px" height="80px" src="./assets/img/logo.png" alt="logo">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <button class="btn btn-outline-secondary ct-font">Trang Chủ</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <button class="btn btn-outline-secondary ct-font">Tài Khoản</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view/DanhSachCacKhoanChiTieu.php">
                        <button class="btn btn-outline-secondary ct-font">
                            Quản Lý Thu Chi
                        </button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <button class="btn btn-outline-secondary ct-font">Báo Cáo</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <button class="btn btn-outline-secondary ct-font">Cảnh Báo Chi Tiêu</button>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn btn-outline-secondary ct-font">Chức Năng Khác </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Lập Kế Hoạch Dự Chi</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="user">
            <div class="avt">
                <img src="./assets/img/noimg.jpg" alt="logo">
            </div>
            <div class="ct-name">
                <p> Người dùng</p>
            </div>
        </div>

    </nav>
</header>
        <div class="body"></div>
        <?php include './footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>