<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Brigade Northridge Enquiry Form</title>
<meta name="description" content="Brigade Northridge Enquiry Form" /> 


<!--<script type="text/javascript" lang="javascript">
function refresh()
		{
        document.getElementById('captcha-image-new').src='captcha_test.php?'+Math.random();
       document.getElementById('vercode').focus();
		}
</script>-->
<script type="text/javascript">
function Validate()
        {
            var phone = document.form1.phone.value;
            var phone = document.form1.phone.value;
           if(isNaN(phone)||phone.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false; 
           }
           if (phone.length>8)
           {
                alert("enter 8 characters");
                return false;
           }
           if (phone.charAt(0)!="2")
           {
                alert("it should start with 2 ");
                return false
           }
 
           if(isNaN(phone)||phone.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false; 
           }
           if (phone.length>10)
           {
                alert("enter 10 characters");
                return false;
           }
           if (phone.charAt(0)!="9")
           {
                alert("it should start with 9 ");
                return false
           }
        }
</script>


   <script type="text/javascript">
   
    function doClick(objRad){
    if (objRad.value=="pebbles"){	
    document.getElementById("textbox").style.display='none'; //hide textbox
    document.getElementById("otherOpt").style.display='block'; document.getElementById("new").style.display='none'; //show other options
    }
    else
	if(objRad.value=="RoundChips"){	
    document.getElementById("otherOpt").style.display='none'; //hide other options
    document.getElementById("textbox").style.display='block'; document.getElementById("new").style.display='none'; //show textbox
    }
	else
	if(objRad.value=="AngularChips"){	
	document.getElementById("new").style.display='block'; 
    document.getElementById("textbox").style.display='none'; //hide other options
    document.getElementById("otherOpt").style.display='none';
	 //show textbox
    }
	
    }
	
	
    </script>
    <style>
	#feedback-page{
	text-align:center;
}

#form-main{
	width:330px;
	float:right;
	padding-top:0px;
	height:35%;
	
}

#form-div {
	background-color:rgba(72,72,72,0.4);
	padding-left:35px;
	padding-right:35px;
	padding-top:35px;
	padding-bottom:50px;
	width: 330px;
	float: right;
	
	position: relative;
	height:430px;
	margin-left: -260px;
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
}

.feedback-input {
	color:#3c3c3c;
	font-family: Helvetica, Arial, sans-serif;
  font-weight:200;
	font-size: 14px;
	border-radius: 25;
	line-height: 10px;
	background-color: #fbfbfb;
	padding: 10px 10px 10px 54px;
	margin-bottom: 10px;
	width:100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
  border: 3px solid rgba(0,0,0,0);
}
.feedback-input1 {
	color:#3c3c3c;
	font-family: Helvetica, Arial, sans-serif;
  font-weight:200;
	font-size: 14px;
	border-radius: 25;
	line-height: 10px;
	
	
	margin-bottom: 10px;
	width:40%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
 
  padding: 10px 10px 10px 10px;
}


.feedback-input:focus{
	background: #fff;
	box-shadow: 0;
	border: 3px solid #3498db;
	color: #3498db;
	outline: none;
 padding: 10px 10px 10px 54px;
}

.feedback-input1:focus{
	background: #fff;
	box-shadow: 0;
	border: 3px solid #3498db;
	color: #3498db;
	outline: none;
 padding: 10px 10px 10px 10px;
}

.focused{
	color:#30aed6;
	border:#30aed6 solid 3px;
}

/* Icons ---------------------------------- */
#name{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 20px 20px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
	border-radius: 15px;
	border: 2px solid #a1a1a1;
	width:100%;
	height:25%
}

#name:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 20px 20px;
	background-position: 8px 5px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
	border-radius: 15px;
}

#email{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 20px 20px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
	border-radius:15px;
	border: 2px solid #a1a1a1;
}

#email:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 20px 20px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
	border-radius: 15px;
	
}
#phone1{
	
	background-size: 20px 20px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
	border-radius: 15px;
	border: 2px solid #a1a1a1;
	width:65%;
}

#phone1:focus{
	
	background-size: 20px 20px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
	border-radius: 15px;
	border: 2px solid #a1a1a1;
	width:65%;
	
}
#phone{
	
	background-size: 20px 20px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
	border-radius: 15px;
	border: 2px solid #a1a1a1;
	width:30%;
	
}

#phone:focus{
	
	background-size: 20px 20px;
    background-position: 11px 8px;
	background-repeat: no-repeat;
	border-radius: 15px;
	border: 2px solid #a1a1a1;
	width:30%;
	
}

