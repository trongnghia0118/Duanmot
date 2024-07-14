<h2>Tài Khoản</h2>
          <a href="?mod=admin&act=user-add" class="btn btn-danger float-end">Thêm Tài Khoản</a>
          <table class="table text-center align-middle">
            <thead>
              <tr>
                <th>STT</th>
                <th>ANH</th>
                <th class="text-start">TEN</th>
                <th>SDT</th>
                <th>QUYEN</th>
                <th class="text-end">HANHDONG</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($dstk as $TaiKhoan):?>
              <tr>
                <td><?=$i?></td>
                <td><img src="template/upload/avatar/1.jpg" alt="" style="width: 40px; height: 40px;" class="rounder-3"></td>
                <td class="text-start"><?=$TaiKhoan['HoTen']?></td>
                <td><?=$TaiKhoan['SoDienThoai']?></td>
                <td>
                <?php switch ($TaiKhoan['Quyen']) {
                    case '0':
                        echo '<span class="badge text-bg-success">Khách Hàng</span>';
                        break;
                    case '1':
                        echo '<span class="badge text-bg-danger">Quản Lý</span>';
                        break;
                    case '2':
                        echo '<span class="badge text-bg-warning">Admin</span>';
                    default:
                        # code...
                        break;
                }
                ?>
                </td>
                <td class="text-end">
                  <a href="?mod=admin&act=user-edit&id=<?=$TaiKhoan['MaTK']?>" class="btn btn-warning text-end">Sửa</a>
                </td>
              </tr>
              <?php $i++;endforeach;?>
            </tbody>
          </table>
        </div>
            </div>
            
          </div>
    </div>