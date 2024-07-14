<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'detail':
            include_once 'model/m_category.php';
            $hangsp = Get_category_All();
            include_once 'model/m_product.php';
            $sanphamid = Get_Product_By_Category($_GET['id']);
            $ctcategory = Get_category($_GET['id']);
            $view_name= 'catergory';
            break;
        
        default:
            # code...
            break;
    }
    include_once 'view/v_layout.php';
}