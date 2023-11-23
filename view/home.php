<?php
    $html_dssp_new='';
    foreach ($dssp_new as $sp) {
        extract($sp);
        if ($bestseller==1) {
            $best='<div class="best"></div>';
        }else{
            $best='';
        }
        $html_dssp_new.='
                            <div class="box25 mr15 p10">
                                '.$best.'
                                <img src="upload/'.$img.'" alt="">
                                <span class="price">'.$name.'</span>
                                <span class="price">'.$price.'đ</span>
                                <a href="#"><button>Đặt hàng</button></a>
                            </div>';
                        
    }
    $html_dssp_best='';
    foreach ($dssp_best as $sp) {
        extract($sp);
        $html_dssp_best.='
                            <div class="box25 mr15 p10">
                                <div class="best"></div>
                                <a href="index.php?pg=chitietsanpham&id='.$id.'"><img src="upload/'.$img.'" alt=""></a>
                                <a href="index.php?pg=chitietsanpham&id='.$id.'"><span class="price">'.$name.'</span></a>
                                <span class="price">'.$price.' đ</span>
                                <a href="#"><button>Đặt hàng</button></a>
                            </div>';
                        
    }
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
<div class="containerfull">
        <img src="upload/banner-dong-ho-nam.jpg" alt="">
    </div>

    <section class="containerfull">
        <div class="container">
            <h1>BEST SELLER</h1><br><br>
            <div class="containerfull">
                <div class="box50 mr15">
                    <img src="upload/h2(24).jpg" alt="" height="310px">
                </div>
                <?=$html_dssp_best?>
                <!-- <div class="box25 mr15">
                    <div class="best"></div>
                    <img src="images/hinh-anh-AE-1200WHD-1AVDF-new-2.jpg" alt="">
                    <a href="chitietsanpham.html"><span class="price">Đồng Hồ Casio AE-1200WHD-1AVDF Nam Quartz</span></a>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <div class="best"></div>
                    <img src="images/casio-aeq-100bw-9avdf.jpg" alt="">
                    <span class="price">Đồng Hồ Casio AEQ-100BW-9AVDF Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div> -->
            </div>
            <div class="containerfull mr30">
                <?=$html_dssp_new?>
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
    </section>


    <section class="containerfull bg1 padd50">
        <div class="container">
            <h1>SẢN PHẨM HOT</h1>
            <?=$html_dssp_view?>
            <!-- <div class="containerfull mr30">
                <div class="box25 mr15">
                    <img src="images/hinh-anh-dong-ho-casio-mtp-1374l-1avdf-nam-pin-day-da-new-1.jpg" alt="">
                    <span class="price">Đồng Hồ Casio MTP-1374L-1AVDF Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/pierre-lannier-255F466.jpg" alt="">
                    <span class="price">Đồng Hồ Pierre Lannier 255F466 Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/dong-ho-casio-mtp-1374l-7avdf-nam-pin-day-da-a-1.jpg" alt="">
                    <span class="price">Đồng Hồ Casio MTP-1374L-7AVDF Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/hinh-anh-AE-1200WHD-1AVDF-new-2.jpg" alt="">
                    <span class="price">Đồng Hồ Casio AE-1200WHD-1AVDF Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
            </div>
            <div class="containerfull mr30">
                <div class="box25 mr15">
                    <img src="images/pierre-lannier-318B468.jpg" alt="">
                    <span class="price">Đồng Hồ Pierre Lannier 318B468 Nam Cơ/Automatic</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/pierre-lannier-259F439.jpg " alt="">
                    <span class="price">Đồng Hồ Pierre Lannier 259F439 Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/casio-mtp-1375d-1avdf.jpg " alt="">
                    <span class="price">Đồng Hồ Casio MTP-1375D-1AVDF Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/dong-ho-pierre-lannier-321C438-1.jpg" alt="">
                    <span class="price">Đồng Hồ Pierre Lannier AUTOMATIC 321C438 Nam Cơ/Automatic</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
            </div> -->
           

        </div>
    </section>
    <section class="containerfull bg1 padd50">
        <div class="container">
            <h1>SẢN PHẨM MỚI</h1>
            <?=$html_dssp_new?>
            <!-- <div class="containerfull mr30">
                <div class="box25 mr15">
                    <img src="images/hinh-anh-dong-ho-casio-mtp-1374l-1avdf-nam-pin-day-da-new-1.jpg" alt="">
                    <span class="price">Đồng Hồ Casio MTP-1374L-1AVDF Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/pierre-lannier-255F466.jpg" alt="">
                    <span class="price">Đồng Hồ Pierre Lannier 255F466 Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/dong-ho-casio-mtp-1374l-7avdf-nam-pin-day-da-a-1.jpg" alt="">
                    <span class="price">Đồng Hồ Casio MTP-1374L-7AVDF Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/hinh-anh-AE-1200WHD-1AVDF-new-2.jpg" alt="">
                    <span class="price">Đồng Hồ Casio AE-1200WHD-1AVDF Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
            </div>
            <div class="containerfull mr30">
                <div class="box25 mr15">
                    <img src="images/pierre-lannier-318B468.jpg" alt="">
                    <span class="price">Đồng Hồ Pierre Lannier 318B468 Nam Cơ/Automatic</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/pierre-lannier-259F439.jpg " alt="">
                    <span class="price">Đồng Hồ Pierre Lannier 259F439 Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/casio-mtp-1375d-1avdf.jpg " alt="">
                    <span class="price">Đồng Hồ Casio MTP-1375D-1AVDF Nam Quartz</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
                <div class="box25 mr15">
                    <img src="images/dong-ho-pierre-lannier-321C438-1.jpg" alt="">
                    <span class="price">Đồng Hồ Pierre Lannier AUTOMATIC 321C438 Nam Cơ/Automatic</span>
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div>
            </div> -->
           

        </div>
    </section>
    