<?php
    if (isset($_GET['page'])) {
    $page = $_GET['page'];
    } else {
    $page = '';
    }
    require_once 'layout/header.php';
    switch($page){
        case 'index':{
            require_once("index.php");
            break;}
        case 'thuchi':{
            require_once("view/vDanhSachCacKhoanChiTieu.php");
            break;}
        case 'taichinhhientai':{
            require_once("view/vTaiChinhHienTai.php");
            break;}
        case 'phantichthu':{
            require_once("view/vPhanTichThu.php");
            break;}
        case 'home':{
            require_once("view/vHome.php");
            break;}
        default: {
            require_once("index.php");}
    }
    require_once 'layout/footer.php';
?>