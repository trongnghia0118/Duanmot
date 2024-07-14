<h2>Hóa Đơn</h2>
          <table class="table text-center align-middle">
            <thead>
              <tr>
                <th>Mã Hóa Đơn</th>
                <th class="text-start">Tên Khách Hàng</th>
                <th class="text-start">Tổng Tiền</th>
                <th class="text-end">Trạng Thái</th>
                <th class="text-end">Chi Tiết</th>
                <th class="text-end">Hành Động</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($dshd as $hoadon):?>
              <tr>
                <td>Memolstudio:<?=$hoadon['maDH']?></td>
                <td class="text-start"><?=$hoadon['HoTen']?></td>
                <td class="text-start"><?=$hoadon['tongdonhang']?></td>
                <td class="text-end">
                <?php switch ($hoadon['TrangThai']) {
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
                        echo '<span class="badge text-bg-danger">Đã Hủy Hàng</span>';
                        break;
                    default:
                        # code...
                        break;
                }?>
                </td>
                <td class="text-end">
                  <a href="?mod=admin&act=history-chitiet&id=<?=$hoadon['MaHD']?>" class="btn btn-warning text-end">Chi Tiết</a>
                  
                </td>
                <td class="text-end">
                  <a href="?mod=admin&act=history-edit&id=<?=$hoadon['MaHD']?>" class="btn btn-warning text-end">Sửa</a>
                </td>
              </tr>
              <?php $i++;endforeach;?>
            </tbody>
          </table>
        </div>
            </div>
            
          </div>
    </div>