<?php
//include '/model/model.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Lấy Dữ liệu thẻ textarea từ ckeditor
function encodeHTML($sHTML)
{
$sHTML=ereg_replace("&","&amp;",$sHTML);
$sHTML=ereg_replace("<","&lt;",$sHTML);
$sHTML=ereg_replace(">","&gt;",$sHTML);
return $sHTML;
}

function addpr(){
    
$sContent=addslashes($_POST['des']);
$noidung=encodeHTML($sContent);
   
        
        $name = $_POST['name'];
        $price =$_POST['price'];
        $sale_price=$_POST['sale'];
//        $category=$_POST['category'];
        $date=$_POST['date'];
        $img=$_FILES['input-file-preview']['name'];
        
        $description=$_POST['des'];
       
       $add = new product();
       $add->__constructpr($name, $price, $sale_price,'', $date , $img , $description);
       $addpr = new model();
       $addpr->select("insert into product(name,price,price_sale,date_import,image,description) values ('$add->name','$add->price','$add->sale_price','$add->date','$add->img','$add->description')");
       $_SESSION['addsuccess']= "Đã thêm sản phẩm thành công";
       move_uploaded_file($_FILES['input-file-preview']['tmp_name'], "images/products/".$img);
    
}
//lấy ảnh cho slide
class slideimg{
    public $model;
    public $slideimg;
    
    public function __construct(){
        $this->model = new model();
        
        
    }
    public function slideimg(){
        
        
        $this->model->select("select * from product order by id desc limit 0,10");
        $this->slideimg = $this->model->fetchArray();
        $img=array();
        foreach ($this->slideimg as $value){
            $img[] = $value;
        }
        
        
        return $img; 
    }
}

//Hiển thị sản phẩm 
class viewpr{
    
    public $pr;
    public $model;
    public $category;
    public $categoryname;
    public function __construct() {
        $this->model=new model() ;
        

    }
//    Hiển thị 1 sản phẩm chi tiết
    public function viewprsigle($id){
        
        $this->model->select("select * from product where id = $id ");
       $result = $this->model->fetchArray();
       
       $pr = new product();
        $pr->__constructpr($result[0]['name'], $result[0]['price'], $result[0]['price_sale'], $result[0]['category'], $result[0]['date_import'], $result[0]['image'], $result[0]['description']);
        echo $result[0]['description'];
        return $pr;
    }
//    Hiển thị sản phẩm theo category
    public function viewprcategory($ct){
        $this->model->select("select * from product join product_category on product.id = product_category.product_id   where category_id=$ct order by id desc ");
       $result = $this->model->fetchArray();
      
       $prarray=array();
//       echo $result[0]['description'];
       foreach ($result as $result1){
       $pr = new product();
        $pr->__constructpr($result1['name'], $result1['price'], $result1['price_sale'], $result1['category'], $result1['date_import'], $result1['image'], $result1['description']);
        $prarray[]= $pr;
    }
   
        return $prarray; 
    }
    
//   lấy 1 danh mục sản phẩm
    public function viewcategory($id){
        $this->model->select("select * from category where id = $id");
         $this->category = $this->model->fetchArray();
         $this->categoryname=  $this->category[0]['name'];
//         print_r($this->categoryname);
         
    }
}

class category{
    public $model;
    public $category_id;
    public $category_name;
    public $category_image;
    public $img;




    public function __construct($cate_name,$img,$cate_image=null) {
//        $this->category_id=$cate_id;
        $this->category_name=$cate_name;
         $this->category_image=$cate_image;
         $this->img=$img;
    } 
    
    public function insertcate(){
        $this->model =new model();
        $this->model->select("insert into category(name,images) value('$this->category_name','$this->category_image')");
        if($this->category_image<>NULL){
        move_uploaded_file($this->img, "images/category/".$this->category_image);
        
        }
        $_SESSION['addct']="Thêm thành công danh mục".$this->category_name;
        
        $this->model->closedb();
        }
    public function delcate($id){
        $this->model =new model();
        $this->model->select("Delete from category where id = $id");
    }
    public function updatecate($id,$name,$image){
        $this->model =new model();
        $this->model->select("update category set name='$name',image ='$image' where id = $id");
    }
    
    
    
}
class viewcate{
    public $model;
    


    public function __construct() {
       $this->model =new model() ;
    }

    public function viewcategory($limit=null){
         if($limit==null){$z=30;}else{$z=$limit;}
        $this->model->select("select * from category limit 0,$z");
        $rs=$this->model->fetchArray();
        $cate=array();
        
        foreach ($rs as $rs){
            $cate[] = $rs;
        }
        return $cate;
    }
}
class addproduct_category{
    public $model;
    


    public function __construct() {
       $this->model =new model() ;
       
    }
    
    public function addpr_cate($cateid){
        $this->model->select("select * from product order by id desc");
        $prid=$this->model->fetchArray();
        $prid1=$prid[0]['id'];
        
        if(is_array($cateid)){
        foreach($cateid[0] as $id){
            $this->model->select("insert into product_category(product_id,category_id) values('$prid1','$id') ");
        }}
    }
}
?>