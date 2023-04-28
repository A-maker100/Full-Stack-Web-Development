<?php
if(isset($_COOKIE["user"]) && isset($_COOKIE["password"])){
    $_SESSION["username"]= $_COOKIE["user"];
    $_SESSION["password"] = $_COOKIE["password"];
    header("home-page.php");
    return; 
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel='shortcut icon' href='a_s_logo_1QZ_icon.ico' type='image/x-icon'>
    <title>
LOG IN OR CREATE NEWS ACCOUNT
    </title>
    <style>
        body{
            background-color:lightsteelblue
        }
        .access_bars{
            background-color: wheat;
            border: 1px blueviolet solid;
            margin: 5em;
            width: 100%;
        }
        .requiredfield{
            color: red;
        }
        .SIGN-UP{
            position:absolute;
            left: 120px;
            top:269px;
            width:410px;
            height:890px;
        }
        .sign-up_form{
            border-width: 2px; 
            border-style: solid;
            border-color:deeppink;
            box-shadow: 3px 3px 3px 3px; 
        }
        .log-in_form{
            border-width: 2px;
            border-style: solid;
            border-color: deeppink;
            box-shadow: 3px 3px 3px 3px;
        }

        .LOGIN{
            position: absolute;
            right: 120px;
            top:290px;
            width: 410px;
            height: 890px;
        }
        [id='logo']{
text-align: center;
font-family: hubballiregular;
font-size: 70px;
color: #55752D
}
header{
border: 10px solid #66023C;
}

.input_box{
    margin: 0.2em;
    box-shadow: cornflowerblue 0.65px 0.65px 0.65px 0.65px;
}
footer{
    position:absolute;
    bottom: 0px;
    background-color:bisque;
    color: brown;
}

    </style>
</head>

<body>
   
    <p id='logo'><img src='As Logo.jpg' alt='Cracked Shell,no more withholding', width='159' height='129' border='2px dotted purple' title='A's Daily'><i>A's Daily</i></p>
</header>
<br/>
<div class='LOGIN'>
    <h3> Log-In </h3>
    <form method='post' action='logins.php' class='log-in_form'>
        Username: <input type='text' name='username' class='input_box'  required><span class='requiredfield'>*</span><br/>
        Password: <input type='password' name='password' class='input_box' placeholder='' required><span class='requiredfield'>*</span><br/>        
        <input type="checkbox" name ="RememberMe" value="save_my_login_details"/>Remember Me <br>
        <input type='submit' value='Log In'>
        </form>
        
</div>
<div class='SIGN-UP'>
    <h3>Create Account</h3>
    <p class='requiredfield'>* required field</p>
    <form method='post' action='sign-ups.php' class='sign-up_form'>
        Full Name & Surname: <input type='text' name='full_name' class='input_box' required><span class='requiredfield'>*</span><br/>
        Username: <input type='text' name='username' class='input_box' required><span class='requiredfield'>*</span><br/>
        Email address: <input type='email' name='email' class='input_box' required><span class='requiredfield'>*</span><br/>
        Telephone: <input type='text' name='telephone' class='input_box' required><span class='requiredfield'>*</span><br/>
        Password: <input type='password' name='password' placeholder='A-Z, a-z, 0-9,$,_,%,?,&,=,j,#,*' class='input_box'><span class='requiredfield'>*</span><br/>
        Confirm-Password: <input type='password' name='password-confirm' class='input_box'><span class='requiredfield'>*</span><br/><br/>
        <input type="checkbox" name ="RememberMe" value="save_my_login_details"/>Remember Me <br>
        <input type='submit' value='CREATE ACCOUNT'>
        </form>
</div>

<footer class='footer'>
     <?php include 'footer.php'; ?>
</footer>
</body>
</html>

