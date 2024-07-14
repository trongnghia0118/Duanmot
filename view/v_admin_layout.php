<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Bán Hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="template/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>  
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0 bg-secondary collapse collapse-horizontal show" style="min-height:100vh; " id="openmenu">
           <strong class="text-center d-block p-2 ">Trang Quản Lý</strong>
           <div class="list-group list-group-item-secondary m-3">
            <a href="?mod=admin&act=dashboard" class="list-group-item list-group-item-action <?= (strpos($view_name,'dashboard'))?'active':'' ?>">
              Tổng Quan
            </a>
            <a href="?mod=admin&act=user" class="list-group-item list-group-item-action <?= (strpos($view_name,'user'))?'active':'' ?>">Tài Khoản</a>
            <a href="?mod=admin&act=category" class="list-group-item list-group-item-action <?= (strpos($view_name,'category'))?'active':'' ?>">Hãng Giày</a>
            <a href="?mod=admin&act=product" class="list-group-item list-group-item-action <?= (strpos($view_name,'product'))?'active':'' ?>">Sản Phẩm</a>
            <a href="?mod=admin&act=history"class="list-group-item list-group-item-action <?= (strpos($view_name,'history'))?'active':'' ?>">Quản Lý Hóa đơn</a>
          </div>
            </div>
            <div class="col-md p-0">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <button class="btn btn-outline-dark me-2" type="button" data-bs-toggle="collapse" data-bs-target="#openmenu" aria-expanded="false" aria-controls="openmenu">
                =
              </button>
            <a class="navbar-brand" href="#">MEMOLSTUDIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Xin Chào, <?=$_SESSION['user']['HoTen']?>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?mod=page&act=home">Xem Trang Chủ</a></li>
                    <li><a class="dropdown-item" href="?mod=user&act=logout">Đăng xuất</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="container-fluid">
        <?php include 'view/v_'.$view_name.'.php';?>
        </div>
        
            </div>
            
          </div>
    </div>

      <script src="template/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
</body>

</html>