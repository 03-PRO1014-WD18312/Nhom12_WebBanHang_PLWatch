<section class="containerfull">
        <div class="container">
            <h1>Thêm danh mục</h1><br><br>
            <div class="row frmcontent">
                <form action="index.php?pg=adddm" method="post">
                    
                    <div class="row mb10">
                        Tên loại <br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Them moi">
                        <input type="reset" value="Nhap lai ">
                       <a href="index.php?pg=lisdm"> <input type="button" value="Danh sach"></a>
                    </div>
                    <?php   
                        if(isset($thongbao) && ($thongbao!="")) 
                        echo $thongbao;
                    ?>
                </form>
            </div>
            
        </div>
</section>