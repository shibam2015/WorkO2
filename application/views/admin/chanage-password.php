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
<i class="fa fa-gift"></i>Change Password</div>
<div class="tools">
<a href="javascript:;" class="collapse"> </a>
<a href="javascript:;" class="remove"> </a>
</div>
</div>
<div class="portlet-body form">
<!-- BEGIN FORM-->
<form action="<?php _e(site_url('dashboard/my-password-update/1')); ?>" method="post" class="horizontal-form">
<input type="hidden" value="<?php _e($data[0]['admin_password']);?>" name="old_password_db" />
<div class="form-body">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Old Password<span style="color:#F00">*</span></label>
<input type="password" id="old_password" name="old_password" class="form-control" value="" requied placeholder="">
</div>
</div>
<!--/span-->
<div class="col-md-6">
<div class="form-group">
<label class="control-label">New Password<span style="color:#F00">*</span></label>
<input type="password" id="new_password" name="admin_password" class="form-control" value="" requied placeholder="">
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