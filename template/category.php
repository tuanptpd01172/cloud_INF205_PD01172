<?php

?>
 <div class="nav-side-menu1">
    <div class="brand">Shop</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
<!--               <li>
                  <a href="#">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>-->

                <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> SẢN PHẨM</a> <span class="arrow"></span>
                </li>
                <ul class="sub-menu " id="products">
                    <?php
                    $cate= new viewcate;
                       $rs= $cate->viewcategory();
                        foreach ($rs as $rs):
                       ?>
                    <li class=""><a href="index.php?ad=add"><?=$rs['name']?></a></li>
<!--                    <li><a href="#">THÔNG TIN SẢN PHẨM</a></li>-->
                    <?php endforeach;?>
                </ul>
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> TIN TỨC</a><span class="arrow"></span>
                </li>  
                <ul class="sub-menu " id="service">
                  <li>TIN MỚI NHẤT</li>
                  <li>MẸO VẶT</li>
                  <li>THỜI TRANG THẾ GIỚI</li>
                  
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-book fa-lg"></i> CHÍNH SÁCH </a><span class="arrow"></span>
                </li>
                <ul class="sub-menu " id="new">
                  <li>CÁCH MUA HÀNG</li>
                  <li>CHÍNH SÁCH ĐỔI TRẢ</li>
                  <li>PHƯƠNG THỨC VẬN CHUYỂN</li>
                </ul>


                 <li data-toggle="collapse" data-target="#USER" class="collapsed">
                  <a href="#">
                      <i class="fa fa-user fa-lg fa fa-user "></i> TÀI KHOẢN</a><span class="arrow"></span>
                  
                  </li>
                    <ul class="sub-menu " id="USER">
                  <li>XEM TÀI KHOẢN</li>
                  <li>THÊM TÀI KHOẢN</li>
                  
                    </ul>
                 
            </ul>
     </div>
</div>
<br />
<div class="nav-side-menu1">
    <div class="brand">GIỎ HÀNG</div>
</div>
    
