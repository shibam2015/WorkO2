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
<?php 
if(isset($msg) and $msg != ''){
?>
<div class="alert alert-success">
<strong><?php echo $msg; ?></strong>
</div>
<?php
}
?>
<div class="col-md-12">
<div class="portlet box blue">
<div class="portlet-title">
<div class="caption">
<i class="fa fa-gift"></i>My Profile</div>
<div class="tools">
<a href="javascript:;" class="collapse"> </a>
<a href="javascript:;" class="remove"> </a>
</div>
</div>
<div class="portlet-body form">
<!-- BEGIN FORM-->
<form action="<?php _e(site_url('dashboard/my-profile-update/1')); ?>" method="post" class="horizontal-form">
<div class="form-body">
<h3 class="form-section">Person Info</h3>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Username<span style="color:#F00">*</span></label>
<input type="text" id="admin_username" name="admin_username" class="form-control" required value="<?php _e($data[0]['admin_username']); ?>" placeholder="">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="control-label">First Name</label>
<input type="text" id="admin_fname" name="admin_fname" class="form-control" value="<?php _e($data[0]['admin_fname']); ?>" placeholder="">
</div>
</div>
<!--/span-->
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Last Name</label>
<input type="text" id="admin_lname" name="admin_lname" class="form-control" value="<?php _e($data[0]['admin_lname']); ?>" placeholder="">
</div>
</div>
<!--/span-->
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Email</label>
<input type="text" id="admin_email" name="admin_email" class="form-control" value="<?php _e($data[0]['admin_email']); ?>" placeholder="">
</div>
</div>
<!--/span-->
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Phone No</label>
<input type="text" id="admin_phone_no" name="admin_phone_no" class="form-control" value="<?php _e($data[0]['admin_phone_no']); ?>" placeholder="">
</div>
</div>
<!--/span-->
</div>
<!--/row-->
<h3 class="form-section">Address</h3>
<div class="row">
<div class="col-md-12 ">
<div class="form-group">
<label>Address</label>
<input type="text" name="admin_address" value="<?php _e($data[0]['admin_address']); ?>" class="form-control"> 
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>City</label>
<input type="text" name="admin_city" value="<?php _e($data[0]['admin_city']); ?>" class="form-control"> 
</div>
</div>
<!--/span-->
<div class="col-md-6">
<div class="form-group">
<label>State</label>
<input type="text" name="admin_state" value="<?php _e($data[0]['admin_state']); ?>" class="form-control"> 
</div>
</div>
<!--/span-->
</div>
<!--/row-->
<div class="row">
<!--/span-->
<div class="col-md-6">
<div class="form-group">
<label>Country</label>
<input type="text" name="admin_country" value="<?php _e($data[0]['admin_country']); ?>" class="form-control"> 
</div>
</div>
<!--/span-->
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