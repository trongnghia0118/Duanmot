<h2>Sản Phẩm</h2>
          <a href="?mod=admin&act=product-add" class="btn btn-danger float-end">Thêm Sản Phẩm</a>
          <table class="table text-center align-middle">
            <thead>
              <tr>
                <th>Mã Sản Phẩm</th>
                <th>Hình Ảnh</th>
                <th class="text-start">Tên Sản Phẩm</th>
                <th>Mô Tả</th>
                <th>số lượng</th>
                <th>Giá Bán</th>
                <th class="text-end">Mã Hàng</th>
                <th class="text-end">Trạng Thái</th>
                <th class="text-end">Hành Động</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($dssanpham as $sp):?>
              <tr>
                <td><?=$i?></td>
                <td><img src="template/upload/product/<?=$sp['HinhAnh']?>" alt="" style="width: 32px; height: 32px;" class="rounder-3"></td>
                <td class="text-start"><?=$sp['TenSanPham']?></td>
                <td><?=$sp['MoTa']?></td>
                <td><?=$sp['Soluong']?></td>
                <td><?=$sp['GiaTri']?></td>
                <td><?=$sp['MaHang']?></td>
                <td>
                <?php if($sp['TrangThai']=='ngungkinhdoanh'):?>
                  <p>Ngừng Kinh Doanh</p>
                <?php endif;?>
              <?php if($sp['TrangThai']=='conhang'):?>
                <p>Còn Hàng</p>
                <?php endif;?>
          </td>
                <td class="text-end">
                  <a href="?mod=admin&act=product-edit&id=<?=$sp['MaSP']?>" class="btn btn-warning text-end">Sửa</a>
                </td>
              </tr>
              <?php $i++;endforeach;?>
            </tbody>
          </table>
        </div>
            </div>
            
          </div>
    </div>