<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>demo</title>
        <meta http-equiv="content-type" content="text/html;charset=utf8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <link type="text/css" rel="stylesheet" href="<?= $app_path ?>css/style.css" />
        <script src="<?= $app_path ?>js/jquery-3.1.0.min.js" type="text/javascript"></script>
        <link href="<?= $app_path ?>css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $app_path ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $app_path ?>css/product.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $app_path ?>css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $app_path ?>css/category.css" rel="stylesheet" type="text/css"/>
        <script src="<?= $app_path ?>js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= $app_path ?>js/npm.js" type="text/javascript"></script>
        <script src="<?= $app_path ?>js/browser.js" type="text/javascript"></script>
        <script src="<?= $app_path ?>js/header.js" type="text/javascript"></script>
        <link href="<?= $app_path ?>css/demo.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $app_path ?>css/style1.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!--        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
        <script src="<?= $app_path ?>ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="<?= $app_path ?>js/modernizr.custom.28468.js" type="text/javascript"></script>
        <script type="text/javascript">
      window.onload=function(){
      $('.selectpicker').selectpicker();
      $('.rm-mustard').click(function() {
        $('.remove-example').find('[value=Mustard]').remove();
        $('.remove-example').selectpicker('refresh');
      });
      $('.rm-ketchup').click(function() {
        $('.remove-example').find('[value=Ketchup]').remove();
        $('.remove-example').selectpicker('refresh');
      });
      $('.rm-relish').click(function() {
        $('.remove-example').find('[value=Relish]').remove();
        $('.remove-example').selectpicker('refresh');
      });
      $('.ex-disable').click(function() {
          $('.disable-example').prop('disabled',true);
          $('.disable-example').selectpicker('refresh');
      });
      $('.ex-enable').click(function() {
          $('.disable-example').prop('disabled',false);
          $('.disable-example').selectpicker('refresh');
      });

      // scrollYou
      $('.scrollMe .dropdown-menu').scrollyou();

      prettyPrint();
      };
    </script>
    
         <script>
            
            
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 80,
                header = document.querySelector("header");
            var scrollBottom = Number( $('#main-container').height()- $(window).height()  );
            if (distanceY > 80 && distanceY < scrollBottom) {
                classie.add(header,"smaller");
               
                 $("header").css('display','block');
                 
                $(".nav-side-menu").addClass("admin-menu");
                $(".nav-side-menu").removeClass("admin-menu1");
                $(".nav-side-menu").removeClass("admin-menu2");
            } else if(distanceY > scrollBottom ){
                
                
                $(".nav-side-menu").removeClass("admin-menu");
                $(".nav-side-menu").addClass("admin-menu2");
                 $("#footer").addClass("footer");
                 $("header").css('display','block');
                 $(".footer").css('height','200');
                  $(".admin-menu1").css('top','0');
                  $(".admin-menu1").css('height','70%');
                  
            }else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                    $(".nav-side-menu").removeClass("admin-menu");
                    $(".nav-side-menu").removeClass("admin-menu2");
                    $(".nav-side-menu").removeClass("admin-menu1");
                    
                }
            }
        });
    }
    window.onload = init();
    
</script>

    </head>
    
    <body>
        <div id="main-container" >
            <header >
                <div class="container clearfix  col-md-12">
                    
                    
                    
                     <h1 id="logo" class="col-md-3 col-xs-push-1">LoGo</h1>
                    
                    <section class="col-md-9 col-xs-push-1 ">
                        
                        <nav class="col-md-8 col-xs-push-4 navbar">
                        <a href="index.php">TRANG CHỦ</a>
                        <a href="">SẢN PHẨM</a>
                        <a href="">TIN TỨC</a>
                        <a href="">GIỚI THIỆU</a>
                        <a href="">LIÊN HỆ</a>
                        <?php
                            
                            if(isset($_SESSION['admin'])):
                        ?>
                        <a href="index.php?logout">ĐĂNG XUẤT</a>
                        <?php else :?>
                        <a href="index.php?action=login">ĐĂNG NHẬP</a>
                        <?php endif;
                        if(isset($_GET['logout'])&&isset($_SESSION['admin'])):
//                            $logout=new guest();$logout->logout();
                            session_destroy();
                           header('location:'.$app_path.'index.php');
                        endif;
                        
                        ?>
                        
                    </nav>
                    </section>
               <h1 class="col-md-3 "></h1>
                <div>
                    
            </header>
             
            
           