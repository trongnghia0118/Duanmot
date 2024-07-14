<?php 
include_once 'm_pdo.php';
function taodonhang($maDH,$MaTK,$tongdonhang,$pttt,$HoTen,$DiaChi,$Email,$SoDienThoai){
    $conn=pdo_get_connection();
    $sql = "INSERT INTO hoadon (maDH,MaTK,tongdonhang,pttt,HoTen,DiaChi,Email,SoDienThoai) VALUES('".$maDH."','".$MaTK."','".$tongdonhang."','".$pttt."','".$HoTen."','".$DiaChi."','".$Email."','".$SoDienThoai."')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}
function addtocart($iddh,$MaSP,$TenSanPham,$HinhAnh,$GiaTri,$SoLuong,$Size){
   $conn=pdo_get_connection();
    $sql = "INSERT INTO chitiethoadon (MaHD,MaSP,TenSanPham,HinhAnh,GiaTri,SoLuong,Size) VALUES('".$iddh."','".$MaSP."','".$TenSanPham."','".$HinhAnh."','".$GiaTri."','".$SoLuong."','".$Size."')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}
function tt_thanhtoan($iddh2,$thanhtoan){
    pdo_execute("UPDATE hoadon SET thanhtoan=? WHERE MaHD=?",$thanhtoan,$iddh2);
}
function getshowcart($iddh){
    $conn=pdo_get_connection();
    $stmt = $conn->prepare("SELECT * FROM chitiethoadon WHERE MaHD=".$iddh);
    $stmt->execute();
    $result =$stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
    
}
function getorderinfo($iddh){
    $conn=pdo_get_connection();
    $stmt = $conn->prepare("SELECT * FROM hoadon WHERE MaHD=".$iddh);
    $stmt->execute();
    $result =$stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
    
}