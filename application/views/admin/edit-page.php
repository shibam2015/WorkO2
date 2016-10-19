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
<i class="fa fa-gift"></i>Update Page</div>
<div class="tools">
<a href="javascript:;" class="collapse"> </a>
<a href="javascript:;" class="remove"> </a>
</div>
</div>
<div class="portlet-body form">
<!-- BEGIN FORM-->
<form action="<?php _e(site_url('dashboard/update-page/'.$data[0]['page_id'])); ?>" method="post" class="horizontal-form">
<input type="hidden" id="date_of_create" name="date_of_create" value="<?php echo date('Y-m-d'); ?>">
<div class="form-body">
<div class="row">
<div class="col-md-8">
<div class="form-group">
<label class="control-label">Page Title<span style="color:#F00">*</span></label>
<input type="text" id="page_title" name="page_title" class="form-control" value="<?php _e($data[0]['page_title']); ?>" required placeholder="">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label class="control-label">Page Content<span style="color:#F00">*</span></label>
<textarea class="form-control ckeditor" id="page_content" name="page_content" style="height:150px;" required><?php _e($data[0]['page_content']); ?></textarea>
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