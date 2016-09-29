<?php include('inc/top.php'); ?>
<body>
<?php include('inc/header.php'); ?>
<div class="clearfix"></div>
<main>
<section class="seller-profile">
<div class="container">
<div class="row">
<div class="seller-profile3">
<div class="seller-profile3-top">
<div class="seller-form-holder">
<div class="col-lg-3 col-sm-3 col-md-3">
<p>Job Title</p>
</div>
<div class="col-lg-9 col-sm-9 col-md-9">
<textarea class="des-text form-control" name="" cols="" rows="" placeholder="I'm really good at..........."></textarea>
</div>
<div class="clearfix"></div>
</div>
<div class="seller-form-holder">
<div class="col-lg-3 col-sm-3 col-md-3">
<p>Category</p>
</div>
<div class="col-lg-9 col-sm-9 col-md-9">
<select class="pro-select2 bor form-control" name="">
<option>Select A Category</option>
<option>Graphics & Design</option>
<option>Digital Marketing</option>
</select>
</div>
<div class="clearfix"></div>
</div>
<div class="seller-form-holder">
<div class="col-lg-3 col-sm-3 col-md-3">
<p>Tags</p>
</div>
<div class="col-lg-9 col-sm-9 col-md-9">
<input class="pro-select2 bor form-control" name="" type="text" placeholder="Min. three tags separated with commas">
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="seller-profile3-bot"> <a class="cancel-btn cancel-btn-2" href="<?php echo site_url('seller/seller_view_profile_two'); ?>">Cancel</a>
<input class="seller-pro-btn pull-right" name="" type="button" value="Save & Continue">
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</section>
</main>
<?php include('inc/footer.php'); ?>
</body>
</html>
