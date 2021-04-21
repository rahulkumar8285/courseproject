function login(logindata){
  alert("function run"); 
   var email = logindata['username'].value;
   var password = logindata['password'].value;
   alert(email);
   if(email.trim()==""||password.trim()==""){
    document.getElementById('errormsg').innerHTML+="<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Holy guacamole!</strong>Email And Password Must <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    return false;
   }
   else{return true;}
 }