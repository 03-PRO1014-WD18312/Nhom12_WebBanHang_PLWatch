<?php
    function bill_insert_id($madh, $iduser, $nguoidat_ten, $nguoidat_diachi,  $nguoidat_email, $nguoidat_tel, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $total, $ship, $voucher, $tongthanhtoan, $pttt){
        $sql = "INSERT INTO bill(madh, iduser, nguoidat_ten, nguoidat_diachi, nguoidat_email, nguoidat_tel, nguoinhan_ten, nguoinhan_diachi, nguoinhan_tel, total, ship, voucher, tongthanhtoan, pttt ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        return pdo_execute_id($sql,$madh, $iduser, $nguoidat_ten, $nguoidat_diachi,  $nguoidat_email, $nguoidat_tel, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $total, $ship, $voucher, $tongthanhtoan, $pttt);
        
    }
    function loadall_donhang(){
        $sql = "select * from bill order by id desc";
        $listdonhang = pdo_query($sql);
        return $listdonhang;
    }
    function delete_donhang($id){
        $sql = "delete from bill where id=".$id;
         pdo_execute($sql);
    }
    function loadone_donhang($id){
        $sql = "select * from bill where id=".$_GET['id'];
        $dh = pdo_query_one($sql);
        return  $dh;
    }
    function  update_donhang($id, $madh, $tennguoidat, $diachi, $sdt , $email, $trangthai){
        $sql = "update bill set  madh='".$madh."', nguoidat_ten='".$tennguoidat."', nguoidat_tel='".$sdt."', nguoidat_email='".$email."', nguoidat_diachi='".$diachi."', trangthai='".$trangthai."' where id=".$id;
        pdo_execute($sql);
    }
?>