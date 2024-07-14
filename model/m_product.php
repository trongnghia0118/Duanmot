<?php
include_once 'm_pdo.php';
function Get_Product($limit){
    return pdo_query("SELECT * FROM sanpham LIMIT $limit");
}
function Get_Product_By_HOT($limit){
    return pdo_query("SELECT * FROM sanpham Order by soluong ASC LIMIT $limit");
}
function Get_Product_By_Category($id) {
    return pdo_query("SELECT * FROM sanpham WHERE MaHang = $id");
}
function Get_Product_id($id){
    return pdo_query_one("SELECT * FROM sanpham sp INNER JOIN hang h ON sp.MaHang = h.MaHang WHERE sp.MaSP = ?", $id);
}
function Get_IMG_Product($id){
    return pdo_query("SELECT * FROM khoanh kh INNER JOIN sanpham sp ON sp.MaSP = kh.MaSP WHERE kh.MaSP =?", $id);
}
function Get_Product_Random($id){
    return pdo_query("SELECT * FROM sanpham WHERE MaHang = $id ORDER BY rand() LIMIT 4");
}
function Product_search($keyword, $page){
    $batdau = ($page - 1)*8;
    return pdo_query("SELECT * FROM sanpham WHERE TenSanPham LIKE '%$keyword%' LIMIT $batdau,8");
}
function Product_searchTotal($keyword){
    return pdo_query_value("SELECT COUNT(*) FROM sanpham WHERE TenSanPham LIKE '%$keyword%' ");
}
function Product_count(){
    return pdo_query_value("SELECT COUNT(*) FROM sanpham");
}
function Product_getall(){
    return pdo_query("SELECT * FROM sanpham");
}
function product_add($HinhAnh,$TenSanPham,$MoTa,$Soluong,$GiaTri,$MaHang){
    pdo_execute("INSERT INTO sanpham(`HinhAnh`,`TenSanPham`,`MoTa`,`Soluong`,`GiaTri`,`MaHang`) VALUES(?,?,?,?,?,?)",$HinhAnh,$TenSanPham,$MoTa,$Soluong,$GiaTri,$MaHang);
}
function product_edit($MaSP,$HinhAnh,$TenSanPham,$MoTa,$Soluong,$GiaTri,$MaHang){
    pdo_execute("UPDATE sanpham SET HinhAnh=?,TenSanPham=?,MoTa=?,Soluong=?,GiaTri=?,MaHang=? WHERE MaSP=?",$HinhAnh,$TenSanPham,$MoTa,$Soluong,$GiaTri,$MaHang,$MaSP);
}
function product_getBy_id($MaSP){
    return pdo_query_one("SELECT * FROM sanpham WHERE MaSP=?", $MaSP);
}
function product_delete($MaSP){
    pdo_execute("DELETE FROM sanpham WHERE MaSP=?",$MaSP);
}
function history_edit_tt($MaSP, $TrangThai){
    pdo_execute("UPDATE sanpham SET TrangThai=? WHERE MaSP=?",$TrangThai,$MaSP);
}
