/*!
* KEMENSOS PKAT
* 
*/

/* document ready */
$(document).ready(function () {

    /* ONLY NUMERIC */
    $(".only-numeric").bind("keypress", function (e) {
        var keyCode = e.which ? e.which : e.keyCode
        if (!(keyCode >= 48 && keyCode <= 57)) {
            $();
            return false;
        } else {
            $();
        }
    });

    /* FORM VALIDATION */
    $("#form-maker").validate({
        rules: {
            survey_type: {
                required: true
            },
            title: {
                required: true
            },
            description: {
                required: true
            },
            start_date: {
                required: true
            },
            end_date: {
                required: true
            },
            question:{
                required:true
            }
        },
        messages: {
            survey_type: {
                required: "Pilih Jenis survey.",
            },
            title: {
                required: "Masukkan Judul survey."
            },
            description: {
                required: "Masukkan Deskripsi survey."
            },
            start_date: {
                required: "Masukkan tanggal mulai.",
            },
            end_date: {
                required: "Masukkan tanggal berakhir.",
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        errorPlacement: function (label, element) {
            label.addClass('error');
            element.parent().find('.form-control').before(label);
        }
    });

    /* FORM SELECT2 */
    $('.js-select2').select2({
        placeholder: {
		    id: '',
		    text: 'Pilih Tipe Pertanyaan'
		  },
		  allowClear: true
    });

    /* FORM DATE */
    $('.datepicker').datepicker();
});

