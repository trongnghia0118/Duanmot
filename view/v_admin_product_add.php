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
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="hinhanh" class="form-label">Hình Ảnh</label>
              <input type="file" class="form-control" name="HinhAnh">
            </div>
            <div class="mb-3">
              <label for="ten" class="form-label">Tên Sản Phẩm</label>
              <input type="text" class="form-control" id="TenSanPham" name="TenSanPham">
            </div>
            <div class="mb-3">
            <label for="mota" class="form-label">Mô Tả</label>
              <input type="text" class="form-control" id="MoTa" name="MoTa">
            </div>
            <div class="mb-3">
              <label for="hoten" class="form-label">Số Lương</label>
              <input type="text" class="form-control" id="SoLuong" name="SoLuong">
            </div>
            <div class="mb-3">
              <label for="hoten" class="form-label">Giá Bán</label>
              <input type="text" class="form-control" id="GiaTri" name="GiaTri">
            </div>
            <div class="mb-3">
              <label for="hoten" class="form-label">Mã Hàng</label>
              <input type="text" class="form-control" id="MaHang" name="MaHang">
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Xác Nhận</button>
          </form>
          