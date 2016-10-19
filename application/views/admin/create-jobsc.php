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
<?php if((isset($msg)) and ($msg != '')){ ?>
<div class="alert alert-success">
<strong><?php echo $msg; ?></strong>
</div>
<?php } ?>
<div class="col-md-12">
<div class="portlet box blue">
<div class="portlet-title">
<div class="caption">
<i class="fa fa-gift"></i>Create Jobs Subcategory</div>
<div class="tools">
<a href="javascript:;" class="collapse"> </a>
<a href="javascript:;" class="remove"> </a>
</div>
</div>
<div class="portlet-body form">
<!-- BEGIN FORM-->
<form action="<?php _e(site_url('dashboard/create-jobsc')); ?>" method="post" class="horizontal-form">
<div class="form-body">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Category<span style="color:#F00">*</span></label>
<select name="category_id_FK" class="form-control" required> 
<option value="">Select Category</option>	
<?php
if(count($data) > 0){
foreach($data as $cate){
?>	
<option value="<?php echo $cate['category_id']; ?>"><?php echo $cate['category_name']; ?></option>
<?php
}
}
?>	
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="control-label">Subcategory Name<span style="color:#F00">*</span></label>
<input type="text" id="subcategory_name" name="subcategory_name" class="form-control" value="" required placeholder="">
</div>
</div>
</div>
</div>
<div class="form-actions right"><button type="submit" class="btn blue"><i class="fa fa-check"></i> Save</button></div>
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