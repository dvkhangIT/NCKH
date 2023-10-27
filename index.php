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
            <?php require "pages/banner.php" ?>
            <!-- header -->
            <div class="row d-none d-sm-block sticky-top headerCl">
                <div class="col d-flex justify-content-center">
                    <div class="d-flex gap-3 header-hover">
                        <a href="#" class="text-decoration-none p-2 text-white">Trang chủ</a>
                        <a href="#" class="text-decoration-none p-2 text-white" data-bs-toggle="modal" data-bs-target="#modal-login">Đăng nhập</a>
                    </div>
                </div>
            </div>
            <div class="row d-sm-none headerCl sticky-top">
                <div class="d-flex justify-content-between py-2">
                    <div class="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-size" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z " fill="#ffff" />
                        </svg>
                        <!-- dd -->
                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Trang chủ</a></li>
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-login">Đăng nhập</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-lg">
                <div class="row">
                    <?php require "pages/home.php" ?>
                    <!--            <div class="col-3">-->
                    <!--                <div class="card" style="width: 18rem">-->
                    <!--                    <img-->
                    <!--                            src="https://images.unsplash.com/photo-1613336026275-d6d473084e85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"-->
                    <!--                            class="card-img-top"-->
                    <!--                            alt="..."-->
                    <!--                    />-->
                    <!--                    <div class="card-body">-->
                    <!--                        <h5 class="card-title">-->
                    <!--                            Hỗ trợ tình nguyện hồ sơ nhập học sinh viên-->
                    <!--                        </h5>-->
                    <!--                        <p class="card-text mb-2"><b>Thời gian</b>: 1/9/2023</p>-->
                    <!--                        <p class="card-text mb-2"><b>Số lượng:</b> 25</p>-->
                    <!--                        <p class="card-text mb-2">-->
                    <!--                            <b>Địa điểm:</b>Trường Đại học Kỹ thuật - Công nghệ Cần Thơ-->
                    <!--                        </p>-->
                    <!--                        <p class="card-text mb-2">-->
                    <!--                            <b> Mô tả:</b> Cộng 2 điểm rèn luyện vào mục 1 của phiếu đánh-->
                    <!--                            giá rèn luyện-->
                    <!--                        </p>-->
                    <!--                        <div class="text-center">-->
                    <!--                            <a href="#" class="btn btn-primary">Tham gia</a>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                </div>
                <!-- footer -->
            </div>
            <footer>
                <?php require "pages/footer.php" ?>
            </footer>
            <!-- endfooter -->
            <!-- Modal signup -->
            <div class="modal fade" id="modal-signup" tabindex="-1" aria-labelledby="modal-signup" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-signup">Đăng ký</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" autocomplete="off">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Tài khoản</label>
                                    <input type="text" class="form-control" id="username" value="" />
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" id="inputPassword" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Đóng
                                </button>
                                <button type="submit" class="btn btn-primary">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal signup -->
            <div class="modal fade" id="modal-signup" tabindex="-1" aria-labelledby="modal-signup" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-signup">Đăng ký</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" autocomplete="off">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Tài khoản</label>
                                    <input type="text" class="form-control" id="username" value="" />
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" id="inputPassword" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Đóng
                                </button>
                                <button type="submit" class="btn btn-primary">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal signup -->
            <!-- Modal login -->
            <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="modal-login" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-login">Đăng nhập</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="pages/sinhvien.html" autocomplete="off">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Tài khoản</label>
                                    <input type="text" class="form-control" id="username" value="" />
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" id="inputPassword" />
                                </div>
                                <div class="mb-3 d-flex align-items-center justify-content-evenly">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="sinh_vien" checked />
                                        <label class="form-check-label" for="sinh_vien">
                                            Sinh viên
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="quan_ly" />
                                        <label class="form-check-label" for="quan_ly">
                                            Quản lý
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="quan_tri" />
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
                                <button type="submit" class="btn btn-primary">Đăng nhập</button>
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