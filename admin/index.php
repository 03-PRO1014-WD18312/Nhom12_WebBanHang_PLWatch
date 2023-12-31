<?php
include "header.php";
include "../dao/danhmuc.php";
include "../dao/sanpham.php";
include "../dao/user.php";
include "../dao/donhang.php";
if (!isset($_GET['pg'])) {
    include "home.php";
} else {
    switch ($_GET['pg']) {
        case 'lisdm':
            $listdanhmuc = danhmuc_all();
            include "danhmuc/list.php";
            break;
        case 'adddm':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "them thanh cong";
            }

            include "danhmuc/add.php";
            break;
            "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }

            $listdanhmuc = danhmuc_all();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "cap nhat thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && $_POST['listok']) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'addsp':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $view = $_POST['view'];
                $bestseller = $_POST['bestseller'];
                $img = $_FILES['img']['name'];


                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);


                insert_sanpham($tensp, $giasp, $img, $view, $mota, $bestseller, $iddm);
                $thongbao = "them thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'suadonhang':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_donhang($_GET['id']);
            }
            
            include "donhang/update.php";
            break;
        case 'updatedonhang':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id = $_POST['id'];
                $madh = $_POST['madh'];
                $tennguoidat = $_POST['tennguoidat'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $trangthai = $_POST['trangthai'];
                


                update_donhang($id,$madh,$tennguoidat,$diachi,$sdt,$email,$trangthai);
                $thongbao = "cap nhat thanh cong";
            }
            // $listdanhmuc=loadall_danhmuc();
            // $listsanpham=loadall_sanpham();
            // include "sanpham/list.php";
            header('location:?pg=listdonhang');
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['price'];
                $mota = $_POST['mota'];
                $bestseller = $_POST['bestseller'];
                $img = $_FILES['img']['name'];


                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);


                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $bestseller, $img);
                $thongbao = "cap nhat thanh cong";
            }
            // $listdanhmuc=loadall_danhmuc();
            // $listsanpham=loadall_sanpham();
            // include "sanpham/list.php";
            header('location:?pg=listsp');
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }

            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'listuser':
            $listuser = loadall_user();
            include "user/list.php";

            break;
        case 'listdonhang':
            $listdonhang = loadall_donhang();
            include "donhang/list.php";
    
            break;
        case 'xoauser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_user($_GET['id']);
            }

            $listuser = loadall_user();
            include "user/list.php";
            break;
        case 'xoadonhang':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_donhang($_GET['id']);
            }

            $listdonhang = loadall_donhang();
            include "user/list.php";
            break;
        default:
            include "home.php";
            break;
    }
}



include "footer.php";
