<?php
    function get_tongdonhang(){
        $tong=0;
        foreach ($_SESSION['giohang'] as $key => $sp) {
            $id = $key+1;
            extract($sp);

            $tt=(int)$sp[2]*(int)$sp[3];    
            $tong+=$tt;
    
        }
        return $tong;
    }
    function cart_insert($idbill, $idpro,  $price, $name, $img, $soluong, $thanhtien ){
        $sql = "INSERT INTO cart(idbill, idpro,  price, name, img, soluong, thanhtien) VALUES (?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $idbill, $idpro,  $price, $name, $img, $soluong, $thanhtien);
    }
    function loadall_hang(){
        $sql = "select * from cart order by id desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    // load don hang 
?>