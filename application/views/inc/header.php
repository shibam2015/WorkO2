<header>
<?php
if($SESSION_UERS_DATA[0]['id'] == ''){
?>
<div class="head-top">
<div class="wrapper">
<div class="col-md-6">
<div class="col-sm-3">
<div class="logo"> <a href="<?php site_url('user'); ?>"><img src="assets/images/logo.png"></a> </div>
</div>
</div>
<div class="col-md-6">
<ul>
<li><a href="#signup" data-toggle="modal" onClick="clen()">Join</a></li>
<li><a href="#login" data-toggle="modal" onClick="lcln()">Sign In</a></li>
<li><a class="selling-btn" href="<?php echo site_url('seller'); ?>">Start Selling</a></li>
</ul>
</div>
<div class="clearfix"></div>
</div>
</div>
<?php
}else{
?>
<div class="head-top">
<div class="wrapper">
<div class="col-md-6">
<div class="col-sm-3">
<div class="logo"> <img src="assets/images/logo.png"> </div>
</div>
</div>
<div class="col-md-6">
<div class="after-lg">
<ul>
<li><img src="assets/images/header-icon1.png" alt="icon"></li>
<li><img src="assets/images/header-icon2.png" alt="icon"></li>
<li><img src="assets/images/header-icon3.png" alt="icon">
<div class="af-noti">14</div>
</li>
<li><img src="assets/images/header-icon4.png" alt="icon"></li>
<li>
<div class="after-img"><img src="assets/images/header-icon5.png" alt="icon"></div>
Ashwin Jangalwa</li>
</ul>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
<?php
}
?>
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
<li><a href="#">Graphic &amp; Design</a></li>
<li><a href="#">Digital Marketing</a></li>
<li><a href="#">Writing &amp; Translation</a></li>
<li><a href="#">Programming &amp; Tech</a></li>
<li><a href="#">All Services</a></li>
</ul>
</div>
</div>
</div>
</nav>
</div>
<div class="header-search">
<div class="search">
<input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" />
<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>
</div>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</header>