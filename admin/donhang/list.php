<div class="row">
            <div class="row frmtitle mb">
                <h1>Danh sách đơn hàng</h1>
            </div>
            
            <div class="row frmcontent">
                <div class="row mb10 frmdsloaihang">
                    <table>
                        <tr>
                            <th></th>
                            <th>Tên</th>
                            <th>địa chỉ</th>
                            <th>sô diện thoại</th>
                            <th>Email</th>
                            <th>mã đơn hàng</th>
                            <th>Tổng thanh toán</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listdonhang as $donhang ) {
                                extract($donhang);
                                
                                $suadonhang = "index.php?pg=suadonhang&id=".$id;
                                
                                echo  '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                
                                <td>'.$nguoidat_ten.'</td>
                                <td>'.$nguoidat_diachi.'</td>
                                <td>'.$nguoidat_tel.'</td>
                                <td>'.$nguoidat_email.'</td>
                                <td>'.$madh.'</td>
                                <td>'.$tongthanhtoan.'</td>
                                <td>'.$trangthai.'</td>
                                <td>  <a href="'.$suadonhang.'"> <input type="button" value="sửa"> </a> </td>
                               </tr> ';
                            }
                        ?>
                        
                    </table>
                </div>
                
            </div>
        </div>