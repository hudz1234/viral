<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrolling Header</title>
    <style>
        body {
            background: #f0f2f5;
            margin: 0;
            padding: 80px 0 0; /* Add padding to the top */
            display: flex;
            flex-direction: column;	
        }

        .logo {
            width: 100px;
            height: 100px;
            position: fixed;
            left: 0;
            top: -21px;
        }

        header div {
            padding: 30px;
        }

        header a {
            color: white;
        }

        header {
            background-color: white;
            display: flex;
            color: white;
            justify-content: right;
            align-items: right;
            position: fixed;
            width: 100%;
            top: 0;
            transition: top 0.3s;
        }

        footer {
            text-align: center;
            padding: 3px;
            background: #000410;
            color: white;
            bottom: 0;
            width: 100%;
            font-size: 14px;
			position: fixed;
  			left: 0;
			
        }

        textarea {
            margin: 4px;
            padding: 8px;
            width: 100%;
        }

        h1 {
            font-size: 36px;
            font-family: 'Courier New', Courier, monospace;
        }

        p {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button:hover {
            color: black;
            background: rgb(61, 57, 116);
        }

        button {
            padding: 10px 20px;
            background-color: #cc29cc;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
		
        .header {
            width: 40px;
            height: 40px;
        }

		.post-bubble {
            background-color:white;
            display: flex;
            border:solid thin #aaa;
            border-radius: 10px;
            margin-bottom: 10px;
            margin-top: 10px; 
            padding: 10px;
            width:600px; 
            height:fit-content;
        }

        #username {
            font-family: 'Courier New', Courier, monospace;
        }

        #post-img {
            display: flex; 
            width: 100%;
            height: 400px;
            margin: auto;
            border-radius: 10px;
            object-fit: cover;
        }

        #upload-img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>

<header>
        <a href="/"><img class="logo" src="uploads/viralLogo.png" alt=""></a>
     
		
        <?php if(empty($_SESSION['info'])):?>
            <div><a style="color:black" href="login.php"><img class="header" src="uploads/login.png" alt=""></a></div>
            <div class="nav"><a style="color:black" href="signup.php"><img class="header" src="uploads/signup.png" alt=""></a></div>
        <?php else:?>
			<div><a style="color:black" href="index.php"><img class="header" src="uploads/home.png" alt=""></a></div>
        	<div><a style="color:black" href="profile.php"><img class="header" src="uploads/profile.png" alt=""></a></div>
            <div><a style="color:black" href="logout.php"><img class="header" src="uploads/logout.png" alt=""></a></div>
        <?php endif;?>
    </header>

</body>


</html>
