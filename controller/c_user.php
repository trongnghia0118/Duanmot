<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'login':
            include_once 'model/m_category.php';
            $hangsp = Get_category_All();
            include_once 'model/m_user.php';
            if (isset($_POST['SoDienThoai'])&& isset($_POST['MatKhau'])){
                $kq = user_login($_POST['SoDienThoai'],$_POST['MatKhau']);
                if($kq){
                    $_SESSION['user'] = $kq;

                    header('Location: ?mod=page&act=home');
                }
                else {
                    $_SESSION['loi'] = 'Số Điện Thoại Hoặc Mật Khẩu không đúng';
                }
            }
            $view_name= 'user_login';
            break;
            case 'dangky':
                include_once 'model/m_category.php';
                $hangsp = Get_category_All();
                include_once 'model/m_user.php';
                if (isset($_POST['submit'])) {
                $HoTen = $_POST['HoTen'];
                $SoDienThoai = $_POST['SoDienThoai'];
                $MatKhau = $_POST['MatKhau'];
                $kq = user_checkphone($SoDienThoai);
                if ($kq) {
                    $_SESSION['loi'] = 'Không thể tạo taikhoan với số điện thoai <strong>'.$SoDienThoai.'</strong>';
                }else{
                    user_dangky($HoTen,$SoDienThoai,$MatKhau);
                    $_SESSION['thongbao'] = ' Đã Tạo TaiKhoan Thành Công';
                }
                }
                $view_name= 'user_dangky';
            break;
            case 'logout':
                unset($_SESSION['user']);
                header('Location: ?mod=page&act=home');
        default:
            # code...
            break;
    }
    include_once "view/v_layout.php";
}