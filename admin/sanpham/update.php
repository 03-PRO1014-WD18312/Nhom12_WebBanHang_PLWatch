<?php
    if (is_array($sanpham)){
        extract($sanpham);
       
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $img = "<img src='".$hinhpath."' height='80'>";
    }   else {
        $img = "no photo";
    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>Cap nhat loai hang hoa</h1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?pg=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    <select name="iddm" id="">
                            <option value="0" selected>Tat ca</option>
                            <?php
                               foreach ( $listdanhmuc as $danhmuc) {
                                // 
                                // extract($danhmuc);
                                if($iddm==$danhmuc['id']) 
                                $s="selected"; else $s="";
                                 echo '<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>';
                               }
                            ?>
                            
                        </select>  
                    </div>
                    <div class="row mb10">
                        
                        <input type="hidden" name="id" value="<?=$id?>">
                    </div>
                    <div class="row mb10">
                        Ten san pham <br>
                        <input type="text" name="tensp" value="<?=$name?>">
                    </div>
                    <div class="row mb10">
                        Gia <br>
                        <input type="text" name="price" value="<?=$price?>">
                    </div>
                    <div class="row mb10">
                        Hinh <br>
                        <input type="file" name="img" >
                        <?=$img ?>
                    </div>
                    <div class="row mb10">
                        Mo ta <br>
                        <textarea name="mota"  cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row mb10">
                        bestseller <br>
                        <input type="text" name="bestseller" id="" value="<?=$bestseller?>"> 
                    </div>
                    
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id ?>">
                        <input type="submit" name="capnhat" value="Cap nhat">
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