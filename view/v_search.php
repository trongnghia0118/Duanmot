<h2 class="text-center my-5">Kết Quả Tìm Với Từ Khóa "<?=$_GET['keyword']?>"</h2>
<div class="row mx-2 my-5 pagination justify-content-center">

            <?php foreach($ketqua as $sanpham) : ?>
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
  <nav aria-label="Page navigation example ">
    <ul class="pagination justify-content-center">
      <li class="page-item <?=($page<=1)?'disabled':''?>">
        <a class="page-link" href="?mod=product&act=search&keyword=<?=$_GET['keyword']?>&page&page=<?=$page-1?>" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <?php for ($i=1; $i<=$sotrang ; $i++):?>
    <li class="page-item <?=($page==$i)?'active':''?>">
      <a class="page-link" href="?mod=product&act=search&keyword=<?=$_GET['keyword']?>&page&page=<?=$i?>">
      <?=$i?>
      </a>
    </li>
    <?php endfor;?>
      <li class="page-item <?=($page>=2)?'disabled':''?>">
        <a class="page-link" href="?mod=product&act=search&keyword=<?=$_GET['keyword']?>&page&page=<?=$page+1?>" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>