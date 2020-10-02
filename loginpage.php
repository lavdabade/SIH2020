<html>
<head>
<title>SIH2020</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- main js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="javascript/main.js"></script>
<!-- Template Main CSS File --> 
<link href="stylesheet/styleme.css" rel="stylesheet" type="text/css" media="screen, projection"/>
<!-- google fonts -->
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet'>
<script src="https://kit.fontawesome.com/yourcode.js"></script>

<style>
	input{
		width:100%;
		border: 2px solid dodgerBlue;
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
		
	.inputWithIcon.inputIconBg i {
		background-color:dodgerBlue;
		color:white;
		padding:10px 4px;
		border-radius:4px 0px 0px 4px;
		border-color:dodgerBlue;
	}
	
	.Button a{
	border-radius:6px;
	font-size:25px;
  }
</style>


</head>
<body>

<section class="home">
  
           
			
			<div class="inputWithIcon inputIconBg">
				<input type="text" name="username" size="30" placeholder="Username..." >
				<i class=" fa fa-user fa-lg fa-fw" ></i>
				
       </div>      

			<div class="inputWithIcon inputIconBg">
				<input type="password"  name="password" size="30" placeholder="Password..." >
				<i class=" fa fa-key fa-lg fa-fw" ></i>
      </div>      
		      

		    <p  class="Button" style="text-align:center;font-size:22px;"><a  href="#">Login</a></p>
			
			<p style="text-align:center;"><a  href="#" style="text-decoration:none;color:#1e90ff;background-color:#464343;">Forgot Password ?</a></p>
			<p style="color:#1e90ff;text-align:center">OR</p>
			<p  class="Button" style="font-family: Amiri;font-size:15px;text-align:center;color:#fff;margin-top:0px"><a  href="doctor_account.php">Create Account</a></p>
		
     
        
</section>


</body>

</html>
