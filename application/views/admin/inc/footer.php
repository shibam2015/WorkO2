<div class="page-footer"><div class="page-footer-inner"> 2014 &copy; ADMIN.<a href="" title="" target="_blank"></a></div>
<div class="scroll-to-top"><i class="icon-arrow-up"></i></div>
</div>

<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo site_url('assets'); ?>/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo site_url('assets'); ?>/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo site_url('assets'); ?>/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo site_url('assets'); ?>/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
 <!-- END CORE PLUGINS -->
 
 <!-- BEGIN PAGE LEVEL PLUGINS DASHBOARD -->
<script src="<?php echo site_url('assets'); ?>/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="<?php echo site_url('assets'); ?>/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="<?php echo site_url('assets'); ?>/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
 <!-- END PAGE LEVEL PLUGINS DASHBOARD -->

<!-- BEGIN PAGE LEVEL PLUGINS TABLE LIST -->
<script src="<?php echo site_url('assets'); ?>/global/scripts/datatable.js" type="text/javascript"></script>
<script src="<?php echo site_url('assets'); ?>/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="<?php echo site_url('assets'); ?>/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="<?php echo site_url('assets'); ?>/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo site_url('assets'); ?>/global/scripts/sweetalert.min.js"></script>
<!-- END PAGE LEVEL PLUGINS TABLE LIST -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo site_url('assets'); ?>/global/scripts/app.min.js" type="text/javascript"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo site_url('assets'); ?>/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<script src="<?php echo site_url('assets'); ?>/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?php echo site_url('assets'); ?>/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="<?php echo site_url('assets'); ?>/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="<?php echo site_url('ckeditor/ckeditor.js'); ?>" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script type="text/javascript">
var passwordMatch = function(){
	var wpassword = document.getElementById('user_password').value;
	var cpassword = document.getElementById('confirm_user_password').value;
	if(wpassword != cpassword){
	alert('OPPS !! both the password does not batch !!');
	return false;
	}
}
</script>
<script type="text/javascript">
var delete_alert = function(url){
	 swal({ title: "Are you sure?",  
	 text: "You want to delete this. !!!! You will not be able to recover this data!",   
	 type: "warning",   
	 showCancelButton: true,   
	 confirmButtonColor: "#DD6B55",   
	 confirmButtonText: "Yes, delete it!",   
	 closeOnConfirm: false 
	 },function(){
		window.location.href = url;
	 });
  }	
</script>
