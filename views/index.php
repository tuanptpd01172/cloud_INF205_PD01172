<?php
  if(isset($_POST['action'])){ $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
    $action= $_GET['action'];
//  include 'views/product_id.php';
switch ($action){
case 'login':include 'views/login_form.php';
break; 
case 'admin': if(isset($_SESSION['admin'])){include 'views/admin.php';}else{echo '<h1 style="margin:100px;position:absolute;top:120px;left:55px;">'."Bạn Chưa Đăng Nhập Để Quản Trị".'</h1>';}
break;

default :include 'views/product_id.php';
}
//   if(isset($_SESSION['admin'])){
//    include 'views/admin.php';
////    header('location:'.$app_path.'index.php');
//    
//}if(isset($_GET['login'])){
//     
//    
//}else{
       
//     header('location:'.$app_path.'index.php');
//   }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
