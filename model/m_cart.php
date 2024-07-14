<?php 
include_once 'm_pdo.php';

function history_getCart($MaTK){
    return pdo_query("SELECT * FROM hoadon hd INNER JOIN chitiethoadon ct ON hd.MaHD = ct.MaHD INNER JOIN sanpham sp ON ct.MaSP = sp.MaSP WHERE hd.MaTK=? AND hd.TrangThai=?", $MaTK, 'gio-sach');
}
function history_removeFromCart($MaHD, $MaSP){
    pdo_execute("DELETE FROM chitiethoadon WHERE MaHD=? AND MaSP=?", $MaHD, $MaSP);
}
function history_removeCart($MaHD){
    pdo_execute("DELETE FROM chitiethoadon WHERE MaHD=?", $MaHD);
}
function history_updateCart($MaHD, $TongTien, $TrangThai){
    pdo_execute("UPDATE hoadon SET TongTien=?, TrangThai=? WHERE MaHD=?", $TongTien, $TrangThai, $MaHD);
}
function history_updatepay($MaHD, $TrangThai){
    pdo_execute("UPDATE hoadon SET TrangThai=? WHERE MaHD=?",$TrangThai, $MaHD);
}
function get_hd_thanhtoan($id){
    return pdo_query_one("SELECT * FROM hoadon hd INNER JOIN chitiethoadon ct ON hd.MaHD = hd.MaHD Where hd.MaHD=?",$id);
}
function history_get_account($MaTK){
    return pdo_query("SELECT * FROM hoadon WHERE MaTK=?", $MaTK);
}
function hoadon_COUNT(){
    return pdo_query_value("SELECT COUNT(*) FROM hoadon");
}
function hoadon_stat(){
    return pdo_query("SELECT COUNT(DISTINCT MaTK) AS SoKhachHang, COUNT(MaHD) AS SoLuotMua, SUM(tongdonhang) AS DoanhThu FROM hoadon WHERE thanhtoan='da-thanh-toan'");
}
function hoadon_getAll(){
    return pdo_query("SELECT * FROM hoadon");
}
function history_edit($MaHD, $TrangThai){
    pdo_execute("UPDATE hoadon SET TrangThai=? WHERE MaHD=?",$TrangThai,$MaHD);
}
function history_getBy_id($MaHD){
    return pdo_query_one("SELECT * FROM hoadon WHERE MaHD=?", $MaHD);
}
function history_delete($MaHD){
    pdo_execute("DELETE FROM hoadon WHERE MaHD=?",$MaHD);
}
function history_get_hoadon($MaHD){
    return pdo_query_one("SELECT * FROM hoadon WHERE MaHD=?", $MaHD);
}
function history_get_soluong($MaHD){
    return pdo_query("SELECT * FROM chitiethoadon WHERE MaHD=?",$MaHD);
}
function history_get_hinhanh($MaHD){
    return pdo_query_one("SELECT * FROM chitiethoadon WHERE MaHD=?",$MaHD);
}
function history_get_sanpham($MaHD){
    return pdo_query("SELECT * FROM chitiethoadon WHERE MaHD=?",$MaHD);
}
function history_chitiet($MaHD){
    return pdo_query_one("SELECT * FROM hoadon WHERE MaHD=?",$MaHD);
}
function history_chitietsp($MaHD){
    return pdo_query("SELECT * FROM hoadon hd INNER JOIN chitiethoadon ct ON hd.MaHD = ct.MaHD INNER JOIN sanpham sp ON ct.MaSP = sp.MaSP WHERE hd.MaHD=?",$MaHD);
}
function history_get_adhoadon($MaHD){
    return pdo_query_one("SELECT * FROM hoadon WHERE MaHD=?", $MaHD);
}
function history_get_adsoluong($MaHD){
    return pdo_query("SELECT * FROM chitiethoadon WHERE MaHD=?",$MaHD);
}
function history_user_delete($MaHD){
    pdo_execute("DELETE FROM hoadon WHERE MaHD=?",$MaHD);
}
function history_remove($MaHD, $TrangThai){
    pdo_execute("UPDATE hoadon SET TrangThai=? WHERE MaHD=?",$TrangThai,$MaHD);
}
