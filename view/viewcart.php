<?php
  
    
    $html_cart='';
    $i=1;
    foreach ($_SESSION['giohang'] as $key => $sp) {
        $id = $key+1;
        extract($sp);
        
        $tt=(int)$sp[2]*(int)$sp[3];    
        $html_cart.='<tr>
                        <th>'.$i.'</th> 
                        <th>'.$sp[0].'</th>
                        <th><img src="upload/'.$sp[1].'" alt="" width="100"></th>
                        <th>'.$sp[2].'</th>
                        <th>'.$sp[3].'</th>
                        <th>'.$tt.'</th>
                        <th><a href="index.php?pg=dlcart&id='.$id.'">xóa</a></th>
                    </tr> ';
        $i++;
    }
  $html_tong=get_tongdonhang();
?>
<div class="row frmcontent">
                <div class="row mb10 frmdsloaihang">
                    <h1>Giỏ hàng</h1>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>hình ảnh</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>thành tiền</th>
                            <th>thao tác</th>
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
                    <p>Tổng tiền: <?=$html_tong?></p>
                    <p>Tổng thanh toán: <?=$html_tong?></p>
                    <a href="index.php?pg=donhang"><button>đặt mua</button></a>                
                </div>
                
            </div>