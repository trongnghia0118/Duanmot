<?php
session_start();
if(!isset($_SESSION['giohang']))$_SESSION['giohang']=[];
if (isset($_GET['mod'])) {
    switch ($_GET['mod']) {
        case 'page':
            include_once "controller/c_page.php";
            break;
        case 'catergory':
            include_once "controller/c_catergory.php";
            break;
        case 'product':
            include_once "controller/c_product.php";
            break;
        case 'user':
            include_once "controller/c_user.php";
            break;
        case 'admin':
            include_once "controller/c_admin.php";
        default:
            # code...
            break;
    }
} else {
    header('Location: ?mod=page&act=home');
}