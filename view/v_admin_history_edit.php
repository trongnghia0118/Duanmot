<h2>Sửa Hóa Đơn</h2>
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
              <label for="hoten" class="form-label">Trạng Thái</label>
              <select class="form-select" id="TrangThai" name = "TrangThai">
                <option value="chua-xac-nhan"<?=($hd['TrangThai']=='chua-xac-nhan')?'selected':''?>>Chưa Xác Nhận</option>
                <option value="da-xac-nhan">Đã Xác Nhận</option>
                <option value="cho-giao">Chờ Giao Hàng</option>
                <option value="dang-giao">Đang Đang Giao Hàng</option>
                <option value="da-giao">Đã Giao Hàng</option>
                <option value="da-huy-don">Đã Hủy Đơn</option>
              </select>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Xác Nhận</button>
          </form>