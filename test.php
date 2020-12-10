<!DOCTYPE html>
<html>
<head>
    
<script>
function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  var y= document.forms["myForm"]["fuser"].value;
  var z= document.forms["myForm"]["fage"].value;
  var a=document.forms["myForm"]["femail"].value;
  var b=document.forms["myForm"]["faddre"].value;
  var c=document.forms["myForm"]["fcity"].value;
  var d=document.forms["myForm"]["fcode"].value;
  var f=document.forms["myForm"]["fmobile"].value;
  if (x == "") {
    alert("Aadhar number must be filled");
    return false;
  }
  else if(x.length <12)
  {
      alert("Invalid aadhar number");
      return false;
  }
  if(y=="" ||  y=="null")
  {
    alert("Please enter the name");
    return false;
  }
 
  if(z<18)
  {
      alert("Age must be greater than 18");
      return false;
  }
  if (!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myForm.femail.value))
  {
    alert("You have entered an invalid email address!")
    return false;
  }
 
  if(b=="" || b=="null")
  {
      alert("enter a valid address");
      return false;
  }
 else if(b.length <5 )
 {
     alert("length should be more than 5");
 }
 if(c=="" ||  c=="null")
  {
    alert("please enter the city");
    return false;
  }
 
  if(d=="" ||  d=="null")
  {
    alert("Please enter the pincode");
    return false;
  }
else if(d.length !=6)
{
    alert ("Invalid pincode");
    return false;
}
if(f=="" ||  f=="null")
  {
    alert("Please enter the mobile no.");
    return false;
  }
else if(f.length !=10)
{
    alert ("Invalid Mobile no");
    return false;
}
if(!myForm.terms.checked) {
      alert("Please accept the Terms and Conditions");
      return false;
    }
  return true;
  
}
</script>
<style>
    body{
        background-color: rgb(241, 195, 202);
    }
    img{
        border-radius: 10%;     
    }
    p{
        color: white;
        text-align: center;
        font-size: 100px;
        margin-top:-10px;
    }



.mark
{
color: white;
font-size: 30px;
background-color: lightgreen;
margin-bottom: 50px;


}
h1{
color: white;
text-align: center;
margin-top: -130px;

}
input[type=text], select {
width: 65%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
resize: vertical;
}
input[type=date] {
width: 65%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
resize: vertical;
}
input[type=number]  {
width: 65%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
resize: vertical;
}
input[type=password]  {
width: 65%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
resize: vertical;
}
input[type=checkbox]  {
width: 20%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;

margin-top:16px;

}
input[type=radio] {
width: 10%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
resize: horizontal;

}


label {
padding: 12px 12px 12px 0;
display: inline-block;
}

input[type=submit] {
background-color: #4CAF50;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
float: center;
margin-top:30px;
margin-right:200px;
}

input[type=submit]:hover {
background-color: #45a049;
}

.container {
width: 50%;
border-radius: 5px;
background-color: #f2f2f2;
padding: 20px;
margin-left: 300px;
margin-top: -80px;
}

.col-25 {
float: left;
width: 25%;
margin-top: 6px;
}

.col-75 {
float: left;
width: 60%;
margin-top: 6px;
}
span {
        font-size: 12px;
        padding-top: -20px;
    }

/* Clear floats after the columns */
.row:after {
content: "";
display: table;
clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
.col-25, .col-75, input[type=submit] {
width: 60%;
margin-top: 0;
}
}




</style>
</head>
<body>
    <p>
        <img src="images.png"  width="100" height="70">E-Voting System
    <marquee class="mark">Welcome to the E-voting System based on Blockchain Technology</marquee>
    <h1>REGISTRATION FORM</h1> </p>
<form name="myForm" action="test.php" onsubmit="return validateForm()" method="post">
    <div class="container">
        <div class="row">
                <div class="col-25">
    <label for="fname">Aadhar Number</label>
</div>
<div class="col-75">
   <input type="text" name="fname" placeholder="Enter your Aadhaar number">
</div>
</div>
<div class="row">
    <div class="col-25">
   <label for="fname">Name</label>
</div>
<div class="col-75">
 <input type="text" name="fuser" placeholder="Enter your Name">
</div>
</div>
<div class="row">
  <div class="col-25">
 <label for="fname">Date of Birth</label>
</div>
<div class="col-75">
 <input type="date" name="fdate">
</div>
</div>
 <div class="row">
  <div class="col-25">
 <label for="fname">Age</label>
</div>
<div class="col-75">
 <input type="number" name="fage" placeholder="Enter your Age">
</div>
</div>
   <div class="row">
  <div class="col-25">
 <label for="fname">Gender</label>
</div>
   
