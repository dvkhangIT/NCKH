<?php require "connect.php" ?>
<h4 class="mt-3">Hoạt động gần đây</h4>
<?php
$sql = "SELECT * FROM `hoatdong` ORDER BY id_hoatDong DESC";
$result = mysqli_query($conn, $sql);
if ($num = mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
?>
        <div class="col-3 mt-4">
            <div class="card" style="width: 18rem">
                <img src="image/notification.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $row['tenHoatDong'] ?>
                    </h5>
                    <p class="card-text mb-2"><b>Thời gian</b>: <?php echo date('d/m/y', strtotime($row['thoiGian'])) ?></p>
                    <p class="card-text mb-2"><b>Số lượng:</b> <?php echo $row['soLuong'] ?></p>
                    <p class="card-text mb-2">
                        <b>Địa điểm: </b><?php echo $row['diaDiem'] ?>
                    </p>
                    <p class="card-text mb-2">
                        <b> Mô tả:</b> <?php echo $row['moTa'] ?>
                    </p>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Tham gia</a>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
} ?>