<h2>Sửa Sản Phẩm</h2>
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
              <input type="file" class="form-control" id="HinhAnh" name="HinhAnh" value="<?=$spham['HinhAnh']?>">
            </div>
            <div class="mb-3">
              <label for="ten" class="form-label">Tên Sản Phẩm</label>
              <input type="text" class="form-control" id="TenSanPham" name="TenSanPham" value="<?=$spham['TenSanPham']?>">
            </div>
            <div class="mb-3">
            <label for="mota" class="form-label">Mô Tả</label>
              <input type="text" class="form-control" id="MoTa" name="MoTa" value="<?=$spham['MoTa']?>">
            </div>
            <div class="mb-3">
              <label for="hoten" class="form-label">Số Lương</label>
              <input type="text" class="form-control" id="SoLuong" name="SoLuong" value="<?=$spham['Soluong']?>">
            </div>
            <div class="mb-3">
              <label for="hoten" class="form-label">Giá Bán</label>
              <input type="text" class="form-control" id="GiaTri" name="GiaTri" value="<?=$spham['GiaTri']?>">
            </div>
            <div class="mb-3">
              <label for="hoten" class="form-label">Mã Hàng</label>
              <input type="text" class="form-control" id="MaHang" name="MaHang" value="<?=$spham['MaHang']?>">
            </div>
            <div class="mb-3">
              <label for="hoten" class="form-label">Trạng Thái</label>
              <select class="form-select" id="TrangThai" name = "TrangThai">
                <option value="conhang"<?=($spham['TrangThai']=='conhang')?'selected':''?>>Còn Hàng</option>
                <option value="ngungkinhdoanh"<?=($spham['TrangThai']=='ngungkinhdoanh')?'selected':''?>>Ngưng Kinh Doanh</option>
              </select>
            </div>

            <button type="submit" name="submit" value="submit" class="btn btn-primary">Xác Nhận</button>
          </form>