<!DOCTYPE html>
<html lang="en">
<head>
<title>MedTech Solution</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- google fonts -->
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet'>
<script src="https://kit.fontawesome.com/yourcode.js"></script>

<style>
@media only screen and (max-width:1600px) and (min-width:500px){
body{
	background-image:url(images/BG1.png);
	background-size:1600px 650px;
	background-repeat: no-repeat;
}
.card-body{
	
	background-color: #f2f2f2;
	box-shadow: 2px 2px  #d9d9d9;
	padding:2% 5%;
	
	margin-top:45%;
	margin-left:40%;
	border-radius:10px;
    width:45%;
	}
	
.card{
	padding:2%;
	
	margin-top:40%;
	margin-left:20%;
	border-radius:10px;
    width:100%;
	}
	
	.column2 {
  float: left;
  width: 40%;
  padding: 5px;
  height:5%; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
	input{
		width:100%;
		
		border: 2px solid  #bfbfbf;
		border-radius: 8px;
		margin: 8px 0px;
		padding:8px;
		
		box-sizing:border-box;
		outline:none;
		
	}
	
	input:focus{
		border-color: #0066cc;
		box-shadow:0 0 8px 0 #0066cc;
	}
	.inputWithIcon input{
	padding-left:40px;	
	}
	
	.inputWithIcon{
		position:relative;
	}
	
	.inputWithIcon i{
			position:absolute;
			left:0;
			top:8px;
			padding:8px;
	}
	
	.inputWithIcon i + input{
		color:dodgerBlue;
	}
		
	
	
	.Button a{
	border-radius:20px;
	font-family: "Amiri";
    
    background-image:linear-gradient(to bottom, #3498db, #a8d3f0);
    color: #fff;
	padding:5px 30px;
	border: none;
	text-align:center;
	text-decoration: none;
	margin: 0 0 0 0px;
	}	
	
	.Button a:hover {
    background: #088bf0;
    color: #fff;
	}
	.your{
		font-size:55px;
		font-family:Copperplate Gothic Bold;
		color: #ffffff;
	}
	.future{
		font-size:120px;
		font-family:Copperplate Gothic Bold;
		color: #ffffff;
	}
	.start{
		font-size:55px;
		font-family:Copperplate Gothic Bold;
		margin-left:17%;
		color: #ffffff;
		 
	}
}	
	
	
@media only screen and  (max-width:500px){
body{
	background-image:url(images/BG1.png),linear-gradient(to bottom,#4da9ff,#cce6ff);
	background-size:600px 400px;
	background-position:top;
	background-repeat: no-repeat;
	background-color:#cce6ff;
	
}
.card-body{
	
	background-color: #f2f2f2;
	box-shadow: 2px 2px  #d9d9d9;
	padding:2% 5%;
	
	margin-top:15%;
	margin-left:15%;
	border-radius:10px;
    width:60%;
	}
	
.card{
	
	padding:2%;
	
	margin-top:10%;
	margin-left:20%;
	border-radius:10px;
    width:100%;
	}
	

	input{
		width:100%;
		
		border: 2px solid  #bfbfbf;
		border-radius: 8px;
		margin: 8px 0px;
		padding:8px;
		
		box-sizing:border-box;
		outline:none;
		
	}
	
	input:focus{
		border-color: #0066cc;
		box-shadow:0 0 8px 0 #0066cc;
	}
	.inputWithIcon input{
	padding-left:40px;	
	}
	
	.inputWithIcon{
		position:relative;
	}
	
	.inputWithIcon i{
			position:absolute;
			left:0;
			top:8px;
			padding:8px;
	}
	
	.inputWithIcon i + input{
		color:dodgerBlue;
	}
		
	
	
	.Button a{
	border-radius:20px;
	font-family: "Amiri";
    
    background-image:linear-gradient(to bottom, #3498db, #a8d3f0);
    color: #fff;
	padding:5px 30px;
	border: none;
	text-align:center;
	text-decoration: none;
	margin: 0 0 0 0px;
	}	
	
	.Button a:hover {
    background: #088bf0;
    color: #fff;
	}
	.your{
		font-size:25px;
		font-family:Copperplate Gothic Bold;
		color: #ffffff;
	}
	.future{
		font-size:45px;
		font-family:Copperplate Gothic Bold;
		color: #ffffff;
	}
	.start{
		font-size:25px;
		font-family:Copperplate Gothic Bold;
		margin-left:17%;
		color: #ffffff;
		 
	}
}	

	
	
	
	
</style>


</head>
<body>
	
	
	    <div class="column2">
		<div class="card">
		<p><span class="your">YOUR</span><br><span class="future">FUTURE</span><br><span class="start">STARTS HERE</span></p>
		</div>
		</div>
		<div class="column2">
			<div class="card-body">
			<h2 style="color:#1aa3ff;font-family:font-family:Copperplate Gothic Bold;text-align:center"><b>Welcome</b></h2>
			<div class="inputWithIcon">
				<input type="text" name="username" size="30" placeholder="Username..." >
				<i class=" fa fa-user fa-lg fa-fw" ></i>
				
             </div>      

			<div class="inputWithIcon inputIconBg">
				<input type="password"  name="password" size="30" placeholder="Password..." >
				<i class=" fa fa-lock fa-lg fa-fw" ></i>
             </div>      
		      

		    <p  class="Button" style="text-align:center;font-size:22px;"><a  href="#">Login</a></p>
			
			<p style="text-align:center;"><a  href="#" style="text-decoration:none;color: #000000;">Forgot Password ?</a></p>
			</div>
		</div>
	</div>
    


    
        



</body>
</html>