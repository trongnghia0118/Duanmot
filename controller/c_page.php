<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            include_once 'model/m_category.php';
            $hangsp = Get_category_All();
            include_once 'model/m_product.php';
            $sanpham = Get_Product(4);
            $sanphamhot = Get_Product_By_HOT(4);
            $view_name= 'page_home';
            break;
        case 'cart':
            if (!isset($_SESSION['user'])) {
                $_SESSION['loi'] = 'Bạn cần đăng nhập để sử dụng trang này';
                header('Location: ?mod=user&act=login');
                 return;
            }
            $view_name = 'page_cart';
            break;
         case 'thanhtoantien':
            include_once 'model/m_donhang.php';
           if((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])){
            $MaTK = $_SESSION['user']['MaTK'];
            $tongdonhang = $_POST['TongDonHang'];
            $HoTen = $_POST['HoTen'];
            $DiaChi = $_POST['DiaChi'];
            $Email = $_POST['Email'];
            $SoDienThoai = $_POST['SoDienThoai'];
            $pttt = $_POST['pttt'];
            $maDH = rand(0,999999);
            $iddh = taodonhang($maDH,$MaTK,$tongdonhang,$pttt,$HoTen,$DiaChi,$Email,$SoDienThoai);
            $_SESSION['MaHD']=$iddh;
            if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
            foreach ($_SESSION['giohang'] as $item){
                     addtocart($iddh,$item[0],$item[1],$item[2],$item[3],$item[4],$item[5]);
            }
            unset($_SESSION['giohang']);
           }
        }
           $view_name = 'page_donhang';
            break; 
        case 'history':
            include_once 'model/m_cart.php';
            $MaTK = $_SESSION['user']['MaTK'];
            $dshoadon = history_get_account($MaTK);
            $view_name = 'page_history';
            break;
            case 'history-delete':
                include_once 'model/m_cart.php';
                $MaHD=$_GET['id'];
                history_user_delete($MaHD);
                header('Location: ?mod=page&act=history');
                $view_name= 'user_history_delete';
                break;
            case 'history-chitiet':
                include_once 'model/m_cart.php';
                $MaHD=$_GET['id'];
                $cthoadon = history_get_hoadon($MaHD);
                $sl = history_get_soluong($MaHD);
                $ha = history_get_hinhanh($MaHD);
                $sanpham=history_get_sanpham($MaHD);
                $view_name = 'history_userchitiet';
                break;
            case 'history-remove':
                include_once 'model/m_cart.php';
                $MaHD =$_GET['id'];
                $TrangThai='da-huy-don';
                history_remove($MaHD, $TrangThai);
                header('Location: ?mod=page&act=history');
                break;
        case 'tienhanhthanhtoanQR':
            include_once 'model/m_donhang.php';
            $thanhtoan = 'da-thanh-toan';
            $iddh2 = $_SESSION['MaHD'];
            $tt = tt_thanhtoan($iddh2,$thanhtoan);
            include_once 'model/m_xulythanhtoanmomo.php';
            break;
        case 'tienhanhthanhtoanATM':
            include_once 'model/m_donhang.php';
            $thanhtoan = 'da-thanh-toan';
            $iddh2 = $_SESSION['MaHD'];
            $tt = tt_thanhtoan($iddh2,$thanhtoan);
            include_once 'model/m_xulythanhtoanmomo_atm.php';
            break;
        case 'camon':
            $view_name = 'camon';
        default:
            # code...
            break;
    }
    include_once "view/v_layout.php";
}