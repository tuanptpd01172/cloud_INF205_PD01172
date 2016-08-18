<?php


?>
<section class="invi"></section>
<section class="main-pr" >
    <article class="row">
        <?php
            $slide= new slideimg();
            $img=$slide->slideimg();
        ?>
        <?php include 'views/slide.php';?>
    </article>
    <article class="row">
        <aside class="col-md-3">
            
            <?php
                include 'template/category.php';
                
                
                
            ?>
        </aside>
        <section class="col-md-9">
            <?php 
            $cate= new viewcate;
                       $rs= $cate->viewcategory(3);
                       foreach ($rs as $rs):
                     $s= new viewpr();
                     
                     $cate= $s->viewcategory($rs['id']);
                     
                    $pr = $s->viewprcategory($rs['id']);
                    
                    ?>
            <section class="row">
                <h1 class="label-danger label label-default col-md-12 cate"><?=$s->categoryname?></h1>
            <?php
                    foreach ($pr as $pr1):?>
                <section class="pr1  col-md-3">
                    <section class="img"><img src="<?= $app_path.'images/products/'.$pr1->img?>" alt="" /></section>

                    <section class="namepd"><?=  $pr1->name;?></section>

                     <section class="cost col-xs-0 col-md-12"><?php if($pr1->sale_price == 0){echo '<h4><span style=";margin-right:10px;">'.$pr1->price.'đ</span>';}else{echo '<h4><span style="text-decoration: line-through;color:#000;opacity:.3;margin-right:10px;">'.$pr1->price.'đ</span>'.$pr1->sale_price.'đ</h4>';} ?></section>
                     <section class="cart col-xs-5 btn btn-danger "><?php  ?><span ><i class="fa fa-shopping-cart"> &nbsp;&nbsp;</i>Cart</span></section>

                </section>
           <?php endforeach;

           ?>
            </section><br />
            <?php endforeach;?>
        </section>    
    </article>
    
</section>