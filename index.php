<?php
    include "dao/pdo.php";
    include "dao/danhmuc.php";
    include "dao/sanpham.php";
    include "view/header.php";
    //dat trang chu
    $dssp_new= get_dssp_new();
    $dssp_best= get_dssp_best();
    $dssp_view= get_dssp_view();
    if (!isset($_GET['pg'])){
        include "view/home.php";
    }else{
        switch ($_GET['pg']) {
            case 'sanpham':
                $dsdm=danhmuc_all();
                $kyw='';
                $titlepage='';
                if(!isset($_GET['iddm'])){
                    $iddm=0;
                    
                }else{
                    $iddm=$_GET['iddm'];
                    $titlepage=get_name_dm($iddm);
                }
                if(isset($_POST['timkiem'])&&($_POST['timkiem'])){
                    $kyw=$_POST['kyw'];
                    $titlepage="kết quả tìm kiếm với từ khóa : ".$kyw;
                }

                $dssp=get_dssp($kyw,$iddm);
                include "view/sanpham.php";
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    }
    
    
    include "view/footer.php";
?>