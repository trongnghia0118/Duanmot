<h2>Hóa Đơn</h2>
          <table class="table text-center align-middle">
            <thead>
              <tr>
                <th>Mã Khách Hàng</th>
                <th class="text-start">Tên Khách Hàng</th>
                <th class="text-start">Số Điện Thoại </th>
                <th class="text-start">Sản Phẩm Đã Mua</th>
                <th class="text-start">Số lượng</th>
                <th class="text-end">Giá Giày</th>
                <th class="text-end">Size</th>
                <th class="text-start">Thanh Toán</th>
                <th class="text-end">Trạng Thái</th>
                <th class="text-end">Tổng Tiền</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?=$cthd['MaTK']?></td>
                <td class="text-start"><?=$cthd['HoTen']?></td>
                <td class="text-start"><?=$cthd['SoDienThoai']?></td>
                <td class="text-start">
                    <?php foreach($hdsp as $sp):?>
                      <img src="template/upload/product/<?=$sp['HinhAnh']?>" class="rouded-3" style="width:50px">
                    <?=$sp['TenSanPham']?><br>
                    <?php endforeach;?>
            </td>
              <td class="text-start">
              <?php foreach($slad as $sl):?>
                <?=$sl['soluong']?> <br><br>
              <?php endforeach;?></td>
              <td class="text-end">
              <?php foreach($slad as $sl):?>
                <?=$sl['GiaTri']?> <br><br>
              <?php endforeach;?></td>
              <td class="text-end">
              <?php foreach($slad as $sl):?>
                <?=$sl['Size']?> <br><br>
              <?php endforeach;?></td>
              <td class="text-start">
              <?php switch ($cthd['thanhtoan']) {
                    case 'chua-thanh-toan':
                        echo '<span class="badge text-bg-warning">Chưa Thanh Toán</span>';
                        break;
                    case 'da-thanh-toan':
                        echo '<span class="badge text-bg-danger">Đã Thanh Toán</span>';
                        break;
                    
                    default:
                        # code...
                        break;
                }
                ?>
              </td>
                <td class="text-end">
                 <?php switch ($cthd['TrangThai']) {
                    case 'chua-xac-nhan':
                        echo '<span class="badge text-bg-success">Chưa Xác Nhận</span>';
                        break;
                    case 'da-xac-nhan':
                        echo '<span class="badge text-bg-danger">Đã Xác Nhận</span>';
                        break;
                    case 'cho-giao':
                      echo '<span class="badge text-bg-danger">Chờ Giao Hàng</span>';
                      break;
                    case 'dang-giao':
                      echo '<span class="badge text-bg-danger">Đang Giao Hàng</span>';
                      break;
                    case 'da-giao':
                      echo '<span class="badge text-bg-danger">Đã Giao Hàng</span>';
                      break;
                      case 'da-huy-don':
                        echo '<span class="badge text-bg-danger">Đã Hủy Đơn</span>';
                        break;
                    default:
                        # code...
                        break;
                }
                ?>
                </td>
                <td class="text-end"><?=$cthd['tongdonhang']?></td>
              </tr>
            </tbody>
          </table>