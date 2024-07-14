<br>
<h2 class="ms-5">Chi Tiết Sản Phẩm</h2>
<br>
    <div class="row justify-content-center">
      <div class="col-2 my-2 ">
      <?php foreach($img_product as $khoanh):?>
        <img src="template/upload/khoanh/<?=$khoanh['Anh']?>" width="100px" height="100px" alt="...">
        <br>
        <?php endforeach;?>
      </div>
      <div class="col-5 my-2">
        <img src="template/upload/product/<?=$product_detail['HinhAnh']?>" width="500px" height="500px" alt="">
      </div>
      <div class="col-5 my-2 ">
        <div class="row justify-content-center">
          <div class="col-12">
            <p><strong><?=$product_detail['TenSanPham']?></strong></p>
            <p><?=$product_detail['MoTa']?></p>
            <p>Giá Bán: <?=$product_detail['GiaTri']?>đ</p>
            <form action="?mod=product&act=addcart" method="post">
            <div class="form-check">
               <input class="form-check-input" type="radio" value="35" name="size" id="size">
               <label class="form-check-label" for="size">
              Size:35
              </label>
              </div>
              <div class="form-check">
               <input class="form-check-input" type="radio" value="36" name="size" id="size">
               <label class="form-check-label" for="size">
              Size:36
              </label>
              </div>
              <div class="form-check">
               <input class="form-check-input" type="radio" value="37" name="size" id="size">
               <label class="form-check-label" for="size">
              Size:37
              </label>
            </div>
            <?php if(isset($_SESSION['loi'])):?>
             <div class="alert alert-danger" role="alert">
             <?=$_SESSION['loi']?>
             </div>
             <?php endif;?>
            <p>Số Lượng:<input type="number" value="1" min=1 max=10 required="" name="sl" ></p>
            <input type="hidden" value="<?=$product_detail['MaSP']?>" name ="MaSP">
            <input type="hidden" value="<?=$product_detail['HinhAnh']?>" name ="HinhAnh">
            <input type="hidden" value="<?=$product_detail['TenSanPham']?>" name ="TenSanPham">
            <input type="hidden" value="<?=$product_detail['GiaTri']?>" name ="GiaTri">
            <?php if($product_detail['TrangThai']=='ngungkinhdoanh'):?>
              <p>Ngừng Kinh Doanh</p>
              <?php endif;?>
              <?php if($product_detail['TrangThai']=='conhang'):?>
            <input type="submit" value="Đặt Hàng" name="addcart">
            <?php endif;?>
            </form>
      </div>
          
      </div>
      </div>
    </div>
<h2 class="text-center">Sản Phẩm Cùng Hãng</h2>
<div class="row mx-2 my-5 pagination justify-content-center">

<?php foreach($random as $sanpham) : ?>
<div class="card col-md-3 col-sm-6 mb-2 ms-2" style="width: 18rem;">
<form action="?mod=product&act=addcart" method="post">
<a href="?mod=product&act=detail&id=<?=$sanpham['MaSP']?>">  <img src="template/upload/product/<?=$sanpham['HinhAnh']?>" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">
            <?=$sanpham['TenSanPham']?>
          </h5>
          <p class="card-text-danger"><?=$sanpham['GiaTri']?>đ</p>
          <a href="?mod=product&act=detail&id=<?=$sanpham['MaSP']?>">Xem Sản Phẩm</a>


        </div>      
        <input type="hidden" value="<?=$sanpham['MaSP']?>" name ="MaSP">
        <input type="hidden" value="<?=$sanpham['HinhAnh']?>" name ="HinhAnh">
        <input type="hidden" value="<?=$sanpham['TenSanPham']?>" name ="TenSanPham">
        <input type="hidden" value="<?=$sanpham['GiaTri']?>" name ="GiaTri">
        </form>     
</div> 
<?php endforeach; ?>     

</div>