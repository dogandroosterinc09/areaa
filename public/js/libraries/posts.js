(function () {
    "use strict";
    /* declare global variables within the class */
    var uiPostsTable,
        uiCreatePostForm,
        uiEditPostForm,
        uiPostsDatatable,
        filler;

    /* private ajax function that will send request to backend */
    function _ajax(oParams, fnCallback, uiBtn) {
        if (platform.var_check(oParams)) {
            var oAjaxConfig = {
                "type": oParams.type,
                "data": oParams.data,
                "url": oParams.url,
                "token": platform.config('csrf.token'),
                "beforeSend": function () {
                    /* check if there is a button to add spinner */
                    if (platform.var_check(uiBtn)) {
                        platform.show_spinner(uiBtn, true);
                    }
                },
                "success": function (oData) {
                    console.log(oData);
                    if (typeof(fnCallback) == 'function') {
                        fnCallback(oData);
                    }
                },
                "complete": function () {
                    /* check if there is a button to remove spinner */
                    if (platform.var_check(uiBtn)) {
                        platform.show_spinner(uiBtn, false);
                    }
                }
            };

            platform.CentralAjax.ajax(oAjaxConfig);
        }
    }

    /*
     * This js file will only contain post events
     *
     * */
    CPlatform.prototype.post = {

        initialize: function () {
            /* assign a value to the global variable within this class */
            uiPostsTable = $('#posts-table');
            uiCreatePostForm = $('#create-post');
            uiEditPostForm = $('#edit-post');
            uiPostsDatatable = null;

            uiPostsDatatable = platform.post.initialize_datatable();

            /* create post validation */
            uiCreatePostForm.validate({
                errorClass: 'help-block animation-slideDown',
                errorElement: 'span',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.form-group').find('.help-block').remove();
                },
                success: function (e) {
                    e.closest('.form-group').removeClass('has-success has-error');
                    e.closest('.form-group').find('.help-block').remove();
                },
                submitHandler: function (form) {
                    platform.show_spinner($(form).find('[type="submit"]'), true);
                    form.submit();
                },
                rules: {
                    'title': {
                        required: true
                    },
                    'body': {
                        required: true
                    }
                },
                messages: {
                    'title': {
                        required: 'Title is required.'
                    },
                    'body': {
                        required: 'Body is required.'
                    }
                }
            });

            /* edit post validation */
            uiEditPostForm.validate({
                errorClass: 'help-block animation-slideDown',
                errorElement: 'span',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.form-group').find('.help-block').remove();
                },
                success: function (e) {
                    e.closest('.form-group').removeClass('has-success has-error');
                    e.closest('.form-group').find('.help-block').remove();
                },
                submitHandler: function (form) {
                    platform.show_spinner($(form).find('[type="submit"]'), true);
                    form.submit();
                },
                rules: {
                    'title': {
                        required: true
                    },
                    'body': {
                        required: true
                    }
                },
                messages: {
                    'title': {
                        required: 'Title is required.'
                    },
                    'body': {
                        required: 'Body is required.'
                    }
                }
            });

            /* delete post button ajax */
            $('body').on('click', '.delete-post-btn', function (e) {
                e.preventDefault();
                var self = $(this);
                /* open confirmation modal */
                swal({
                    title: "Are you sure?",
                    text: "Are you sure you want to delete this record?",
                    type: "warning",
                    showCancelButton: true,
                    //confirmButtonColor: "#27ae60",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false,
                    closeOnCancel: true,
                    showLoaderOnConfirm: true,
                    allowOutsideClick: true
                }, function (isConfirm) {
                    /* if confirmed, send request ajax */
                    if (isConfirm) {
                        var oParams = {
                            'data': {'id': self.attr('data-post-id')},
                            'url': self.attr('data-post-route')
                        };
                        platform.delete.delete(oParams, function (oData) {
                            /* check return of ajax */
                            if (platform.var_check(oData)) {
                                /* check status if success */
                                if (oData.status > 0) {
                                    /* if status is true, render success messages */
                                    if (platform.var_check(oData.message)) {
                                        for (var x in oData.message) {
                                            var message = oData.message[x];
                                            swal({
                                                'title': "Deleted!",
                                                'text': message,
                                                'type': "success"
                                                //'confirmButtonColor': "#DD6B55",
                                            }, function () {
                                                /* remove post container */
                                                // $('[data-post-template-id="' + oData.data.id + '"]').remove();
                                                if (platform.var_check(uiPostsDatatable)) {
                                                    uiPostsDatatable.row(self.parents('tr:first')).remove();
                                                }

                                                uiPostsDatatable = platform.post.initialize_datatable();

                                                /* check if there are other posts to hide the table header and show the no posts found */
                                                if ($('tr[data-post-template-id]').length == 0) {
                                                    $('.post-empty').removeClass('johnCena');
                                                    $('.table-responsive').addClass('johnCena');
                                                }
                                            });
                                        }
                                    }
                                }
                                else {
                                    /* if status is false, render error messages */
                                    if (platform.var_check(oData.message)) {
                                        for (var x in oData.message) {
                                            var message = oData.message[x];
                                            swal({
                                                'title': "Error!",
                                                'text': message,
                                                'type': "error"
                                                //'confirmButtonColor': "#DD6B55",
                                            }, function () {

                                            });
                                        }
                                    }
                                }
                            }
                        }, self);
                    }
                });
            });
        },

        initialize_datatable: function () {
            if (platform.var_check(uiPostsDatatable)) {
                uiPostsDatatable.destroy();
            }

            /* posts table initialize datatable */
            uiPostsDatatable = uiPostsTable.DataTable({
                "order": [[2, "desc"]],
                "paging": true,
                "pageLength": 10,
                "lengthMenu": [[10, 20, 30, -1], [10, 20, 30, 'All']],
                "ordering": true,
                "info": true,
                "searching": true,
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [3]
                }]
            });

            return uiPostsDatatable;
        },
    }

}());

/* run initialize function on load of window */
$(window).on('load', function () {
    platform.post.initialize();
});