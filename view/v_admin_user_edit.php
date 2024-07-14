<h2>Sửa Tài Khoản</h2>
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
              <label for="sodienthoai" class="form-label">Họ Và Tên</label>
              <input type="text" class="form-control" id="HoTen" name="HoTen" value="<?=$tk['HoTen']?>">
            </div>
            <div class="mb-3">
              <label for="matkhau" class="form-label">SoDienThoai</label>
              <input type="text" class="form-control" id="SoDienThoai" name="SoDienThoai" value="<?=$tk['SoDienThoai']?>">
            </div>
            <div class="mb-3">
              <label for="hoten" class="form-label">Quyền</label>
              <select class="form-select" id="Quyen" name = "Quyen">
                <option value="0"<?=($tk['Quyen']==0)?'selected':''?>>Khách Hàng</option>
                <option value="2"<?=($tk['Quyen']==1)?'selected':''?>>Admin</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="hoten" class="form-label">MatKhau</label>
              <input type="text" class="form-control" id="MatKhau" name="MatKhau" value="<?=$tk['MatKhau']?>">
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Xác Nhận</button>
          </form>