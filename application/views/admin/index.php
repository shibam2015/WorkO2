<?php require("inc/top.php"); ?>
<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo"> <img src="<?php echo site_url('assets'); ?>/pages/img/logo-big.png" alt="" /> </div>
<!-- END LOGO --> 
<!-- BEGIN LOGIN -->
<div class="content"> 
<!-- BEGIN LOGIN FORM -->
<form class="login-form" action="<?php echo site_url('admin/admin_login'); ?>" method="post">
<h3 class="form-title font-green">Sign In</h3>
<?php
if(isset($msg) and $msg != ''){
?>
<div class="alert alert-danger"> <span> <?php echo $msg; ?> </span> </div>
<?php
}
?>
<div class="form-group">
<label class="control-label visible-ie8 visible-ie9">Username</label>
<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" required placeholder="Username" name="admin_username" />
</div>
<div class="form-group">
<label class="control-label visible-ie8 visible-ie9">Password</label>
<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" required placeholder="Password" name="admin_password" />
</div>
<div class="form-actions">
<button type="submit" class="btn green uppercase">Login</button>
</div>
</form>
</div>
</body>
</html>