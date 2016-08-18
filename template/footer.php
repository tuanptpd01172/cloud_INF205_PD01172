<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
            

        </div> <!--End container-->
        <footer id="footer" class="footer ">
            <article class=" main-footer">
                <section class="col-md-4">
                    <h3>Danh mục sản phẩm</h3>
                    <ul>
                        <?php $cate1=new viewcate();
                            $rs=$cate1->viewcategory();
                            foreach ($rs as $values):
                        ?>
                        <li ><i class="fa fa-arrow-circle-right">&nbsp;&nbsp;&nbsp;</i><a href=""><?php echo $values['name'];?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    
                </section>
            
            <section class="col-md-4">
               <h3> Fanpage</h3>
               
               <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/yeudn" data-tabs="timeline" data-height="140" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/yeudn" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/yeudn">Đà Nẵng</a></blockquote></div>
            </section>
                <section class="col-md-4">
               <h3> Công Ty TNHH T-Fashion </h3>
               <ul>
                   <li>Địa chỉ : 137 Nguyễn Thị Thập</li>
                   <li>Email:phamthanhtuan1990.qn@gmail.com</li>
                   <li>Điện thoại :01678916395</li>
                   <li>Chuyên : Bán các sản phẩm thời trang Online</li>
                   <li>Dịch vụ : Vận chuyển hàng tận nơi miễn phí dưới 7km</li>
                   <li>Giấy phép kinh doanh : 15156NHS</li>
                   
               </ul>
            </section>
            </article>
            </footer>
    </body>
</html>