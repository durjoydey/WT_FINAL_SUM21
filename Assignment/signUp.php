<?php include 'main_header.php';?>
<?php
include 'controller/userController.php';

?>

<div class="center-login">
<h1 class="text text-center">Sign Up</h1>
<h5 class="text-danger"><?php echo $err_db;?></h5>
<form action="" method="post" class="form-horizontal form-material">
<div class="form-group">
<h4 class="text">Name</h4>
<input type="text" name="name" value="<?php echo $err_name;?>" class="form-control">
<span><?php echo $err_name;?></span>
</div>
<div clas ="form-group">
<h4 class="text">Username</h4>
<input type="text" name="uname" value="<?php echo $err_uname;?>" class="form-control">
<span><?php echo $err_uname;?></span>
</div>
<div class="form-group">
<h4 class="text">Email</h4>
<input type="text" name ="email" class="form-control">
</div>
<div class="form-group">
<h4 class="text">Password</h4>
<input type="password" name="pass" class="form-control">
</div>
<div class="form-group text-center">

<input type="submit" name="sign_up" class="btn btn-success" value="Sign Up" class="form-control">
</div>
</form>
</div>
<?php include 'main_footer.php';?>