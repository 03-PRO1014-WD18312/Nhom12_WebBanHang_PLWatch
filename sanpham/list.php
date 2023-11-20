<div class="row">
            <div class="row frmtitle mb">
                <h1>Danh sach loai hang hoa</h1>
            </div>
            <form action="index.php?pg=listsp" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm" id="">
                            <option value="0" selected>Tat ca</option>
                            <?php
                               foreach ( $listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                               }
                            ?>
                            
                        </select>
                        <input type="submit" name="listok" value="Go">
                    </form>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloaihang">
                    <table>
                        <tr>
                            <th></th>
                            <th>Ma loai</th>
                            <th>Ten san pham</th>
                            <th>Hinh</th>
                            <th>Gia</th>
                            <th>Luot xem</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listsanpham as $sanpham ) {
                                extract($sanpham);
                                
                                $suasp = "index.php?pg=suasp&id=".$id;
                                $xoasp = "index.php?pg=xoasp&id=".$id;
                                $hinhpath = "../upload/".$img;
                                if(is_file($hinhpath)){
                                    $img = "<img src='".$hinhpath."' height='80'>";
                                }else{
                                    $img='loi roi';
                                }
                                echo  '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$img.'</td>
                                <td>'.$price.'</td>
                                <td>'.$view.'</td>
                                <td> <a href="'.$suasp.'"> <input type="button" value="sua"> </a> <a href="'.$xoasp.'"> <input type="button" value="xoa"> </a>  </td>
                               </tr> ';
                            }
                        ?>
                        
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chon tat ca">
                    <input type="button" value="Bo chon tat ca ">
                    <input type="button" value="Xoa cac muc da chon">

                   <a href="index.php?pg=addsp"> <input type="button" value="Nhap them"></a>
                </div>
            </div>
        </div>