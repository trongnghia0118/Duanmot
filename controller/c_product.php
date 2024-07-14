<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'detail':
            include_once 'model/m_category.php';
            $hangsp = Get_category_All();
            include_once 'model/m_product.php';
            $product_detail = Get_Product_id($_GET['id']);
            $img_product = Get_IMG_Product($_GET['id']);
            $random = Get_Product_Random($product_detail['MaHang']);
            $view_name= 'product_detail';
            break;
        case 'search':
            if(isset($_POST['keyword'])){
                header("Location: ?mod=product&act=search&keyword=".$_POST['keyword']);
            }
            include_once 'model/m_category.php';
            $hangsp = Get_category_All();
            include_once 'model/m_product.php';
            $page = 1;
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }
            $ketqua = Product_search($_GET['keyword'],$page);
            $sotrang = ceil(Product_searchTotal($_GET['keyword'])/8);
            include_once 'model/m_category.php';
            $hangsp = Get_category_All();
            $view_name = 'search';
            break;
            case 'addcart':
                if (isset($_POST['addcart'])&&($_POST['addcart'])){
                    $MaSP = $_POST['MaSP'];
                    $TenSanPham = $_POST['TenSanPham'];
                    $HinhAnh = $_POST['HinhAnh'];
                    $GiaTri = $_POST['GiaTri'];
                    if(isset($_POST['size'])&&($_POST['size']>0)){
                        $Size = $_POST['size'];
                    };
                    if(isset($_POST['sl'])&&($_POST['sl']>0)){
                        $sl = $_POST['sl'];
                    }else{$sl = 1;};
                    $fg=0;
                    $i=0;
                    foreach ($_SESSION['giohang'] as $item){
                        if($item[1]===$TenSanPham && $item[5]===$Size){
                            $slnew = $sl+$item[4];
                            $_SESSION['giohang'][$i][4]=$slnew;
                            $fg=1;
                            break;
                        }
                        $i++;
                    }
                    if ($fg==0) {
                        $item=array($MaSP,$TenSanPham,$HinhAnh,$GiaTri,$sl,$Size);
                    $_SESSION['giohang'][]=$item;
                    }
                    
                }

                
                header("Location: ?mod=page&act=cart");
                break;
            case'removeCart':
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    if (isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0))
                    array_splice($_SESSION['giohang'],$_GET['id'],1);
                }else{
                    if (isset($_SESSION['giohang'])) unset ($_SESSION['giohang']);
                }
                if (isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
                    header('Location: ?mod=page&act=cart');
                }else{
                    header('Location: ?mod=page&act=home');
                }
                break;
            
                case'updateCart':
                    include_once 'model/m_cart.php';
                    $MaTK = $_SESSION['user']['MaTK'];
                    $MaSP = $_GET['id'];
                    $GioHang = Hascart($MaTK);
                    if( $GioHang ){
                        $TongTien = $_POST['TongTien'];
                        $TrangThai = 'chuan-bi';
                        history_updateCart($GioHang['MaHD'], $TongTien, $TrangThai);
                        $_SESSION['thongbao'] = 'Yêu Cầu Thanh Toán Đã Tiếp Nhận';
                    }
                    header('Location: ?mod=page&act=tienhanhthanhtoanQR');
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
                        $_SESSION['iddh']=$iddh;
                        if (isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
                        foreach ($_SESSION['giohang'] as $item){
                                 addtocart($iddh,$item[0],$item[1],$item[2],$item[3],$item[4]);
                        }
                        unset($_SESSION['giohang']);
                       }
                    }
                       $view_name = 'page_donhang';
                        break;
        default:
            # code...
            break;
    }
    include_once "view/v_layout.php";
}