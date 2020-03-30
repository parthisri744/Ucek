
<?php
$link = mysqli_connect("localhost", "root", "", "test");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$regno = mysqli_real_escape_string($link, $_REQUEST['regno']);
$contect = mysqli_real_escape_string($link, $_REQUEST['contect']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$messfees = mysqli_real_escape_string($link, $_REQUEST['messfees']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$sql = "INSERT INTO messfees (name, regno, contect, email, messfees, dob) VALUES ('$name', '$regno', '$contect', '$email', '$messfees', '$dob')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?><html>
    <head>
      <title>Mess Fees</title>
      <link rel = "icon" href ="https://upload.wikimedia.org/wikipedia/en/thumb/4/49/Anna_University_Logo.svg/1200px-Anna_University_Logo.svg.png"   type = "image/x-icon" > 
          
       <style>
          legend {
            color: brown;
            text-align: center;
            font-size: 40px;
          }
    
label {
  color: blue;
  font-size: x-large; 
  margin-left: 4cm;
   } 
input[type=submit] {
  width: 40%;
  background-color:black;
  color: white;
  padding: 14px 20px;
  margin-left: 250px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: large;
}
fieldset {
  margin-left: 300px;
  margin-right: 300px;
}

input[type=submit]:hover {
  background-color:cornflowerblue;
  color: black;
}

#img {
  margin-left: 9cm;
} 


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
}
p {
  color:red;
  font-size:x-large;
  margin-left: 14cm;
  margin-top:-20px;

}

</style>
    </head>
    <body>

          <fieldset>
            <legend>Mess Fees payment</legend>
            <img id="img" src="https://mpng.pngfly.com/20181125/fir/kisspng-anna-university-university-college-of-engineering-5bfa5dcf5b3a01.5515451915431346713737.jpg" alt="ucek logo" width="180px" height="200px"><br>
            <h1 align="center">Confirm Your Details</h1>
            <label>Name Of  The Student : </label><p><?php echo $_POST["name"]; ?></p>
           
            <label>Register No: </label> <p> <?php echo $_POST["regno"]; ?></p>

            <label>Contect NO:   </label> <p><?php echo $_POST["contect"]; ?></p><br>

            <label> Email Id:</label><p> <?php echo $_POST["email"]; ?></p><br>

            <label>Mess Fees: </label> <p><?php echo $_POST["messfees"]; ?></p><br>

            <label>Date Of Birth : </label> <p><?php echo $_POST["dob"]; ?></p><br>

            <input type="submit"  value="Continue" name="submit">
          </fieldset>
         </form>
            
    </body>
    
   
</html>






