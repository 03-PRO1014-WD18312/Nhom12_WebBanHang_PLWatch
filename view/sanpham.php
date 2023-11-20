<?php
    $html_dm='';
    foreach ($dsdm as $dm) {
        extract($dm);
        $link='index.php?pg=sanpham&iddm='.$id;
        $html_dm.='<a href="'.$link.'">'.$name.'</a>';
    }
    $html_dssp='';
    foreach ($dssp as $sp) {
        extract($sp);
        $html_dssp.='<div class="box25 mr15 mb">
                    <img src="upload/'.$img.'" alt="">
                    <a href=""><span class="price">'.$name.'</span></a>
                    <span class="price">'.$price.'</span>
                    <a href="#"><button>Đặt hàng</button></a>
                </div>';
    }

    if($titlepage!="")      $title=$titlepage;
    
    else $title="SẢN PHẨM"

?>
<section class="containerfull">
        <div class="container">
            <div class="boxleft mr2pt menutrai">
                <h1>DANH MỤC</h1><br><br>
                <?=$html_dm?>
                
            </div>
            <div class="boxright">
                <h1><?=$title?> </h1><br>
                <div class="containerfull mr30">
                    <?=$html_dssp?>
                    
                </div>
            </div>


        </div>
    </section>