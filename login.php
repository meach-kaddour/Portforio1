<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Form Admin</title>
    
    <style>
        body {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            background-image: url(asset/img/bg.png);
            background-size: cover;
            /* background-position: center; */
        }
        
        .login-box {
            width: 320px;
            height: 360px;
            background: #09CCAF;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }
        
        img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }
        
        h1 {
            margin: 0;
            padding: 0;
            font-size: 22px;
            text-align: center;
        }
        
        .login-box p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        
        .login-box input {
            width: 100%;
            margin-bottom: 20px;
        }
        
        .login-box input[type="text"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            height: 40px;
            color: #fff;
            font-size: 1em;
        }
        
        .login-box input[type="submit"] {
            margin-top:10%;
            border: none;
            outline: none;
            height: 40px;
            color: #fff;
            background-color: #1c8adb;
            font-size: 18px;
            border-radius: 20px;
        }
        
        .login-box input[type="submit"]:hover {
            background: #39dc79;
            color: #000;
            cursor: pointer;
        }
        
        
    </style>
</head>

<body>
    <div class='login-box'>
        <img src="asset/img/logo.png" alt="Login">
        <br>
        <form  action="include/chek.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Entrer username">
            <p>Password</p>

            <input type="password" name="password" placeholder="Entrer password">
            <input type="submit" name="submit" value="login">
            
        </form>

    </div>

</body>

</html>
