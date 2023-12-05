<?php
  if (is_array($sanpham)){
    extract($sanpham);
   
}
?>
<div class="row">
            <div class="row frmtitle">
                <h1>Cập nhật đơn hàng</h1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?pg=updatedonhang" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    
                    </div>
                    <div class="row mb10">
                        
                        <input type="hidden" name="id" value="<?=$id?>">
                    </div>
                    <div class="row mb10">
                        mã đơn hàng <br>
                        <input type="text" name="madh" value="<?=$madh?>">
                    </div>
                    <div class="row mb10">
                        Tên người đặt <br>
                        <input type="text" name="tennguoidat" value="<?=$nguoidat_ten?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ <br>
                        <input type="text" name="diachi" value="<?=$nguoidat_diachi?>">
                    </div>
                    <div class="row mb10">
                        Số điện thoại <br>
                        <input type="text" name="sdt" value="<?=$nguoidat_tel?>">
                    </div>
                    <div class="row mb10">
                        Email <br>
                        <input type="text" name="email" value="<?=$nguoidat_email?>">
                    </div>
                    <div class="row mb10">
                        Trạng thái <br>
                        <input type="text" name="trangthai" id="" value="<?=$trangthai?>"> 
                    </div>
                    
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id ?>">
                        <input type="submit" name="capnhat" value="Cap nhat">
                        <input type="reset" value="Nhap lai ">
                       <a href="index.php?pg=listdonhang"> <input type="button" value="Danh sách"></a>
                    </div>
                    <?php   
                        if(isset($thongbao) && ($thongbao!="")) 
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </div> 