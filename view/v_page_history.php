<h1>Tổng Hợp Hóa Đơn</h1>
<table class="table">
    <thead>
        <tr>
            <th>Mã Đơn Hàng</th>
            <th>Tổng Tiền</th>
            <th>Trạng Thái</th>
            <th>Chi Tiết</th>
            <th>Hành Động</th>
        </tr>
        <tbody>
            <?php foreach($dshoadon as $hoadon):?>
            <tr>
                <td>Memolstudio:<?=$hoadon['maDH']?></td>
                <td><?=$hoadon['tongdonhang']?></td>
                <td>
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
                    case 'da-huy-don';
                    echo '<span class="badge text-bg-danger">Đã Hủy</span>';
                    break;
                    default:
                        # code...
                        break;
                }?>
                </td>
                <td><a href="?mod=page&act=history-chitiet&id=<?=$hoadon['MaHD']?>" class="btn btn-warning text-end">Chi Tiết</a></td>
                <td>
                <?php if ($hoadon['TrangThai']=='chua-xac-nhan'): ?>
                  <a href="?mod=page&act=history-remove&id=<?=$hoadon['MaHD']?>" class="btn btn-warning text-end">Hủy Đơn</a>
                    <?php endif;?>
                    <?php if ($hoadon['TrangThai']=='da-xac-nhan'): ?>
                   <p>Đơn Hàng Đã Xác Nhận</p>
                    <?php endif;?>
                    <?php if ($hoadon['TrangThai']=='da-huy-don'): ?>
                   <p>Đã Hủy Đơn Hàng</p>
                    <?php endif;?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </thead>
</table>
<script>
            function deleteHistory(MaHD){
             var kq = confirm("Bạn có muốn xóa hóa đơn này không ?");
             if (kq){
               window.location = '?mod=page&act=history-delete&id='+MaHD;
              }
            }
          </script>