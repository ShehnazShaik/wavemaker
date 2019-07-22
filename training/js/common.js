default_width = 670;

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};


var nullCheck = function nullCheck(val) {
    if (val == undefined || val == null || val == "") {
        return false;
    }
    else {
        return true;
    }
}

var logThis = function logThis(line, content) {
    console.log("Line: "+line, content)
}

function resizeFactor(width_, value) {
    return value*(width_/670);
    // return value*1;
}
function resizeFactor1(width_, value) {
    return value*1;
}
