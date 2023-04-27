function validateForm() {    
    let experience = document.forms["form"]["experience"];
    let feedback = document.forms["form"]["feedback"];
    let suggestions = document.forms["form"]["suggestions"];
    let email = document.forms["form"]["email"];
    let select = document.forms["form"]["select"];
    let name = document.forms["form"]["name"];

    if ((name.value)== ""){
        alert("Fill name field");
        name.focus();
       
        return false;
    }
    if (name.value.trim().search(/[A-Za-z_]/)==-1) {
        alert("Invalid Name");
        name.focus();
        return false;
    }
    if ((email.value)== ""){
        alert("Fill email field");
        email.focus();
       
        return false;
    }
  
    if (email.value.trim().search(/s\d{6}@student.squ.edu.om/)==-1 && email.value.trim().search(/\w+@\w+.com/)==-1) {
        alert("Invalid Email");
        email.focus();
        return false;
    }
    

    if(select.selectedIndex==""){
    alert ( "Please select a page!");
    select.focus();
    return false;
    }

    if ((experience.value)== ""){
        alert("Fill website experience field");
        experience.focus();
       
        return false;
    }
    if (experience.value.trim().split(" ").length!=1){
        alert("Write only one word in your experience about the website field");
        experience.focus();
        return false;
    }



    if ((feedback.value)== ""){
        alert("Fill feedback field");
        feedback.focus();
        return false;

    }
    if (1>=feedback.value.trim().split(" ").length || feedback.value.trim().split(" ").length >500){
        alert("Write between 2 and 500 words feedback field");
        feedback.focus();
        return false;

    }


    if((suggestions.value)== ""){
        alert("Fill suggestions field");
        suggestions.focus();
        return false;

    }
    if (1>=suggestions.value.trim().split(" ").length || suggestions.value.trim().split(" ").length >500){
        alert("Write between 2 and 1000 words suggestions field");
        suggestions.focus();
        return false;

    }
    return true;
  }
