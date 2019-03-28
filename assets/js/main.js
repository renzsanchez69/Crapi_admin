jQuery(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.modal').on('show.bs.modal', function() {
        var form = $(this).find('form');
        if(!form.length){
            return;
        }
        form[0].reset();
        form.find('.invalid-feedback').remove();
        form.find('.is-invalid').removeClass('is-invalid')
    })
    $('form.ajax').submit(function (e) {
        e.preventDefault();

        var $this = $(this),
            submitBtn = $this.find('[type=submit]'),
            originalText = submitBtn.text(),
            formData = new FormData($this[0]);

        $this.find('.invalid-feedback').remove();
        $this.find('.is-invalid').removeClass('is-invalid')

        submitBtn.attr('disabled', 'disabled').html('<i class="fa fa-spin fa-spinner"></i> Loading...')

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {    
                res = JSON.parse(res);
                console.log(res);
                console.log(res.status);
                if (res.status == 'OK') {
                    if(res.hasOwnProperty('data') && res.data.hasOwnProperty('location')){
                        window.location.href = res.data.location;
                    }else if($this.data('next-url')){
                        window.location.href = $this.data('next-url');
                    }else{
                        window.location.reload();
                    }
                } else if(res.status == 'NG') {
                    $('#errMessage').remove();
                    var alertMessage = '<div class="col-12" id="errMessage"><br><div class="alert alert-danger" role="alert">';
                    alertMessage += '<strong>' + res.errCode + '</strong>'; 
                    alertMessage += res.errMessage + '</div></div>';
                    $this.prepend(alertMessage);
                } else {
                    alert('An internal server error has occured. Please refresh the page. If the error still persists. Please contact your system administrator.');
                }
            },
            error: function (err) {
                alertify.alert('An internal server error has occured. Please refresh the page. If the error still persists. Please contact your system administrator.');
                // if(err.status == 422){
                //     // alertify.alert('Ooops!', 'Some fields contain errors. Please verify that all inputs are valid and try submitting again.');
                //     var errors = err.responseJSON['errors'];

                //     for(var field in errors){
                //         var fieldName = field;
                //         if(field.indexOf('.') !== -1){
                //             var parts = field.split('.'),
                //                 name = parts.splice(0, 1),
                //                 newField = name+'['+parts.join('][')+']';

                //             fieldName = newField;
                //         }

                //         console.log(fieldName)

                //         var input = $this.find("[name=\""+fieldName+"\"]");
                //         input.addClass('is-invalid');
                //         input.closest('.form-group').append('<div class="invalid-feedback">'+errors[field][0]+'</div>');

                //     }
                // }else{
                //     alertify.alert('An internal server error has occured. Please refresh the page. If the error still persists. Please contact your system administrator.');
                // }
            },
            complete: function () {
                submitBtn.removeAttr('disabled').text(originalText);
            }
        })
    })
    $('body').on('click', '.trash-row', function () {
        if(!confirm('Are you sure you want to delete this entry? This action cannot be undone!')) return;
        $(this).closest('form').submit();
    });

    $('.logout').click(function () {
        if(!confirm('Are you sure you want to logout?')) return;
        $('#logout-form').submit();
    });
    /*$("input[type='radio']").click(function(){
        var rating = $("input[name='star']:checked").val();
            
        if(rating > 0){
                $.ajax({
                    type: "POST",
                    url: "insert_rating.php",
                    data: "rating=" + rating,
                    success: function(data) {
                        //alert("success");
                        $('.stars').css('display','none');
                        $('.thanks').css('display','block');
                    }
                });
            alert(rating);
        }
        else{
            alert('fail');
        }
    });*/
    $(document).ready(function(){
        $("input[type='radio']").click(function(){
            var rating = $("input[name='star']:checked").val();
            var prop_id = $("input[name='property_id']").val();
            
            if(rating > 0){
                $.ajax({
                    type: "POST",
                    url: "{ url('/ratings/post') }}",
                    data: "rating=" + rating + "&property_id=" + prop_id,
                    success: function(data) {
                        console.log("success");
                        //$('.stars').css('display','none');
                        //$('.thanks').css('display','block');
                    }
                });
            }
            else{
                console.log('fail');
                console.log(prop_id);
                console.log(rating);
            }
        });
    });
});
