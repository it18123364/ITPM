const _$frmAddEditEmployer = $('#emp-assignment-form');

function unAssign(url) {

    $.confirm({
        title: "Are you sure?",
        content: "Do you want to remove this assignment?",
        animation: 'scale',
        animationClose: 'top',
        buttons: {
            confirm: {
                text: 'Yes',
                btnClass: 'btn-green',
                action: function () {
                    location.href = url;
                }
            },
            cancel: function () {

            }
        },
    });

}

function submitData(e) {

    $.confirm({
        title: "Are you sure?",
        content: "Do you want to confirm this assignment?",
        animation: 'scale',
        animationClose: 'top',
        buttons: {
            confirm: {
                text: 'Yes',
                btnClass: 'btn-green',
                action: function () {
                    if($('#employee').val() != "" && $('#employer').val() != ""){
                        $('#emp-assignment-form').on('submit', function () {

                        });
                    }else{
                        alertError("Oops!!", "Please select the 'Employees' & 'Employers / Seekers' to proceed");
                    }
                }
            },
            cancel: function () {

            }
        },
    });

}
