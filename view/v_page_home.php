<h2 class="text-center my-5">Sản Phẩm Mới</h2>
<div class="row mx-2 my-5 pagination justify-content-center">

            <?php foreach($sanpham as $sanpham) : ?>
            <div class="card col-md-3 col-sm-6 mb-2 ms-2" style="width: 18rem;">
            <form action="?mod=product&act=addcart" method="post">
            <a href="?mod=product&act=detail&id=<?=$sanpham['MaSP']?>">  <img src="template/upload/product/<?=$sanpham['HinhAnh']?>" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">
                        <?=$sanpham['TenSanPham']?>
                      </h5>
                      <p class="card-text-danger"><?=$sanpham['GiaTri']?>đ</p>
                      <a href="?mod=product&act=detail&id=<?=$sanpham['MaSP']?>"><button type="button" class="btn btn-primary ">Xem Sản Phẩm</button>
                      </a>

          
                    </div>      
                    <input type="hidden" value="<?=$sanpham['MaSP']?>" name ="MaSP">
                    <input type="hidden" value="<?=$sanpham['HinhAnh']?>" name ="HinhAnh">
                    <input type="hidden" value="<?=$sanpham['TenSanPham']?>" name ="TenSanPham">
                    <input type="hidden" value="<?=$sanpham['GiaTri']?>" name ="GiaTri">
                    </form>     
            </div> 
            <?php endforeach; ?>     

</div>

<h2 class="text-center my-5">Sản Phẩm Bán Chạy</h2>
<div class="row mx-2 my-5 pagination justify-content-center">

            <?php foreach($sanphamhot as $sanpham) : ?>
            <div class="card col-md-3 col-sm-6 mb-2 ms-2" style="width: 18rem;">
            <form action="?mod=product&act=addcart" method="post">
            <a href="?mod=product&act=detail&id=<?=$sanpham['MaSP']?>">  <img src="template/upload/product/<?=$sanpham['HinhAnh']?>" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">
                        <?=$sanpham['TenSanPham']?>
                      </h5>
                      <p class="card-text-danger"><?=$sanpham['GiaTri']?>đ</p>
                      <a href="?mod=product&act=detail&id=<?=$sanpham['MaSP']?>"><button type="button" class="btn btn-primary ">Xem Sản Phẩm</button></a>

          
                    </div>      
                    <input type="hidden" value="<?=$sanpham['MaSP']?>" name ="MaSP">
                    <input type="hidden" value="<?=$sanpham['HinhAnh']?>" name ="HinhAnh">
                    <input type="hidden" value="<?=$sanpham['TenSanPham']?>" name ="TenSanPham">
                    <input type="hidden" value="<?=$sanpham['GiaTri']?>" name ="GiaTri">
                    </form>     
            </div> 
            <?php endforeach; ?>     

</div>