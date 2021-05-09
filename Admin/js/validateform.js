function validateForm() {
  var x = document.forms["register"]["name"].value;
  var y = document.forms["register"]["email"].value;
  var z = document.forms["register"]["username"].value;
  var a = document.forms["register"]["password"].value;
  var d = document.forms["register"]["role"].value;
  var b = document.forms["register"]["birthday"].value;
  var c = document.forms["register"]["avatar"].value;
  //1. Name
  if(x =='' || x.length < 5 ){
    alert("Xin hay nhap lai ten");
    return false;
  }else{
    //2. Email
    if(y =='' || /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)){
      alert("Xin hay nhap lai email");
      return false;
    }
    else{
      // 3. Username
      if (z == '' || username.length < 5){
        alert("Xin hay nhap lai username");
        return false;
      }
      else{
        //4. Password
        if (a == '' || password.length < 8 ){
          alert("Xin hay nhap lai password");
          return false;
        }
      }
        
    }
      
  }
    
}