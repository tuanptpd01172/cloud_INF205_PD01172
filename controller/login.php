<?php

     class guest {
         public $user;
         public $pass;
         public $level;
         public $model;


         public function __construct($user,$password) {
             $this->user=$user;
             $this->pass=  sha1($password);
             $this->model =new model();
         }
         
         public function login(){
             global $app_path;
             $this->model->select("select * from user where username='$this->user'&& password='$this->pass'");
             $count=$this->model->count_record();
             
             if($count==1){
                 $rs=$this->model->fetchArray();
                 $this->level=$rs[0]['level'];
                 print_r($rs);
                 print_r($this->level);
                 $_SESSION['admin']=array();
                 $_SESSION['admin']['vendor']=$rs[0]['vendor_id'];
                 $_SESSION['admin']['level']=  $this->level;
                header ('location:'.$app_path.'index.php?action=admin');
                 
             }  else {
                 $_SESSION['failed'] = "Tài khoản hoặc mật khẩu không đúng";
             }
         }
         
         public function logout(){
             session_destroy();
         }
     }

?>
