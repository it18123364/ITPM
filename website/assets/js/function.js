// API calls group
function get(strEndpoint, objData) {
    return _request('GET', strEndpoint, objData, null);
}

function post(strEndpoint, objData) {
    return _request('POST', strEndpoint, objData);
}

function put(strEndpoint, objData) {
    return _request('PUT', strEndpoint, objData);
}

function del(strEndpoint, objData) {
    return _request('DELETE', strEndpoint, objData);
}

// API call common function
function _request(strMethod, strEndpoint, objData) {

    var headers = {};
    var jsonData = "";
    var data = "";

    const intTimestamp = $.now();
    const responseQueue = {
        timestamp: "",
        status: "",
        code: "",
        data: ""
    };

    // set headers
    headers["Accept"] = "application/json";

    var dateTime = Math.floor(Date.now() / 1000);

    strEndpoint += '?token=sri-onus-'+dateTime;

    if (strMethod == 'GET' && objData != '') {
        $.each(objData, function (strPlaceholder, strValue) {
            data += "&" + strPlaceholder + "=" + encodeURIComponent(strValue);
        });
        //console.log(data);
        strEndpoint += data;
    } else {
        //jsonData = JSON.stringify(objData);
        jsonData = objData;
        //console.log(jsonData);
    }

    //console.log(JSON.stringify(objData));

    var objRequest = {
        type: strMethod,
        url: strEndpoint,
        dataType:'JSON',
        data: jsonData,
        async: false,
        headers:headers,
        success: function (objResult, strStatus, objXHR) {
                responseQueue.timestamp = intTimestamp,
                responseQueue.status = strStatus,
                responseQueue.code = objXHR.status,
                responseQueue.data = objResult;
        },
        error: function (objXHR, strStatus) {
                responseQueue.timestamp = intTimestamp,
                responseQueue.status = strStatus,
                responseQueue.code = objXHR.status,
                responseQueue.data = objXHR.responseJSON;
        }
    };

    console.log('request', objRequest);

    // make the request
    $.ajax(objRequest);

    return responseQueue;

}

// alerts and confirm
function alertSuccess(title, msg, redirectUrl) {
    $.alert({
        title: title,
        icon: "fa fa-thumbs-o-up",
        type: "green",
        content: msg,
        animation: 'scale',
        closeAnimation: 'bottom',
        autoClose: 'okay|10000',
        escapeKey: 'okay',
        buttons: {
            okay: {
                text: ' CLOSE ',
                btnClass: 'btn-green',
                action: function () {
                    if(redirectUrl != undefined){
                        location.href = redirectUrl;
                    }
                }
            }
        }
    });
}

function alertError(title, msg, redirectUrl) {
    $.alert({
        title: title,
        icon: "fa fa-thumbs-o-down",
        type: "red",
        content: msg,
        animation: 'scale',
        closeAnimation: 'bottom',
        autoClose: 'okay|20000',
        escapeKey: 'okay',
        buttons: {
            okay: {
                text: ' CLOSE ',
                btnClass: 'btn-red',
                action: function () {
                    if(redirectUrl != undefined){
                        location.href = redirectUrl;
                    }
                }
            }
        }
    });
}

function alertWarning(title, msg, redirectUrl) {
    $.alert({
        title: title,
        icon: "fa fa-warning",
        type: "orange",
        content: msg,
        animation: 'scale',
        closeAnimation: 'bottom',
        autoClose: 'okay|20000',
        escapeKey: 'okay',
        buttons: {
            okay: {
                text: ' CLOSE ',
                btnClass: 'btn-orange',
                action: function () {
                    if(redirectUrl != undefined){
                        location.href = redirectUrl;
                    }
                }
            }
        }
    });
}

function alertContent(title, content, redirectUrl) {
    $.confirm({
        title: title,
        content: content,
        animation: 'scale',
        animationClose: 'top',
        buttons: {
            confirm: {
                text: 'Refresh',
                btnClass: 'btn-blue',
                action: function () {
                    this.$content.append(content);
                    return false; // prevent dialog from closing.
                }
            },
            cancel: function () {
                if(redirectUrl != undefined){
                    location.href = redirectUrl;
                }
            }
        },
    });
}

// Validate function
function validateForm(objForm, objRules) {
    return objForm.validate(objRules);
}

function messageBox(idOrClass, type, msg) {

    var tp = "";

    if(type.toUpperCase() == 'S'){
        tp = 'success';
    }else if(type.toUpperCase() == 'E'){
        tp = 'danger';
    }else if(type.toUpperCase() == 'W'){
        tp = 'warning';
    }else{
        tp = 'info';
    }

    $(idOrClass).html('<div class="per-alert alert alert-'+tp+'"> ' + msg + '</div>');

}
