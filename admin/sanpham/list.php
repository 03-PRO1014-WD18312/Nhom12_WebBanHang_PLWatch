<div class="row">
            <div class="row frmtitle mb">
                <h1>Danh sách loại hàng hóa</h1>
            </div>
            <form action="index.php?pg=listsp" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
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
                            <th>Mã loại</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình</th>
                            <th>Giá</th>
                            <th>Lượt xem</th>
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
                                <td> <a href="'.$suasp.'"> <input type="button" value="sửa"> </a> <a href="'.$xoasp.'"> <input type="button" value="xóa"> </a>  </td>
                               </tr> ';
                            }
                        ?>
                        
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả ">
                    <input type="button" value="Xóa các mục đã chọn">

                   <a href="index.php?pg=addsp"> <input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>