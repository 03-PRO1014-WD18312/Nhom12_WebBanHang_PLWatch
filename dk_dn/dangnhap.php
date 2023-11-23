
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