<div class="col-75">
 <label for="male">Male</label>
 <input type="radio" id="male" name="choice" value="male"  checked="true">
  <label for="fem">Female</label>
  <input type="radio" id="female" name="choice" value="female"  >
   <label for="oth">Others</label>
  <input type="radio" id="others" name="choice" value="others" >
</div>
</div>

 <div class="row">
  <div class="col-25">
  <label for="fname">Email</label>
</div>
<div class="col-75">
  <input type="text" name="femail" placeholder="Enter your Email">
</div>
</div>
 <div class="row">
  <div class="col-25">
  <label for="fname">Address</label>
</div>
<div class="col-75">
  <input type="text" name="faddre" placeholder="Enter your Address"> 
</div>
</div>
 <div class="row">
  <div class="col-25">
  <label for="fname">City</label>
</div>
<div class="col-75">
  <input type="text" name="fcity" placeholder="Enter your City">
</div>
</div>
  <div class="row">
  <div class="col-25">
  <label for="fname">Zip Code</label>
</div>
<div class="col-75">
  <input type="text" name="fcode" placeholder="Enter your Pincode">
</div>
</div>
   <div class="row">
  <div class="col-25">
  <label for="fname">State</label>
</div>
<div class="col-75">
  <select id="state" name="state">
      <option value="Andhra Pradesh ">Andhra Pradesh (AP)</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands(AN)</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh (AR)</option>
        <option value="Assam">Assam (AS)</option>
        <option value="Bihar">Bihar (BR)</option>
        <option value="Chhattisgarh">Chhattisgarh (CG)</option>
        <option value="Chandigarh">Chandigarh (CH)</option>
        <option value="Dadra and Nagar Haveli ">Dadra and Nagar Haveli (DN)</option>
        <option value="Daman and Diu ">Daman and Diu (DD)</option>
        <option value="Delhi">Delhi (DL)</option>
        <option value="Goa ">Goa (GA)</option>
        <option value="Gujarat">Gujarat (GJ)</option>
        <option value="Haryana ">Haryana (HR)</option>
        <option value="Himachal Pradesh">Himachal Pradesh (HP)</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir (JK)</option>
        <option value="Jharkhand">Jharkhand (JH)</option>
        <option value="Karnataka">Karnataka (KA)</option>
        <option value="Kerala ">Kerala (KL)</option>
        <option value="Lakshadweep">Lakshadweep (LD)</option>
        <option value="Madhya Pradesh ">Madhya Pradesh (MP)</option>
        <option value="Maharashtra">Maharashtra (MH)</option>
        <option value="Manipur ">Manipur (MN)</option>
        <option value="Meghalaya">Meghalaya (ML)</option>
        <option value="Mizoram">Mizoram (MZ)</option>
        <option value="Nagaland">Nagaland (NL)</option>
        <option value="Odisha">Odisha(OR)</option>
        <option value="Punjab ">Punjab (PB)</option>
        <option value="Pondicherry">Pondicherry (PY)</option>
        <option value="Rajasthan">Rajasthan (RJ)</option>
        <option value="Sikkim">Sikkim (SK)</option>
        <option value="Tamil Nadu">Tamil Nadu (TN)</option>
        <option value="Telangana ">Telangana (TS)</option>
        <option value="Tripura">Tripura (TR)</option>
        <option value="Uttar Pradesh">Uttar Pradesh (UP)</option>
        <option value="Uttarakhand">Uttarakhand (UK)</option>
        <option value="West Bengal ">West Bengal (WB)</option>   
    </select>
</div>
</div>
   <div class="row">
  <div class="col-25">
    <label for="fname">Mobile No.</label>
</div>
<div class="col-75">
    <input type="text" name="fmobile" placeholder="Enter your Mobile number">
</div>
</div>
<div class="row">
    <input type="checkbox" name="terms"> I accept the <u>Terms and Conditions</u></p>
  <input type="submit" value="Register" name="submit">
     
</div>
</form>

</body>
</html>
<?php
include_once 'database.php';
if(isset($_POST['submit']))
{	
  $aadhar=$_POST['fname']; 
	 $name = $_POST['fuser'];
	 $date = $_POST['fdate'];
	 $age = $_POST['fage'];
   $gender = $_POST['choice'];
   $email = $_POST['femail'];
	 $address = $_POST['faddre'];
	 $city = $_POST['fcity'];
   $zipcode = $_POST['fcode'];
   $state = $_POST['state'];
   $mobno = $_POST['fmobile'];
	 $sql = "INSERT INTO user_detail (adhar,name,dob,age,gender,	email,address,city,zip_code,state,mob_no) VALUES ('$aadhar','$name','$date','$age','$gender','$email','$address','$city','$zipcode','$state','$mobno')";
	 if (mysqli_query($conn, $sql)) {
		echo "";
	 } else {
		echo "Invalid Input"  . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