#comment{
	background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
	background-size: 20px 20px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
	border-radius: 15px;
	border: 2px solid #a1a1a1;
}

textarea {
    line-height: 150%;
    resize:vertical;
	border-radius: 15px;
	border: 2px solid #a1a1a1;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
	background-color:white;
}

#button-blue{
	font-family: 'Montserrat', Arial, Helvetica, sans-serif;
	float:left;
	width: 25%;
	border: #fbfbfb solid 4px;
	cursor:pointer;
	background-color: #003366;
	color:white;
	font-size:10px;
	padding-top:22px;
	padding-bottom:22px;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
  margin-top:-4px;
  font-weight:100;
}

@media only screen and (max-width: 580px) {
	#form-div{
		left: 3%;
		margin-right: 3%;
		
		margin-left: 0;
		padding-left: 3%;
		padding-right: 3%;
	}
	
}
.btn{
background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 25;
  -moz-border-radius: 25;
  border-radius: 25px;
  font-family: Arial;
  color: #ffffff;
  font-size: 14px;
  padding: 7px 15px 7px 15px;
  text-decoration: none;

}
.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
p{
	padding:5px 5px;
	margin:10;
	font-size:13px;
	color:#333;
	text-align:left;
	line-height:20px;
}
 td{
  font-size:12px;
 }

	</style>
	<script type="text/javascript" language="javascript">
function trim(stringToTrim)
 {
    return stringToTrim.replace(/^\s+|\s+$/g,"");
    }
    
    
function isValidPhone(ph)
{
    var RegExp12 = /^\d{3}([ -]\d\d|\d[ -]\d|\d\d[ -])\d{6}$/;
     if(RegExp12.test(ph))
     {
        return true;
     }
     else
     {
        var RegExp123 = /^\d{10}$/;
        if(RegExp123.test(ph))
        {
            return true
        }
        else
        {
            return false;
        }
     }
}

function validateform()
{
    var name = document.form1.name;
    var email = document.form1.email;
    var phone = document.form1.phone;
    var comment = document.form1.comment;
    
    if(trim(name.value)=='' || name.value=='Name')   
    {
        alert("Please enter your name.");
        name.value='';
        name.focus();
        return false;
    }
	
	if(trim(phone.value)=='' || phone.value=='Contact number')
    {
        alert("Please enter your Contact number.");
        phone.value='';
        phone.focus();
        return false;
    }
	
    
    
    if(!isValidPhone(phone.value))
    {
         alert("Please enter valid phone no.");
         phone.focus();
         return false;
    }
     
	
	
	
    if(trim(email.value)=='' || email.value=='E-mail')
    {
        alert("Please enter your Email-id.");
        email.value='';
        email.focus();
        return false;
    }
    if(email.value!="")
    {
        str=trim(email.value);
        var a=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if(!a.test(str))
        {
            alert("Please input a valid email id!");
            email.focus();
            return false
        }
    }
   
	if(trim(comment.value)=='' || comment.value=='Enter your Query Here')
    {
        alert("Please enter your Query.");
        comment.value='';
        comment.focus();
        return false;
    }  
	
	
    return true;
}

function resetValues()
{
 	document.form1.name.value="";
    document.form1.email.value="";
   document.form1.phone.value="";
   document.form1.comment.value="";
	 return false;
}
</script>
</head>

<body >






<form id="form1"  class="blocks" action="send.php" method="POST" onsubmit="return validateForm()" name="form1">

	<div style="300px;height:380px">    			
   <div style="background: #eeeeee;"> 
	<center><h1 style="font-size:14px;"><b>Enquiry Now !</b></h1></center>
      <p class="name">
        <input name="name" type="text"  class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" pattern="[a-zA-Z\s]{2,}"  required placeholder="Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" required placeholder="Email" />
      </p>
      <p class="email">
        <input name="phone" type="phone" class="validate[required,custom[phone]] feedback-input1" value="+91" id="phone" required placeholder="+91" />
		<input name="phone1" type="phone" class="validate[required,custom[phone]] feedback-input1" id="phone1" pattern="[0-9]{10}" required placeholder="Phone Number" />
      </p>
      <p class="text">
        <textarea name="comment" class="validate[required,length[6,100]] feedback-input" id="comment" required placeholder="Comment"></textarea>
      </p>
      
      
      <center><div class="submit">
        <input type="submit" value="SUBMIT"  class="btn"/>
       
      </div></center>

</form>
</div>
</body>
</html>