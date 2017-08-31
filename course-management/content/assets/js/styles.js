$(document).ready(function() {
	
	var cnt = 10;
	
	TabbedNotification = function(options) {
		var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
		"</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

		if (!document.getElementById('custom_notifications')) {
			alert('doesnt exists');
		} else {
			$('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
			$('#custom_notifications #notif-group').append(message);
			cnt++;
			CustomTabs(options);
		}
	};

	CustomTabs = function(options) {
		$('.tabbed_notifications > div').hide();
		$('.tabbed_notifications > div:first-of-type').show();
		$('#custom_notifications').removeClass('dsp_none');
		$('.notifications a').click(function(e) {
			e.preventDefault();
			var $this = $(this),
			tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
			others = $this.closest('li').siblings().children('a'),
			target = $this.attr('href');
			others.removeClass('active');
			$this.addClass('active');
			$(tabbed_notifications).children('div').hide();
			$(target).show();
		});
	};

	CustomTabs();

	var tabid = idname = '';
	
	$(document).on('click', '.notification_close', function(e) {
		idname = $(this).parent().parent().attr("id");
		tabid = idname.substr(-2);
		$('#ntf' + tabid).remove();
		$('#ntlink' + tabid).parent().remove();
		$('.notifications a').first().addClass('active');
		$('#notif-group div').first().css('display', 'block');
	});

	$('[data-toggle="tooltip"]').tooltip(); 
	
	var handleDataTableButtons = function() {
		if ($(".datatable-buttons").length) {
			$(".datatable-buttons").DataTable({
				order: [[ 1, "desc" ]],
				dom: "Bfrtip",
				buttons: [
					{extend: "copy",className: "btn-sm"},
					{extend: "csv",className: "btn-sm"},
					{extend: "excel",className: "btn-sm"},
					{extend: "pdfHtml5",className: "btn-sm"},
					{extend: "print",className: "btn-sm"},
				],
				responsive: true,
			});
		}
	};
	
	var ajaxhandleDataTableButtons = function() {
		if ($(".ajax-datatable-buttons").length) {
			$(".ajax-datatable-buttons").DataTable({
				order: [[ $(".ajax-datatable-buttons").data('order-column'), "desc" ]],
				dom: "Bflrtip",
				lengthMenu: [[10, 25, 50, 100,150,200,250,300,400,450,500], [10, 25, 50, 100,150,200,250,300,400,450,500]],
				buttons: [
					{extend: "copy",className: "btn-sm"},
					{extend: "csv",className: "btn-sm"},
					{extend: "excel",className: "btn-sm"},
					{extend: "pdfHtml5",className: "btn-sm"},
					{extend: "print",className: "btn-sm"},
				],
				responsive: true,
				processing: true,
				serverSide: true,
				ajax: {
					url: ajax_url,
					type: 'POST',
					data: function ( d ) {
						d.action = $('.ajax-datatable-buttons').data('table');
						d.user_designation = $('.custom-filters select[name="user_designation"]').val();
						d.work_area = $('.custom-filters select[name="work_area"]').val();
						d.course = $('.custom-filters select[name="course"]').val();
					},
					complete:function(r){
						if ($("table .js-switch")[0]) {
							var elems = Array.prototype.slice.call(document.querySelectorAll('table .js-switch'));
							elems.forEach(function (html) {
								var switchery = new Switchery(html, {
									color: '#26B99A'
								});
							});
						}
					}
				},
			});
		}
	};

	TableManageButtons = function() {
		"use strict";
		return {
			init: function() {
				handleDataTableButtons();
				ajaxhandleDataTableButtons();
			}
		};
	}();

	TableManageButtons.init();
	
	function initToolbarBootstrapBindings() {
		var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier','Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times','Times New Roman', 'Verdana'],
		fontTarget = $('[title=Font]').siblings('.dropdown-menu');
		$.each(fonts, function(idx, fontName) {
			fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
		});
		$('a[title]').tooltip({
			container: 'body'
		});
		$('.dropdown-menu input').click(function() {
			return false;
		})
		.change(function() {
			$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
		})
		.keydown('esc', function() {
			this.value = '';
			$(this).change();
		});

		$('[data-role=magic-overlay]').each(function() {
			var overlay = $(this),
			target = $(overlay.data('target'));
			overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
		});

		if ("onwebkitspeechchange" in document.createElement("input")) {
			var editorOffset = $('.editor-box').offset();

			$('.voiceBtn').css('position', 'absolute').offset({
				top: editorOffset.top,
				left: editorOffset.left + $('#editor').innerWidth() - 35
			});
		} else {
			$('.voiceBtn').hide();
		}
	}

	function showErrorAlert(reason, detail) {
		var msg = '';
		if (reason === 'unsupported-file-type') {
			msg = "Unsupported format " + detail;
		} else {
			console.log("error uploading file", reason, detail);
		}
		$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+'<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
	}

	initToolbarBootstrapBindings();

	$('.editor-box').wysiwyg({
		fileUploadError: showErrorAlert
	});
	
	$('.editor-box').blur(function(){
		var data_id = $(this).data('id');
		var data_text = $(this).html();
		var parent_form = $(this).parents('form');
		parent_form.find('textarea#'+data_id).val(data_text);
	});

	window.prettyPrint;
	prettyPrint();
	
	$select_single = $('.select_single').select2({ allowClear: true });
	
	var d = new Date();
	var todayDate = '' + (d.getMonthName()) + ' ' + d.getDate() + ',' + d.getFullYear();
	
	$('.input-datepicker').daterangepicker({
		format: 'MMMM DD,YYYY',
		singleDatePicker: true,
		showDropdowns: true,
		calender_style: "picker_1"
	});
	
	$('.input-datepicker-today').daterangepicker({
		format: 'MMMM DD,YYYY',
		singleDatePicker: true,
		showDropdowns: true,
		minDate: 'May 01 ,1950',
		maxDate: todayDate,
		calender_style: "picker_1"
	});
	
	var url_filter = /^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i;
	var email_filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	var phone_filter = /^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/;
	var postcode_filter = /^[A-Z]{1,2}[0-9]{1,2} ?[0-9][A-Z]{2}$/i;
	var spinner = '&nbsp;<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>';
	
	$('.page-scroll').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});
	
	$('form .form-control').focus(function(){
		var box = $(this).parents('.form-group');
	 	box.removeClass('has-error');
	 	return false;
	});
	
	$('form.login-form').submit(function(e){
		e.preventDefault();
		
		var form = $(this);
		var formData = new FormData(this);
		$('.form-group').removeClass('has-error'); // remove class from form control which show error (red) color 
		form.find('div.alert').slideUp();
		
		var user_name = form.find('input[name="user_name"]');
		var user_pass = form.find('input[name="user_pass"]');
		
		// USER NAME VALIDATION
		if(user_name.val() == ''){
			user_name.parents('.form-group').addClass('has-error');
			form.find('div.alert-danger').html('<i class="fa fa-times-circle"></i> &nbsp;<span>Please enter user name or email address</span>');
			form.find('div.alert-danger').slideDown();
			return false;
		}
		
		// USER PASSWORD VALIDATION 
		if(user_pass.val() == ''){
			user_pass.parents('.form-group').addClass('has-error');
			form.find('div.alert-danger').html('<i class="fa fa-times-circle"></i> &nbsp;<span>Please enter your password</span>');
			form.find('div.alert-danger').slideDown();
			return false;
		}
		
		var btn = $(this).find('button[type="submit"]');
		var btn_text = btn.html();
		btn.html(btn_text+spinner);
		btn.attr('disabled',true);
				
		// MAKE AJAX PROCESS 
		$.ajax({ 
			type: 'POST',
			data: formData,
			contentType: false,
			cache: false,
			processData:false,
			url: ajax_url,
			success : function(res){
				console.log(res);
				btn.attr('disabled',false);
				btn.html(btn_text);
				if(res == 0 ){ 
					user_pass.parents('.form-group').addClass('has-error');
					form.find('div.alert-danger').html('<i class="fa fa-times-circle"></i> &nbsp;<span>Invalid Username or Password</span>');
					form.find('div.alert-danger').slideDown();
					return false;
				}else if(res == 2 ){
					form.find('div.alert-danger').html('<i class="fa fa-times-circle"></i> &nbsp;<span>Your account has been disabled , please contact your company to get it re-enabled.</span>');
					form.find('div.alert-danger').slideDown();
					return false;
				}else if (res == 1 ){
					form.trigger('reset');
					form.find('button[type="submit"]').hide();
					form.find('div.alert-success').slideDown();
					setTimeout(function(){ window.location.reload(); }, 500);
					return false;
				}else{
					form.find('div.alert-danger').html('<i class="fa fa-times-circle"></i> &nbsp;<span>Could not login, please try again</span>');
					form.find('div.alert-danger').slideDown();
					return false;
				}
			}
		});
	});
	
	$('.link-logout').click(function(e){
	 	e.preventDefault();
	 	$.ajax({
	 		type: 'POST',
	 		url: ajax_url,
	 		data : { 'action' : 'logout_request' },
	 		success : function (res){
				window.location.reload();
			}
	 	});
	 });
	 
	$('form.change-password').submit(function(e){
		e.preventDefault();
		
		var form = $(this);
		$('.form-group').removeClass('has-error'); // remove class from form control which show error (red) color 		
		var current_pass = form.find('input[name="current_password"]');
		var new_pass = form.find('input[name="new_password"]');
		var repeat_pass = form.find('input[name="confirm_password"]');
		
		
		// CURRENT PASSWORD VALIDATION
		if(current_pass.val() == ''){
			current_pass.parents('.form-group').addClass('has-error');
			alert_notification('Empty Password','Current password can\'t be empty, please enter current password !','error');
			return false;
		}
		
		// REPEAT PASSWORD VALIDATION
		if(new_pass.val() == ''){
			new_pass.parents('.form-group').addClass('has-error');
			alert_notification('Empty Password','New password can\'t be empty, please enter new password !','error');
			return false;
		}
		
		
		// REPEAT PASSWORD VALIDATION
		if(repeat_pass.val() == ''){
			repeat_pass.parents('.form-group').addClass('has-error');
			alert_notification('Empty Password','Repeat password can\'t be empty, please enter repeat password !','error');
			return false;
		}
		
		// PASSWORD MATCH VALIDATION
		if(new_pass.val() != repeat_pass.val()){
			repeat_pass.parents('.form-group').addClass('has-error');
			alert_notification('Passwords don\'t match','Your password doesn\'t match with repeat password, please enter correct password !','error');
			return false;
		}
		
		var btn = form.find('button[type="submit"]');
		var btn_text = btn.html();
		btn.html(btn_text+spinner);
		btn.attr('disabled',true);
		
		// MAKE AJAX PROCESS 
		$.ajax({ 
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			url: ajax_url,
			success : function(res){
				btn.attr('disabled',false);
				btn.html(btn_text);
				console.log(res);
				
				if(res == 0 ){ 
					current_pass.parents('.form-group').addClass('has-error');
					alert_notification('Invalid Password','Entered current password is invalid, please try again !','info');
				}else if (res == 1 ){
					form.trigger('reset');
					alert_notification('Success !','Your account password has been successfully updated.!','success');
					window.scrollTo(0,0);
					setTimeout(function(){window.location.reload();},1000);
				}else{
					alert_notification('Failed','Could not update password, Please try again !','info');
				}
				return false;
			}
		});
	});

	$('form.upload-profile-image input[type="file"]').change(function(){
	 	if($(this).val() != ''){
			var file = $(this).val();
			var exten = file.split('.').pop();
			var file_match = ["JPG","jpg","jpeg","JPEG","PNG","png"];
			var form = $(this).parents('form');
			if($.inArray(exten, file_match ) == -1){
				 form.trigger('reset');
				 alert_notification('Invalid Image Format','Selected image format is not valid, please check again !','error');
				return false;
			}else{
				var filesize =$(this)[0].files[0].size;
				if(filesize > 1045505){
					form.trigger('reset');
					alert_notification('File Size Is Big','You can only upload max 1 MB image file !','error');
					return false;
				}
			}
			form.trigger('submit');
			return false;
		}
	 });
	 
	$('form.upload-profile-image').submit(function(e){
		e.preventDefault();
		var form = $(this);
		form.find('div.alert').fadeIn();
		$.ajax({ 
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			url: ajax_url,
			success : function(res){
				//window.location.reload();
				form.find('div.alert').fadeOut();
				if(res == 0){
					form.trigger('reset');
					alert_notification('Failed','There is some problem occured in uploading image, please try again !','error');
				}else{
					$('input[name="profile_img"]').val(res);
					$('div.profile-image-preview-box img').attr('src',site_url + res);
					form.find('button[type="button"]').trigger('click');
				}
				return false;
			}
		});
	});

	$('form.user-form').submit(function(e){
		e.preventDefault();
		
		var form = $(this);
		var validation_check = 0;
		$('.form-group').removeClass('has-error'); // remove class from form control which show error (red) color 		
		var user_email = form.find('input[name="user_email"]');
		
		form.find('.require').each(function(){
			if($(this).val() == '' || $(this).val() == null){
				$(this).parents('.form-group').addClass('has-error');
				validation_check = 1;
			}
		});
		
		if(validation_check == 0){
				
			// USER EMAIL PATTERN VALIDATION 
			if(!email_filter.test(user_email.val()) && user_email.val() != '') {
				user_email.parents('.form-group').addClass('has-error');
				alert_notification('Invalid Email','Entered email is not valid, Please enter a valid email address !','error');
				return false;
			}
		}
		
		if(validation_check == 1){
			alert_notification('Form Validation Errors','Highlighted fields are required or have some validation errors. Please check and try again !','error');
			window.scrollTo(0,0);
			return false;
		}
		
		var btn = form.find('button[type="submit"]');
		var btn_text = btn.html();
		btn.html(btn_text+spinner);
		btn.attr('disabled',true);
		
		// MAKE AJAX PROCESS 
		$.ajax({ 
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			url: ajax_url,
			dataType: 'json',
			success : function(res){
				btn.attr('disabled',false);
				btn.html(btn_text);
				console.log(res);
				if(res['status'] == 0 ){
					alert_notification(res['message_heading'],res['message'],'info');
				}else if(res['status'] == 2 ){
					$.each(res['fields'], function( key, value ) {
						var class_name = form.find('input[name="'+value+'"]');
						class_name.parents('.form-group').addClass('has-error');
					});
					alert_notification(res['message_heading'],res['message'],'info');
				}else if(res['status'] == 1 ){
					if(res['reset_form'] == 1){
						form.trigger('reset');
						$select_single.select2('destroy');
						$select_single.select2({ allowClear: true });
					}
					alert_notification(res['message_heading'],res['message'],'success');
					window.scrollTo(0,0);
				}
				return false;
			}
		});
	});

	$('.generate-password').click(function(){
		var btn = $(this);
		var btn_text = btn.html();
		btn.html(btn_text+spinner);
		btn.attr('disabled',true);
		
		// MAKE AJAX PROCESS 
		$.ajax({ 
			type: 'POST',
			data: {
				'action' : 'generate_password',
			},
			url: ajax_url,
			success : function(res){
				btn.attr('disabled',false);
				btn.html(btn_text);
				$('form.edit-user input[name="user_pass"]').val(res);
			}
		});
	});

	$('form.submit-form').submit(function(e){
		e.preventDefault();
		
		var form = $(this);
		var validation_check = 0;
		$('.form-group').removeClass('has-error'); // remove class from form control which show error (red) color 
		form.find('.require').each(function(){
			if($(this).val() == '' || $(this).val() == null){
				$(this).parents('.form-group').addClass('has-error');
				validation_check = 1;
			}
		});

		if(validation_check == 1){
			alert_notification('Form Validation Errors','Highlighted fields are required or have some validation errors. Please check and try again !','error');
			window.scrollTo(0,0);
			return false;
		}
		
		var btn = form.find('button[type="submit"]');
		var btn_text = btn.html();
		btn.html(btn_text+spinner);
		btn.attr('disabled',true);
		
		// MAKE AJAX PROCESS 
		$.ajax({ 
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			url: ajax_url,
			dataType: 'json',
			success : function(r){
				console.log(r)
				btn.attr('disabled',false);
				btn.html(btn_text);
				if(r['status'] == 0 ){
					alert_notification(r['message_heading'],r['message'],'info');
				}else if(r['status'] == 2 ){
					$.each(r['fields'], function( key, value ) {
						var class_name = form.find('input[name="'+value+'"]');
						class_name.parents('.form-group').addClass('has-error');
					});
					alert_notification(r['message_heading'],r['message'],'info');
				}else if(r['status'] == 1 ){
					if(r['reset_form'] == 1){
						form.trigger('reset');
						$select_single.select2('destroy');
						$select_single.select2({ allowClear: true });
					}
					alert_notification(r['message_heading'],r['message'],'success');
					window.scrollTo(0,0);
					if(r['reload'] == 1){
						window.location.reload();
					}
				}
				return false;
			}
		});
	});
	
	$('.read-notification').click(function(){
		var btn = $(this);
		var id = btn.data('id');
		var type = btn.data('type');
		var btn_text = btn.html();
		btn.html(btn_text+spinner);
		btn.attr('disabled',true);
		
		// MAKE AJAX PROCESS 
		$.ajax({ 
			type: 'POST',
			data: {
				'action' : 'read_notification',
				'id' : id,
				'type' : type
			},
			url: ajax_url,
			success : function(res){
				btn.attr('disabled',false);
				btn.html(btn_text);
				console.log(res);
				if (res == 1 ){
					if(type == 'all'){
						setTimeout(function(){ window.location.reload();},1000);
						return false;
					}
					btn.parents('li').removeClass('unread');
				}
			}
		});
	});

	$('.hide-notification').click(function(e){
		e.preventDefault();
		var btn = $(this);
		var id = btn.data('id');
		var btn_text = btn.html();
		var hide_type = btn.data('type');
		btn.html(btn_text+spinner);
		btn.attr('disabled',true);
		
		// MAKE AJAX PROCESS 
		$.ajax({ 
			type: 'POST',
			data: {
				'action' : 'hide_notification',
				'id' : id,
				'type' : hide_type
			},
			url: ajax_url,
			success : function(res){
				console.log(res);
				btn.attr('disabled',false);
				btn.html(btn_text);
				if (res == 1 ){
					if(hide_type == 'all'){
						setTimeout(function(){ window.location.reload();},1000);
						return false;
					}
					btn.parents('li').remove();
				}
			}
		});
	});
	
	$('.fetch-course-nurses-data').change(function(e){
		var _this = $(this);
		console.log("Test");
		$.ajax({ 
			type: 'POST',
			data: {
				action: 'fetch_course_nurses_data',
				course_id: _this.val(),
			},
			url: ajax_url,
			dataType: 'json',
			success: function(r){
				$select_single.select2("destroy");
				$('.select-nurses').html(r['nurses_html']);
				$select_single.select2({ allowClear: true });
			}
		});
	});	
		
	$('.fetch-cohort-dates-data').change(function(e){
		var _this = $(this);
		console.log(_this.val());
		$.ajax({ 
			type: 'POST',
			data: {
				action: 'fetch_cohort_date_data',
				course_id: _this.val(),
			},
			url: ajax_url,
			dataType: 'json',
			success: function(r){
				$select_single.select2("destroy");
				$('.select-dates').html(r['nurses_html']);
				$select_single.select2({ allowClear: true });
			}
		});
	});
	
	$('.custom-filters select').on('change',function(){
		var attr_name = $(this).attr('name');
		if(attr_name == 'centre' || attr_name == 'equipment_type'){
			$.ajax({ 
				type: 'POST',
				data: {
					action: 'fetch_equipment_data',
					id: $('.custom-filters select[name="equipment_type"]').val(),
					centre: $('.custom-filters select[name="centre"]').val(),
				},
				url : ajax_url,
				dataType: 'json',
				success: function(res){
					console.log(res);
					$select_multiple.select2("destroy");
					$select_single.select2("destroy");
					$('select[name="equipment"]').html(res['equipment_html']);
					$('select[name="fault_type"]').html(res['fault_type_html']);
					$select_single.select2({ allowClear: true });
					$select_multiple.select2({ allowClear: true });
					$('.ajax-datatable-buttons > thead > tr th:nth-child(1)').trigger('click');
				}
			});
		}else{
			$('.ajax-datatable-buttons > thead > tr th:nth-child(1)').trigger('click');
		}
	});

	
});

