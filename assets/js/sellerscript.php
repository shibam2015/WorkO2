<script type="text/javascript">
$(document).ready(function(){
//START

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++			
$("#btn1").click(function(){
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var desc = $('#seller_description').val();
	if(desc == '' || desc == null){
	sweetAlert('OPPS!! sorry the fild is mandatory');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_description'); ?>",
	data: 'seller_description='+ desc +'&id='+ id ,
	success: function (res) {
	if(res == 'Success'){
	sweetAlert("The Profile Data Updated");
	}else{
	sweetAlert("Oops...", "Something went wrong!");
	} 			
	}
	}); 
	}
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++			
$("#btn2").click(function(){
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var avail = $('#seller_availability').val();
	if(avail == '' || avail == null){
	sweetAlert('OPPS!! sorry the fild is mandatory');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_availability'); ?>",
	data: 'seller_availability='+ avail +'&id='+ id ,
	success: function (res) {
	if(res == 'Success'){
	sweetAlert("The Profile Data Updated");
	}else{
	sweetAlert("Oops...", "Something went wrong!");	
	} 			
	}
	});
	}
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++			
$("#btn3").click(function(){
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var skill = $('#seller_skill').val();
	if(skill == '' || skill == null){
	sweetAlert('OPPS!! sorry the fild is mandatory');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_skill'); ?>",
	data: 'seller_skill='+ skill +'&id='+ id + '&seller_skill_level=' + $( "#seller_skill_level option:selected" ).val(),
	success: function (res) {
	if(res == 'Success'){
	sweetAlert("The Profile Data Updated");
	}else{
	sweetAlert("Oops...", "Something went wrong!");	
	} 			
	}
	});
	}
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++			
$("#btn4").click(function(){
	
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var seller_edu_country       = $('#seller_edu_country option:selected').val();
	var seller_edu_collage_name  = $('#seller_edu_collage_name').val();
	var seller_edu_title         = $('#seller_edu_title option:selected').val();
	var seller_edu_degree        = $('#seller_edu_degree').val();
	var seller_edu_from          = $('#seller_edu_from option:selected').val();
	var seller_edu_to            = $('#seller_edu_to option:selected').val();
	
	if(seller_edu_country == '' || seller_edu_country == null){
	sweetAlert('OPPS!! sorry the country name is mandatory');	
	}else{
	if(seller_edu_collage_name == '' || seller_edu_collage_name == null){
	sweetAlert('OPPS!! sorry the collage name is mandatory');	
	}else{
	if(seller_edu_title == '' || seller_edu_title == null){
	sweetAlert('OPPS!! sorry the title is mandatory');	
	}else{
	if(seller_edu_degree == '' || seller_edu_degree == null){
	sweetAlert('OPPS!! sorry the degree is mandatory');	
	}else{
	if(seller_edu_from == '' || seller_edu_from == null){
	sweetAlert('OPPS!! sorry the from is mandatory');	
	}else{
	if(seller_edu_to == '' || seller_edu_to == null){
	sweetAlert('OPPS!! sorry the to is mandatory');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_education'); ?>",
	data: { 
		id: id, 
		seller_edu_country: seller_edu_country,
		seller_edu_collage_name: seller_edu_collage_name,
		seller_edu_title: seller_edu_title,
		seller_edu_degree: seller_edu_degree,
		seller_edu_from: seller_edu_from,
		seller_edu_to: seller_edu_to,
	},
	success: function (res) {
	if(res == 'Success'){
	sweetAlert("The Profile Data Updated");
	}else{
	sweetAlert("Oops...", "Something went wrong!");	
	} 			
	}
	});	
	}
	}	
	}	
	}	
	}
	}
	
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++			
$("#btn5").click(function(){
	
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var seller_cerified         = $('#seller_cerified').val();
	var seller_cerified_from       = $('#seller_cerified_from').val();
	var seller_cerified_year    = $('#seller_cerified_year option:selected').val();

	if(seller_cerified == '' || seller_cerified == null){
	sweetAlert('OPPS!! sorry the certificate name is mandatory');	
	}else{
	if(seller_cerified_from == '' || seller_cerified_from == null){
	sweetAlert('OPPS!! sorry the certified from name is mandatory');	
	}else{
	if(seller_cerified_year == '' || seller_cerified_year == null){
	sweetAlert('OPPS!! sorry the ceritfied year is mandatory');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_certificate'); ?>",
	data: { 
		id: id, 
		seller_cerified: seller_cerified,
		seller_cerified_from: seller_cerified_from,
		seller_cerified_year: seller_cerified_year,
	},
	success: function (res) {
	if(res == 'Success'){
	sweetAlert("The Profile Data Updated");
	}else{
	sweetAlert("Oops...", "Something went wrong!");	
	} 			
	}
	});	
	}	
	}
	}
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++			
$("#btn6").click(function(){
	
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var seller_profile_web         = $('#seller_profile_web').val();
	var seller_profile_web_link    = $('#seller_profile_web_link').val();

	if(seller_profile_web == '' || seller_profile_web == null){
	sweetAlert('OPPS!! sorry the description for portfolio or website is mandatory');	
	}else{
	if(seller_profile_web_link == '' || seller_profile_web_link == null){
	sweetAlert('OPPS!! sorry the link from name is mandatory');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_portfolio'); ?>",
	data: { 
		id: id, 
		seller_profile_web: seller_profile_web,
		seller_profile_web_link: seller_profile_web_link,
	},
	success: function (res) {
	if(res == 'Success'){
	sweetAlert("The Profile Data Updated");
	}else{
	sweetAlert("Oops...", "Something went wrong!");	
	} 			
	}
	});	
	}
	}
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	

	
//END	
});
</script>