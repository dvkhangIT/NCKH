<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
if (isset($_POST['login_sv'])) {
    $username = $_POST['username'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM `sinhvien` WHERE mssv = '$username' AND matKhau = '$matkhau'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    // $_POST['radio_option'] == 3;
    if ($num > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['mssv'] = $row['mssv'];
        $_SESSION['hoten'] = $row['ho'] . $row['ten'];
        // echo "Login success";
        // header("Location:index.php?url=sinhvien");
        echo '<script>location.replace("index.php?url=sinhvien"); </script>';
    } else {
        $noti = "Thông tin đăng nhập không hợp lệ!";
    }
    // header("Location:index.php?url=sinhvien");
    // echo $row['mssv'];

}
?>

<div class="col-8 my-5">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://fakeimg.pl/350x200/?text=First slide" alt="" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 active" />
            </div>
            <div class="carousel-item">
                <img src="https://fakeimg.pl/350x200/?text=Second slide" alt="" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" />
            </div>
            <div class="carousel-item">
                <img src="https://fakeimg.pl/350x200/?text=Third slide" alt="" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="col-4 shadow-lg bg-body rounded my-5">
    <div class="py-4 px-1">
        <h4 class="text-center text-uppercase">Đăng nhập hệ thống</h4>
        <form action="" autocomplete="off" method="POST">
            <div class="mb-4">
                <label for="username" class="form-label">Tài khoản:</label>
                <input type="text" class="form-control" name="username" value="" id="username" />
            </div>
            <div class="mb-4">
                <label for="inputPassword" class="form-label">Mật khẩu:</label>
                <input type="password" class="form-control" name="password" id="inputPassword" />
            </div>
            <div class="mb-4 d-flex align-items-center justify-content-evenly">
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

            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary mb-4" name="login_sv">
                    Đăng nhập
                </button>
            </div>
            <div class="noti text-center">
                <span class="text-danger">
                    <?php
                    echo isset($noti) ? $noti : ""
                    ?>
                </span>
            </div>
        </form>
    </div>
</div>