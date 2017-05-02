$("#buttonID").click(function() {getData();});

function getData()
{

var adminName = $('#adminName').val();
var adminPassword = $('#adminPassword').val();

	post("http://ice.yhscs.us/adminTables.php", {adminName: adminName, adminPassword: adminPassword})
    return false;


//This was taken from http://stackoverflow.com/a/133997 with care.
function post(path, params, method) {
    method = method || "post";
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);
    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);
            form.appendChild(hiddenField);
         }
    }
    document.body.appendChild(form);
    form.submit();
}

}
