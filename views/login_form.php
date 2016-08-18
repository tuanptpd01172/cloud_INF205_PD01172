<?php


 if(isset($_GET['action'])== "login"&& isset($_POST['login'])){
     $login= new guest($_POST['user'],$_POST['pass']);
     $login->login();
 }
?>
<div class="login">
    <h1>Login</h1>
    
    <?php if(isset($_SESSION['failed'])){echo $_SESSION['failed'] ;
unset($_SESSION['failed']);} ?>
    <form action="<?=$app_path.'index.php?action=login'?>" method="post">
        
    	<input type="text" name="user" placeholder="Username" required="required" />
        <input type="password" name="pass" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-danger btn-block btn-large" name="login">Đăng Nhập</button>
    </form>
    <br>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- login bootsnipp -->


</div>
