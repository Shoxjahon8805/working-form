<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Open+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>

    <div class="form" style="width: 415px;
    height: 292px;
    margin-left: 534px;
    padding: 11px;
    border: 1px #ccc solid;
    border-radius: 25px;
    padding-top: 36px;">
        <form action="api.php">
            <div class="form__title-block">
                <h2 style="font-family: 'Inter', sans-serif;
                font-size: 35px;
                margin-top: -15px;" 
                class="form__title">Login</h2>
            </div>
            <div class="username__block">
                <input style="padding-right: 204px;
                padding-top: 6px;
                padding-bottom: 6px;
                font-size: 14px;
                border-radius: 24px;
                border: #ccc 0.5px solid;
                padding-left: 10px;
                margin-left: 13px;"
                type="text" class="username" placeholder="User name">
            </div>
            <div class="userpassword__block">
                <input style="margin-top: 17px;
                padding-right: 204px;
                padding-top: 6px;
                padding-bottom: 6px;
                font-size: 14px;
                border-radius: 24px;
                border: #ccc 0.5px solid;
                padding-left: 10px;
                margin-left: 13px;" type="password" class="userpassword" placeholder="Password">
            </div>
           <div class="remember__text-block">
            <input style="margin-left: -345px;
            margin-top: 22px;" type="checkbox" class="checkbox__remember">
            <p style="margin-top: -24px;
            margin-left: -212px;" class="remember__text">Remember me</p>
           </div>
            <div class="servic__text-block">
                <p style="margin-top: -39px;
                margin-left: 261px" class="servic__text">Forgot <a class="servic__btn" href="index-third.php">Password</a>?</p>
            </div>
            <div class="login__btn-block">
                <button class="login__btn">Login</button>
            </div>
            <div class="register__text-block">
                <p class="register__text">Don't have an account? <a href="index-second.php" class="register__btn">Register</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>