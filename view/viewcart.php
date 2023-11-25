<?php
    
    $html_cart='';
    $i=1;
    foreach ($_SESSION['giohang'] as $key => $sp) {
        $id = $key+1;
        extract($sp);
        $tt=$sp[2]*$sp[3];    
        $html_cart.='<tr>
                        <th>'.$i.'</th> 
                        <th>'.$sp[0].'</th>
                        <th><img src="upload/'.$sp[1].'" alt="" width="100"></th>
                        <th>'.$sp[2].'</th>
                        <th>'.$sp[3].'</th>
                        <th>'.$tt.'</th>
                        <th><a href="index.php?pg=dlcart&id='.$id.'">xoa</a></th>
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
                    </table><br>
                    <button>dat mua </button>
                </div>
                
            </div>