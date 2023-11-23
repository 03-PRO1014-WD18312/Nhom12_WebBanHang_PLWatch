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
                    $name=$_POST['tensp'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=$_POST['soluong'];
                    $sp=[$name,$img,$price,$soluong];
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
                        $tb = "Tai khoan khong ton tai hoc thong tin dang nhap chua chinh xac";
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
            default:
                include "view/home.php";
                break;
        }
    }
    
    
    include "view/footer.php";
?>