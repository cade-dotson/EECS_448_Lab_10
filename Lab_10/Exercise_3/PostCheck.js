function postCheck(){
  var postid = document.getElementById("postid");
  var username = document.getElementById("username");

  //alert("running script");
  if(postid.value == ''){
    alert("Post box cannot be empty!");
    return false;
  }
  if(username.value == ''){
    alert("Username box cannot be empty!");
    return false;
  }
  return true;
}
