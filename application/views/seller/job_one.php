<?php include('inc/top.php'); ?>
<body>
<?php include('inc/header.php'); ?>
<div class="clearfix"></div>
<main>
<section class="seller-profile">
<div class="container">
<form action="<?php if(!isset($data[0]['gig_id'])){ echo site_url('seller/job_one');  }else{ echo site_url('seller/job_one/'.$data[0]['gig_id']); } ?>" method="post">
<div class="row">
<div class="seller-profile3">
<div class="seller-profile3-top">
<div class="seller-form-holder">
<div class="col-lg-3 col-sm-3 col-md-3">
<p>Job Title<span style="color:red">*</span></p>
</div>
<div class="col-lg-9 col-sm-9 col-md-9">
<textarea required class="des-text form-control" name="gig_title" id="gig_title" cols="" rows="" placeholder="I'm really good at...........">
<?php if(isset($data[0]['gig_id'])) echo  $data[0]['gig_title']; ?>
</textarea>
</div>
<div class="clearfix"></div>
</div>
<div class="seller-form-holder">
<div class="col-lg-3 col-sm-3 col-md-3">
<p>Category<span style="color:red">*</span></p>
</div>
<div class="col-lg-9 col-sm-9 col-md-9">
<select required class="pro-select2 bor form-control" name="category_id" id="category_id">
<option>Select A Category</option>
<?php
if(count($category) > 0){
foreach($category as $dataOption){
?>
<option value="<?php echo $dataOption['category_id']; ?>"><?php echo $dataOption['category_name']; ?></option>
<?php
}
}
?>
</select>
</div>
<div class="clearfix"></div>
</div>
<div class="seller-form-holder" id="sCategory" style="display:none">
<div class="col-lg-3 col-sm-3 col-md-3">
<p>Subcategory<span style="color:red">*</span></p>
</div>
<div class="col-lg-9 col-sm-9 col-md-9">
<select required class="pro-select2 bor form-control" name="subcategory_id" id="subcategory_id">
<option>Select A Subcategory</option>
</select>
</div>
<div class="clearfix"></div>
</div>
<div class="seller-form-holder">
<div class="col-lg-3 col-sm-3 col-md-3">
<p>Tags<span style="color:red">*</span></p>
</div>
<div class="col-lg-9 col-sm-9 col-md-9">
<input required class="pro-select2 bor form-control" name="gig_tags" id="gig_tags" type="text" value="<?php if(isset($data[0]['gig_id'])) echo  $data[0]['gig_tags']; ?>" placeholder="Min. three tags separated with commas">
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="seller-profile3-bot"> <a class="cancel-btn cancel-btn-2" href="<?php echo site_url('seller/seller_view_profile_two'); ?>">Cancel</a>
<input class="seller-pro-btn pull-right" name="" type="submit" value="Save & Continue">
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</section>
</main>
<?php include('inc/footer.php'); ?>
</body>
</html>
