<?php

?>
 <div class="nav-side-menu">
    <div class="brand">Manager</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="index.php?action=admin">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed <?php if(isset($_GET['pr'])){echo 'active';}?>">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> SẢN PHẨM</a> <span class="arrow"></span>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class=""><a href="index.php?action=admin&ad=addpr&pr">THÊM SẢN PHẨM</a></li>
                    <li><a href="#">THÔNG TIN SẢN PHẨM</a></li>
                    
                    
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed <?php if(isset($_GET['ct'])){echo 'active';}?>">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> DANH MỤC </a><span class="arrow"></span>
                </li>  
                <ul class="sub-menu collapse" id="service">
                    <li><a href="index.php?action=admin&ad=addcate&ct">THÊM DANH MỤC</a></li>
                    <li><a href="index.php?action=admin&ad=viewcate&ct">XEM DANH MỤC</a></li>
                  
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed <?php if(isset($_GET['or'])){echo 'active';}?>">
                  <a href="#"><i class="fa fa-car fa-lg"></i> ĐƠN HÀNG </a><span class="arrow"></span>
                </li>
                <ul class="sub-menu collapse" id="new">
                    <li><a href="index.php?action=admin&ad=viewoderN&or">ĐƠN HÀNG MỚI</a></li>
                  <li><a href="index.php?action=admin&ad=viewoderA&or">TẤT CẢ ĐƠN HÀNG</a></li>
                  <li><a href="index.php?action=admin&ad=viewoderC&or">ĐƠN HÀNG ĐÃ THANH TOÁN</a></li>
                </ul>


                 <li data-toggle="collapse" data-target="#USER" class="collapsed <?php if(isset($_GET['us'])){echo 'active';}?>">
                  <a href="#">
                      <i class="fa fa-user fa-lg fa fa-user "></i> TÀI KHOẢN</a><span class="arrow"></span>
                  
                  </li>
                    <ul class="sub-menu collapse" id="USER">
                  <li>XEM TÀI KHOẢN</li>
                  <li>THÊM TÀI KHOẢN</li>
                  
                    </ul>
                 
            </ul>
     </div>
</div>
