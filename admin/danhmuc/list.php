<section class="containerfull">
        <div class="container">
            <h1>Danh mục</h1><br><br>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloaihang">
                    <table>
                        <tr>
                            <th></th>
                            <th>Ma loai</th>
                            <th>Ten loai</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listdanhmuc as $danhmuc ) {
                                extract($danhmuc);
                                
                                $suadm = "index.php?pg=suadm&id=".$id;
                                $xoadm = "index.php?pg=xoadm&id=".$id;

                                echo  '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td> <a href="'.$suadm.'"> <input type="button" value="sua"> </a> <a href="'.$xoadm.'"> <input type="button" value="xoa"> </a>  </td>
                               </tr> ';
                            }
                        ?>
                        
                    </table>
                </div>
                <div class="row mb10">
                    <input class="button1" type="button" value="Chon tat ca">
                    <input class="button1" type="button" value="Bo chon tat ca ">
                    <input class="button1" type="button" value="Xoa cac muc da chon">

                   <a href="index.php?pg=adddm"> <input class="button1"t type="button" value="Nhap them"></a>
                </div>
            </div>
            
        </div>
</section>