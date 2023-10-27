<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý đề tài nghiên cứu khoa học</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/main.css" />
  </head>
  <body>
    <div class="container-fluid">
      <!-- banner -->
      <div class="row">
        <div class="banner d-flex align-items-center">
          <div>
            <a href="">
              <img
                src="../image/logo 1.png"
                class="logo"
                alt=""
                style="width: 120px; height: 120px"
              />
            </a>
          </div>
          <div class="text-center ms-3">
            <p class="fs-3 fw-bold primaryCl text-uppercase">
              trường đại học <br />
              kỹ thuật - công nghệ cần thơ
            </p>
            <p class="fs-5">Quản lý đề tài nghiên cứu khoa học</p>
            <p class="fs-5">Khoa công nghệ thông tin</p>
          </div>
        </div>
      </div>
      <!-- end banner -->
      <!-- header -->
      <div class="row d-none d-sm-block sticky-top headerCl">
        <div class="d-flex align-items-center justify-content-around">
          <div class="d-flex">
            <div class="d-flex header-hover gap-4">
              <a href="#" class="text-decoration-none p-2 text-white"
                >Trang chủ</a
              >
              <div class="dropdown">
                <a
                  class="btn dropdown-toggle text-decoration-none p-2 text-white"
                  id="dropdownActive"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Hoạt động
                </a>
                <ul
                  class="dropdown-menu headerCl"
                  aria-labelledby="dropdownActive"
                >
                  <li>
                    <a
                      class="dropdown-item text-decoration-none text-white"
                      type="button"
                      >Tất cả hoạt động</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item text-white" type="button"
                      >Hoạt động đã tham gia</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item text-white" type="button"
                      >Đăng xuất</a
                    >
                  </li>
                </ul>
              </div>
              <div class="dropdown">
                <a
                  class="btn dropdown-toggle text-decoration-none p-2 text-white"
                  id="dropdownproof"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Minh chứng
                </a>
                <ul
                  class="dropdown-menu headerCl"
                  aria-labelledby="dropdownproof"
                >
                  <li>
                    <a
                      class="dropdown-item text-decoration-none text-white"
                      type="button"
                      >Tải lên minh chứng</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item text-white" type="button"
                      >Xem minh chứng</a
                    >
                  </li>
                </ul>
              </div>
              <div class="">
                <form class="d-flex align-items-center gap-1">
                  <input
                    class="border border-2 border-top-0 border-start-0 border-end-0 headerCl"
                    type="search"
                    placeholder="Tìm kiếm"
                    aria-label="Search"
                    style="outline: none; color: #fff"
                  />
                  <button
                    class="btn btn-outline-primary button-hover"
                    type="submit"
                  >
                    <img src="../image/search_icon.png" width="25" alt="" />
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="header-hover">
            <div class="header-right d-flex">
              <div class="dropdown">
                <a
                  class="btn dropdown-toggle text-decoration-none p-2 text-white"
                  id="dropdownUser"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Hoang Hoang
                </a>
                <ul
                  class="dropdown-menu headerCl"
                  aria-labelledby="dropdownUser"
                >
                  <li>
                    <a
                      class="dropdown-item text-decoration-none text-white"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#modalInfo"
                      type="button"
                      >Thông tin cá nhân</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item text-white" type="button"
                      >Đổi mật khẩu</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item text-white" type="button"
                      >Đăng xuất</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end header -->
      <section>
        <div class="container-lg">
          <div class="row mt-5">
            <div class="col-3">
              <div class="card" style="width: 18rem">
                <img
                  src="https://images.unsplash.com/photo-1613336026275-d6d473084e85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Hỗ trợ tình nguyện hồ sơ nhập học sinh viên
                  </h5>
                  <p class="card-text mb-2"><b>Thời gian</b>: 1/9/2023</p>
                  <p class="card-text mb-2"><b>Số lượng:</b> 25</p>
                  <p class="card-text mb-2">
                    <b>Địa điểm:</b>Trường Đại học Kỹ thuật - Công nghệ Cần Thơ
                  </p>
                  <p class="card-text mb-2">
                    <b> Mô tả:</b> Cộng 2 điểm rèn luyện vào mục 1 của phiếu
                    đánh giá rèn luyện
                  </p>
                  <div class="text-center">
                    <a href="#" class="btn btn-primary">Tham gia</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem">
                <img
                  src="https://images.unsplash.com/photo-1613336026275-d6d473084e85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Hỗ trợ tình nguyện hồ sơ nhập học sinh viên
                  </h5>
                  <p class="card-text mb-2"><b>Thời gian</b>: 1/9/2023</p>
                  <p class="card-text mb-2"><b>Số lượng:</b> 25</p>
                  <p class="card-text mb-2">
                    <b>Địa điểm:</b>Trường Đại học Kỹ thuật - Công nghệ Cần Thơ
                  </p>
                  <p class="card-text mb-2">
                    <b> Mô tả:</b> Cộng 2 điểm rèn luyện vào mục 1 của phiếu
                    đánh giá rèn luyện
                  </p>
                  <div class="text-center">
                    <a href="#" class="btn btn-primary">Tham gia</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem">
                <img
                  src="https://images.unsplash.com/photo-1613336026275-d6d473084e85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Hỗ trợ tình nguyện hồ sơ nhập học sinh viên
                  </h5>
                  <p class="card-text mb-2"><b>Thời gian</b>: 1/9/2023</p>
                  <p class="card-text mb-2"><b>Số lượng:</b> 25</p>
                  <p class="card-text mb-2">
                    <b>Địa điểm:</b>Trường Đại học Kỹ thuật - Công nghệ Cần Thơ
                  </p>
                  <p class="card-text mb-2">
                    <b> Mô tả:</b> Cộng 2 điểm rèn luyện vào mục 1 của phiếu
                    đánh giá rèn luyện
                  </p>
                  <div class="text-center">
                    <a href="#" class="btn btn-primary">Tham gia</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem">
                <img
                  src="https://images.unsplash.com/photo-1613336026275-d6d473084e85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Hỗ trợ tình nguyện hồ sơ nhập học sinh viên
                  </h5>
                  <p class="card-text mb-2"><b>Thời gian</b>: 1/9/2023</p>
                  <p class="card-text mb-2"><b>Số lượng:</b> 25</p>
                  <p class="card-text mb-2">
                    <b>Địa điểm:</b>Trường Đại học Kỹ thuật - Công nghệ Cần Thơ
                  </p>
                  <p class="card-text mb-2">
                    <b> Mô tả:</b> Cộng 2 điểm rèn luyện vào mục 1 của phiếu
                    đánh giá rèn luyện
                  </p>
                  <div class="text-center">
                    <a href="#" class="btn btn-primary">Tham gia</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5 mb-5">
            <div class="col-3">
              <div class="card" style="width: 18rem">
                <img
                  src="https://images.unsplash.com/photo-1613336026275-d6d473084e85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Hỗ trợ tình nguyện hồ sơ nhập học sinh viên
                  </h5>
                  <p class="card-text mb-2"><b>Thời gian</b>: 1/9/2023</p>
                  <p class="card-text mb-2"><b>Số lượng:</b> 25</p>
                  <p class="card-text mb-2">
                    <b>Địa điểm:</b>Trường Đại học Kỹ thuật - Công nghệ Cần Thơ
                  </p>
                  <p class="card-text mb-2">
                    <b> Mô tả:</b> Cộng 2 điểm rèn luyện vào mục 1 của phiếu
                    đánh giá rèn luyện
                  </p>
                  <div class="text-center">
                    <a href="#" class="btn btn-primary">Tham gia</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem">
                <img
                  src="https://images.unsplash.com/photo-1613336026275-d6d473084e85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Hỗ trợ tình nguyện hồ sơ nhập học sinh viên
                  </h5>
                  <p class="card-text mb-2"><b>Thời gian</b>: 1/9/2023</p>
                  <p class="card-text mb-2"><b>Số lượng:</b> 25</p>
                  <p class="card-text mb-2">
                    <b>Địa điểm:</b>Trường Đại học Kỹ thuật - Công nghệ Cần Thơ
                  </p>
                  <p class="card-text mb-2">
                    <b> Mô tả:</b> Cộng 2 điểm rèn luyện vào mục 1 của phiếu
                    đánh giá rèn luyện
                  </p>
                  <div class="text-center">
                    <a href="#" class="btn btn-primary">Tham gia</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem">
                <img
                  src="https://images.unsplash.com/photo-1613336026275-d6d473084e85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Hỗ trợ tình nguyện hồ sơ nhập học sinh viên
                  </h5>
                  <p class="card-text mb-2"><b>Thời gian</b>: 1/9/2023</p>
                  <p class="card-text mb-2"><b>Số lượng:</b> 25</p>
                  <p class="card-text mb-2">
                    <b>Địa điểm:</b>Trường Đại học Kỹ thuật - Công nghệ Cần Thơ
                  </p>
                  <p class="card-text mb-2">
                    <b> Mô tả:</b> Cộng 2 điểm rèn luyện vào mục 1 của phiếu
                    đánh giá rèn luyện
                  </p>
                  <div class="text-center">
                    <a href="#" class="btn btn-primary">Tham gia</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem">
                <img
                  src="https://images.unsplash.com/photo-1613336026275-d6d473084e85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Hỗ trợ tình nguyện hồ sơ nhập học sinh viên
                  </h5>
                  <p class="card-text mb-2"><b>Thời gian</b>: 1/9/2023</p>
                  <p class="card-text mb-2"><b>Số lượng:</b> 25</p>
                  <p class="card-text mb-2">
                    <b>Địa điểm:</b>Trường Đại học Kỹ thuật - Công nghệ Cần Thơ
                  </p>
                  <p class="card-text mb-2">
                    <b> Mô tả:</b> Cộng 2 điểm rèn luyện vào mục 1 của phiếu
                    đánh giá rèn luyện
                  </p>
                  <div class="text-center">
                    <a href="#" class="btn btn-primary">Tham gia</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer>
        <div class="row">
          <div class="background-footer text-center py-3">
            <div>
              <span class="text-white text-uppercase"
                >trường đại học kỹ thuật - công nghệ cần thơ</span
              >
            </div>
            <div class="pb-3">
              <span class="text-white"
                >Địa chỉ: 256 Nguyễn Văn Cừ, Quận Ninh Kiều, Thành phố Cần
                Thơ</span
              >
            </div>
            <div class="bg-white d-inline-block rounded-pill px-1">
              <a href="https://www.facebook.com/CTUT.CT" target="_blank">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  class="icon-size"
                >
                  <path
                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                    fill="#0d6efd"
                  />
                </svg>
              </a>
            </div>
            <div class="bg-white d-inline-block px-1 rounded-pill">
              <a
                href="https://www.youtube.com/embed/9aE-jHfyXTw"
                target="_blank"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512"
                  class="icon-size"
                >
                  <path
                    d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
                    fill="#dc3545"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </footer>
      <!-- Modal -->
      <div
        class="modal fade"
        id="modalInfo"
        tabindex="-1"
        aria-labelledby="modalInfo"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalInfo">Thông tin cá nhân</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
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
              <button
                type="button"
                class="btn btn-primary w-25"
                data-bs-dismiss="modal"
              >
                Đóng
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- end modal -->
    </div>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>
