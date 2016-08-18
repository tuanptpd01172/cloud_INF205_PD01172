

<?php
    if(isset($_GET['ad']) && isset($_POST['addct'])){
        $cate_name=$_POST['namect'];
        $cate_image=$_FILES['input-file-preview1']['name'];
        $img=$_FILES['input-file-preview1']['tmp_name'];
        $addcate= new category($cate_name,$img ,$cate_image);
        $addcate->insertcate();
    }
    
?>

<section class="addpr col-sm-10">
   
     <div class="row">
    <div class="col-md-12 col-xs-push-2">
        <form class="form-horizontal" role="form" action="?action=admin&ad=addcate&ct" method="post" enctype="multipart/form-data">
        <fieldset>
            <?php 
                if(isset($_SESSION['addct'])){
        echo '<h4 style="margin:1% 0 4% 1%;display:inline-block; font-size:1em;font-weight:bold;color:#d43f3a;">'.$_SESSION['addct'].'</h4>';
        unset($_SESSION['addct']);
    };
            ?>
          <!-- Form Name -->
          <legend class="legend-add" >THÊM DANH MỤC</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Tên danh mục</label>
            <div class="col-sm-9">
              <input type="text" placeholder="Name category..." class="form-control" name="namect"/>
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
          <label class="col-sm-3 control-label "  for="textinput">Ảnh &nbsp;</label>
          <div class="input-group image-preview col-sm-9 col-xs-push-0" style="width:71%;float:right;margin-right:2%;">
              
                <input type="text" class=" form-control image-preview-filename"  disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview1"/> <!-- rename it -->
                    </div>
                </span>
          </div>
          </div>
          <label class="col-sm-2 control-label" for="textinput">&nbsp;</label>
          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                  <button type="reset" class="btn btn-default" >Hủy</button>
                  <button type="submit" class="btn btn-primary" name="addct">Thêm</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
        
      
    
</section>


