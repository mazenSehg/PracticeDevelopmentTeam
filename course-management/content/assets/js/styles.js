var MainJs = {
    init: function() {
        this.doc = $(document);
        this.body = this.doc.find('body');
        this.site_url = site_url;
        this.ajax_url = ajax_url;
        this.url_filter = /^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i;
        this.email_filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        this.phone_filter = /^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/;
        this.postcode_filter = /^[A-Z]{1,2}[0-9]{1,2} ?[0-9][A-Z]{2}$/i;
        this.spinner = '&nbsp;<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>';
        this.globalFunctions();
        this.BodyFunctions();
        this.UserFunctions();
        this.CohortFunctions();
        this.BookingFunctions();
    },

    reInit: function() {
        t = this;
        if (t.doc.find(".js-switch")[0]) {
            setTimeout(function() {
                var elems = Array.prototype.slice.call(document.querySelectorAll('input.js-switch:not([data-switchery=true])'));
                elems.forEach(function(html) {
                    var switchery = new Switchery(html, {
                        color: '#26B99A'
                    });
                });
            }, 500);
        }
        if (t.doc.find(".select_single")[0]) {
            
            
            t.select_single = t.doc.find('.select_single').select2({
                allowClear: true
            });
            
        }
    },

    globalFunctions: function() {
        t = this;
        t.CustomTabs();
        t.handleDataTableButtons();
        t.ajaxhandleDataTableButtons();
        t.ToolbarBootstrapBindings();

        t.doc.find('[data-toggle="tooltip"]').tooltip();

        t.doc.on('click', '.notification_close', function(e) {
            idname = $(this).parent().parent().attr("id");
            tabid = idname.substr(-2);
            t.doc.find('#ntf' + tabid).remove();
            t.doc.find('#ntlink' + tabid).parent().remove();
            t.doc.find('.notifications a').first().addClass('active');
            t.doc.find('#notif-group div').first().css('display', 'block');
        });

        t.doc.find('.editor-box').wysiwyg({
            fileUploadError: t.showErrorAlert()
        });

        t.doc.find('.editor-box').blur(function() {
            var data_id = $(this).data('id');
            var data_text = $(this).html();
            var parent_form = $(this).parents('form');
            parent_form.find('textarea#' + data_id).val(data_text);
        });

        window.prettyPrint;
        prettyPrint();

        
        
        var elements= document.querySelectorAll('.select_single');

        [].forEach.call(elements, function( el ) {
            if(el.getAttribute("value")){
                var val;
                val = el.getAttribute("value");
                el.setAttribute("id","mySelect2");
                $("#mySelect2").select2();
                $('#mySelect2').val(val).trigger('change');
                $("#mySelect2").removeClass("select_single");
            }
            
        });
        
        t.select_single = t.doc.find('.select_single').select2({
            allowClear: true
        });

        t.doc.find('.input-datepicker').daterangepicker({
            format: 'MMMM DD,YYYY',
            singleDatePicker: true,
            showDropdowns: true,
            calender_style: "picker_1"
        });

        t.doc.find('.input-datepicker-today').daterangepicker({
            format: 'MMMM DD,YYYY',
            singleDatePicker: true,
            showDropdowns: true,
            minDate: 'May 01 ,1950',
            maxDate: t.getToday(),
            calender_style: "picker_1"
        });

    },

    CustomTabs: function(options) {
        t = this;
        t.doc.find('.tabbed_notifications > div').hide();
        t.doc.find('.tabbed_notifications > div:first-of-type').show();
        t.doc.find('#custom_notifications').removeClass('dsp_none');
        t.doc.on('click', '.notifications a', function(e) {
            e.preventDefault();
            var $this = $(this),
                tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
                others = $this.closest('li').siblings().children('a'),
                target = $this.attr('href');
            others.removeClass('active');
            $this.addClass('active');
            t.doc.find(tabbed_notifications).children('div').hide();
            t.doc.find(target).show();
        });
    },

    TabbedNotification: function(options) {
        t = this, cnt = 10;
        var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
            "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

        if (!document.getElementById('custom_notifications')) {
            alert('doesnt exists');
        } else {
            t.doc.find('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
            t.doc.find('#custom_notifications #notif-group').append(message);
            cnt++;
            this.CustomTabs(options);
        }
    },

    handleDataTableButtons: function() {
        t = this;
        if (t.doc.find(".datatable-buttons").length) {
            t.doc.find(".datatable-buttons").DataTable({
                order: [
                    [1, "desc"]
                ],
                dom: "Bfrtip",
                buttons: [{
                    extend: "copy",
                    className: "btn-sm"
                }, {
                    extend: "csv",
                    className: "btn-sm"
                }, {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdfHtml5",
                    className: "btn-sm"
                }, {
                    extend: "print",
                    className: "btn-sm"
                }, ],
                responsive: true,
            });
        }
    },

    ajaxhandleDataTableButtons: function() {
        t = this;
        if (t.doc.find(".ajax-datatable-buttons").length) {
            t.datatable = t.doc.find(".ajax-datatable-buttons").DataTable({
                order: [
                    [t.doc.find(".ajax-datatable-buttons").data('order-column'), "desc"]
                ],
                dom: "Bflrtip",
                lengthMenu: [
                    [10, 25, 50, 100, 150, 200, 250, 300, 400, 450, 500],
                    [10, 25, 50, 100, 150, 200, 250, 300, 400, 450, 500]
                ],
                buttons: [{
                    extend: "copy",
                    className: "btn-sm"
                }, {
                    extend: "csv",
                    className: "btn-sm"
                }, {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdfHtml5",
                    className: "btn-sm"
                }, {
                    extend: "print",
                    className: "btn-sm"
                }, ],
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: t.ajax_url,
                    type: 'POST',
                    data: function(d) {
                        d.action = t.doc.find('.ajax-datatable-buttons').data('table');
                        d.user_designation = t.doc.find('.custom-filters select[name="user_designation"]').val();
                        d.work_area = t.doc.find('.custom-filters select[name="work_area"]').val();
                        d.course = t.doc.find('.custom-filters select[name="course"]').val();
                    },
                    complete: function(r) {
                        t.reInit();
                    }
                },
            });
            t.doc.on('change', '.custom-filters select', function() {
                t.datatable.ajax.reload(null, false);
            });
        }
    },

    ToolbarBootstrapBindings: function() {
        t = this;
        var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times', 'Times New Roman', 'Verdana'],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
        $.each(fonts, function(idx, fontName) {
            fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
        });

        t.doc.find('a[title]').tooltip({
            container: 'body'
        });

        t.doc.on('click', '.dropdown-menu input', function(e) {
                return false;
            })
            .on('change', '.dropdown-menu input', function(e) {
                $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', '.dropdown-menu input', function() {
                this.value = '';
                $(this).change();
            });

        t.doc.find('[data-role=magic-overlay]').each(function() {
            var overlay = $(this),
                target = $(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
        });

        if ("onwebkitspeechchange" in document.createElement("input")) {
            var editorOffset = t.doc.find('.editor-box').offset();
            t.doc.find('.voiceBtn').css('position', 'absolute').offset({
                top: editorOffset.top,
                left: editorOffset.left + $('#editor').innerWidth() - 35
            });
        } else {
            t.doc.find('.voiceBtn').hide();
        }
    },

    showErrorAlert: function(reason, detail) {
        t = this;
        var msg = '';
        if (reason === 'unsupported-file-type') {
            msg = "Unsupported format " + detail;
        } else {
            console.log("error uploading file", reason, detail);
        }
        $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' + '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
    },

    getToday: function() {
        t = this;
        d = new Date();
        todayDate = '' + (d.getMonthName()) + ' ' + d.getDate() + ',' + d.getFullYear();
        return todayDate;
    },

    get_available_bookings: function($date, $action) {
        t = this;
        var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
        t.doc.find('#booking-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
        $.ajax({
            type: 'POST',
            data: {
                action: $action,
                date: $date,
            },
            url: ajax_url,
            dataType: 'json',
            success: function(r) {
                t.doc.find('#booking-data-modal-body').html(r['html']);
                t.reInit();
            }
        });
    },

    BodyFunctions: function() {
        t = this;

        t.doc.on('click', '.page-scroll', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });

        t.doc.on('focus', 'form .form-control', function(e) {
            var box = $(this).parents('.form-group');
            box.removeClass('has-error');
            return false;
        });

        t.doc.on('submit', 'form.submit-form', function(e) {
            e.preventDefault();
            var form = $(this);
            var validation_check = 0;
            t.doc.find('.form-group').removeClass('has-error'); // remove class from form control which show error (red) color 
            form.find('.require').each(function() {
                if ($(this).val() == '' || $(this).val() == null) {
                    $(this).parents('.form-group').addClass('has-error');
                    validation_check = 1;
                }
            });

            if (validation_check == 1) {
                t.alert_notification('Form Validation Errors', 'Highlighted fields are required or have some validation errors. Please check and try again !', 'error');
                window.scrollTo(0, 0);
                return false;
            }

            var btn = form.find('button[type="submit"]');
            var btn_text = btn.html();
            btn.html(btn_text + t.spinner);
            btn.attr('disabled', true);

            // MAKE AJAX PROCESS 
            $.ajax({
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                url: t.ajax_url,
                dataType: 'json',
                success: function(r) {
                    btn.attr('disabled', false);
                    btn.html(btn_text);
                    if (r['status'] == 0) {
                        t.alert_notification(r['message_heading'], r['message'], 'info');
                    } else if (r['status'] == 2) {
                        $.each(r['fields'], function(key, value) {
                            var class_name = form.find('input[name="' + value + '"]');
                            class_name.parents('.form-group').addClass('has-error');
                        });
                        t.alert_notification(r['message_heading'], r['message'], 'info');
                    } else if (r['status'] == 1) {
                        if (r['reset_form'] == 1) {
                            form.trigger('reset');
                            t.doc.find('.editor-box').html('');
                            t.select_single.select2('destroy');
                            t.select_single.select2({
                                allowClear: true
                            });
                        }
                        t.alert_notification(r['message_heading'], r['message'], 'success');
                        window.scrollTo(0, 0);
                        if (r['reload'] == 1) {
                            window.location.reload();
                        }
                    }
                    return false;
                }
            });
        });

        t.doc.on('click', '.delete-record', function(e) {
            e.preventDefault;
            var isDelete = confirm('Are you sure want to delete this record?');
            if (isDelete == false) {
                return false;
            }
            var btn = $(this);
            var id = btn.data('id');
            var action = btn.data('action');
            var hide = btn.data('hide');
            var process = btn.data('process');

            btn_text = btn.html();
            btn.html(btn_text + t.spinner);
            btn.attr('disabled', true);

            $.ajax({
                type: 'POST',
                data: {
                    'action': action,
                    'id': id
                },
                url: t.ajax_url,
                success: function(res) {
                    if (res == 1) {
                        if (hide == '1') {
                            if (process == 'booking') {
                                t.alert_notification('Success !', 'Booking has been successfully cancelled !', 'success');
                                setTimeout(function() {
                                    window.location.reload();
                                }, 1000);
                            }
                        } else {
                            t.alert_notification('Success !', 'Record has been deleted successfully !', 'success');
                            btn.parents('tr').remove();
                            t.datatable.ajax.reload(null, false);
                        }
                    } else {
                        btn.attr('disabled', false);
                        btn.html(btn_text);
                    }
                }
            });
        });

        t.doc.on('click', 'input.approve-switch', function(e) {
            var _this = $(this);
            var status = 0;
            var id = _this.data('id');
            var action = _this.data('action');
            if (_this.is(':checked')) {
                var status = 1;
            }
            $.ajax({
                type: 'POST',
                data: {
                    'action': action,
                    'id': id,
                    'status': status,
                },
                url: t.ajax_url,
                dataType: 'json',
                success: function(res) {
                    if (res['status'] == 0) {
                        t.alert_notification(res['message_heading'], res['message'], 'info');
                    } else if (res['status'] == 1) {
                        t.alert_notification(res['message_heading'], res['message'], 'success');
                    }
                    return false;
                }
            });
        });
    },

    alert_notification: function(Title, Text, Type, Class = '') {
        t = this;
        t.doc.find('.ui-pnotify-closer').trigger('click');
        new PNotify({
            title: Title,
            text: Text,
            type: Type,
            styling: 'bootstrap3',
            addclass: Class
        });
    },

    filter_user_name: function(value) {
        var check = 0;
        var username_filter = [",", " ", "/", "@", "#", "$", "%", "^", "&", "*", "(", ")", "+", "=", "\\", "|", "{", "}", "[", "]", ";", ":"];
        for (var i = 0; i < username_filter.length; i++) {
            if (value.indexOf(username_filter[i]) >= 0) {
                check = 1;
            }
        }
        return check;
    },

    UserFunctions: function() {
        t = this;

        t.doc.on('submit', 'form.login-form', function(e) {
            e.preventDefault();
            var form = $(this);
            var formData = new FormData(this);
            t.doc.find('.form-group').removeClass('has-error'); // remove class from form control which show error (red) color 
            form.find('div.alert').slideUp();

            var user_name = form.find('input[name="user_name"]');
            var user_pass = form.find('input[name="user_pass"]');

            // USER NAME VALIDATION
            if (user_name.val() == '') {
                user_name.parents('.form-group').addClass('has-error');
                form.find('div.alert-danger').html('<i class="fa fa-times-circle"></i> &nbsp;<span>Please enter user name or email address</span>');
                form.find('div.alert-danger').slideDown();
                return false;
            }

            // USER PASSWORD VALIDATION 
            if (user_pass.val() == '') {
                user_pass.parents('.form-group').addClass('has-error');
                form.find('div.alert-danger').html('<i class="fa fa-times-circle"></i> &nbsp;<span>Please enter your password</span>');
                form.find('div.alert-danger').slideDown();
                return false;
            }

            var btn = $(this).find('button[type="submit"]');
            var btn_text = btn.html();
            btn.html(btn_text + t.spinner);
            btn.attr('disabled', true);

            // MAKE AJAX PROCESS 
            $.ajax({
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                url: t.ajax_url,
                success: function(res) {
                    btn.attr('disabled', false);
                    btn.html(btn_text);
                    if (res == 0) {
                        user_pass.parents('.form-group').addClass('has-error');
                        form.find('div.alert-danger').html('<i class="fa fa-times-circle"></i> &nbsp;<span>Invalid Username or Password</span>');
                        form.find('div.alert-danger').slideDown();
                        return false;
                    } else if (res == 2) {
                        form.find('div.alert-danger').html('<i class="fa fa-times-circle"></i> &nbsp;<span>Your account has been disabled , please contact your company to get it re-enabled.</span>');
                        form.find('div.alert-danger').slideDown();
                        return false;
                    } else if (res == 1) {
                        form.trigger('reset');
                        form.find('button[type="submit"]').hide();
                        form.find('div.alert-success').slideDown();
                        setTimeout(function() {
                            window.location.reload();
                        }, 500);
                        return false;
                    } else {
                        form.find('div.alert-danger').html('<i class="fa fa-times-circle"></i> &nbsp;<span>Could not login, please try again</span>');
                        form.find('div.alert-danger').slideDown();
                        return false;
                    }
                }
            });
        });

        t.doc.on('click', '.link-logout', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: t.ajax_url,
                data: {
                    'action': 'logout_request'
                },
                success: function(res) {
                    window.location.reload();
                }
            });
        });

        t.doc.on('submit', 'form.change-password', function(e) {
            e.preventDefault();
            var form = $(this);
            $('.form-group').removeClass('has-error'); // remove class from form control which show error (red) color 		
            var current_pass = form.find('input[name="current_password"]');
            var new_pass = form.find('input[name="new_password"]');
            var repeat_pass = form.find('input[name="confirm_password"]');

            // CURRENT PASSWORD VALIDATION
            if (current_pass.val() == '') {
                current_pass.parents('.form-group').addClass('has-error');
                t.alert_notification('Empty Password', 'Current password can\'t be empty, please enter current password !', 'error');
                return false;
            }

            // REPEAT PASSWORD VALIDATION
            if (new_pass.val() == '') {
                new_pass.parents('.form-group').addClass('has-error');
                t.alert_notification('Empty Password', 'New password can\'t be empty, please enter new password !', 'error');
                return false;
            }

            // REPEAT PASSWORD VALIDATION
            if (repeat_pass.val() == '') {
                repeat_pass.parents('.form-group').addClass('has-error');
                t.alert_notification('Empty Password', 'Repeat password can\'t be empty, please enter repeat password !', 'error');
                return false;
            }

            // PASSWORD MATCH VALIDATION
            if (new_pass.val() != repeat_pass.val()) {
                repeat_pass.parents('.form-group').addClass('has-error');
                t.alert_notification('Passwords don\'t match', 'Your password doesn\'t match with repeat password, please enter correct password !', 'error');
                return false;
            }

            var btn = form.find('button[type="submit"]');
            var btn_text = btn.html();
            btn.html(btn_text + t.spinner);
            btn.attr('disabled', true);

            // MAKE AJAX PROCESS 
            $.ajax({
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                url: t.ajax_url,
                success: function(res) {
                    btn.attr('disabled', false);
                    btn.html(btn_text);
                    if (res == 0) {
                        current_pass.parents('.form-group').addClass('has-error');
                        t.alert_notification('Invalid Password', 'Entered current password is invalid, please try again !', 'info');
                    } else if (res == 1) {
                        form.trigger('reset');
                        t.alert_notification('Success !', 'Your account password has been successfully updated.!', 'success');
                        window.scrollTo(0, 0);
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        t.alert_notification('Failed', 'Could not update password, Please try again !', 'info');
                    }
                    return false;
                }
            });
        });

        t.doc.on('change', 'form.upload-profile-image input[type="file"]', function(e) {
            if ($(this).val() != '') {
                var file = $(this).val();
                var exten = file.split('.').pop();
                var file_match = ["JPG", "jpg", "jpeg", "JPEG", "PNG", "png"];
                var form = $(this).parents('form');
                if ($.inArray(exten, file_match) == -1) {
                    form.trigger('reset');
                    t.alert_notification('Invalid Image Format', 'Selected image format is not valid, please check again !', 'error');
                    return false;
                } else {
                    var filesize = $(this)[0].files[0].size;
                    if (filesize > 1045505) {
                        form.trigger('reset');
                        t.alert_notification('File Size Is Big', 'You can only upload max 1 MB image file !', 'error');
                        return false;
                    }
                }
                form.trigger('submit');
                return false;
            }
        });

        t.doc.on('submit', 'form.upload-profile-image', function(e) {
            e.preventDefault();
            var form = $(this);
            form.find('div.alert').fadeIn();
            $.ajax({
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                url: t.ajax_url,
                success: function(res) {
                    //window.location.reload();
                    form.find('div.alert').fadeOut();
                    if (res == 0) {
                        form.trigger('reset');
                        t.alert_notification('Failed', 'There is some problem occured in uploading image, please try again !', 'error');
                    } else {
                        $('input[name="profile_img"]').val(res);
                        $('div.profile-image-preview-box img').attr('src', t.site_url + res);
                        form.find('button[type="button"]').trigger('click');
                    }
                    return false;
                }
            });
        });

        t.doc.on('submit', 'form.user-form', function(e) {
            e.preventDefault();
            var form = $(this);
            var validation_check = 0;
            $('.form-group').removeClass('has-error'); // remove class from form control which show error (red) color 		
            var user_email = form.find('input[name="user_email"]');

            form.find('.require').each(function() {
                if ($(this).val() == '' || $(this).val() == null) {
                    $(this).parents('.form-group').addClass('has-error');
                    validation_check = 1;
                }
            });

            if (validation_check == 0) {
                // USER EMAIL PATTERN VALIDATION 
                if (!t.email_filter.test(user_email.val()) && user_email.val() != '') {
                    user_email.parents('.form-group').addClass('has-error');
                    t.alert_notification('Invalid Email', 'Entered email is not valid, Please enter a valid email address !', 'error');
                    return false;
                }
            }

            if (validation_check == 1) {
                t.alert_notification('Form Validation Errors', 'Highlighted fields are required or have some validation errors. Please check and try again !', 'error');
                window.scrollTo(0, 0);
                return false;
            }

            var btn = form.find('button[type="submit"]');
            var btn_text = btn.html();
            btn.html(btn_text + t.spinner);
            btn.attr('disabled', true);

            // MAKE AJAX PROCESS 
            $.ajax({
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                url: t.ajax_url,
                dataType: 'json',
                success: function(res) {
                    btn.attr('disabled', false);
                    btn.html(btn_text);
                    console.log(res);
                    if (res['status'] == 0) {
                        t.alert_notification(res['message_heading'], res['message'], 'info');
                    } else if (res['status'] == 2) {
                        $.each(res['fields'], function(key, value) {
                            var class_name = form.find('input[name="' + value + '"]');
                            class_name.parents('.form-group').addClass('has-error');
                        });
                        t.alert_notification(res['message_heading'], res['message'], 'info');
                    } else if (res['status'] == 1) {
                        if (res['reset_form'] == 1) {
                            form.trigger('reset');
                            t.select_single.select2('destroy');
                            t.select_single.select2({
                                allowClear: true
                            });
                        }
                        t.alert_notification(res['message_heading'], res['message'], 'success');
                        window.scrollTo(0, 0);
                    }
                    return false;
                }
            });
        });

        t.doc.on('click', '.generate-password', function(e) {
            var btn = $(this);
            var btn_text = btn.html();
            btn.html(btn_text + t.spinner);
            btn.attr('disabled', true);
            // MAKE AJAX PROCESS 
            $.ajax({
                type: 'POST',
                data: {
                    'action': 'generate_password',
                },
                url: t.ajax_url,
                success: function(res) {
                    btn.attr('disabled', false);
                    btn.html(btn_text);
                    t.doc.find('form.edit-user input[name="user_pass"]').val(res);
                }
            });
        });

        t.doc.on('click', '.read-notification', function(e) {
            var btn = $(this);
            var id = btn.data('id');
            var type = btn.data('type');
            var btn_text = btn.html();
            btn.html(btn_text + t.spinner);
            btn.attr('disabled', true);
            // MAKE AJAX PROCESS 
            $.ajax({
                type: 'POST',
                data: {
                    'action': 'read_notification',
                    'id': id,
                    'type': type
                },
                url: t.ajax_url,
                success: function(res) {
                    btn.attr('disabled', false);
                    btn.html(btn_text);
                    if (res == 1) {
                        if (type == 'all') {
                            setTimeout(function() {
                                window.location.reload();
                            }, 1000);
                            return false;
                        }
                        btn.parents('li').removeClass('unread');
                    }
                }
            });
        });

        t.doc.on('click', '.hide-notification', function(e) {
            e.preventDefault();
            var btn = $(this);
            var id = btn.data('id');
            var btn_text = btn.html();
            var hide_type = btn.data('type');
            btn.html(btn_text + t.spinner);
            btn.attr('disabled', true);

            // MAKE AJAX PROCESS 
            $.ajax({
                type: 'POST',
                data: {
                    'action': 'hide_notification',
                    'id': id,
                    'type': hide_type
                },
                url: t.ajax_url,
                success: function(res) {
                    btn.attr('disabled', false);
                    btn.html(btn_text);
                    if (res == 1) {
                        if (hide_type == 'all') {
                            setTimeout(function() {
                                window.location.reload();
                            }, 1000);
                            return false;
                        }
                        btn.parents('li').remove();
                    }
                }
            });
        });
        
        t.doc.on('click', '.get-note', function(e) {
            _this = $(this);
            var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            t.doc.find('#note-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
            t.doc.find('.modal:not(#note-data-modal) button[data-dismiss="modal"]').click();
            $.ajax({
                type: 'POST',
                data: {
                    action: 'edit_note',
                    note_id: _this.data('note')
                },
                url: ajax_url,
                dataType: 'json',
                success: function(r) {
                    /*alert(r['html']);*/
                    t.doc.find('#note-data-modal-body').html(r['html']);
                    

                    t.reInit();
                    var elem = $('.js-switch');
                    var init = new Switchery(elem);
                    return false;
                }
            });
        });
        
        t.doc.on('click', '.get-mentor', function(e) {
            _this = $(this);
            var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            t.doc.find('#mentor-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
            t.doc.find('.modal:not(#mentor-data-modal) button[data-dismiss="modal"]').click();
            $.ajax({
                type: 'POST',
                data: {
                    action: 'view_mentor',
                    mentor_id: _this.data('mentor')
                },
                url: ajax_url,
                dataType: 'json',
                success: function(r) {
                    /*alert(r['html']);*/
                    t.doc.find('#mentor-data-modal-body').html(r['html']);
                    

                    t.reInit();
                    var elem = $('.js-switch');
                    var init = new Switchery(elem);
                    return false;
                }
            });
        });

        t.doc.on('click', '.email-user', function(e) {
            _this = $(this);
            var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            t.doc.find('#email-user-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
            t.doc.find('.modal:not(#email-user-data-modal) button[data-dismiss="modal"]').click();
            $.ajax({
                type: 'POST',
                data: {
                    action: 'email_user',
                    user_id: _this.data('user'),
                    all: true
                },
                url: ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.doc.find('#email-user-data-modal-body').html(r['html']);
                    t.reInit();
                    return false;
                }
            });
        });

        t.doc.on('click', '.email-mentor', function(e) {
            _this = $(this);
            var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            t.doc.find('#email-user-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
            t.doc.find('.modal:not(#email-user-data-modal) button[data-dismiss="modal"]').click();
            $.ajax({
                type: 'POST',
                data: {
                    action: 'email_mentor',
                    user_id: _this.data('mentor'),
                    all: true
                },
                url: ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.doc.find('#email-user-data-modal-body').html(r['html']);
                    t.reInit();
                    return false;
                }
            });
        });
        
        
    },

    CohortFunctions: function() {
        t = this;
        t.doc.on('change', '.fetch-cohort-dates-data', function(e) {
            var _this = $(this);
            $.ajax({
                type: 'POST',
                data: {
                    action: 'fetch_cohort_date_data',
                    course_id: _this.val(),
                },
                url: t.ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.select_single.select2("destroy");
                    t.doc.find('.select-dates').html(r['nurses_html']);
                    t.select_single.select2({
                        allowClear: true
                    });
                }
            });
        });
        t.doc.on('click', '.get-cohort', function(e) {
            _this = $(this);
            var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            t.doc.find('#view-cohort-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
            t.doc.find('.modal:not(#view-cohort-data-modal) button[data-dismiss="modal"]').click();
            $.ajax({
                type: 'POST',
                data: {
                    action: 'get_cohort',
                    cohort_id: _this.data('cohort')
                },
                url: ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.doc.find('#view-cohort-data-modal-body').html(r['html']);
                    t.doc.find('.cohort-email-all').attr("data-cohort",_this.data('cohort'));
			t.reInit();
                    return false;
                }
            });
        });


        t.doc.on('click', '.cohort-email-trainee', function(e) {
            _this = $(this);
		alert("in correct function");
            var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            t.doc.find('#email-cohort-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
            t.doc.find('.modal:not(#email-cohort-data-modal) button[data-dismiss="modal"]').click();
            $.ajax({
                type: 'POST',
                data: {
                    action: 'cohort_email',
                    cohort_id: _this.data('cohort'),
		    trainee_id: _this.data('trainee')
                },
                url: ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.doc.find('#email-cohort-data-modal-body').html(r['html']);
                    t.reInit();
                    return false;
                }
            });
        });


        t.doc.on('click', '.cohort-email-all', function(e) {
            _this = $(this);
            var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            t.doc.find('#email-cohort-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
            t.doc.find('.modal:not(#email-cohort-data-modal) button[data-dismiss="modal"]').click();
            $.ajax({
                type: 'POST',
                data: {
                    action: 'cohort_email',
                    cohort_id: _this.data('cohort'),
                    all: true
                },
                url: ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.doc.find('#email-cohort-data-modal-body').html(r['html']);
                    t.reInit();
                    return false;
                }
            });
        });



        t.doc.on('click', '.add-to-cohort', function(e) {
            _this = $(this);
            var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            t.doc.find('#add-to-cohort-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
            t.doc.find('.modal:not(#add-to-cohort-data-modal) button[data-dismiss="modal"]').click();
            $.ajax({
                type: 'POST',
                data: {
                    action: 'add-to-cohort',
                    cohort_id: _this.data('cohort')
                },
                url: ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.doc.find('#add-to-cohort-data-modal-body').html(r['html']);
                    t.reInit();
                    return false;
                }
            });
        });
    },

    BookingFunctions: function() {
        t = this;
        var traineeOptions;

        t.doc.on('click', '.get-nurses', function(e) {
            _this = $(this);
            var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            t.doc.find('#nurse-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
            t.doc.find('.modal:not(#nurse-data-modal) button[data-dismiss="modal"]').click();
            $.ajax({
                type: 'POST',
                data: {
                    action: 'fetch_booking_nurses',
                    booking_id: _this.data('booking'),
                    course_id: _this.data('course')
                },
                url: ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.doc.find('#nurse-data-modal-body').html(r['html']);
                    t.reInit();
                    return false;
                }
            });
        });
        
        t.doc.on('click', '.enrol-nurses', function(e) {
            _this = $(this);
            var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            t.doc.find('#enrol-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
            t.doc.find('.modal:not(#enrol-data-modal) button[data-dismiss="modal"]').click();
            $.ajax({
                type: 'POST',
                data: {
                    action: 'enrol_nurses',
                    booking_id: _this.data('booking')
                },
                url: ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.doc.find('#enrol-data-modal-body').html(r['html']);
                    t.reInit();
                    return false;
                }
            });
        });

        t.doc.on('click', '.email-nurses', function(e) {
            _this = $(this);
            var spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            t.doc.find('#email-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
            t.doc.find('.modal:not(#email-data-modal) button[data-dismiss="modal"]').click();
            $.ajax({
                type: 'POST',
                data: {
                    action: 'email_nurses',
                    booking_id: _this.data('booking'),
                    course_id: _this.data('course')
                },
                url: ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.doc.find('#email-data-modal-body').html(r['html']);
                    t.reInit();
                    return false;
                }
            });
        });
        t.doc.on('select2:select', '#templates', function(e) {
            _this = $(this);
            $.ajax({
                type: 'POST',
                data: {
                    action: 'get_template_process',
                    template_id: this.value,
		    booking_id: _this.data('booking'),
		    course_id: _this.data('course')
                },
                url: ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.doc.find(".body-div").html(r['body']);
       		   t.doc.find("#subject").attr("value",r['subject']);
		    //t.doc.find("#body-box").attr("contenteditable","true"); 
                   t.reInit();
			 return false;
                }
            });
        });
        t.doc.on('click', '.add-pending-bookings', function(e) {
            e.preventDefault();
            $_this = $(this);
            if (t.doc.find('#add-pending-booking-modal').length > 0) {
                t.doc.find('.modal:not(#add-pending-booking-modal) button[data-dismiss="modal"]').click();
                setTimeout(function() {
                    var form = t.doc.find('#add-pending-booking-modal form.add-pending-booking');
                    form.trigger('reset');
                    var _booking_id = $_this.data('booking');
                    var _course_id = $_this.data('course');
                    var _course_name = $_this.data('name');
                    form.find('input[name=booking_id]').val(_booking_id);
                    form.find('input[name=course_id]').val(_course_id);
                    form.find('input[name=course_name]').val(_course_name);
                    t.doc.find('.add-pending-booking-modal-btn').click();
                }, 500);
            } else {
                return false;
            }
        });

        t.doc.on('click', '.respond-pending-booking-btn', function(e) {
            e.preventDefault();
            var $_this = $(this);
            var _action = $_this.data('action');
            var _booking_id = $_this.data('id');
            var _modal = $('#reject-pending-booking-modal');
            _modal.find('.modal-footer button[data-dismiss="modal"]').click();
            if (_action == 'reject') {
                _modal.find('form input[name=booking_id]').val(_booking_id);
                $('.reject-pending-booking-modal-btn').click();
            } else if (_action == 'accept') {
                $.ajax({
                    type: 'POST',
                    data: {
                        action: 'accept_pending_booking',
                        booking_id: _booking_id
                    },
                    url: t.ajax_url,
                    dataType: 'json',
                    success: function(r) {
                        if (r['status'] == 0) {
                            t.alert_notification(r['message_heading'], r['message'], 'info');
                        } else if (r['status'] == 1) {
                            t.alert_notification(r['message_heading'], r['message'], 'success');
                            window.scrollTo(0, 0);
                            if (r['reload'] == 1) {
                                window.location.reload();
                            }
                        }
                        return false;
                    }
                });
            }
        });

        t.doc.on('click', '.add-to-courses-btn', function(e) {
            var $_this = $(this);
            var _user_id = $_this.data('user');
            var _selector = $('#add-to-booking-modal-body');
            $.ajax({
                type: 'POST',
                data: {
                    action: 'fetch_add_to_booking_data',
                    user_id: _user_id
                },
                url: t.ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.doc.find('.select-bookings').select2("destroy");
                    _selector.find('input[name="user_id"]').val(_user_id);
                    _selector.find('input[name="first_name"]').val(r['first_name']);
                    _selector.find('input[name="last_name"]').val(r['last_name']);
                    _selector.find('.select-bookings').html(r['bookings']);
                    t.doc.find('.select-bookings').select2({
                        allowClear: true
                    });
                    return false;
                }
            });
        });

        t.doc.on('click', 'input.nurse-modal-approve-switch', function(e) {
            var is = confirm('Are you want to do this?');
            if (is == false) {
                return false;
            }
            var $_this = $(this);
            var status = 0;
            if ($_this.is(':checked')) {
                var status = 1;
            }
            var user_id = $_this.data('user');
            var booking_id = $_this.data('booking');
            var action = $_this.data('action');
            $.ajax({
                type: 'POST',
                data: {
                    action: 'nurse_modal_approve',
                    type: action,
                    booking_id: booking_id,
                    user_id: user_id,
                    status: status,
                },
                url: t.ajax_url,
                dataType: 'json',
                success: function(res) {
                    if (res['status'] == 0) {
                        t.alert_notification(res['message_heading'], res['message'], 'info');
                    } else if (res['status'] == 1) {
                        t.alert_notification(res['message_heading'], res['message'], 'success');
                    }
                    if (res['reload'] == 1) {
                        t.doc.find('#nurse-data-modal .modal-footer button[data-dismiss="modal"]').click();
                    }
                    return false;
                }
            });
        });

        t.doc.on('click', '.remind-nurse-btn', function(e) {
            e.preventDefault();
            $_this = $(this);
            var is = confirm('Are you want to do this?');
            if (is == false) {
                return false;
            }
            var user_id = $_this.data('user');
            var booking_id = $_this.data('booking');
            var action = $_this.data('action');
            $.ajax({
                type: 'POST',
                data: {
                    action: 'nurse_modal_approve',
                    type: 'reminder',
                    booking_id: booking_id,
                    user_id: user_id,
                    status: 0,
                },
                url: t.ajax_url,
                dataType: 'json',
                success: function(res) {
                    if (res['status'] == 0) {
                        t.alert_notification(res['message_heading'], res['message'], 'info');
                    } else if (res['status'] == 1) {
                        t.alert_notification(res['message_heading'], res['message'], 'success');
                    }
                    if (res['reload'] == 1) {
                        t.doc.find('#nurse-data-modal .modal-footer button[data-dismiss="modal"]').click();
                    }
                    return false;
                }
            });
        });

        t.doc.on('click', '.get-additional-information', function(e) {
            e.preventDefault();
            $_this = $(this), spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            t.doc.find('#additional-information-data-modal-body').html('<h1 class="text-center green">' + spinner + '</h1>');
            t.doc.find('.modal:not(#additional-information-data-modal) button[data-dismiss="modal"]').click();
            $.ajax({
                type: 'POST',
                data: {
                    action: 'fetch_booking_additional_information',
                    booking_id: $_this.data('booking'),
                    user_id: $_this.data('user'),
                },
                url: t.ajax_url,
                dataType: 'json',
                success: function(r) {
                    t.doc.find('#additional-information-data-modal-body').html(r['html']);
                    t.reInit();
                    return false;
                }
            });
        });
        
        
        t.doc.on('click', '.print-register', function(e) {
            e.preventDefault();
            $_this = $(this), spinner = '<i class="fa fa-circle-o-notch fa-spin fa-5x" aria-hidden="true"></i>';
            var booking_id = (this.getAttribute("booking_id"));
            $.ajax({
                type: 'POST',
                data: {
                    action: 'get_register',
                    booking_id: booking_id,
                },
                url: t.ajax_url,
                dataType: 'json',
                success: function(res) {
                    var doc = new jsPDF();
                    var specialElementHandlers = {
                        '#editor': function(element, renderer){
                            return true;
                        },
                        '.controls': function(element, renderer){
                            return true;
                        }
                    };
                    doc.fromHTML(res.html, 15, 15, {
                        'width': 170, 
                        'elementHandlers': specialElementHandlers
                    });
                    doc.save('a4.pdf');
                }
            });
            
        });
        
        

        t.doc.on('focus', '.nurse-modal-datepicker', function() {
            t.doc.find('.nurse-modal-datepicker').daterangepicker({
                format: 'MMMM DD,YYYY',
                singleDatePicker: true,
                showDropdowns: true,
                calender_style: "picker_1"
            }, function(start, end, label) {
                var name = this.element.context.name;
                t.date_change(name);
            });
        });

        /*t.doc.on('apply.daterangepicker', '.nurse-modal-datepicker', function(ev, picker) {
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
                url: t.ajax_url,
                dataType: 'json',
                success: function(res) {
                    if (res['status'] == 0) {
                        t.alert_notification(res['message_heading'], res['message'], 'info');
                    } else if (res['status'] == 1) {
                        t.alert_notification(res['message_heading'], res['message'], 'success');
                    }
                    if (res['reload'] == 1) {
                        t.doc.find('#additional-information-data-modal .modal-footer button[data-dismiss="modal"]').click();
                    }
                    return false;
                }
            });
        });*/

        t.doc.on('click', '.remove-nurse-btn', function(e) {
            e.preventDefault();
            $_this = $(this);
            var is = confirm('Are you sure want to do this?');
            if (is == false) {
                return false;
            }
            var user_id = $_this.data('user');
            var booking_id = $_this.data('booking');
            t.doc.find('#nurse-data-modal .modal-footer button[data-dismiss="modal"]').click();
            t.doc.find('.remove-trainee-modal-btn').click();
            var form = t.doc.find(".remove-trainee-modal-form");
            form.find("input[name=booking_id]").val(booking_id);
            form.find("input[name=user_id]").val(user_id);
        });
        
        t.doc.on("select2:selecting", '#choose_course_type',  function(e) {
            if(!traineeOptions){
                traineeOptions=$("#choose_trainees").html();
            }
            if(e.params.args.data.id=='10000102735'){
                $.ajax({
                    type: 'POST',
                    data: {
                        action: 'get_mentor_names',
                    },
                    url: t.ajax_url,
                    dataType: 'json',
                    success: function(res) {
                       
                        var select = $("#choose_trainees");
                        select.html('');
                        select.append(res.mentors);
                        select.change();
                    }
                });
            }else{
                var select = $("#choose_trainees");
                select.html('');
                select.append(traineeOptions);
                select.change();
            }
            
       });
        
        t.doc.on("submit",'#update_mentor_student_numbers', function(e){
            $.ajax({
                type: 'POST',
                data: {
                    action: 'update_mentor_student_numbers',
                },
                url: t.ajax_url,
                dataType: 'json',
                success: function(res) {
                       
                    var select = $("#choose_trainees");
                    select.html('');
                    select.append(res.mentors);
                    select.change();
                }
            });
        });
    },
    date_change: function(name) {
        var _this = t.doc.find('#additional-information-data-modal-body input[name=' + name + ']');
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
            url: t.ajax_url,
            dataType: 'json',
            success: function(res) {
                if (res['status'] == 0) {
                    t.alert_notification(res['message_heading'], res['message'], 'info');
                } else if (res['status'] == 1) {
                    t.alert_notification(res['message_heading'], res['message'], 'success');
                }
                if (res['reload'] == 1) {
                    t.doc.find('#additional-information-data-modal .modal-footer button[data-dismiss="modal"]').click();
                }
                return false;
            }
        });
    }
};
MainJs.init();
