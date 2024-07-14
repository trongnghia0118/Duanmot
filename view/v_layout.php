<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMOLSTUDIO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="template/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>  
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a href="?mod=page&act=home"><img src="template/upload/logo.jpg" width="125px" height="50px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Giới Thiệu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Liên Hệ</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Danh Sách Hãng
            </a>
            <ul class="dropdown-menu">
            <?php foreach($hangsp as $hang):?>
              <li><a class="dropdown-item" href="?mod=catergory&act=detail&id=<?=$hang['MaHang']?>"><?=$hang['TenHang']?></a></li>
              <?php endforeach;?>
            </ul>
          </li>
        </ul>
        <form action="?mod=product&act=search" method="POST" class="d-flex" role="search">
          <input class="form-control me-auto" name="keyword" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-border" type="submit" id="search"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <ul class="navbar-nav  mb-2 mb-lg-0">
        <?php if (!isset($_SESSION['user'])): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user"></i> Tài Khoản
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?mod=user&act=login">Đăng Nhập</a></li>
              <li><a class="dropdown-item" href="?mod=user&act=dangky">Đăng Ký</a></li>
            </ul>
          </li>
          <?php else:?>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Xin Chào, <?=$_SESSION['user']['HoTen']?>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Thông tin tài khoản</a></li>
                    <li><a class="dropdown-item" href="?mod=page&act=history">Hóa Đơn</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <?php if($_SESSION['user']['Quyen']>=1):?>
                    <li><a class="dropdown-item text-warning" href="?mod=admin&act=dashboard">Trang Quản Lý</a></li>
                    <?php endif;?>
                    <li><a class="dropdown-item" href="?mod=user&act=logout">Đăng xuất</a></li>
                  </ul>
                </li>
                  <?php endif;?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?mod=page&act=cart"><i class="fa-solid fa-bag-shopping"></i> Giỏ Hàng</a>
          </li>
          </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="template/upload/9_banner_nike.jpg" class="d-block w-100" height="400px" alt="...">
        </div>
        <div class="carousel-item">
          <img src="template/upload/banner-quang-cao-giay-1.webp" class="d-block w-100"height="400px" alt="...">
        </div>
        <div class="carousel-item">
          <img src="template/upload/banner-quang-cao-giay-6.webp" class="d-block w-100"height="400px" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <?php include_once 'view/v_'.$view_name.'.php';?>
    </div>
    <footer class="text-center p-3 text-bg-dark rounded-3" >
        Bản Quyền &copy; 2023, thuộc về Nhóm 4 Duan_1(FPT_POLYTECHNIC)
      </footer>

      <script src="template/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
</body>

</html>