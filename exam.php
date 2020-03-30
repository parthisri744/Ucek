<!DOCTYPE html>
<html>
    <head>
      <title>Exam Fees</title>
      <link rel = "icon" href ="https://upload.wikimedia.org/wikipedia/en/thumb/4/49/Anna_University_Logo.svg/1200px-Anna_University_Logo.svg.png"   type = "image/x-icon" > 
          
        <style>
          legend {
            color: brown;
            text-align: center;
            font-size: 40px;
          }
          input[type=text], input[type=tel] , input[type=email], input[type=date],select {
               width: 800px;
               padding: 12px 2px;
              display:block;
             border: 2px solid #ccc;
              border-radius: 4px;
              box-sizing:unset;
}
 div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
          }
label {
  color: blue;
  font-size: x-large;
          } 
input[type=submit] {
  width: 100%;
  background-color:black;
  color: white;
  padding: 14px 20px;
  margin-left: 4cm;
  margin-top: 12px; 
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: large;
}
fieldset {
  margin-left: 200px;
  margin-right: 300px;
}

input[type=submit]:hover {
  background-color:cornflowerblue;
  color: black;
}

#img {
  margin-left: 9cm;
} 
.capbox {
	display: inline-block;
	*display: inline;
   zoom: 1; 
	}

.capbox-inner {
	font: bold 20px arial, sans-serif;
	color: red;
  margin-left: 27 0px;
  margin-left: 280px;
	}

#CaptchaDiv {
	font: bold 30px verdana, arial, sans-serif;
	font-style: italic;
	color: darkred;
  margin:10px 0px 5px 340px;

	}

#CaptchaInput { 
  margin: 5px 0px 0px 290px;
   width: 200px; }


@media screen and (max-width: 1000px) {
  fieldset {
  margin-left: 50px;
  margin-right: 300px;
}  
#img {
  margin-left: 9cm;
}
input[type=submit] {
  margin-left: 3cm ;
  padding: 7px 10px;
}
}
@media screen and (max-width: 800px) {
  fieldset {
  margin-left: 0px;
  margin-right: 0px;
}  
#img {
  margin-left: 6cm;
}
input[type=submit] {
  margin-left: 2cm ;
}
input[type=text], input[type=tel] , input[type=email], input[type=date],select {
               width: 600px;
               padding: 12px 2px;
              display:block;
             border: 2px solid #ccc;
              border-radius: 4px;
              box-sizing:unset;
}
}
</style>
    </head>
    <body>
        <img src="http://www.aucek.in/images/banner_new.JPG" alt="Anna university" width="100%" height="100%">
        <div class="container">
        <form name="form" action="examfees.php" method="post"  onsubmit="return checkform(this);" >
          <fieldset>
            <legend>Exam  Fees payment</legend>
            <img id="img" src="https://mpng.pngfly.com/20181125/fir/kisspng-anna-university-university-college-of-engineering-5bfa5dcf5b3a01.5515451915431346713737.jpg" alt="ucek logo" width="200px" height="250px"><br>
            <label>Name Of  The Student :</label>
            <input type="text"  name="name"  placeholder="Your name.." autocomplete="off" required>
            <label>Register No:</label>
            <input type="text" name="regno"  placeholder="Your  Register No " autocomplete="off" required>
            <label>Contect NO:</label>
            <input type="tel"  name="contect"  pattern="^\d{10}$" placeholder="Your  Contect No " autocomplete="off" required >
            <label> Email Id:</label>
            <input type="email"   name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" placeholder="Your  Email Id " required>
            <label>Exam Fees:</label>
            <input type="text"  name="examfees" placeholder="Your Amount " maxlength="6" autocomplete="off"  required >
            <label>Date Of Birth :</label>
            <input type="date"  name="dob" required>        
            <div class="capbox">

              <div id="CaptchaDiv"></div>
              
              <div class="capbox-inner">
              Type the above number:<br>
       <input  type="hidden" id="txtCaptcha"></div>
      <input  type="text" name="CaptchaInput" id="CaptchaInput" size="15">
            <input type="submit"  value="Submit" name="submit">
          </fieldset>
         </form>
         <script type="text/javascript">
         function checkform(theform){
          var why = "";
          
          if(theform.CaptchaInput.value == ""){
          why += "- Please Enter CAPTCHA Code.\n";
          }
          if(theform.CaptchaInput.value != ""){
          if(ValidCaptcha(theform.CaptchaInput.value) == false){
          why += "- The CAPTCHA Code Does Not Match.\n";
          }
          }
          if(why != ""){
          alert(why);
          return false;
          }
          }
          
          var a = Math.ceil(Math.random() * 9)+ '';
          var b = Math.ceil(Math.random() * 9)+ '';
          var c = Math.ceil(Math.random() * 9)+ '';
          var d = Math.ceil(Math.random() * 9)+ '';
          var e = Math.ceil(Math.random() * 9)+ '';
          
          var code = a + b + c + d + e;
          document.getElementById("txtCaptcha").value = code;
          document.getElementById("CaptchaDiv").innerHTML = code;
          function ValidCaptcha(){
          var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
          var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
          if (str1 == str2){
          return true;
          }else{
          return false;
          }
          }
          function removeSpaces(string){
          return string.split(' ').join('');
          }
          </script>
          
    </body>
    
   
</html>





