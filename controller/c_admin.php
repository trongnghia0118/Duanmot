<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'dashboard':
            include_once 'model/m_product.php';
            $tksp = Product_count();
            include_once 'model/m_user.php';
            $tkkh = user_COUNT();
            include_once 'model/m_category.php';
            $tkh = category_COUNT();
            include_once 'model/m_cart.php';
            $tksptheohang = category_statByProduct();
            $tkhd = hoadon_COUNT();
            $tkdoanhthu = hoadon_stat();
            $view_name= 'dashboard';
            break;
        case 'user':
            include_once 'model/m_user.php';
            $dstk = user_getall();
            $view_name= 'admin_user';
            break;
            case 'user-add':
                include_once 'model/m_user.php';
                if (isset($_POST['submit'])) {
                $HoTen = $_POST['HoTen'];
                $SoDienThoai = $_POST['SoDienThoai'];
                $MatKhau = $_POST['MatKhau'];
                $Quyen = $_POST['Quyen'];

                $kq = user_checkphone($SoDienThoai);
                if ($kq) {
                    $_SESSION['loi'] = 'Không thể tạo taikhoan với số điện thoai <strong>'.$SoDienThoai.'</strong>';
                }else{
                    user_add($HoTen,$SoDienThoai,$Quyen,$MatKhau);
                    $_SESSION['thongbao'] = ' Đã Tạo TaiKhoan Thành Công';
                }
                }
                $view_name= 'admin_user_add';
                break;
            case 'user-edit':
                    include_once 'model/m_user.php';
                    $MaTK = $_GET['id'];
                    if (isset($_POST['submit'])) {
                    $HoTen = $_POST['HoTen'];
                    $SoDienThoai = $_POST['SoDienThoai'];
                    $MatKhau = $_POST['MatKhau'];
                    $Quyen = $_POST['Quyen'];
                    $kq = user_checkphone($SoDienThoai);
                    if ($kq && $kq['MaTK']!=$MaTK){
                        $_SESSION['loi'] = 'số điện thoai <strong>'.$SoDienThoai.'</strong> đã tồn tại';
                    }else{
                        user_edit($MaTK,$HoTen,$SoDienThoai,$Quyen,$MatKhau);
                        $_SESSION['thongbao'] = ' Thay Đổi Thông Tin Thành Công';
                    }
                    }
                    $tk = user_getBy_id($MaTK);
                    $view_name= 'admin_user_edit';
                    break;
                case 'user-delete':
                    include_once 'model/m_user.php';
                    user_delete($_GET['id']);
                    header('Location: ?mod=admin&act=user');
                    $view_name= 'admin_user_delete';
                    break;
        case 'category':
            include_once 'model/m_category.php';
            $dshang = Category_getall();
            $view_name= 'admin_category';
            break;
            case 'category-add':
                include_once 'model/m_category.php';
                    if (isset($_POST['submit'])) {
                    $TenHang = $_POST['TenHang'];
                    category_add($TenHang);
                        $_SESSION['thongbao'] = ' Thêm Hãng Giày Thành Công';
                    };
                $view_name= 'admin_category_add';
                break;
                case 'category-edit':
                    $MaHang = $_GET['id'];
                    include_once 'model/m_category.php';
                    if (isset($_POST['submit'])) {
                        $TenHang = $_POST['TenHang'];
                        
                            category_edit($MaHang,$TenHang);
                            $_SESSION['thongbao'] = ' Thay Đổi Thông Tin Hãng Thành Công';
                        };
                    $h = category_getBy_id($MaHang);
                    $view_name= 'admin_category_edit';
                        break;

        case 'product':
            include_once 'model/m_product.php';
            $dssanpham = Product_getall();
            $view_name= 'admin_product';
            break;
            case 'product-add':
                include_once 'model/m_product.php';
                    if (isset($_POST['submit'])) {
                    $HinhAnh = basename($_FILES["HinhAnh"]["name"]);
                    $target_dir = "template/upload/product/";
                    $target_file = $target_dir . $HinhAnh;
                    move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);
                    $TenSanPham = $_POST['TenSanPham'];
                    $MoTa = $_POST['MoTa'];
                    $Soluong = $_POST['SoLuong'];
                    $GiaTri = $_POST['GiaTri'];
                    $MaHang = $_POST['MaHang'];
                        product_add($HinhAnh,$TenSanPham,$MoTa,$Soluong,$GiaTri,$MaHang);
                        $_SESSION['thongbao'] = ' Thêm sản phẩm Thành Công';
                    };
                $view_name= 'admin_product_add';
                break;
                case 'product-edit':
                    $MaSP = $_GET['id'];
                    include_once 'model/m_product.php';
                    if (isset($_POST['submit'])) {
                        $HinhAnh = basename($_FILES["HinhAnh"]["name"]);
                       $target_dir = "template/upload/product/";
                       $target_file = $target_dir . $HinhAnh;
                       move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);
                        $TenSanPham = $_POST['TenSanPham'];
                        $MoTa = $_POST['MoTa'];
                        $SoLuong = $_POST['SoLuong'];
                        $GiaTri = $_POST['GiaTri'];
                        $MaHang = $_POST['MaHang'];
                        $TrangThai = $_POST['TrangThai'];
                        product_edit($MaSP,$HinhAnh,$TenSanPham,$MoTa,$SoLuong,$GiaTri,$MaHang);
                        history_edit_tt($MaSP,$TrangThai);
                            $_SESSION['thongbao'] = ' Thêm sản phẩm Thành Công';
                        };
                    $spham = product_getBy_id($MaSP);
                    $view_name= 'admin_product_edit';
                        break;
                        case 'product-delete':
                            include_once 'model/m_product.php';
                            product_delete($_GET['id']);
                            header('Location: ?mod=admin&act=product');
                            $view_name= 'admin_product_delete';
                            break;
        case 'history':
            include_once 'model/m_cart.php';
            $dshd = hoadon_getAll();
            $view_name= 'admin_history';
            break;
            case 'history-edit':
                    $MaHD = $_GET['id'];
                    include_once 'model/m_cart.php';
                    if (isset($_POST['submit'])) {
                        $TrangThai = $_POST['TrangThai'];
                            history_edit($MaHD,$TrangThai);
                            $_SESSION['thongbao'] = ' Thêm sản phẩm Thành Công';
                        };
                    $hd = history_getBy_id($MaHD);
                    $view_name= 'admin_history_edit';
                        break;
                        case 'history-delete':
                            include_once 'model/m_cart.php';
                            history_delete($_GET['id']);
                            header('Location: ?mod=admin&act=history');
                            $view_name= 'admin_history_delete';
                            break;
                            case 'history-chitiet';
                            $MaHD = $_GET['id'];
                            include_once 'model/m_cart.php';
                            $cthd = history_chitiet($MaHD);
                            $hdsp = history_chitietsp($MaHD);
                            $slad = history_get_adsoluong($MaHD);
                            $view_name = 'admin_history_chitiet';
                            break;
        default:
            # code...
            break;
    }
    include_once "view/v_admin_layout.php";
}