<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
    .container {
    background-image: url(bgg.jpg);
	background-position:center;
	background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    }
    button{
    	background: transparent;
    	color: black;
        height: 40px;
        width: 120px;
        margin: 10px;
        border:2px solid black;
	    font-weight: bold;
	    cursor:pointer;	
		}
	h1{
		font-family: sans-serif;
	}
    }
    </style>
</head>
<body>
       	 <h1 style="text-align: center;">STUDENT RESULT</h1>

    <div class="container">
    <a href="login.php"><button>LOGIN</button></a>
    <a href="register.php"><button>REGISTER</button></a>
    <a href="adminlogin.php"><button>ADMIN LOGIN</button></a>
    </div>
</body>
</html>