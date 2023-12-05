<?php
require_once 'pdo.php';

// function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta);
// }

// function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

// function hang_hoa_delete($ma_hh){
//     $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
//     if(is_array($ma_hh)){
//         foreach ($ma_hh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_hh);
//     }
// }

function get_dssp_new(){
    $sql = "SELECT * FROM sanpham ORDER BY id DESC limit 8 ";
    return pdo_query($sql);
}
function get_dssp_best(){
    $sql = "SELECT * FROM sanpham WHERE bestseller=1 ORDER BY id DESC LIMIT 2 ";
    return pdo_query($sql);
}      
function get_dssp_view(){
    $sql = "SELECT * FROM sanpham ORDER BY view DESC limit 8";
    return pdo_query($sql);
}         
function get_dssp($kyw,$iddm){
    $sql = "SELECT * FROM sanpham WHERE 1";
    if($iddm>0){
        $sql .= " AND iddm=".$iddm;
    }
    if($kyw!=""){
        $sql .= " AND NAME LIKE '%".$kyw."%'" ;
    }
    $sql .= " ORDER BY id DESC ";
    return pdo_query($sql);
    
}
function loadall_sanpham($kyw,$iddm){
    $sql = "SELECT * FROM sanpham WHERE 1";
    if($iddm>0){
        $sql .= " AND iddm=".$iddm;
    }
    if($kyw!=""){
        $sql .= " AND NAME LIKE '%".$kyw."%'" ;
    }
    $sql .= " ORDER BY id DESC ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function insert_sanpham($tensp,$giasp,$img,$mota,$view,$bestseller,$iddm){
    $sql = "INSERT INTO sanpham(name,price,img,mota,view,bestseller,iddm) values('$tensp','$giasp','$img','$view','$mota','$bestseller','$iddm')";
     pdo_execute($sql);
}
function  update_sanpham($id,$iddm,$tensp,$giasp,$mota,$bestseller,$img){
   
    $sql = "update sanpham set  iddm='".$iddm."', name='".$tensp."', price='".$giasp."', bestseller='".$bestseller."', img='".$img."', mota='".$mota."' where id=".$id;
    
    pdo_execute($sql);
}
function loadone_sanpham($id){
    $sql = "select * from sanpham where id=".$_GET['id'];
    $sp = pdo_query_one($sql);
    return  $sp;
}
function delete_sanpham($id){
    $sql = "delete from sanpham where id=".$id;
     pdo_execute($sql);
}
function load_sanpham_cungloai($id,$iddm){
    $sql = "select * from sanpham where iddm=".$iddm." AND id <> ".$_GET['id'];
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// function hang_hoa_select_by_id($ma_hh){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_one($sql, $ma_hh);
// }

// function hang_hoa_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function hang_hoa_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function hang_hoa_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword){
//     $sql = "SELECT * FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }