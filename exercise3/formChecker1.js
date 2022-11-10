function validateForm() {
  let username = document.forms["myForm"]["username"].value;
  let initPassword = document.forms["myForm"]["initPassword"].value;
  let verifiedPassword = document.forms["myForm"]["verifiedPassword"].value;
  let tShirt = document.forms["myForm"]["tShirt"].value;
  let casualShirt = document.forms["myForm"]["casualShirt"].value;
  let poloShirt = document.forms["myForm"]["poloShirt"].value;
  let shipping = document.forms["myForm"]["shipping"].value;

  if (username == "" || tShirt == "" || casualShirt == "" || poloShirt == "") {
    alert("All information must be filled out");
    return false;
  }
  if(initPassword == ""){
    alert("The password can not be empty!");
    return false;
  }
  if(initPassword != verifiedPassword){
    alert("The passwords entered don't match!");
    return false;
  }
  if(tShirt < 0 || casualShirt < 0 || poloShirt < 0){
    alert("Quantity can not be negative!");
    return false;
  }
  if(shipping == ""){
    alert("Please pick a shipping option!");
    return false;
  }

}
