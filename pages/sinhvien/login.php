<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require "connect.php";
?>
<?php
if (isset($_POST['login_sv'])) {
    $username = $_POST['username'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM `sinhvien` WHERE mssv = '$username' AND matKhau = '$matkhau'";
    $result = mysqli_query($conn, $sql);
    $num =  mysqli_num_rows($result);
    // $_POST['radio_option'] == 3;
    if ($num > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['mssv'] = $row['mssv'];
        $_SESSION['hoten'] = $row['ho'] . $row['ten'];
        // echo "Login success";
        header("Location:index.php?url=sinhvien");
        echo '<script>location.replace("index.php?url=sinhvien"); </script>';
    } else {
        echo "Login fail";
    }
    // header("Location:index.php?url=sinhvien");
    // echo $row['mssv'];

}
?>
<div class="bg-light col-4 mx-auto my-3 shadow">
    <h3 class="text-center">Đăng nhập</h3>
    <form action="" autocomplete="off" method="POST">
        <div class="modal-body">
            <div class="mb-3">
                <label for="username" class="form-label">Tài khoản</label>
                <input required type="text" class="form-control" name="username" value="" />
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Mật khẩu</label>
                <input required type="password" class="form-control" name="password" />
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
            <button type="submit" class="btn btn-primary mx-auto" name="login_sv">Đăng nhập</button>
        </div>
    </form>
</div>