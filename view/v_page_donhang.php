<h2>Thông Tin Đơn Hàng</h2>
<div class="row">
  <div class="col-md-8">
<?php
if(isset($_SESSION['MaHD'])&&($_SESSION['MaHD']>0)){
   $getshowcart=getshowcart($_SESSION['MaHD']);
if ((isset($getshowcart))&&(count($getshowcart)>0)){
  echo '<table class="table">
    <tr>
    <th class="text-start">STT</th>
      <th class="text-start">Ảnh</th>
      <th class="text-end">Tựa Sản Phẩm</th>
      <th class="text-end">Giá Trị</th>
      <th class="text-end">Size</th>
      <th class="text-end">Số Lượng</th>
      <th class="text-end">Thành Tiền</th>
    </tr>';
    $i=0;
    $tong=0;
      foreach ($getshowcart as $item) {
        $tt = $item['soluong']*$item['GiaTri'];
        $tong+=$tt;
        echo'<tr>
        <td>'.($i+1).'</td>
        <td class="text-start"><img src="template/upload/product/'.$item['HinhAnh'].'" class="rouded-3" style="width:50px"></td>
        <td class="text-end" >'.$item['TenSanPham'].'</td>
        <td class="text-end">'.$item['GiaTri'].'</td>
        <th class="text-end">'.$item['Size'].'</th>
        <td class="text-end">'.$item['soluong'].'</td>
        <td class="text-end">'.$tt.'</td>
      </tr>';
      $i++;
      }
      echo '<tr><td colspan="6">Tổng Giá Trị:</td><td>'.$tong.'</td></tr>';
      echo '</table>';
    }
  }else{
    echo "Giỏ Hàng Trống. <a href='?mod=page&act=home'>Tiếp Tục đặt hàng</a>";
  }
        ?>
        </div>
        <div class="col-md-4">
          <?php if(isset($_SESSION['MaHD'])&&($_SESSION['MaHD']>0)){ 
            $orderinfo=getorderinfo($_SESSION['MaHD']);
            if(count($orderinfo)>0){
            ?>
          <h3>Memolstudio:<?=$orderinfo[0]['maDH'];?></h3>
          <table class="table">
            <tr>
              <td><strong>Tên Người Nhận:</strong> <br><?=$orderinfo[0]['HoTen'];?></td>
            </tr>
            <tr>
            <td><strong>Tên Người Nhận:</strong> <br><?=$orderinfo[0]['DiaChi'];?></td>
            </tr>
            <tr>
            <td><strong>Tên Người Nhận:</strong> <br><?=$orderinfo[0]['Email'];?></td>
            </tr>
            <tr>
            <td><strong>Tên Người Nhận:</strong> <br><?=$orderinfo[0]['SoDienThoai'];?></td>
            </tr>
            <tr>
              <td><strong>Phương Thức Thanh Toán <br></strong>
              <?php if($orderinfo[0]['pttt']=='1'):?>
                  <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="?mod=page&act=camon">
                     <input type="submit" value="Thanh Toán Khi Nhận Hàng" class="btn btn-danger">
                    </form>
                  <?php endif;?>
                <?php if($orderinfo[0]['pttt']=='2'):?>
                  <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="?mod=page&act=tienhanhthanhtoanQR">
                     <input type="submit" value="Thanh Toán MoMo QRcode" class="btn btn-danger">
                    </form>
                  <?php endif;?>
                  <?php if($orderinfo[0]['pttt']=='3'):?>
                  <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="?mod=page&act=tienhanhthanhtoanATM">
                     <input type="submit" value="Thanh Toán MoMo ATM" class="btn btn-danger">
                    </form>
                  <?php endif;?>
              </td>
            </tr>
          </table>
          <?php
            }
             }?>
        </div>
        </div>
  
    
       
   