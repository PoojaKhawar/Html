<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login page</title>
</head>
<style>
	#main{
		width: 100%;
		height: 100%;
	}
	.inner_div{
		width: 1000px;

		display: flex;
		position: fixed;
		top: 20%;
		left: 30%;
	}
	.left{
		width: 300px;
		border-radius: 10px;
		height: auto;
		padding: 10px;
		background-color:#36ae8b;
	}
	.right{
		width:500px;
		height: 500px;
	}
	.left h4 {
		text-align: center;
	} 
	.left .txt {
		text-align: center;
	} 
	.btn button {
		text-align: center;
		width: 130px;
		height: 40px;
		margin-top: 25px;
		border-radius: 200px;
		border: 1px solid white;
		background-color:#36ae8b;
		color: white;

	}
	.left_inner { 
		text-align: center;
		margin:133px 7px 20px 11px;
	}
	.left_inner h4 {
		color: white;
		font-size: 30px;
		font-family: "Times New Roman", serif;
	}
	.left_inner p {
		color: white;
	} 
</style>
<body>
	<div id="main">
		<div class="inner_div">
		    <div class="left">
		    	<div class="left_inner">
		    		<h4>Welcome Back!</h4>
			    	<div class="txt">
			    		 <p>
			    		 	To Keep connected with us please <br> login with your personal info
			    		 </p>
			    	</div>
			    	<div class="btn">
			    		<button>Sign In</button>
			    	</div>
		    	</div>
		    </div>
		    <div class="right">
		        <h5>Create Account</h5>
		        <div class="social-icon">
		        	<span></span>
		        	<span></span>
		        	<span></span>
		        </div>
		        <p> or use your email for registration</p>
	        	<form class="form">		        		
			        <input type="text" name="name" placeholder="Name">
			        <input type="text" name="name" placeholder="Email">
			        <input type="text" name="name" placeholder="Password">
			        <div class="btn">
			        	<button>Sign up</button>
			        </div>
	        	</form>
		    </div>			
		</div>		
	</div>
</body>
</html>