function delete_function(btn){
	var isDelete = confirm('Are you sure want to delete this record?');
	if(isDelete == false){
		return false;
	}
	var spinner = '&nbsp;<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>';
	var btn = $(btn);
	var id = btn.data('id');
	var action = btn.data('action');
	var hide = btn.data('hide');
	var process= btn.data('process');
	
	btn_text = btn.html();
	btn.html(btn_text+spinner);
	btn.attr('disabled',true);
	
	$.ajax({ 
		type: 'POST',
		data: {
			'action' : action,
			'id' : id
		},
		url: ajax_url,
		success : function(res){
			console.log(res);
			if(res == 1){
				if(hide == '1'){
					if(process == 'booking'){
						alert_notification('Success !','Booking has been successfully cancelled !','success');
						setTimeout(function(){ window.location.reload();},1000);
					}
				}else{
					alert_notification('Success !','Record has been deleted successfully !','success');
					btn.parents('tr').remove();
				}					
			}else{
				btn.attr('disabled',false);
				btn.html(btn_text);
			}
		}
	});	
}

function get_nurses(btn){
	var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
	$('#nurse-data-modal-body').html('<h1 class="text-center green">'+spinner+'</h1>');
	$('#booking-data-modal .modal-footer button[data-dismiss="modal"]').click();
	$.ajax({ 
		type: 'POST',
		data: {
			action: 'fetch_booking_nurses',
			booking_id: $(btn).data('booking')
		},
		url: ajax_url,
		dataType: 'json',
		success: function(r){
			$('#nurse-data-modal-body').html(r['html']);
			if ($("table .js-switch")[0]) {
				var elems = Array.prototype.slice.call(document.querySelectorAll('table .js-switch'));
				elems.forEach(function (html) {
					var switchery = new Switchery(html, {
						color: '#26B99A'
					});
				});
			}
			$('.nurse-modal-datepicker').daterangepicker({
				format: 'MMMM DD,YYYY',
				singleDatePicker: true,
				showDropdowns: true,
				calender_style: "picker_1"
			});
			
			$('.nurse-modal-datepicker').on('apply.daterangepicker', function(ev, picker) {
				var _this = $(this);
				var _name = _this.attr('name')
				var _val = _this.val();
				var user_id = _this.data('user');
				var booking_id = _this.data('booking');
				$.ajax({ 
					type: 'POST',
					data: {
						action: 'nurse_modal_approve',
						type: _name,
						booking_id: booking_id,
						user_id: user_id,
						status: _val,
					},
					url: ajax_url,
					dataType: 'json',
					success : function(res){
						if(res['status'] == 0 ){
							alert_notification(res['message_heading'],res['message'],'info');
						}else if(res['status'] == 1 ){
							alert_notification(res['message_heading'],res['message'],'success');
						}
						if(res['reload'] == 1){
							$('#nurse-data-modal .modal-footer button[data-dismiss="modal"]').click();
						}
						return false;
					}
				});	
			});
			return false;
		}
	});
}

