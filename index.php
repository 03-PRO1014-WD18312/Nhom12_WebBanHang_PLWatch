<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['giohang'])){
        $_SESSION['giohang'] =[];
    }
    include "dao/pdo.php";
    include "dao/user.php";
    include "dao/danhmuc.php";
    include "dao/sanpham.php";
    include "dao/giohang.php";
    include "dao/donhang.php";
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
            case 'addcart':
                
                if (isset($_POST['addcart'])) {
                    $idpro = $_POST['idpro'];
                    $name=$_POST['tensp'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=$_POST['soluong'];
                    $thanhtien = (int)$soluong * (int)$price;
                    $sp=[$name,$img,$price,$soluong,$idpro,$thanhtien];
                    array_push($_SESSION['giohang'],$sp);
                    header('location: index.php?pg=viewcart');
                }
                
                // echo var_dump($_SESSION['giohang']);
                // include "view/viewcart.php";
                break;
            case 'dangnhap':
                include "view/dangnhap.php";
                break;
            case 'chitietsanpham':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id  = $_GET['id'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    
                    include "view/chitietsanpham.php";
                }else{
                    include "view/home.php";
                }
                
                break;
            case 'viewcart':
                    
                include "view/viewcart.php";
                break;
            case 'dlcart':
                include "view/dlcart.php";
                break;
            case 'logout':
                if(isset($_SESSION['s_user']) && $_SESSION['s_user']!=""){
                    unset($_SESSION['s_user']);
                }
                header ('location: index.php');
                break;
            case 'adduser':
                if(isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $sdt    = $_POST['sdt'];
                    user_insert($username, $password,  $email, $sdt);
                }
                include "view/dangnhap.php";
                break;
            case 'login':
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $kq= checkuser($username, $password);
                    if(is_array($kq)&&(count($kq))){
                        $_SESSION['s_user'] = $kq;
                        header  ('location: index.php');
                    }else{
                        $tb = "Tài khoản không tồn tại hoặc thông tin đăng nhập chưa chính xác";
                        $_SESSION['tb_dangnhap'] = $tb;
                        header  ('location: index.php?pg=dangnhap');
                    }
                }
                break;
            case 'dangky':
                include 'view/dangky.php';
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            
            case 'donhang':
                if(isset($_POST['donhang']) ){
                    $hoten=$_POST['hoten'];
                    $diachi=$_POST['diachi'];
                    $dienthoai=$_POST['dienthoai'];
                    $email=$_POST['email'];
                    $nguoinhan_ten=$_POST['hoten_nguoinhan'];
                    $nguoinhan_diachi=$_POST['diachi_nguoinhan'];
                    $nguoinhan_tel=$_POST['dienthoai_nguoinhan'];
                    $pttt=$_POST['pttt'];
                    $username= "guest".rand(1,999);
                    $password="123456";

                    $iduser=user_insert_id($password, $username, $hoten, $email, $dienthoai, $diachi);

                    $madh = "F-Watch".$iduser."-".date("His-dmY");   
                    $total = get_tongdonhang();
                    $ship = 0;
                    $voucher = 0;
                    $tongthanhtoan = ($total - $voucher) + $ship;
                    $idbill = bill_insert_id($madh, $iduser, $hoten, $diachi,  $email, $dienthoai, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $total, $ship, $voucher, $tongthanhtoan, $pttt);
                    
                    foreach ($_SESSION['giohang'] as $key => $sp) {
                        $id = $key+1;
                        extract($sp);
                        $name = $sp[0];
                        $price = $sp[2];
                        $img = $sp[1];
                        $soluong = $sp[3];
                        $thanhtien = $sp[2] + $sp[3];
                        $idpro =$id;
                        cart_insert($idbill, $idpro,  $price, $name, $img, $soluong, $thanhtien );
                    }
                    
                    // $_SESSION['giohang']=null;
                    
                    include "view/donhang_confirm.php";
                    
                    
                    

                }
                

                include "view/donhang.php";
                
                break;
            case 'donhangconfirm':
                include "view/donhang_confirm.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    }
    
    
    include "view/footer.php";
?>