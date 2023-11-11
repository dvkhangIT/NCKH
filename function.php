<?php
function setHeader()
{
    $currentPage = basename($_SERVER['SCRIPT_FILENAME']);

    switch ($currentPage) {
        case 'index.php':
            header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
            header('Cache-Control: post-check=0, pre-check=0', false);
            header('Pragma: no-cache');
            break;
        case 'login.php':
            require 'pages/layout/header.php';
            break;
            // Thêm các trường hợp khác nếu cần
        default:
            require "pages/sinhvien/header.php";
            break;
    }
}
