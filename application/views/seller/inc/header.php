<header>
<div class="head-top">
<div class="wrapper">
<div class="col-md-6">
<div class="col-sm-3">
<div class="logo"> <a href="<?php site_url('seller'); ?>"><img src="<?php echo site_url('assets'); ?>/images/logo.png"></a> </div>
</div>
</div>
<div class="col-md-6">
<div class="seller-login">
<?php
if($SESSION_UERS_DATA[0]['id'] == ''){
?>
<h3>Login</h3>
<form action="<?php echo site_url('seller/login'); ?>" method="post">
<div class="seller-login-area">
<ul>
<li><input class="login-text" name="seller_username" type="text" placeholder="Username"></li>
<li><input class="login-text" name="seller_password" type="password" placeholder="Password"></li>
<li><input class="login-btn"  name="" type="submit" value="Log in"></li>
<li class="for-pass"><a href="#">Forgot password?</a></li>
</ul>
</div>
</form>
<?php
}else{
?>
<form action="<?php echo site_url('seller/logout'); ?>" method="post">
<div class="seller-login-area">
<ul>
<li><strong>Welcome <?php echo $SESSION_UERS_DATA[0]['seller_name'] ;?></strong></li>
<li><input class="login-btn"  name="" type="submit" value="Logout"></li>
</ul>
</div>
</form>
<?php	
}
?>
<div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
<div class="menu">
<div class="wrapper">
<div class="row">
<div class="main-menu">
<nav class="navbar">
<div class="container-fluid">
<div class="row">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-nav"> <i class="fa fa-bars"></i> </button>
</div>
<div class="collapse navbar-collapse" id="top-nav" aria-expanded="true">
<ul class="nav navbar-nav">
<li><a href="#">Home</a></li>
<li><a href="#">Sell Smart</a></li>
<li><a href="#">Pricing</a></li>
<li><a href="#">Faqs</a></li>
<li><a href="#">Benefits</a></li>
<li><a href="#">worko2.com</a></li>
</ul>
</div>
</div>
</div>
</nav>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</header>