<?php
include_once "m_pdo.php";
function user_login($SoDienThoai, $MatKhau){
    return pdo_query_one("SELECT * FROM taikhoan WHERE SoDienThoai=? AND MatKhau=?", $SoDienThoai, $MatKhau);

}
function user_getall(){
    return pdo_query("SELECT * FROM taikhoan");
}
function user_checkphone($SoDienThoai){
    return pdo_query_one("SELECT * FROM taikhoan WHERE SoDienThoai=?",$SoDienThoai);
}
function user_add($HoTen,$SoDienThoai,$Quyen,$MatKhau){
    pdo_execute("INSERT INTO taikhoan(`HoTen`,`SoDienThoai`,`Quyen`,`MatKhau`) VALUES(?,?,?,?)",$HoTen,$SoDienThoai,$Quyen,$MatKhau);
}
function user_getBy_id($MaTK){
    return pdo_query_one("SELECT * FROM taikhoan WHERE MaTK=?", $MaTK);
}
function user_edit($MaTK,$HoTen,$SoDienThoai,$Quyen,$MatKhau){
    pdo_execute("UPDATE taikhoan SET HoTen=?,SoDienThoai=?,Quyen=?,MatKhau=? WHERE MaTK=?",$HoTen,$SoDienThoai,$Quyen,$MatKhau,$MaTK);
}
function user_delete($MaTK){
    pdo_execute("DELETE FROM taikhoan WHERE MaTK=?",$MaTK);
}
function user_COUNT(){
    return pdo_query_value("SELECT COUNT(*) FROM taikhoan WHERE Quyen=0");
}
function user_dangky($HoTen,$SoDienThoai,$MatKhau){
    pdo_execute("INSERT INTO taikhoan(`HoTen`,`SoDienThoai`,`MatKhau`) VALUES(?,?,?)",$HoTen,$SoDienThoai,$MatKhau);
}
?>