function get_available_bookings($date, $action){
	var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
	$('#booking-data-modal-body').html('<h1 class="text-center green">'+spinner+'</h1>');
	$.ajax({ 
		type: 'POST',
		data: {
			action: $action,
			date: $date,
		},
		url: ajax_url,
		dataType: 'json',
		success : function(r){
			$('#booking-data-modal-body').html(r['html']);
		}
	});	
}

function filter_user_name(value){
	var check = 0;
	var username_filter = [","," ","/","@","#","$","%","^","&","*","(",")","+","=","\\","|","{","}","[","]",";",":"];
	for(var i = 0; i< username_filter.length; i++){
		if(value.indexOf(username_filter[i]) >= 0){
			check = 1;
		}
	}	
	return check;
}

function alert_notification(Title,Text, Type, Class = ''){
	$('.ui-pnotify-closer').trigger('click');
	new PNotify({
		title: Title,
		text: Text,
		type: Type,
		styling: 'bootstrap3',
		addclass : Class
	});
}

function approve_switch(btn){
	var e = window.event;	
	var status = 0;
	var id = $(btn).data('id');
	var action = $(btn).data('action');
	
	if($(btn).is(':checked')){
		var status = 1;
	}
	$.ajax({ 
		type: 'POST',
		data: {
			'action' : action,
			'id' : id,
			'status' : status,
		},
		url: ajax_url,
		dataType: 'json',
		success: function(res){
			console.log(res);
			if(res['status'] == 0 ){
				alert_notification(res['message_heading'],res['message'],'info');
			}else if(res['status'] == 1 ){
				alert_notification(res['message_heading'],res['message'],'success');
			}
			return false;
		}
	});
}

