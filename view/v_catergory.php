<h2 class="text-center my-5">Hãng: <?=$ctcategory['TenHang']?></h2>
<div class="row mx-2 my-5 p-blank justify-content-center">
            <?php foreach($sanphamid as $sanpham) : ?>
            <div class="card col-md-3 col-sm-6 me-1 mb-2"style="width: 18rem;">
            <a href="?mod=product&act=detail&id=<?=$sanpham['MaSP']?>">  <img src="template/upload/product/<?=$sanpham['HinhAnh']?>" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h5 class="card-title">
                        <?=$sanpham['TenSanPham']?>
                      </h5>
                      <p class="card-text"><?=$sanpham['GiaTri']?></p>
                      <a href="?mod=product&act=detail&id=<?=$sanpham['MaSP']?>"><button type="button" class="btn btn-primary ">Xem Sản Phẩm</button></a>
                    </div>                 
            </div>
            <?php endforeach; ?>  

</div>


    
  
  <nav aria-label="Page navigation example ">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>