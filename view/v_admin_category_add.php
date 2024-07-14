<h2>Thêm Tài Khoản</h2>
<?php if(isset($_SESSION['thongbao'])):?>
             <div class="alert alert-success" role="alert">
              <?=$_SESSION['thongbao']?>
              </div>
            <?php endif; unset($_SESSION['thongbao']);?>
            
            <?php if(isset($_SESSION['loi'])):?>
             <div class="alert alert-danger" role="alert">
             <?=$_SESSION['loi']?>
             </div>
            <?php endif; unset($_SESSION['loi']);?>
          <form action="" method="POST">
            <div class="mb-3">
              <label for="hinhanh" class="form-label">Tên Hãng</label>
              <input type="text" class="form-control" id="TenHang" name="TenHang">
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Xác Nhận</button>
          </form>