<?php
 echo $_GET['id'];
if($_GET['id']){
   $id = $_GET['id']-1;
    unset($_SESSION['giohang'][$id]);
}

header('location:?pg=viewcart');




?>