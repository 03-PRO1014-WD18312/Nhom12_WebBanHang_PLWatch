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
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #3498db;
}

.row {
    margin-bottom: 20px;
}

input[type="email"],
input[type="text"],
input[type="password"],
input[type="tel"] {
    width: 100%;
    padding: 15px;
    margin-bottom: 15px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

input[type="checkbox"] {
    margin-right: 5px;
}

a {
    color: #e74c3c;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

input[type="submit"],
input[type="reset"] {
    background-color: #2ecc71;
    color: #fff;
    padding: 15px 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
    background-color: #27ae60;
}

    </style>
</head>
<body>
<section class="containerfull bg1 padd50">
    <div class="container3">
        <h1>ĐĂNG KÝ</h1>
        <form action="index.php?pg=adduser" method="post" require_once>
            <div class="row mb10">
                Email <br>
                <input type="email" name="email" id="email">
            </div>
            <div class="row mb10">
                Tên đăng nhập <br>
                <input type="text" name="username">
            </div>
            <div class="row mb10">
                Mật khẩu <br>
                <input type="password" name="password">
            </div>
            <div class="row mb10">
                Số điện thoại <br>
                <input type="tel" name="sdt" id="sdt">
            </div>
            <div class="row mb10">
                <input type="checkbox" id="agree">Tôi đồng ý với các điều khoản <a href="#">người dùng</a> và<a href="#"> bảo mật</a>
            </div>
            <div class="row mb10">
                <input type="submit" value="Đăng ký" name="dangky">
            </div>
            <div class="row mb10">
                <input type="reset" value="Nhập lại">
            </div>
        </form>
    </div>
</section>

</body>
</html>