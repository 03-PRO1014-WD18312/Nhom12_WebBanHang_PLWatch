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
?>