<?php require("inc/top.php"); ?>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<?php require("inc/header.php"); ?>
<div class="clearfix"> </div>
<div class="page-container">
<div class="page-sidebar-wrapper">
<?php require("inc/sidebar-left.php"); ?>
</div>
<div class="page-content-wrapper">
<div class="page-content">
<div class="row">
<div class="col-md-12">
<?php
if(isset($msg) and $msg != ''){
?>
<div class="alert alert-success">
<strong><?php echo $msg; ?></strong>
</div>
<?php
}
?>
<div class="portlet box blue">
<div class="portlet-title">
<div class="caption">
<i class="fa fa-gift"></i>Setting</div>
<div class="tools">
<a href="javascript:;" class="collapse"> </a>
<a href="javascript:;" class="remove"> </a>
</div>
</div>
<div class="portlet-body form">
<!-- BEGIN FORM-->
<form action="<?php _e(site_url('dashboard/my_setting_update/1')); ?>" method="post" class="horizontal-form">
<div class="form-body">
<h3 class="form-section">Social Links</h3>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Facebook Link</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-facebook-official"></i></span>
<input type="text" id="facebook_link" name="facebook_link" class="form-control"  value="<?php _e($data[0]['facebook_link']); ?>" placeholder="">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Twitter Link</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-twitter"></i></span>
<input type="text" id="twitter_link" name="twitter_link" class="form-control"  value="<?php _e($data[0]['twitter_link']); ?>" placeholder="">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Linkedin Link</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
<input type="text" id="linkedIn_link" name="linkedIn_link" class="form-control"  value="<?php _e($data[0]['linkedIn_link']); ?>" placeholder="">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Pinterest Link</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
<input type="text" id="pinterest_link" name="pinterest_link" class="form-control"  value="<?php _e($data[0]['pinterest_link']); ?>" placeholder="">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Google Plus</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
<input type="text" id="google_plus_link" name="google_plus_link" class="form-control"  value="<?php _e($data[0]['google_plus_link']); ?>" placeholder="">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Instagram Link</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-instagram"></i></span>
<input type="text" id="instagram_link" name="instagram_link" class="form-control" value="<?php _e($data[0]['instagram_link']); ?>" placeholder="">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Address</label>
<input type="text" id="address" name="address" class="form-control" value="<?php _e($data[0]['address']); ?>" placeholder="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="control-label">State</label>
<input type="text" id="state" name="state" class="form-control"  value="<?php _e($data[0]['state']); ?>" placeholder="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="control-label">City</label>
<input type="text" id="city" name="city" class="form-control"  value="<?php _e($data[0]['city']); ?>" placeholder="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Zipcode</label>
<input type="text" id="zipcode" name="zipcode" class="form-control"  value="<?php _e($data[0]['zipcode']); ?>" placeholder="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Site Email</label>
<input type="text" id="site_email" name="site_email" class="form-control"  value="<?php _e($data[0]['site_email']); ?>" placeholder="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Form Email</label>
<input type="text" id="form_email" name="form_email" class="form-control"  value="<?php _e($data[0]['form_email']); ?>" placeholder="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Phone No</label>
<input type="text" id="phone_no" name="phone_no" class="form-control"  value="<?php _e($data[0]['phone_no']); ?>" placeholder="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Copyright</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-copyright"></i></span>
<input type="text" id="copyright_section" name="copyright_section" class="form-control" required value="<?php _e($data[0]['copyright_section']); ?>" placeholder="">
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label class="control-label">Google Map iframe</label>
<textarea class="form-control" id="google_map" name="google_map" style="height:150px;"><?php _e($data[0]['google_map']); ?></textarea>
</div>
</div>
</div>
</div>
<div class="form-actions right">
<button type="submit" class="btn blue">
<i class="fa fa-check"></i> Save</button>
</div>
</form>
<!-- END FORM-->
</div>
</div>
</div>
</div>
</div>

</div>
<?php require("inc/quick-sidebar.php"); ?>
</div>
<?php require("inc/footer.php"); ?> 
</body>
</html>