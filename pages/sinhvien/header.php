<div class="row d-none d-sm-block sticky-top headerCl">
    <div class="d-flex align-items-center justify-content-around">
        <div class="d-flex">
            <div class="d-flex header-hover gap-4">
                <!-- <a href="index.php?" class="text-decoration-none p-2 text-white">Trang chủ</a> -->
                <div class="dropdown">
                    <a class="btn dropdown-toggle text-decoration-none p-2 text-white" id="dropdownActive" data-bs-toggle="dropdown" aria-expanded="false">
                        Hoạt động
                    </a>
                    <ul class="dropdown-menu headerCl" aria-labelledby="dropdownActive">
                        <li>
                            <a class="dropdown-item text-decoration-none text-white" type="button">Tất cả hoạt động</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-white" type="button">Hoạt động đã tham gia</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="btn dropdown-toggle text-decoration-none p-2 text-white" id="dropdownproof" data-bs-toggle="dropdown" aria-expanded="false">
                        Minh chứng
                    </a>
                    <ul class="dropdown-menu headerCl" aria-labelledby="dropdownproof">
                        <li>
                            <a class="dropdown-item text-decoration-none text-white" type="button">Tải lên minh chứng</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-white" type="button">Xem minh chứng</a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <form class="d-flex align-items-center gap-1">
                        <input class="border border-2 border-top-0 border-start-0 border-end-0 headerCl" type="search" placeholder="Tìm kiếm" aria-label="Search" style="outline: none; color: #fff" />
                        <button class="btn btn-outline-primary button-hover" type="submit">
                            <img src="image/search_icon.png" width="25" alt="" />
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="header-hover">
            <div class="header-right d-flex">
                <?php
                if (isset($_SESSION['hoten'])) { ?>
                    <div class="dropdown">
                        <a class="btn dropdown-toggle text-decoration-none p-2 text-white" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            if (isset($_SESSION['hoten'])) {
                                echo $_SESSION['hoten'];
                            } else {
                                echo "Dang nhap";
                            }
                            ?>
                        </a>
                        <ul class="dropdown-menu headerCl" aria-labelledby="dropdownUser">
                            <li>
                                <a class="dropdown-item text-decoration-none text-white" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInfo" type="button">Thông tin cá nhân</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" type="button">Đổi mật khẩu</a>
                            </li>
                            <li>
                                <a href="logout.php" class="dropdown-item text-white" type="button">Đăng xuất</a>
                                <!-- <a href="logout.php" class="dropdown-item text-white" type="button">Đăng xuất</a> -->
                            </li>
                        </ul>
                    </div>
                <?php } else {
                    echo '<a href="index.php?url=login" class="text-decoration-none p-2 text-white">Đăng nhập</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- end header -->
<!-- Modal -->
<!-- <div class="modal fade" id="modalInfo" tabindex="-1" aria-labelledby="modalInfo" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInfo">Thông tin cá nhân</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Họ</th>
                                <td>Hoàng</td>
                            </tr>
                            <tr>
                                <th>Tên</th>
                                <td>Hoàng</td>
                            </tr>
                            <tr>
                                <th>Mã số sinh viên</th>
                                <td>21000123</td>
                            </tr>
                            <tr>
                                <th>Khoa</th>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <th>Ngành</th>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <th>Lớp</th>
                                <td>CNTT0121</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>hh21000123@student.ctuet.edu.vn</td>
                            </tr>
                            <tr>
                                <th>Số điện thoại</th>
                                <td>0123456789</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary w-25" data-bs-dismiss="modal">
                    Đóng
                </button>
            </div>
        </div>
    </div>

</div> -->
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.js"></script>