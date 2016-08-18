<?php

?>
<div id="da-slider" class="da-slider">
    <?php
            $slide= new slideimg();
            $img=$slide->slideimg();
            
        // while($rs=mysql_fetch_assoc($query)){ 
                        foreach($img as $rs ):
                    ?>
				<div class="da-slide">
					<h2><?php echo $rs['name'] ;?></h2>
					<p><?php echo $rs['short_description'] ;?></p>
					<a href="#" class="da-link">Chi Tiết1</a>
                                        <div class="da-img col-md-4 col-xs-4"><img src="images/products/<?php echo $rs['image']; ?>" alt="<?=$rs['name']?>" width="100%" height="" /></div>
				</div>
			<?php endforeach;?>	
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
<?php 

//print_r($img); ?>
<script src="<?=$app_path?>js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="<?=$app_path?>js/jquery.cslider.js" type="text/javascript"></script>
<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider();
				
			});
                        
		</script>