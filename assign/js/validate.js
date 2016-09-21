
var hasFocus = false;

 function checkName(form) /*UserName validation */
{
  var eobj=document.getElementById('realnameerror');
  var sRealName = form.name.value;
  var oRE = /^[a-z0-9]+[_.-]?[a-z0-9]+$/i;
  var error=false;
  eobj.innerHTML='';
  if (sRealName == '') {
   error='Username cannot be blank!';
  }
  else if (sRealName.length >50) 
{
    error="UserName should be less than 50 characters long";
  }
  else if (!oRE.test(sRealName))
{
   error="Incorrect format.";
  }
  if (error)
{
   if (hasFocus == false) {
     form.name.focus();
     hasFocus = true;
   } 
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }

function checkEmail(form)          /* for email validation */
{
 var eobj=document.getElementById('emailerror');
 eobj.innerHTML='';
 var error = false;
  if (form.email.value.length == 0) {
    error = 'Please enter email.';
  } else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.email.value))
 {
  return true;
 } else {
   error = 'Invalid E-mail Address! Please re-enter.';
 }
 if (error) {
   eobj.innerHTML=error;
   if (!hasFocus) {
     form.email.focus();
     hasFocus = true;
   } 
   return false;
 }

 return true;
}

function validatePwd(form)          /* password & retype-password verification */
{       
 var eobj1=document.getElementById('passworderror');
 var eobj2=document.getElementById('password2error');
 var minLength=5;
 var invalid=' ';
 var pw1=form.pwd.value;
 var pw2=form.pwd2.value;
 var error=false;
 eobj1.innerHTML='';
 eobj2.innerHTML='';
 if (pw1.length<1)
 {
  error='Please enter your password.';
 }
 else if (pw1.length < minLength)
 {
  error='Your password must be at least ' + minLength + ' characters long. Try again.';
 }
 else if (pw1.indexOf(invalid) > -1)
 {
  error='Sorry, spaces are not allowed.';
 } else if (pw2.length == 0) {
  error='Please retype password.';
   if (!hasFocus) {
     form.pwd2.focus();
     hasFocus = true;
   } 
  eobj2.innerHTML=error;
  return false;
 }
 if (error)
 {
   if (!hasFocus) {
     form.pwd.focus();
     hasFocus = true;
   } 
    eobj1.innerHTML=error;
  return false
 }
 if (pw1 != pw2)
 {
  eobj2.innerHTML=' passwords not matching.Please re-enter your password.';
   if (!hasFocus) {
     form.pwd2.focus();
     hasFocus = true;
   } 
  return false;
 }
 return true;
}

function validPhone(form)              /* phone no validation */
{          
 var eobj=document.getElementById('phonenoerror');
 var valid = '0123456789';
 var phone = form.mobile.value;
 var error=false;
 var i=0;
 var temp;
 eobj.innerHTML='';
 if (phone == '')
 {
  error='Please enter phone number';
 }
 else if (!phone.length > 1 || phone.length < 10)
 {
  error='Invalid phone number length! Please try again.';
 }
 else 
 {
  for (i=0; i < phone.length; i++)
 {
   temp = '' + phone.substring(i, i + 1);
   if (valid.indexOf(temp) == -1)
    {
    error='Invalid characters in your phone. Please try again.';
    }
  }
 }
 if (error)
 {
   if (!hasFocus) {
     form.mobile.focus();
     hasFocus = true;
   } 
  eobj.innerHTML=error;
  return false;
 }
 return true;
}

function validTax(form)              /* service tax no validation */
{          
 var eobj=document.getElementById('taxnoerror');
 var valid = '0123456789';
 var tax = form.stn.value;
 var error=false;
 var i=0;
 var temp;
 eobj.innerHTML='';
 if (tax == '')
 {
  error='Please enter service Tax number';
 }
 else if (!tax.length > 1 || tax.length < 14)
 {
  error='Invalid! Service Tax number length should be 14.Please try again.';
 }
 else 
 {
  for (i=0; i < tax.length; i++)
 {
   temp = '' + tax.substring(i, i + 1);
   if (valid.indexOf(temp) == -1)
    {
    error='Invalid characters. Please try again.';
    }
  }
 }
 if (error)
 {
   if (!hasFocus) {
     form.stn.focus();
     hasFocus = true;
   } 
  eobj.innerHTML=error;
  return false;
 }
 return true;
}

function checkTaxp(form)          /* for tax percentage validation */
{
 var eobj=document.getElementById('taxpnoerror');
 eobj.innerHTML='';
 var error = false;
  if (form.tper.value.length == 0) {
    error = 'Please enter tax Percentage.';
  }
  else if (/^((0|[1-9]\d?)(\.\d{1,2})?|100(\.00?)?)$/.test(form.tper.value))
 {
    if(parseFloat(form.tper)<200)
	{
	return true;
	}
  } 
 else {
   error = 'Invalid Tax Percentage Value! Please re-enter.';
 }
 if (error) {
   eobj.innerHTML=error;
   if (!hasFocus) {
     form.tper.focus();
     hasFocus = true;
   } 
   return false;
 }

 return true;
}

function validate(form) 
 {
  //console.log(form2);
  //alert(form2);
  hasFocus = false;
 //var form = document.forms['form'];
 //alert(form);
 var ary=[checkName,checkEmail,validatePwd,validPhone,validTax,checkTaxp];
 var rtn=true;
 var z0=0;
  //alert('outside loop');

 for (var z0=0;z0<ary.length;z0++)
{
   //alert('inside loop');

  if (!ary[z0](form))
  {
    //alert('inside loop inside if');
    rtn=false;
  }
 }
 //alert(form);
 return rtn;
 
}
