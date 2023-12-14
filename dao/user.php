<?php
// require_once 'pdo.php';
// thêm user
function user_insert($username, $password,  $email, $sdt){
    $sql = "INSERT INTO users(username, password,  email, sdt) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $username, $password,  $email, $sdt);
}

function user_insert_id($password, $username, $ten, $diachi,  $email, $sdt){
    $sql = "INSERT INTO users(username, password, ten, diachi,   email, sdt) VALUES (?, ?, ?, ?, ?, ?)";
    return pdo_execute_id($sql, $password, $username, $ten, $diachi,  $email, $sdt);
}
//kiểm tra user 
function  checkuser($username, $password){
    $sql = "SELECT * FROM users WHERE username=? AND password=? ";
    return pdo_query_one($sql, $username, $password);
    // if(is_array($kq)&&(count($kq))){
    //     return $kq['id'];
            
    // }else{
    //     return 0;
    // }
}
// load user
function loadall_user(){
    $sql = "select * from users order by id desc";
    $listuser = pdo_query($sql);
    return $listuser;
}
// xóa user 
function delete_user($id){
    $sql = "delete from users where id=".$id;
     pdo_execute($sql);
}
// function checkuser($username, $password){
//     $sql = "select * from users where username='".$username."'and password='".$password."'";
//     $sp = pdo_query_one($sql);
//     return  $sp;
// }
// function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "UPDATE khach_hang SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
// }

// function khach_hang_delete($ma_kh){
//     $sql = "DELETE FROM khach_hang  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

// function khach_hang_select_all(){
//     $sql = "SELECT * FROM khach_hang";
//     return pdo_query($sql);
// }

// function khach_hang_select_by_id($ma_kh){
//     $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function khach_hang_exist($ma_kh){
//     $sql = "SELECT count(*) FROM khach_hang WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function khach_hang_select_by_role($vai_tro){
//     $sql = "SELECT * FROM khach_hang WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function khach_hang_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }