$(function(){
    var ctr = 0;
    $(document).on('click', '#btn_add_asset', function() {
        if ($('.asset-item-wrapper > div').length == 5) {                
            return false;
        }

        $('.asset-item-wrapper').append(
        '<div class="row">' + 
            '<div class="col-md-8 col-md-offset-2">' + 
                '<div class="form-group">' + 
                    '<label class="col-md-2 control-label" for="assets">Title</label>' + 
                    '<div class="col-md-10">' + 
                        '<input type="text" class="form-control" id="" name="asset_title[]" value="" placeholder="Enter Title..">' + 
                    '</div>' + 
                '</div>' + 
                '<div class="form-group">' + 
                    '<label class="col-md-2 control-label" for="assets">File</label>' + 
                    '<div class="col-md-10">' + 
                        '<div class="input-group">' + 
                            '<label class="input-group-btn">' + 
                            '<span class="btn btn-primary">' + 
                                'Choose File <input type="file" name="file[]" style="display: none;">' + 
                            '</span>' + 
                            '</label>' + 
                            '<input type="text" class="form-control" readonly>' + 
                        '</div>' + 

                        '<input type="text" class="form-control hidden" id="" name="asset_link[]" value="" placeholder="Enter Link..">' + 

                        '<label class="radio-inline" for="upload-a-file-' + ctr + '">' + 
                            '<input class="upload-a-file" type="radio" id="upload-a-file-' + ctr + '" name="asset-type-' + ctr + '" value="" checked> Upload a File' + 
                        '</label>' + 

                        '<label class="radio-inline" for="external-link-' + ctr + '">' + 
                            '<input class="external-link" type="radio" id="external-link-' + ctr + '" name="asset-type-' + ctr + '" value=""> External Link' + 
                        '</label>' +
                    '</div>' + 
                '</div>' + 
                '<div class="form-group">' +
                    '<div class="col-md-10 col-md-offset-2">' + 
                        '<button type="button" class="btn-remove-asset btn btn-sm btn-danger">Remove</button>' +
                    '</div>' +
                '</div>' +
            '</div>' +
            '<div class="col-md-8 col-md-offset-2">' +
                '<hr>' +
            '</div>' +
        '</div>'
        )
        ctr++;
    });

    $(document).on('click', '.upload-a-file', function() {
        var external_link = $(this).parent().parent().children('input');
        var upload_link = $(this).parent().parent().children('div');

        external_link.addClass('hidden');
        external_link.val('');

        upload_link.removeClass('hidden');
    });

    $(document).on('click', '.external-link', function() {
        var external_link = $(this).parent().parent().children('input');
        var upload_link = $(this).parent().parent().children('div');

        external_link.removeClass('hidden');

        upload_link.addClass('hidden');
        upload_link.find('input[type="file"]').val('');
        upload_link.find('input[type="text"]').removeAttr('readonly');
        upload_link.find('input[type="text"]').val('');
        upload_link.find('input[type="text"]').attr('readonly', true);
    });

    $(document).on('change', 'input[name="file[]"]', function () {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, ''),
            sValue = $(this).val(),
            ext = sValue.substring(sValue.lastIndexOf('.') + 1).toLowerCase();
        _fileselect($(this), numFiles, label, ext, 'file');
    });

    $(document).on('click', '.btn-remove-asset', function() {
        $(this).parent().parent().parent().parent().remove();
    });
});


/* private fileselect function that will check/validate files input */
function _fileselect(element, numFiles, label, ext, filetype) {
    var input = $(element).parents('.input-group').find(':text'),
        log = numFiles > 1 ? numFiles + ' files selected' : label;
    var uiImgContainer = $(element).parents('.form-group:first').find('.img-responsive');
    var uiFileContainer = $(element).parents('.form-group:first').find('.file-anchor');

    if (element.val() == '') {
        uiImgContainer.attr('src', uiImgContainer.attr('alt'));
        uiImgContainer.parents('.zoom:first').attr('href', uiImgContainer.attr('alt'));
        uiFileContainer.attr('href', '');
        uiFileContainer.text('');
        element.closest('.form-group').find('.remove-image-btn').hide();
        element.closest('.form-group').find('.remove-file-btn').hide();
        _fileselect_error(element, input, 'File is required.');
    } else {
        if (platform.var_check(filetype) && filetype == 'file') {
            if (ext == 'docx' || ext == 'doc' || ext == 'pdf') {
                element.closest('.form-group').find('.help-block').remove();
                element.closest('.form-group').removeClass('has-success has-error');
                element.closest('.form-group').find('.remove-file-btn').show();
                element.closest('.form-group').find('input.remove-file').val(0);

                if (input.length) {
                    input.val(log);
                } else {
                    if (log) {
                        console.log(log);
                    }
                }
            } else {
                uiFileContainer.attr('href', '');
                uiFileContainer.text('');
                element.closest('.form-group').find('.remove-image-btn').hide();
                element.closest('.form-group').find('.remove-file-btn').hide();
                _fileselect_error(element, input, 'The upload file must be a file of type: docx, doc, pdf.');
            }
        } else {
            if (ext == 'jpeg' || ext == 'jpg' || ext == 'png') {
                element.closest('.form-group').find('.help-block').remove();
                element.closest('.form-group').removeClass('has-success has-error');
                element.closest('.form-group').find('.remove-image-btn').show();
                element.closest('.form-group').find('input.remove-image').val(0);

                if (input.length) {
                    input.val(log);
                    platform.readURL($(element).get(0).files[0], uiImgContainer, []);
                } else {
                    if (log) {
                        console.log(log);
                    }
                }
            }
            else {
                uiImgContainer.attr('src', uiImgContainer.attr('alt'));
                uiImgContainer.parents('.zoom:first').attr('href', uiImgContainer.attr('alt'));
                element.closest('.form-group').find('.remove-image-btn').hide();
                element.closest('.form-group').find('.remove-file-btn').hide();
                _fileselect_error(element, input, 'The upload file must be a file of type: jpeg, jpg, png.');
            }
        }
    }

    element.closest('.form-group').find('.remove-image-btn').off('click').on('click', function () {
        uiImgContainer.attr('src', '');
        uiImgContainer.attr('alt', '');
        uiImgContainer.parents('.zoom:first').attr('href', uiImgContainer.attr('alt'));
        input.val('');
        element.val('');
        element.closest('.form-group').find('.remove-image-btn').hide();
        element.closest('.form-group').find('input.remove-image').val(1);
    });

    element.closest('.form-group').find('.remove-file-btn').off('click').on('click', function () {
        uiFileContainer.attr('href', '');
        uiFileContainer.text('');
        input.val('');
        element.val('');
        element.closest('.form-group').find('.remove-file-btn').hide();
        element.closest('.form-group').find('input.remove-file').val(1);
    });
}

/* private fileselect_error function that will append/display error messages of file input */
function _fileselect_error(element, input, msg) {
    element.closest('.form-group').find('.help-block').remove();
    element.closest('.form-group').removeClass('has-success has-error').addClass('has-error');
    element.parents('.form-group > div').append('<span id="file-error" class="help-block animation-slideDown">' + msg + '</span>');
    element.val('');
    input.val('');
}