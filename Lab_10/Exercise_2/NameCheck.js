function nameCheck(){
  var username = document.getElementById("username");

  //alert("running script");
  if(username.value == ''){
    alert("Text box cannot be empty!");
    return false;
  }
  return true;
}
