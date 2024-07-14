<h2>Giỏ Hàng</h2>
<div class="row">
  <div class="col-md-8">
<?php

if ((isset($_SESSION['giohang']))&&(count($_SESSION['giohang'])>0)){
  echo '<table class="table">
    <tr>
    <th class="text-start">STT</th>
      <th class="text-start">Ảnh</th>
      <th class="text-end">Tựa Sản Phẩm</th>
      <th class="text-end">Giá Trị</th>
      <th class="text-end">size</th>
      <th class="text-end">Số Lượng</th>
      <th class="text-end">Thành Tiền</th>
      <th>Hành Động</th>
    </tr>';
    $i=0;
    $tong=0;
      foreach ($_SESSION['giohang'] as $item) {
        $tt = $item[3]*$item[4];
        $tong+=$tt;
        echo'<tr>
        <td>'.($i+1).'</td>
        <td class="text-start"><img src="template/upload/product/'.$item[2].'" class="rouded-3" style="width:50px"></td>
        <td class="text-end" >'.$item[1].'</td>
        <td class="text-end">'.$item[3].'</td>
        <td class="text-end">'.$item[5].'</td>
        <td class="text-end">'.$item[4].'</td>
        <td class="text-end">'.$tt.'</td>
        <td><a href="?mod=product&act=removeCart&id='.$i.'">Xóa</a></td>
      </tr>';
      $i++;
      }
      echo '<tr><th class="text-end"colspan="6">Tổng Giá Trị:</th><td class="text-end">'.$tong.'</td><td></td></tr>';
      echo '</table>';
    }else{
      echo 'Giỏ Hàng Chưa Có Sản Phẩm';
    }
        ?>
        <br>
        <a href="?mod=page&act=home">Tiếp Tục Mua</a> | <a href="?mod=product&act=removeCart">Xóa Hết</a>
        </div>
        <div class="col-md-4">
          <h3>Thông Tin Đặt Hàng</h3>
          <form action="?mod=page&act=thanhtoantien" method="post">
            <input type="hidden" name="TongDonHang" value="<?=$tong?>">
          <table class="table">
            <tr>
              <td><input type="text" class="form-control" name="HoTen" placeholder="Nhập Họ Tên"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control" name="DiaChi" placeholder="Địa Chỉ"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control" name="Email" placeholder="email"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control" name="SoDienThoai" placeholder="Số Điện Thoại"></td>
            </tr>
            <tr>
              <td>
                <input type="radio" name = "pttt" value="1">Thanh Toán Khi Nhận Hàng <br>
                <input type="radio" name = "pttt" value="2">Thanh Toán Khi QR MoMo <br>
                <input type="radio" name = "pttt" value="3">Thanh Toán Khi ATM MoMo <br>

              </td>
            </tr>
            <tr>
              <td><input type="submit" value="Thanh Toán" name="thanhtoan"></td>
            </tr>
          </table>
          </form>
        </div>
        </div>
          <script>
            function tang(x){
              var cha = x.parentElement;
              var soluongcu=cha.children[1];
              var soluongmoi=parseInt(soluongcu.innerText)+1;
              soluongcu.innerText=soluongmoi;
              sessionStorage.setItem("giohang", JSON.stringify(giohang));
            }
            function giam(x){
              var cha = x.parentElement;
              var soluongcu=cha.children[1];
              if(parseInt(soluongcu.innerText)>1){
              var soluongmoi=parseInt(soluongcu.innerText)-1;
              soluongcu.innerText=soluongmoi;
              }else{
                alert("Không Thể Giảm dưới 1");
              }
            }
          </script>
  
  
  
    
       
   