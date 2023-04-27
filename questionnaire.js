function validateForm() {
    let experience = document.forms["form"]["experience"].value;
    let feedback = document.forms["form"]["feedback"].value;
    let suggestions = document.forms["form"]["suggestions"].value;
    alert("gellow")
    

    if (experience.value.search(/\d{1}/)==-1){
        alert("Write only one word");
        return false;
    }
    if (feedback.value.search(/\w{1,500}/)== -1){
        alert("Write between 1 and 500 words");
        return false;

    }
    if (suggestions.value.search(/\w{1,1000}/) ==-1){
        alert("Write between 1 and 1000 words");
        return false;

    }

  }