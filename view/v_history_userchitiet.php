<h2>Hóa Đơn</h2>
          <table class="table text-center align-middle">
            <thead>
              <tr>
                <th>Mã Khách Hàng</th>
                <th class="text-start">Tên Khách Hàng</th>
                <th class="text-start">Số Điện Thoại </th>
                <th class="text-start">Địa Chỉ </th>
                <th class="text-start">Email </th>
                <th class="text-start">Số Lượng </th>
                <th class="text-start">Sản Phẩm Đã Mua</th>
                <th class="text-start">Thanh Toán</th>
                <th class="text-end">Trạng Thái</th>
                <th class="text-end">Tổng Tiền</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?=$cthoadon['MaTK']?></td>
                <td class="text-start"><?=$cthoadon['HoTen']?></td>
                <td class="text-start"><?=$cthoadon['SoDienThoai']?></td>
                <td class="text-start"><?=$cthoadon['DiaChi']?></td>
                <td class="text-start"><?=$cthoadon['Email']?></td>
                <td class="text-start"><?php foreach($sl as $soluong):?>
                  <?=$soluong['soluong']?> <br><br>
                <?php endforeach;?></td>
                <td class="text-start">
                  <?php foreach ($sanpham as $sp):?>
                    <img src="template/upload/product/<?=$sp['HinhAnh']?>" class="rouded-3" style="width:50px">
                    <br> 
                    <?=$sp['TenSanPham']?> <br>
                    
                  <?php endforeach;?>
            </td>
            <td class="text-start"><?php switch ($cthoadon['thanhtoan']) {
                    case 'da-thanh-toan':
                        echo '<span class="badge text-bg-success">Đã Thanh Toán</span>';
                        break;
                    case 'chua-thanh-toan':
                        echo '<span class="badge text-bg-warning">Chưa Thanh Toán</span>';
                        break;
                    default:
                        # code...
                        break;
                }
                ?></td>
                <td class="text-end">
                <?php switch ($cthoadon['TrangThai']) {
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
                <td class="text-end"><?=$cthoadon['tongdonhang']?></td>
              </tr>
            </tbody>
          </table>