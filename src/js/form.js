var nameLead = document.getElementById("name").value;
var lastNameLead = document.getElementById("lastName").value;

function testForm() {
    var data = {
        nl: nameLead,
        ot: lastName,
    };
    $.post("form.php", data);
}


// document.getElementById('element').onclick = function (e) {
//     alert('click');
// }

// testForm();
