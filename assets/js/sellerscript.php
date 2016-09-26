<script type="text/javascript">
$(document).ready(function(){
//START

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++			
$("#btn1").click(function(){
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var language_name = $('#language_name').val();
	var language_type = $('select#language_type option:selected').val();
	if(language_name == '' || language_name == null){
	sweetAlert('OPPS!! sorry the fild is mandatory');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_language'); ?>",
	data: 'language_name='+ language_name +'&id='+ id + '&language_type=' + language_type,
	success: function (res) {
	if(res == 'Success'){
	//+++++++++++++++++	
	swal({   
	title: "The Language Has Been Added",  
	type: "success",   
	showCancelButton: false,   
	confirmButtonColor: "#8CD4F5",   
	confirmButtonText: "OK",   
	closeOnConfirm: true 
	}, function(){   
	$('#lang').append('<tr><td class="table-data">'+language_name+'</td><td class="table-data">'+language_type+'</td><td class="table-data"></td></tr>');
	$(".pro-sec-right-holder-1").hide();
	});
	//++++++++++++++++++
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
	var skill_name =  $('#skill_name').val();
	var skill_level = $('select#skill_level option:selected').val();
	if(skill_name == '' || skill_name == null){
	sweetAlert('OPPS!! sorry the fild is mandatory');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_skill'); ?>",
	data: 'seller_skill='+ skill_name +'&id='+ id + '&seller_skill_level=' + skill_level,
	success: function (res) {
	if(res == 'Success'){
	//+++++++++++++++++	
	swal({   
	title: "The Skill Has Been Added",  
	type: "success",   
	showCancelButton: false,   
	confirmButtonColor: "#8CD4F5",   
	confirmButtonText: "OK",   
	closeOnConfirm: true 
	}, function(){   
	$('#skill').append('<tr><td class="table-data">'+skill_name+'</td><td class="table-data">'+skill_level+'</td><td class="table-data"></td></tr>');
	$(".pro-sec-right-holder-2").hide();
	});
	//++++++++++++++++++
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
	var education_country   = $('select#education_country option:selected').val();
	var education_name      = $('#education_name').val();
	var education_title     = $('select#education_title option:selected').val();
	var education_degree    = $('#education_degree').val();
	var education_year_from = $('select#education_year_from option:selected').val();
	var education_year_to   = $('select#education_year_to option:selected').val();
	
	if(education_country == '' || education_country == null){
	sweetAlert('OPPS!! sorry the country name is mandatory');	
	}else{
	if(education_name == '' || education_name == null){
	sweetAlert('OPPS!! sorry the collage name is mandatory');	
	}else{
	if(education_title == '' || education_title == null){
	sweetAlert('OPPS!! sorry the title is mandatory');	
	}else{
	if(education_degree == '' || education_degree == null){
	sweetAlert('OPPS!! sorry the degree is mandatory');	
	}else{
	if(education_year_from == '' || education_year_from == null){
	sweetAlert('OPPS!! sorry the from is mandatory');	
	}else{
	if(education_year_to == '' || education_year_to == null){
	sweetAlert('OPPS!! sorry the to is mandatory');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_education'); ?>",
	data: { 
		id: id, 
		seller_edu_country: education_country,
		seller_edu_collage_name: education_name,
		seller_edu_title: education_title,
		seller_edu_degree: education_degree,
		seller_edu_from: education_year_from,
		seller_edu_to: education_year_to,
	},
	success: function (res) {
	if(res == 'Success'){
	//+++++++++++++++++	
	swal({   
	title: "The Education Has Been Added",  
	type: "success",   
	showCancelButton: false,   
	confirmButtonColor: "#8CD4F5",   
	confirmButtonText: "OK",   
	closeOnConfirm: true 
	}, function(){   
	$('#edu').append('<tr><td class="table-data">'+education_degree+'</td><td class="table-data">'+education_year_from+'-'+education_year_to+'</td><td class="table-data"></td></tr>');
	$(".pro-sec-right-holder-3").hide();
	});
	//++++++++++++++++++	
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
$("#btn4").click(function(){
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var certifications_name = $('#certifications_name').val();
	var certifications_from = $('#certifications_from').val();
	var certifications_year = $('select#certifications_year option:selected').val();
	if(certifications_name == '' || certifications_name == null){
	sweetAlert('OPPS!! sorry the fild is mandatory 1');	
	}else{
	if(certifications_from == '' || certifications_from == null){
	sweetAlert('OPPS!! sorry the fild is mandatory 2');	
	}else{	
	if(certifications_year == '' || certifications_year == null){
	sweetAlert('OPPS!! sorry the fild is mandatory 3');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_certificate'); ?>",
	data: { 
		id: id, 
		seller_cerified: certifications_name,
		seller_cerified_from: certifications_from,
		seller_cerified_year: certifications_year,
	},
	success: function (res) {
	if(res == 'Success'){
	//+++++++++++++++++	
	swal({   
	title: "The Certification Has Been Added",  
	type: "success",   
	showCancelButton: false,   
	confirmButtonColor: "#8CD4F5",   
	confirmButtonText: "OK",   
	closeOnConfirm: true 
	}, function(){   
	$('#certificate').append('<tr><td class="table-data">'+certifications_name+'</td><td class="table-data">'+certifications_year+'</td><td class="table-data"></td></tr>');
	$(".pro-sec-right-holder-4").hide();
	});
	//++++++++++++++++++	
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
$("#btn5").click(function(){
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var profile_description =  $('#profile_description').val();
	var profile_url = $('#profile_url').val();
	if(profile_description == '' || profile_description == null){
	sweetAlert('OPPS!! sorry the fild is mandatory');	
	}else{
	if(profile_url == '' || profile_url == null){
	sweetAlert('OPPS!! sorry the fild is mandatory');	
	}else{	
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_portfolio'); ?>",
	data: { 
		id: id, 
		seller_profile_web: profile_description,
		seller_profile_web_link: profile_url,
	},
	success: function (res) {
	if(res == 'Success'){
	//+++++++++++++++++	
	swal({   
	title: "The Portfolio or Website Has Been Added",  
	type: "success",   
	showCancelButton: false,   
	confirmButtonColor: "#8CD4F5",   
	confirmButtonText: "OK",   
	closeOnConfirm: true 
	}, function(){   
	$('#portfolio').append('<tr><td class="table-data">'+profile_description+'</td><td class="table-data">'+profile_url+'</td><td class="table-data"></td></tr>');
	$(".pro-sec-right-holder-5").hide();
	});
	//++++++++++++++++++	
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