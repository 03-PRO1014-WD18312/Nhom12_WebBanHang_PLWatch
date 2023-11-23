<?php
    $html_ctsp="";
    extract($onesp);
    $html_ctsp.='<div class="boxtrai1">
    <img src="upload/'.$img.'" alt="">
</div>
<div class="boxphai1 ">
    <div class="tieude">
        <h3>'.$name.'</h3>
        <span class="price1">'.$price.'</span>
        <h4>MO TA</h4>
        <p>'.$mota.'</p>
    </div>
    <div class="table">
        <p>HỆ THỐNG CỬA HÀNG SHOP ĐỒNG HỒ</p>
        <p>202 Phan Xích Long, P.7, Q.Phú Nhuận, TP HCM</p>
        <p>202 Phan Xích Long, P.7, Q.Phú Nhuận, TP HCM</p>
        <p>202 Phan Xích Long, P.7, Q.Phú Nhuận, TP HCM</p>
        <p>202 Phan Xích Long, P.7, Q.Phú Nhuận, TP HCM</p>
        <p>202 Phan Xích Long, P.7, Q.Phú Nhuận, TP HCM</p>
    </div>
   <div class="chungnhan">
        <img src="https://media.shopdongho.com/2023/01/badge.png" alt="" width="20" height="20">
        <a href=""><span>CHỨNG NHẬN ĐẠI LÝ</span></a>
   </div>
   <div class="camket">
    <div class="ck">
        <img src="https://media.shopdongho.com/2023/03/3tlSnqZd-icon-free-shipping.svg" alt="" width="50" height="50">
        <p>Miễn phí vận chuyển</p>
    </div>
    <div class="ck">
        <img src="https://media.shopdongho.com/2023/03/return-ic.svg" alt="" width="50" height="50">
        <p>Đổi trả hàng 7 ngày*</p>
    </div>
    <div class="ck">
        <img src="https://media.shopdongho.com/2023/03/100-hang-chinh-hang.svg" alt=""width="50" height="50">
        <p>100% hàng chính hãng</p>
    </div>
    <div class="ck">
        <img src="https://media.shopdongho.com/2023/03/qJb9aM3L-icon-secure-shield.svg" alt=""width="50" height="50">
        <p>Bảo hành chính hãng</p>
    </div>
   </div><br>
    <span>So luong: </span>
    <input type="hidden" name="tensp" value="'.$name.'">
    <input type="hidden" name="img" value="'.$img.'">
    <input type="hidden" name="price" value="'.$price.'">
    <input type="number" name="" id=""> <br> <br>
   <button type="submit" name="addcart">Dat hang</button>
    
</div>';
$html_dssp_view='';
    foreach ($dssp_view as $sp) {
        extract($sp);
        if ($bestseller==1) {
            $best='<div class="best"></div>';
        }else{
            $best='';
        }
        $html_dssp_view.='
                            <div class="box25 mr15 p10">
                                '.$best.'
                                
                                <a href="index.php?pg=chitietsanpham&id="'.$id.'><img src="upload/'.$img.'" alt=""></a>
                                <a href="index.php?pg=chitietsanpham&id="'.$id.'><span class="price">'.$name.'</span></a>
                                <span class="price">'.$price.'đ</span>
                                <a href="#"><button>Đặt hàng</button></a>
                            </div>';
                        
    }
?>
<div class="center">
    <?=$html_ctsp;?>
        <!-- <div class="boxtrai1">
            <img src="images/casio-mtp-1375d-1avdf.jpg" alt="">
        </div>
        <div class="boxphai1 ">
            <div class="tieude">
                <h3>Đồng Hồ Casio AE-1200WHD-1AVDF Nam Quartz</h3>
                <span class="price1">$1000</span>
                <h4>MO TA</h4>
                <p>Bộ sưu tập Beaucour đến từ thương hiệu đồng hồ Pierre Lannier là một lời tán dương đến sự khéo léo trong nghề đồng hồ và sự thanh lịch kiểu Pháp. Đồng hồ nam 255F466 Acier Milanais Bleu chứng minh điều đó với thiết kế nam tính, hấp dẫn với nhiều chi tiết đặc sắc, khiến nó trở thành một chiếc đồng hồ không thể thiếu trong cuộc sống hàng ngày của bạn.</p>
            </div>
            <div class="table">
                <p>HỆ THỐNG CỬA HÀNG SHOP ĐỒNG HỒ</p>
                <p>202 Phan Xích Long, P.7, Q.Phú Nhuận, TP HCM</p>
                <p>202 Phan Xích Long, P.7, Q.Phú Nhuận, TP HCM</p>
                <p>202 Phan Xích Long, P.7, Q.Phú Nhuận, TP HCM</p>
                <p>202 Phan Xích Long, P.7, Q.Phú Nhuận, TP HCM</p>
                <p>202 Phan Xích Long, P.7, Q.Phú Nhuận, TP HCM</p>
            </div>
           <div class="chungnhan">
                <img src="https://media.shopdongho.com/2023/01/badge.png" alt="" width="20" height="20">
                <a href=""><span>CHỨNG NHẬN ĐẠI LÝ</span></a>
           </div>
           <div class="camket">
            <div class="ck">
                <img src="https://media.shopdongho.com/2023/03/3tlSnqZd-icon-free-shipping.svg" alt="" width="50" height="50">
                <p>Miễn phí vận chuyển</p>
            </div>
            <div class="ck">
                <img src="https://media.shopdongho.com/2023/03/return-ic.svg" alt="" width="50" height="50">
                <p>Đổi trả hàng 7 ngày*</p>
            </div>
            <div class="ck">
                <img src="https://media.shopdongho.com/2023/03/100-hang-chinh-hang.svg" alt=""width="50" height="50">
                <p>100% hàng chính hãng</p>
            </div>
            <div class="ck">
                <img src="https://media.shopdongho.com/2023/03/qJb9aM3L-icon-secure-shield.svg" alt=""width="50" height="50">
                <p>Bảo hành chính hãng</p>
            </div>
           </div><br>
            <span>So luong: </span>
            <input type="number" name="" id=""> <br>
           <input type="button" name="" id="" value="DAT MUA(ship code)">
            
        </div> -->
        
        <div class="containerfull mr30">
        <h2 align="center">San pham lien quan</h2>
                <?=$html_dssp_view;?>
                <!-- <div class="box25 mr15">
                    <img src="images/pierre-lannier-255F466.jpg" alt="">
                    <span class="price">Đồng Hồ Pierre Lannier 255F466 Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/pierre-lannier-259F439.jpg" alt="">
                    <span class="price">Đồng Hồ Pierre Lannier 259F439 Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/pierre-lannier-318B468.jpg" alt="">
                    <span class="price">Đồng Hồ Pierre Lannier 318B468 Nam Cơ/Automatic</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/dong-ho-pierre-lannier-321C438-1.jpg" alt="">
                    <span class="price">Đồng Hồ Pierre Lannier AUTOMATIC 321C438 Nam Cơ/Automatic</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div> -->
            </div>
    </div>