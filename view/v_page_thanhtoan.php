<?php if(isset($_SESSION['thongbao'])):?>
             <div class="alert alert-success" role="alert">
              <?=$_SESSION['thongbao']?>
              </div>
            <?php endif; unset($_SESSION['thongbao']);?>
            <div class="row">
              <div class="col-md-6">
            <h2>Thanh toán</h2>
            <form action="">
    <h3>Giày bạn đã chọn:</h3>
    <img src="link-to-your-shoe-image" alt="Giày">
    <p>Tên giày: <span id="shoe-name"></span></p>
    <p>Giá: <span id="shoe-price"></span></p>
    
    <div class="mb-3">
              <label for="matkhau" class="form-label">Địa Chỉ</label>
              <input type="text" class="form-control" id="DiaChi" name="DiaChi" >
            </div>
    <div class="mb-3">
      <label for="matkhau" class="form-label">SoDienThoai</label>
      <input type="text" class="form-control" id="SoDienThoai" name="SoDienThoai" >
      </div>
      <div class="mb-3">
              <label for="matkhau" class="form-label">Họ Và Tên</label>
              <input type="text" class="form-control" id="HoTen" name="HoTen" >
            </div>

            </form>
        <label for="payment-method">Phương thức thanh toán:</label><br>
        <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="?mod=page&act=tienhanhthanhtoanQR">
        <input type="submit" value="Thanh Toán MoMo QRcode" class="btn btn-danger">
        </form>
        <br>
        <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="?mod=page&act=tienhanhthanhtoanATM">
        <input type="submit" value="Thanh Toán MoMo ATM" class="btn btn-danger">
        </form>
        
    
    </div>
    </div>
<p>Tổng Hóa Đơn: <?=$hdthanhtoan['TongTien']?></p>

