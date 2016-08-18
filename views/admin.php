<?php



?>
<section class="invi"></section>
<section class="main-pr">

    <article class="main-admin">
        <aside class="col-md-0">sdf</aside>
        <section class="col-md-8 col-xs-push-2">
            <?php include 'admin/menu-admin.php';?>
        
            <?php
            global $ad;
            if(isset($_GET['ad'])){
                $ad = $_GET['ad'];
            }
            
                switch ($ad) {
                case "addpr":include 'add_product.php';
                    break;
                case "addcate":include 'add_category.php';;
                    break;
                default : echo '<h1 class="legend-add" style="color:#d43f3a;font-size:2em;font-weight:600;">'."Trang Quản Trị WebSite".'</h1>';    
                }
            ?>
        </section>
        
    </article>
    
    
</section>
