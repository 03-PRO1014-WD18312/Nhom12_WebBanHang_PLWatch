<?php
     $html_cart='';
     
     foreach ($_SESSION['giohang'] as $key => $sp) {
         
         extract($sp);
         
             
         $html_cart.='<tr>
                         
                         <th>'.$sp[0].'</th>
                        
                         
                         <th>'.$sp[3].'</th>
                         
                        
                     </tr> ';
        
     }
   
    
    $html_tong=get_tongdonhang();
?>
<section class="containerfull">
        <div class="container3">
        <form action="index.php?pg=donhang" method="post">
            <div class="col9 viewcart">
                <div class="ttdathang">
                    <h2>Thông tin người đặt hàng</h2>
                  
                      <label for="hoten"><b>Họ và tên</b></label> <br>
                      <input type="text" placeholder="Nhập họ tên đầy đủ" name="hoten" id="hoten" required><br>
                  
                      <label for="diachi"><b>Địa chỉ</b></label><br>
                      <input type="text" placeholder="Nhập địa chỉ" name="diachi" id="diachi" required><br>
                  
                      <label for="email"><b>Email</b></label><br>
                      <input type="text" placeholder="Nhập email" name="email" id="email" required><br>

                      <label for="dienthoai"><b>Điện thoại</b></label><br>
                      <input type="text" placeholder="Nhập điện thoại" name="dienthoai" id="dienthoai" required><br>
                </div>
                <div class="ttdathang">
                    <a onclick="showttnhanhang()" style="cursor: pointer;">
                    &rArr; Thay đổi thông tin nhận hàng
                    </a>
                </div>
                <div class="ttdathang" id="ttnhanhang">
                    <h2>Thông tin người nhận hàng</h2>
                  
                      <label for="hoten"><b>Họ và tên</b></label><br>
                      <input type="text" placeholder="Nhập họ tên đầy đủ" name="hoten_nguoinhan" id="hoten_nguoinhan" ><br>
                  
                      <label for="diachi"><b>Địa chỉ</b></label><br>
                      <input type="text" placeholder="Nhập địa chỉ" name="diachi_nguoinhan" id="diachi_nguoinhan" ><br>
                  
                      <label for="dienthoai"><b>Điện thoại</b></label><br>
                      <input type="text" placeholder="Nhập điện thoại" name="dienthoai_nguoinhan" id="dienthoai_nguoinhan" ><br>
                </div>
                      
                  
                    
            </div>
            <div class="col3">
                <h2>ĐƠN HÀNG</h2>
                <div class="total bd">
                    <table  >
                        <tr>
                            
                            <th>tên sản phẩm</th>
                            
                            <th>Số lượng</th>
                            
                        </tr>
                        <?=$html_cart?>
                    </table>
                </div>
                
                <div class="coupon">
                    <div class="boxcart">
                    <h3>Vouche: </h3>
                    </div>
                </div>
                <div class="pttt">
                    <div class="boxcart">
                    <h3>Phương thức thanh toán: </h3>
                    <input type="radio" name="pttt" value="1" id="" checked> Tiền mặt<br>
                    <input type="radio" name="pttt" value="2" id=""> Ví điện tử<br>
                    <input type="radio" name="pttt" value="3" id=""> Chuyển khoản<br>
                    <input type="radio" name="pttt" value="4" id=""> Thanh toán online<br>
                    </div>
                </div>
                <div class="total">
                    <div class="boxcart bggray">
                        <?=$html_tong?>đ
                    </div>
                </div>
                <button type="submit" name="donhang">Thanh toán</button>
            </div>

        </form>
        </div>
    </section>




    <footer class="containerfull padd50">
        Copyright&copy;2023. MSSV + Tên SV
    </footer>

    <script>
        var ttnhanhang=document.getElementById("ttnhanhang");
        ttnhanhang.style.display="none";
        function showttnhanhang(){
            if(ttnhanhang.style.display=="none"){
                ttnhanhang.style.display="block";
            }else{
                ttnhanhang.style.display="none";
            }
        }
        

    </script>