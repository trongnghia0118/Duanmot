<div class="container">
<H2 class="p-3">Đăng Nhập</H2>
<div class="ps-5 pe-5">
<?php if(isset($_SESSION['loi'])):?>
    <div class="alert alert-danger" role="alert">
  <?=$_SESSION['loi']?>
</div>
    <?php endif; unset($_SESSION['loi']);?>
<form method="post" class="mb-3">
<div class="form-floating mb-3 me-3">
  <input type="phone" class="form-control" name="SoDienThoai" id="SoDienThoai" placeholder="name@example.com">
  <label for="floatingInput">Nhập Tài Khoản</label>
</div>
<div class="form-floating mb-3 me-3 ">
  <input type="password" class="form-control" name="MatKhau" id="MatKhau" placeholder="Password">
  <label for="floatingPassword">Nhập Mật Khẩu</label>
</div>
<button type="submit" class="btn btn-primary">Đăng Nhập</button>
<p>Bạn chưa có tài khoản ? <a href="?mod=user&act=dangky">Đăng Ký</a></p>
</form>
</div>
</div>
</div>