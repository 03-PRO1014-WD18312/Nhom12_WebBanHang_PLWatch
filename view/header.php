<?php
    if(isset($_SESSION['s_user']) && $_SESSION['s_user']!=""){
        extract($_SESSION['s_user']); 
        $html_account='<li><a href="index.php?pg=myaccount">'.$username.'</a></li>
                        <li><a href="index.php?pg=logout">Thoat</a></li>';
    }else{
        $html_account='<li><a href="index.php?pg=dangky">Đăng ký</a></li>
                       <li><a href="index.php?pg=dangnhap">Đăng nhập</a></li>';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F-Watch</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <header>
        <div class="logo">
            <a href="index.php"><img src="upload/Screenshot 2023-11-13 203703.png" alt=""></a>
        </div>
        <div class="menu">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="index.php?pg=sanpham">Sản Phẩm</a></li>
            <li><a href="">Giới Thiệu</a></li>
            <li><a href="">Hỏi đáp</a></li>
        </div>
        <div class="others">
            <li>
                <form action="index.php?pg=sanpham" method="post" require> 
                    <input type="text" name="kyw" id="" placeholder="Nhap tu khoa tim kiem">
                    <input class="submit" type="submit" name="timkiem" value="Tìm kiếm">
                </form>
            </li>
            <?=$html_account;?>
            
            <li><a href="index.php?pg=viewcart">Giỏ hàng</a></li>
        </div>
    </header>