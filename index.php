<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý đề tài nghiên cứu khoa học</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
<htm>

    <body>
        <div class="container-fluid">
            <!-- banner -->
            <?php
            // if (!isset($_GET['url'])) {
            //     if ($_GET['url'] == "login")
            //         return;
            // } else {
            //     require 'pages/layout/banner.php';
            // }
            // require 'pages/layout/banner.php';

            // header

            if (isset($_GET['url']) && $_GET['url'] == "sinhvien") {
                require "pages/sinhvien/header.php";
            } else {
                require "pages/layout/header.php";
            }
            ?>
            <!-- <div class="row d-none d-sm-block sticky-top headerCl">
                <div class="col d-flex justify-content-center">
                    <div class="d-flex gap-3 header-hover">
                        <a href="index.php?" class="text-decoration-none p-2 text-white">Trang chủ</a>
                        <a href="index.php?url=login" class="text-decoration-none p-2 text-white">Đăng nhập</a>
                    </div>
                </div>
            </div> -->
            <div class="row d-sm-none headerCl sticky-top">
                <div class="d-flex justify-content-between py-2">
                    <div class="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-size" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z " fill="#ffff" />
                        </svg>
                        <!-- dd -->
                        <!-- <ul class="dropdown-menu border-0 shadow" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Trang chủ</a></li>
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-login">Đăng nhập</a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="container-lg">
                <div class="row">
                    <?php
                    if (isset($_GET['url'])) {
                        $page = $_GET['url'];
                        require "pages/sinhvien/" . $page . ".php";
                    } else {
                        require "pages/sinhvien/login.php";
                        // require "pages/sinhvien/login.php";
                    }
                    ?>
                </div>
                <!-- footer -->
            </div>
            <footer>
                <?php require "pages/layout/footer.php" ?>
            </footer>
            <!-- endfooter -->
            <!-- Modal login -->
            <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="modal-login" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-login">Đăng nhập</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="login.php" autocomplete="off" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Tài khoản</label>
                                    <input type="text" class="form-control" name="username" value="" />
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" name="password" />
                                </div>
                                <div class="mb-3 d-flex align-items-center justify-content-evenly">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_option" id="sinh_vien" checked value="3" />
                                        <label class="form-check-label" for="sinh_vien">
                                            Sinh viên
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_option" id="quan_ly" value="quanly" />
                                        <label class="form-check-label" for="quan_ly">
                                            Quản lý
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_option" id="quan_tri" value="quantri" />
                                        <label class="form-check-label" for="quan_tri">
                                            Quản trị
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Đóng
                                </button>
                                <button type="submit" class="btn btn-primary" name="login_sv">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal login -->
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.js"></script>
    </body>
</htm>