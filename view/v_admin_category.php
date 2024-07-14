<h2>Sản Phẩm</h2>
          <a href="?mod=admin&act=category-add" class="btn btn-danger float-end">Thêm Sản Phẩm</a>
          <table class="table text-center align-middle">
            <thead>
              <tr>
                <th>Mã Hãng</th>
                <th class="text-start">Tên Hãng</th>
                <th class="text-end">Hành Động</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($dshang as $h):?>
              <tr>
                <td><?=$i?></td>
                <td class="text-start"><?=$h['TenHang']?></td>
                <td class="text-end">
                  <a href="?mod=admin&act=category-edit&id=<?=$h['MaHang']?>" class="btn btn-warning text-end">Sửa</a>
                </td>
              </tr>
              <?php $i++;endforeach;?>
            </tbody>
          </table>
        </div>
            </div>
            
          </div>
    </div>