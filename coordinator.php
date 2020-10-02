<html>
<head>
<title>V-placement</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image:url("images/BG2.png");}
* {box-sizing: border-box;}

@media only screen and (max-width: 500px) {
.card-body{
	
	background-color:	 #e6f2ff;
	box-shadow: 5px 10px #80bfff;
	padding:1px;
	padding-bottom:1%;
	margin:2% 2%;
	border-radius:10px;
    width:auto;
	}

/* Button used to open the contact form  */
.open-button {
  background-color:#1a53ff;
  color: white;
  padding: 12px 10px;
  border-radius: 20px;
  margin-left:35%;
  margin-top:5%;
  cursor: pointer;
  opacity: 0.8;
  align:center;
  bottom: 23px;
  right: 28px;
  width: 120px;
  font-size:20px;
}

/* The popup form - hidden by default */
.form-popup {
  
  display: none;
  margin:2% 1%;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  border-radius:20px;
  z-index: 9;
 background-image: url("images/BG2.png");

}

/* Add styles to the form container */
.form-container {
  max-width: 600px;
  padding: 30px;  
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password]  {
  width: 50%;
  padding: 5px;
  margin: 10px 0 0 4.5px;
  border-radius : 10px;
  background: #f1f1f1;
  border-color: #088bf0;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus ,.form-container input[type=date] {
  background-color: #ddd;
  outline: none;
}


.form-container input[type=date] {
  width: 70%;
  float:right;
  padding: 5px;
  margin: 10px 0 0 4.5px;
  border-radius : 10px;
  background: #f1f1f1;
  border-color: #088bf0;
}

.form-container label{
	float:left;
	margin-top:7%;
	font-size:16px;
}



/* Set a style for the ok/login button */
.form-container .btn {
  background-color: #1a53ff;
  color: white;
  padding: 10px 10px;
  border: none;
  border-radius:20px;
  cursor: pointer;
  width: 30%;
  opacity: 0.8;
  margin-top:10px;
 
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.column1 {
  float: left;
  width: 25%;
  padding:2px;
  height: auto; 
  background-color:transparent;
}
.column2 {
  float: left;
  width: 50%;
  padding: 5px;
  height:5%; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

p,h2,h1{
padding:0px;
margin:0px;
font-size:14px;
padding-left:5%;
}
span{
	padding-left:2%;
}

h1{
font-size:16px;
padding-bottom:4px;	
}
h2{
font-familiy:Amiri;
font-size:25px;
padding-left:2%;	
margin-bottom:2%;	
}

.skill{
padding:2px 0px;
border :1px solid blue;
margin:7%;
margin-left:10%;	
text-align:center;
border-radius:8px;
}

i {
color:#3399ff;	

}
}




@media only screen and (max-width: 1700px) and (min-width:500px) {
.card-body{
	
	background-color:	 #e6f2ff;
	box-shadow: 5px 10px #80bfff;
	padding:1px;
	padding-bottom:1%;
	margin:2% 15%;
	border-radius:10px;
    width:auto;
	}

/* Button used to open the contact form  */
.open-button {
  background-color:#1a53ff;
  color: white;
  padding: 12px 10px;
  border-radius: 20px;
  margin-left:45%;
  margin-top:5%;
  cursor: pointer;
  opacity: 0.8;
  align:center;
  bottom: 23px;
  right: 28px;
  width: 120px;
  font-size:20px;
}

/* The popup form - hidden by default */
.form-popup {
  
  display: none;
  margin:2% 35%;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  border-radius:20px;
  z-index: 9;
 background-image: url("images/BG2.png");

}

/* Add styles to the form container */
.form-container {
  max-width: 600px;
  padding: 50px;
 
 
  
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] ,.form-container input[type=date]{
  width: 50%;
  padding: 10px;
  margin: 10px 0 0 4.5px;
  border-radius : 10px;
  background: #f1f1f1;
  border-color: #088bf0;
}




/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus ,.form-container input[type=date] {
  background-color: #ddd;
  outline: none;
}

.form-container input[type=date] {
  width: 70%;
  float:right;
  padding: 10px;
  margin: 10px 0 0 4.5px;
  border-radius : 10px;
  background: #f1f1f1;
  border-color: #088bf0;
}

.form-container label{
	float:left;
	margin-top:7%;
	font-size:18px;
}

/* Set a style for the ok/login button */
.form-container .btn {
  background-color: #1a53ff;
  color: white;
  padding: 10px 10px;
  border: none;
  border-radius:20px;
  cursor: pointer;
  width: 30%;
  opacity: 0.8;
  margin-top:10px;
 
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.column1 {
  float: left;
  width: 25%;
  padding: 5px;
  height: auto; 
  background-color:transparent;
}
.column2 {
  float: left;
  width: 50%;
  padding: 5px;
  height:5%; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

p,h2,h1{
padding:0px;
margin:0px;
font-size:14px;
padding-left:5%;
}
span{
	
	margin-left:5%;
	font-size:20px;
}
h1{
font-size:20px;
padding:5px;	
}
h2{
font-familiy:Amiri;
font-size:30px;
padding-left:2%;	
}

.skill{
padding:2px 0px;
border :1px solid blue;
margin:7%;
margin-right:30%;

text-align:center;
border-radius:8px;
}

i {
color:#3399ff;	
font-size:20px;

}
}
</style>
</head>

<body>
<div class="float-sm-left">
<button class="open-button"  onclick="openForm()">Add +</button>
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1 style="text-align:center;color:blue;font-family:Amiri;background-color:#00bfff;"">Add New Job</h1>

    
    <input type="text" placeholder="Company Name" style="width:100%" name="company_name" required>
	<input type="text" placeholder="Domain" style="width:100%" name="Domain" required>

    
	<input type="text" placeholder="Stipened" style="width:47%" name="stipened" required>
	<input type="text" placeholder="Duration" style="width:48%" name="duration" required><br>
	
	
	<label>Start date</label> 
	<input type="date"   name="start_date" required>
	
    <label >Apply by</label> 
    <input type="date"   name="apply_date" required>

    <input type="text" placeholder="Skills" style="width:100%" name="skills" required>  
	
	
    <button type="submit" class="btn" >Save</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>



	<div class="card-body">
		<div class="row">
			<div class="column2">
				<h2>Capgemini</h2>
				
			</div>
			<div class="column2">
				<i class="fas fa-trash-alt" style="margin-left:40%;" ></i><i class="far fa-edit w3-large" style="margin-left:20%;" ></i>
			</div>
		</div>
		<h1 style="padding-left:2%;">web developer</h1>
		<div class="row">
			<div class="column1" >
				<p><i class="far fa-credit-card "></i> <span >Stipend</span></p>
				<p><span>5000$</span></p>
			</div>
			<div class="column1" >
				<p><i class="far fa-clock"></i><span>Start date</span></p>
				<p><span>12/09/2020</span></p>
			</div>
			<div class="column1" >
				<p><i class="fas fa-hourglass-end  "></i><span>Apply by</span></p>
				<p><span>16/09/2020</span></p>
			</div>
			<div class="column1" >
				<p><i class="fas fa-hourglass-half "></i><span>Duration</span></p>
				<p><span>1 month</span></p>
				<p></p>
			</div>
		</div>
		
		<div class="row">
			<div class="column1">
				<p class="skill">HTML </p>
			</div>
			<div class="column1">
				<p class="skill">PHP </p>
			</div>
			<div class="column1">
				<p class="skill">CSS</p>
			</div>
			<div class="column1">
				<p class="skill">JavaScript </p>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>