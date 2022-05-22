const _$frmAddEditEmployer = $('#register-empr-form');
const _$frmAddEditContact = $('#register-contact-form');

var provinceDistrict = {
    'Western':[
        "Colombo",
        "Gampaha",
        "Kalutara",
    ],
    'North Western':[
        "Kurunegala",
        "Puttalam",
    ],
    'Southern':[
        "Galle",
        "Hambantota",
        "Matara",
    ],
    'Central':[
        "Kandy",
        "Matale",
        "Nuwara Eliya",
    ],
    'Eastern':[
        "Ampara",
        "Batticaloa",
        "Trincomalee",
    ],
    'North Central':[
        "Anuradhapura",
        "Polonnaruwa",
    ],
    'Northern':[
        "Jaffna",
        "Kilinochchi",
        "Mannar",
        "Mullaitivu",
        "Vavuniya",
    ],
    'Sabaragamuwa':[
        "Kegalle",
        "Ratnapura",
    ],
    'Uva':[
        "Badulla",
        "Moneragala",
    ],
};


listProvince();


function registerEmp() {

    $.confirm({
        title: 'Register Employer',
        content: 'Do you want to save your data?',
        autoClose: 'cancelAction|10000',
        escapeKey: 'cancelAction',
        buttons: {
            confirm: {
                btnClass: 'btn-green',
                text: 'OK',
                action: function () {
                    submitEmpData();
                }
            },
            cancelAction: {
                text: 'Cancel',
                action: function () {
                    // $.alert('Process Canceled');
                }
            }
        }
    });
}

function submitEmpData(){

    $.validator.addMethod("validate_email", function(value, element) {

        if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
            return true;
        } else {
            return false;
        }
    }, "");

    var validationRules = {
        rules: {
            fullname:{required: true},
            age:{required: true},
            gender:{required: true},
            birthday:{required: true},
            //email:{validate_email: true, required: false},
            address:{required: true},
            province:{required: true},
            district:{required: true},
            nic:{required: true},
            contact:{required: true},
            
        },
        messages: {

        },
        errorPlacement: function (error, element) {
            //var name = $(element).attr("name");
            //error.appendTo($("#" + name + "_validate"));
            //$("#" + name).addClass('fld-error');
        }
    }

    // validate the form
    validateForm(_$frmAddEditEmployer, validationRules);

    if (!_$frmAddEditEmployer.valid()) {
        alertError("Oops! Invalid", "Please fill the required fields correctly...");
        return;
    }else{
        _$frmAddEditEmployer.get(0).submit();
    }

}

function contactUs() {

    $.confirm({
        title: 'Contact Us',
        content: 'Are you sure you want to send this message to Sri Onus administration?',
        autoClose: 'cancelAction|10000',
        escapeKey: 'cancelAction',
        buttons: {
            confirm: {
                btnClass: 'btn-green',
                text: 'Yes',
                action: function () {
                    submitContactUs();
                }
            },
            cancelAction: {
                text: 'Cancel',
                action: function () {
                    // $.alert('Process Canceled');
                }
            }
        }
    });
}

function submitContactUs(){

    $.validator.addMethod("validate_email", function(value, element) {

        if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
            return true;
        } else {
            return false;
        }
    }, "");

    var validationRules = {
        rules: {
            name:{required: true},
            email:{validate_email: true, required: false},
            subject:{required: true},
            message:{required: true},
        },
        messages: {

        },
        errorPlacement: function (error, element) {
            //var name = $(element).attr("name");
            //error.appendTo($("#" + name + "_validate"));
            //$("#" + name).addClass('fld-error');
        }
    }

    // validate the form
    validateForm(_$frmAddEditContact, validationRules);

    if (!_$frmAddEditContact.valid()) {
        alertError("Oops! Invalid", "Please fill the required fields correctly...");
        return;
    }else{
        _$frmAddEditContact.get(0).submit();
    }

}

// =================================

function listProvince() {

    var append = "<option value=''>Select Province</option>";
    $.each( provinceDistrict, function( i, val ) {
        append += "<option value='"+i+"'>"+i+"</option>"
    });

    $('#province').html(append);
    $('#district').html("<option value=''>Select District</option>");
}

function getDistrict(prv) {

    var append = "<option value=''>Select District</option>";
    $.each( provinceDistrict[prv], function( i, val ) {
        append += "<option value='"+val+"'>"+val+"</option>"
    });

    $('#district').html(append);

}

