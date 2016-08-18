<?php
session_start();
ob_start(); 
//    $dsn="mysql:host=localhost;dbname=ass_inf205_pd01172";
//    
//        $username="root";
//        $password="";
//        
//      $db = new PDO($dsn,$username,$password);
//      $db->exec('set name utf8');
require_once 'util/main.php';
require_once 'model/model.php';
require_once 'controller/product.php';
require_once 'controller/login.php';


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'template/header.php';


include_once  'views/index.php';



include_once 'template/footer.php';
