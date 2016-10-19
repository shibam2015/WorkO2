<?php include('inc/top.php'); ?>
<body>
<?php include('inc/header.php'); ?>
<div class="clearfix"></div>
<main>
<section class="seller-profile">
<div class="container">
<div class="row">
<div  class="seller-pricing">
<h1>Scope & Pricing</h1>
<div class="seller-pricing-area">
<h3>packages</h3>
<div class="seller-form-holder">
<textarea class="des-text form-control" name="" cols="" rows="" placeholder="Name your package"></textarea>
</div>
<div class="seller-form-holder">
<textarea class="des-text form-control" name="" cols="" rows="" placeholder="Describe the details of your offering"></textarea>
</div>
<div class="seller-form-holder">
<div class="col-lg-6 col-sm-6 col-md-6 left-padding">
<select class="pro-select2 bor form-control" name="">
<option>Delivery</option>
<option>1 Days Delivery </option>
<option>2 Days Delivery </option>
<option>3 Days Delivery </option>
</select>
</div>
<div class="col-lg-6 col-sm-6 col-md-6 right-padding">
<select class="pro-select2 bor form-control" name="">
<option>Price</option>
<option>5$ </option>
<option>10$</option>
<option>15$</option>
</select>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="seller-pricing-area">
<h3>My jobs extras</h3>
<div class="seller-form-holder pricing-form-holder">
<input name="" type="checkbox" value="">
Extra fast delivery </div>
<div class="seller-form-holder pricing-form-holder">
<input name="" type="checkbox" value="">
Extra fast delivery </div>
<div class="seller-form-holder pricing-form-holder">
<input name="" type="checkbox" value="">
Extra fast delivery </div>
<div class="seller-form-holder pricing-form-holder">
<input name="" type="checkbox" value="">
Extra fast delivery </div>
<div class="seller-form-holder pricing-form-holder">
<input name="" type="checkbox" value="">
Extra fast delivery </div>
<div class="seller-form-holder "> <a class="cancel-btn cancel-btn-2" href="<?php echo site_url('seller/seller_view_job_one/'.$id); ?>">Back</a>
<input class="seller-pro-btn pull-right" type="button" value="Save & Continue" name="">
</div>
<div class="clearfix"></div>
</div>
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
