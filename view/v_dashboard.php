<h2>Tổng quan</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-primary mb-3" >
                        <div class="card-body">
                          <h5 class="card-title text-center">Sản Phẩm</h5>
                          <p class="card-text fs-1 text-center"><?=$tksp?></p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-primary mb-3" >
                        <div class="card-body">
                          <h5 class="card-title text-center">Khách Hàng</h5>
                          <p class="card-text fs-1 text-center"><?=$tkkh?></p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-primary mb-3" >
                        <div class="card-body">
                          <h5 class="card-title text-center">Hãng Giày</h5>
                          <p class="card-text fs-1 text-center"><?=$tkh?></p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-primary mb-3" >
                        <div class="card-body">
                          <h5 class="card-title text-center">Hóa Đơn</h5>
                          <p class="card-text fs-1 text-center"><?=$tkhd?></p>
                        </div>
                      </div>
                </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong>Thống Kê Sản Phẩm Theo Hãng</strong>
                  </div>
                  <div class="card-body">
                  <div id="myChart" style="max-width:700px; height:400px"></div>
                    <table class="table text-end">
                      <thead>
                        <tr>
                          <th class="text-start">Hãng</th>
                          <th>Số Lượng Sản Phẩm</th>
                          <th>Giá Thấp Nhất</th>
                          <th>Giá Trung Bình</th>
                          <th>Giá Cao Nhất</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($tksptheohang as $hang):?>
                        <tr>
                          <td class="text-start"><?=$hang['TenHang']?></td>
                          <td><?=$hang['SoLuong']?></td>
                          <td><?=number_format($hang['ThapNhat'])?></td>
                          <td><?=number_format($hang['TrungBinh'])?></td>
                          <td><?=number_format($hang['CaoNhat'])?></td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>

                  
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong>Thống Kê Doanh Thu</strong>
                  </div>
                  <div class="cart-body">
                   <div id="myChart2" style="max-width:700px; height:400px"></div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Số Khách Hàng</th>
                          <th>Lượt Mua</th>
                          <th>Doanh Thu</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($tkdoanhthu as $dt):?>
                        <tr>
                          <td><?=$dt['SoKhachHang']?></td>
                          <td><?=$dt['SoLuotMua']?></td>
                          <td><?=number_format($dt['DoanhThu'])?></td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Your Function
function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Hãng', 'Số Lượng'],
  <?php foreach($tksptheohang as $hang){
  echo"['".$hang['TenHang']."',".$hang['SoLuong']."],";
}?>
]);

// Set Options
const options = {
  title:'Biểu Đồ Số Lượng Sản Phẩm',
  is3D: true
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

// Set Data
const data2 = google.visualization.arrayToDataTable([
  ['Số Khách Hàng', 'Doanh Thu'],
  <?php foreach($tkdoanhthu as $dt){
  echo"['Số Khách Hàng ".$dt['SoKhachHang']."',".$dt['DoanhThu']."],";
  
  }?>
]);

// Set Options
const options2 = {
  title:'Thống Kê Doanh Thu'
};

// Draw
const chart2 = new google.visualization.ColumnChart(document.getElementById('myChart2'));
chart2.draw(data2, options2);
}

</script>