<div class="row">
            <div class="row frmtitle">
                <h1>Them moi san pham</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?pg=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    Danh muc<br>
                        <select name="iddm" id="">
                            <?php
                               foreach ( $listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                               }
                            ?>
                            
                        </select>
                    </div>
                    <div class="row mb10">
                        Ten san pham <br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        Gia <br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                        Hinh <br>
                        <input type="file" name="img" >
                    </div>
                    <div class="row mb10">
                        Besttseller<br>
                        <input type="text" name="bestseller">
                    </div>
                    
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Them moi">
                        <input type="reset" value="Nhap lai ">
                       <a href="index.php?pg=listsp"> <input type="button" value="Danh sach"></a>
                    </div>
                    <?php   
                        if(isset($thongbao) && ($thongbao!="")) 
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </div> 