function get_add_to_course_data(btn){
	var _this = $(btn);
	var _user_id = _this.data('user');
	var _selector = $('#add-to-course-modal-body');
	$.ajax({ 
		type: 'POST',
		data: {
			action: 'fetch_add_to_course_data',
			user_id : _user_id
		},
		url: ajax_url,
		dataType: 'json',
		success: function(r){
			console.log(r);
			$('.select-courses').select2("destroy");
			_selector.find('input[name="user_id"]').val(_user_id);
			_selector.find('input[name="first_name"]').val(r['first_name']);
			_selector.find('input[name="last_name"]').val(r['last_name']);
			_selector.find('.select-courses').html(r['courses']);
			$('.select-courses').select2({ allowClear: true });
			return false;
		}
	});
}

function get_add_to_booking_data(btn){
	var _this = $(btn);
	var _user_id = _this.data('user');
	var _selector = $('#add-to-booking-modal-body');
	$.ajax({ 
		type: 'POST',
		data: {
			action: 'fetch_add_to_booking_data',
			user_id : _user_id
		},
		url: ajax_url,
		dataType: 'json',
		success: function(r){
			console.log(r);
			$('.select-bookings').select2("destroy");
			_selector.find('input[name="user_id"]').val(_user_id);
			_selector.find('input[name="first_name"]').val(r['first_name']);
			_selector.find('input[name="last_name"]').val(r['last_name']);
			_selector.find('.select-bookings').html(r['bookings']);
			$('.select-bookings').select2({ allowClear: true });
			return false;
		}
	});
}

function nurse_modal_approve_switch(btn){
	var is = confirm('Are you want to do this?');
	if(is == false){
		return false;
	}
	var btn = $(btn);
	var status = 0;
	if( btn.is(':checked') ){
		var status = 1;
	}
	var user_id = btn.data('user');
	var booking_id = btn.data('booking');
	var action = btn.data('action');
	$.ajax({ 
		type: 'POST',
		data: {
			action: 'nurse_modal_approve',
			type: action,
			booking_id: booking_id,
			user_id: user_id,
			status: status,
		},
		url: ajax_url,
		dataType: 'json',
		success : function(res){
			if(res['status'] == 0 ){
				alert_notification(res['message_heading'],res['message'],'info');
			}else if(res['status'] == 1 ){
				alert_notification(res['message_heading'],res['message'],'success');
			}
			if(res['reload'] == 1){
				$('#nurse-data-modal .modal-footer button[data-dismiss="modal"]').click();
			}
			return false;
		}
	});	
}