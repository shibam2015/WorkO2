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
<div class="portlet box green">
<div class="portlet-title">
<div class="caption">
<i class="fa fa-globe"></i>List Dropdown</div>
<div class="tools"> </div>
</div>
<div class="portlet-body">
<table class="table table-striped table-bordered table-hover" id="sample_2">
<thead>
<tr>
<th> No </th>
<th> Dropdown Value </th>
<th> Date of creation </th>
<th> Edit </th>
<th> Delete </th>
</tr>
</thead>
<tbody>
<?php
$no = 1;
if(count($data) > 0){
foreach($data as $single_data){	
?>
<tr>
<td><?php _e($no); ?></td>
<td><?php _e(ucwords($single_data['dropdown_value'])); ?></td>
<td><?php _e($single_data['date_of_create']); ?></td>
<td><a href="<?php echo site_url("dashboard/view-edit-el/".$single_data['id']); ?>"><img src="<?php echo site_url('assets'); ?>/global/img/edit.png" width="24" height="24"></a></td>
<td><a href="javascript:void(0)" onClick="delete_alert('<?php echo site_url("dashboard/delete-el/".$single_data['id']); ?>')"><img src="<?php echo site_url('assets'); ?>/global/img/delete.png" width="24" height="24"></a></td>
</tr>
<?php 
$no++;
}
}
?>
</tbody>
</table>
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