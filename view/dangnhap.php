<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .containerfull {
    background-color: #f7f7f7;
    padding: 50px;
}

.container3 {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #3498db;
    text-align: center;
}

h2 {
    color: #e74c3c;
    text-align: center;
    margin-bottom: 20px;
}

.row {
    margin-bottom: 20px;
}

label {
    display: block;
    color: #333;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

input[type="checkbox"] {
    margin-right: 5px;
}

input[type="submit"] {
    background-color: #2ecc71;
    color: #fff;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: block;
    margin: 0 auto;
}

input[type="submit"]:hover {
    background-color: #27ae60;
}

ul {
    list-style-type: none;
    padding: 0;
    text-align: center;
}

ul li {
    display: inline-block;
    margin-right: 10px;
}

a {
    color: #e74c3c;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    
<section class="containerfull bg1 padd50">
        <div class="container3">
            <h1>ĐĂNG NHẬP</h1>
            <h2>
                <?php
                    if(isset($_SESSION['tb_dangnhap'])&&($_SESSION['tb_dangnhap']!="")){
                        echo $_SESSION['tb_dangnhap'];
                        unset( $_SESSION['tb_dangnhap']);
                    }   
                ?>
            </h2>
            <form action="index.php?pg=login" method="post">
                            <div class="row mb10">
                                Ten dang nhap <br>
                                <input type="text" name="username">
                            </div>
                            <div class="row mb10">
                                Mat khau <br>
                                <input type="password" name="password">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="">Ghi nho tai khoan
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="dang nhap" name="dangnhap">
                            </div>
                        </form>
                        <li>
                            <a href="">Quen mat khau</a>
                        </li>
                        <li>
                            <a href="index.php?pg=dangky">Dang ky thanh vien</a>
                        </li>

        </div>
</section>
</body>
</html>