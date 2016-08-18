<?php
    if(isset($_GET['ad']) && $_GET['ad']=="addpr" && isset($_POST['addpr'])){
        $cateid=array();
        foreach ($_POST['checkbox'] as $value){
        $cateid[]=$_POST['checkbox'];
        }
        
        $add1 = addpr();
        $addcate1=new addproduct_category();
        $addcate1->addpr_cate($cateid);
    }
    
?>

<section class="addpr">
   
     <div class="row">
    <div class="col-md-12 col-xs-push-2">
        <form class="form-horizontal" role="form" action="?action=admin&ad=addpr&pr" method="post" enctype="multipart/form-data">
        <fieldset>
            <?php 
                if(isset($_SESSION['addsuccess'])){
        echo $_SESSION['addsuccess'];
        unset($_SESSION['addsuccess']);
    };
            ?>
          <!-- Form Name -->
          <legend class="legend-add">THÊM SẢN PHẨM</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Tên sản phẩm</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Name produtct..." class="form-control" name="name"/>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Giá</label>
            <div class="col-sm-10">
                <input type="text" placeholder="price ..." class="form-control" name="price"/>
            </div>
          </div>
          <!-- number input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Giá khuyến mãi</label>
            <div class="col-sm-10">
                <input type="number" placeholder="price sale ..." class="form-control" name="sale"/>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Ngày nhập</label>
            <div class="col-sm-10">
              <input type="date"  id="datepicker" required class="form-control" name="date"/></td>
                
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput" >Loại sản phẩm</label>
            <div class="col-sm-10">
                <?php $cate= new viewcate;
                       $rs= $cate->viewcategory();
                        $z=0;
                       foreach ($rs as $rs):
                           global $z;
                           $z1=$z++; 
                ?>
                <div class="funkyradio col-md-6">
        <div class="funkyradio-default">
            <input type="checkbox" name="checkbox[]" id="checkbox<?php echo $z1?>" value="<?=$rs['id']?>" />
            <label for="checkbox<?php echo $z1?>"><?= $rs['name']?></label>
        </div>
                </div>    
                <?php endforeach;?>
<!--              <select  style="" class="form-control selectpicker" name="category" >
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
                 </select>-->
            </div>

            <label class="col-sm-2 control-label" for="textinput">Số lượng</label>
            <div class="col-sm-4">
              <input type="text" placeholder="Số lượng" class="form-control" required />
            </div>
          </div>
          <!--****/-->
            <label class="col-sm-2 control-label" for="textinput">Ảnh</label>
          <div class="input-group image-preview col-sm-10 col-xs-push-0">
                <input type="text" class=" form-control image-preview-filename" name="img" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
          </div>
            <label class="col-sm-12 control-label" for="textinput">&nbsp;</label>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Mô tả </label>
            <div class="col-sm-10 ">
              <textarea  class="ckeditor"   size="10000" required class="form-control" name="des"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                  <button type="reset" class="btn btn-default" >Hủy</button>
                  <button type="submit" class="btn btn-primary" name="addpr">Thêm</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
        
      
    
</section>
