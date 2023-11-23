<?php
    
    $html_cart='';
    $i=1;
    foreach ($_SESSION['giohang'] as $sp) {
        
        extract($sp);
        $tt=$price*$soluong;    
        $html_cart.='<tr>
                        <th>'.$i.'</th>
                        <th>'.$name.'</th>
                        <th><img src="'.$img.'" alt="" width="100"></th>
                        <th>'.$price.'</th>
                        <th>'.$soluong.'</th>
                        <th>'.$tt.'</th>
                        <th><a href="index.php?pg=dlcart">xoa</a></th>
                    </tr> ';
        $i++;
    }
?>
<div class="row frmcontent">
                <div class="row mb10 frmdsloaihang">
                    <h1>Gio hang</h1>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Ten san pham</th>
                            <th>hinh anh</th>
                            <th>gia</th>
                            <th>So luong</th>
                            <th>thanh tien</th>
                            <th>thao tac</th>
                        </tr>
                        <?=$html_cart;?>
                        
                        <!-- <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><a href="">xoa</a></th>
                        </tr> -->
                        
                    </table>
                </div>
                
            </div>