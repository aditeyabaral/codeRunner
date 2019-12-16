function Validate()
{
    var x= document.forms["contact-form"]["name"].value()
    if(x==" "){
        console.log("Name is required");
        return false;
    }
    var y= document.forms["contact-form"]["email"].value()
    if(y==" "){
        console.log("Email is required");
        return false;
    }
    var z= document.forms["contact-form"]["message"].value()
    if(y==" "){
        console.log("Message is required");
        return false;
    }
}