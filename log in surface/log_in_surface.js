function wrong(){
    var email = $user_email;
    var password = $user_password;
    var password2 = $user_password2;


    if(email != email_info){
        var button = document.getElementById("click");
        button.style.display = "None";
        var email = document.getElementById("rewrite_email");
        email.innerHTML = "you wrote the wrong email";
    }
    elseif(password != password2){
        var password = document.getElementById("rewrite_password");
        email.innerHTML = "Different password were entered";
    }
}

        
function validateForm() {
    var x = document.forms["sign_up_form"]["password"].value;
    var y = document.forms["sign_up_form"]["password_check"].value;
    if(x.length<6){
        alert("password need more than length 6");
        return false;
    }
    if (x != y) {
        alert("password is different");
        return false;
    }
}

function not_complete(){
    alert("Do not completely enter");
}

function wrong_email(){
    alert("Enter wrong email form");
}