<script type="text/javascript">
$(document).ready(function(){
//START

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++			
$("#btn1").click(function(){
	var fild_id = $('#fild_id').val();	
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var language_name = $('#language_name').val();
	var language_type = $('select#language_type option:selected').val();
	if(language_name == '' || language_name == null){
	sweetAlert('OPPS!! sorry the fild is mandatory');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_language'); ?>",
	data: 'language_name='+ language_name +'&id='+ id + '&language_type=' + language_type+ '&fild_id=' + fild_id,
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
	location.reload();
	});
	//++++++++++++++++++
	}else if(res == 'Updated'){
	//+++++++++++++++++	
	swal({   
	title: "The Language Has Been Updated",  
	type: "success",   
	showCancelButton: false,   
	confirmButtonColor: "#8CD4F5",   
	confirmButtonText: "OK",   
	closeOnConfirm: true 
	}, function(){   
	location.reload();
	});
	//++++++++++++++++++
	} else{
	sweetAlert("Oops...", "Something went wrong!");	
	} 			
	}
	});		
	}
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++			
$("#btn2").click(function(){
	var fild_id = $('#fild_id').val();	
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var skill_name =  $('#skill_name').val();
	var skill_level = $('select#skill_level option:selected').val();
	if(skill_name == '' || skill_name == null){
	sweetAlert('OPPS!! sorry the fild is mandatory');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_skill'); ?>",
	data: 'seller_skill='+ skill_name +'&id='+ id + '&seller_skill_level=' + skill_level+ '&fild_id=' + fild_id,
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
	location.reload();
	});
	//++++++++++++++++++
	}else if(res == 'Updated'){
	//+++++++++++++++++	
	swal({   
	title: "The Language Has Been Updated",  
	type: "success",   
	showCancelButton: false,   
	confirmButtonColor: "#8CD4F5",   
	confirmButtonText: "OK",   
	closeOnConfirm: true 
	}, function(){   
	location.reload();
	});
	//++++++++++++++++++
	} else{
	sweetAlert("Oops...", "Something went wrong!");	
	} 			
	}
	});		
	}
});
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++			
$("#btn3").click(function(){
	var fild_id = $('#fild_id').val();	
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
		fild_id:fild_id,
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
	location.reload();
	});
	//++++++++++++++++++	
	}else if(res == 'Updated'){
	//+++++++++++++++++	
	swal({   
	title: "The Language Has Been Updated",  
	type: "success",   
	showCancelButton: false,   
	confirmButtonColor: "#8CD4F5",   
	confirmButtonText: "OK",   
	closeOnConfirm: true 
	}, function(){   
	location.reload();
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
	var fild_id = $('#fild_id').val();	
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
		fild_id:fild_id, 
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
	location.reload();
	});
	//++++++++++++++++++	
	}else if(res == 'Updated'){
	//+++++++++++++++++	
	swal({   
	title: "The Language Has Been Updated",  
	type: "success",   
	showCancelButton: false,   
	confirmButtonColor: "#8CD4F5",   
	confirmButtonText: "OK",   
	closeOnConfirm: true 
	}, function(){   
	location.reload();
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
	var fild_id = $('#fild_id').val();	
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
		fild_id:fild_id,
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
	location.reload();
	});
	//++++++++++++++++++	
	}else if(res == 'Updated'){
	//+++++++++++++++++	
	swal({   
	title: "The Language Has Been Updated",  
	type: "success",   
	showCancelButton: false,   
	confirmButtonColor: "#8CD4F5",   
	confirmButtonText: "OK",   
	closeOnConfirm: true 
	}, function(){   
	location.reload();
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

$(document).ready(function(){
//START

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++			
$("#btn6").click(function(){
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
$("#btn8").click(function(){
	var fild_id = 0;
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var skill = $('#seller_skill').val();
	if(skill == '' || skill == null){
	sweetAlert('OPPS!! sorry the fild is mandatory');	
	}else{
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/update_skill'); ?>",
	data: 'seller_skill='+ skill +'&id='+ id + '&seller_skill_level=' + $( "#seller_skill_level option:selected" ).val() + '&fild_id=' + fild_id,
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
	$(".des-area-3").hide();
	$(".show-3").show();
	$('#seller_skill').val('');
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
$("#btn9").click(function(){
	var fild_id = 0;
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
		fild_id:fild_id,
		seller_edu_country: seller_edu_country,
		seller_edu_collage_name: seller_edu_collage_name,
		seller_edu_title: seller_edu_title,
		seller_edu_degree: seller_edu_degree,
		seller_edu_from: seller_edu_from,
		seller_edu_to: seller_edu_to,
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
	$(".des-area-4").hide();
	$(".show-4").show();
	$('#seller_edu_collage_name').val(' ');
	$('#seller_edu_degree').val(' ')
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
$("#btn10").click(function(){
	var fild_id = 0;
	var id = <?php echo $SESSION_UERS_DATA[0]['id']; ?>;
	var seller_cerified         = $('#seller_cerified').val();
	var seller_cerified_from    = $('#seller_cerified_from').val();
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
		fild_id:fild_id,
		seller_cerified: seller_cerified,
		seller_cerified_from: seller_cerified_from,
		seller_cerified_year: seller_cerified_year,
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
	$(".des-area-5").hide();
	$(".show-5").show();
	$('#seller_cerified').val(' ');
	$('#seller_cerified_from').val(' ')
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
$("#btn11").click(function(){
	var fild_id = 0;
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
		fild_id:fild_id, 
		seller_profile_web: seller_profile_web,
		seller_profile_web_link: seller_profile_web_link,
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
	$(".des-area-6").hide();
	$(".show-6").show();
	$('#seller_profile_web').val(' ');
	$('#seller_profile_web_link').val(' ')
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
//////////////////////////////////////////////////////////
var deleteData = function(id,type){
	swal({   
	title: "Are you sure?",
	text: "You want to delete this.You will not be able to recover this data!",
	type: "warning",
	showCancelButton: true,   
	confirmButtonColor: "#DD6B55",   
	confirmButtonText: "Yes, delete it!",   
	closeOnConfirm: false 
	}, function(){   
	jQuery.ajax({
	type: "POST",
	url: "<?php echo site_url('seller/delete_seller_data'); ?>",
	data: { 
		id: id, 
		type: type,
	},
	success: function (res) {
	if(res == 'Success'){
	//+++++++++++++++++	
	swal({   
	title: "Your data has been deleted.",  
	type: "success",   
	showCancelButton: false,   
	confirmButtonColor: "#8CD4F5",   
	confirmButtonText: "OK",   
	closeOnConfirm: true 
	}, function(){   
	location.reload();
	});
	//++++++++++++++++++	
	}else{
	sweetAlert("Oops...", "Something went wrong!");	
	} 			
	}
	});	
	});
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	 
var editDataLanguage = function(id,type,data1,data2){
	$('#fild_id').val('');
	$('#fild_type').val('');
	$('#btn1').html('Update');	
	$(".pro-sec-right-holder-1").show('slow',function(){
	$('#language_name').val(data1);
	$('#language_type').val(data2);	
	$('#fild_id').val(id);
	$('#fild_type').val(type);	
	});
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	
var editDataSkill = function(id,type,data1,data2){
	$('#fild_id').val('');
	$('#fild_type').val('');
	$('#btn2').html('Update');
	$(".pro-sec-right-holder-2").show('slow',function(){
	$('#skill_name').val(data1);
	$('#skill_level').val(data2);
	$('#fild_id').val(id);
	$('#fild_type').val(type);		
	});
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	
var editDataEducation = function(id,type,data1,data2,data3,data4,data5,data6){
	$('#fild_id').val('');
	$('#fild_type').val('');
	$('#btn3').html('Update');
	$(".pro-sec-right-holder-3").show('slow',function(){
	$('#education_country').val(data1);
	$('#education_name').val(data2);
	$('#education_title').val(data3);
	$('#education_degree').val(data4);
	$('#education_year_from').val(data5);
	$('#education_year_to').val(data6);
	$('#fild_id').val(id);
	$('#fild_type').val(type);		
	});
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	
var editDataCertificate = function(id,type,data1,data2,data3){
	$('#fild_id').val('');
	$('#fild_type').val('');
	$('#btn4').html('Update');
	$(".pro-sec-right-holder-4").show('slow',function(){
	$('#certifications_name').val(data1);
	$('#certifications_from').val(data2);
	$('#certifications_year').val(data3);
	$('#fild_id').val(id);
	$('#fild_type').val(type);		
	});
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	
var editDataPortfolio = function(id,type,data1,data2){
	$('#fild_id').val('');
	$('#fild_type').val('');
	$('#btn5').html('Update');
	$(".pro-sec-right-holder-5").show('slow',function(){
	$('#profile_description').val(data1);
	$('#profile_url').val(data2);	
	$('#fild_id').val(id);
	$('#fild_type').val(type);	
	});
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++	
//COUNT CHARACTERS IN TEXTAREA
function countChar(val){
	var len = val.value.length;
	if (len >= 300) {
	val.value = val.value.substring(0, 300);
	} else {
	$('#charNum').text(300 - len);
	}
};
</script>