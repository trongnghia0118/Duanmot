<?php
include_once "model/m_pdo.php";
function Get_category_All(){
    return pdo_query("SELECT * FROM hang");
}
function Get_category($id){
    return pdo_query_one("SELECT * FROM hang Where MaHang=?", $id);
}
function category_COUNT(){
    return pdo_query_value("SELECT COUNT(*) FROM hang");
}
function category_statByProduct(){
    return pdo_query("SELECT h.MaHang,h.TenHang,count(sp.MaSP) AS SoLuong,AVG(sp.GiaTri) AS TrungBinh,MIN(sp.GiaTri) AS ThapNhat,MAX(sp.GiaTri) AS CaoNhat FROM hang h LEFT JOIN sanpham sp ON h.MaHang = sp.MaHang GROUP BY h.MaHang, h.TenHang;");
}
function Category_getall(){
    return pdo_query("SELECT * FROM hang");
}
function category_add($TenHang){
    pdo_execute("INSERT INTO hang(`TenHang`) VALUES(?)",$TenHang);
}
function category_edit($MaHang,$TenHang){
    pdo_execute("UPDATE hang SET TenHang=? WHERE MaHang=?",$TenHang,$MaHang);
}
function category_getBy_id($MaHang){
    return pdo_query_one("SELECT * FROM hang WHERE MaHang=?", $MaHang);
}
function category_delete($MaHang){
    pdo_execute("DELETE FROM hang WHERE MaHang=?",$MaHang);
}
