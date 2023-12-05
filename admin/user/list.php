<div class="row">
            <div class="row frmtitle mb">
                <h1>Danh sách tài khoản</h1>
            </div>
            
            <div class="row frmcontent">
                <div class="row mb10 frmdsloaihang">
                    <table>
                        <tr>
                            <th></th>
                            <th>User name</th>
                            <th>Password</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listuser as $user ) {
                                extract($user);
                                
                                $xoauser = "index.php?pg=xoauser&id=".$id;
                                
                                
                                echo  '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                
                                <td>'.$password.'</td>
                                <td>'.$username.'</td>
                                <td>'.$ten.'</td>
                                <td>'.$diachi.'</td>
                                <td>'.$email.'</td>
                                
                                <td> <a href="'.$xoauser.'"> <input type="button" value="xóa"> </a>   </td>
                               </tr> ';
                            }
                        ?>
                        
                    </table>
                </div>
                
            </div>
        </div>