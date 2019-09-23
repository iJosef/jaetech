function validate() {
    var x = document.forms["contact"]["fullname"].value;
    if (x == "") {
        alert("please enter your fullname");
        return false;
    }
    var x = document.forms["contact"]["email"].value;
    if (x == "") {
        alert("please enter your email address");
        return false;
    }
    var x = document.forms["contact"]["subject"].value;
    if (x == "") {
        alert("please fill the subject field");
        return false;
    }
    var x = document.forms["contact"]["message"].value;
    if (x == "") {
        alert("You left the message field empty");
        return false;
    }

}

function validate() {
    var x = document.forms["comments"]["fulname"].value;
    if (x == "") {
        alert("please enter your fullname");
        return false;
    }
    var x = document.forms["comments"]["comment"].value;
    if (x == "") {
        alert("please write a comment");
        return false;
    }
}