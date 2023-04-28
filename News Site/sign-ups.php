
<?php
 session_start();
if(isset($_POST["full_name"])){
    $fullname = $_POST["full_name"];
    }
    else{
        echo("Full name empty<br>");
        die();
    }

if(isset($_POST["username"])){
        $username = $_POST["username"] ;
    }
    else{
        echo("User Name is empty<br>");
        die();
    }

if(isset($_POST["email"])){
        //this website supports '@gmail.com','@yahoo.com', '@hotmail.com'
        $gmail = "/@gmail.com/i";
        $hotmail = "/@hotmail.com/i";
        $yahoo = "/@yahoo.com/i";
        $gmail_exists = preg_match($gmail,$_POST["email"]);
        $hotmail_exists = preg_match($hotmail,$_POST["email"]);
        $yahoo_exists = preg_match($yahoo,$_POST["email"]);
        if($yahoo_exists==0 && $hotmail_exists==0 &&$gmail_exists==0){
            echo"Enter a valid email address.<br>";
            die();
        }
        else if($yahoo_exists==1 || $hotmail_exists==1 ||$gmail_exists==1){
            $mail = $_POST["email"];
        }                
}
else{
    echo("email field is empty<br>");
    die();
}

if(isset($_POST["telephone"])){
    if(strlen($_POST["telephone"])==10)
    $cellphone =$_POST["telephone"] ;

    else{
    echo"Telephone number must be  digits.<br>";
    die();
    }
}
else{
    echo("Telephone is empty<br>");
    die();
}
$pass1="";
$pass2="";
if(isset($_POST["password"]) && isset($_POST["password-confirm"]) ){
    if($_POST["password"] ==$_POST["password-confirm"] ) {
        if(strlen($_POST["password"])>8 && strlen($_POST["password"])<16){
$uppercase_check = preg_match("/[A-Z]/",$_POST["password"]);
$lowercase_check = preg_match("/[a-z]/",$_POST["password"]);
$digit_checks = preg_match("/[0-9]/",$_POST["password"]);
$symbols_check = preg_match("/[!#&;?$\_]/",$_POST["password"]);
if($symbols_check==0 && $digit_checks==0 && $lowercase_check==0 && $uppercase_check==0){
    echo("Password is not strong.");
     die();
}
else if($symbols_check==1 && $digit_checks==1 && $lowercase_check==1 && $uppercase_check==1){
$pass1 = $_POST["password"];
$pass2 = $_POST["password-confirm"];
}

        }
        else{
            echo("Password length is not correct. Password length must be between 9 & 15 characters inclusive<br>");
            die();
        }
    }
    else if($_POST["password"] !=$_POST["password-confirm"]){
        echo"passwords do not match <br>";
        die();   
    }
}
else{
        echo("Password is empty<br>");
        die();
    }

//connect to database
$server = "localhost";
$user="root";
$root_password="";
$db = "NewsWebsite";

$connection = mysqli_connect($server,$user,$root_password,$db) OR die("Error connecting to localhost".mysqli_connect_error()."<br>");

//encryption function
function encrypt_password($passvalue){
    //SET UP PASSWORD ARRAY   
       $passvalue_array = array();
       for($Index=0; $Index<strlen($passvalue); $Index++){
           array_push($passvalue_array,$passvalue[$Index]);
       }
       $encrypted_string= "";
       $PASSWORD_KEYS = array("A"=>"0","B"=>"a","C"=>"d","D"=>"A","E"=>"F","F"=>"g","G"=>"i","H"=>"h","I"=>"b","J"=>"7","K"=>"o","L"=>"r","M"=>"E","N"=>"B","O"=>"q","P"=>"S","Q"=>"R","R"=>"w","S"=>"u","T"=>"t","U"=>"y","V"=>"f","W"=>"j","X"=>"c","Y"=>"D","Z"=>"e","a"=>"5","b"=>"9",
       "c"=>"m","d"=>"G","e"=>"6","f"=>"#","g"=>"%","h"=>"Q","i"=>"X","j"=>"I","k"=>"H","l"=>"*","m"=>"z","n"=>"Z","o"=>"v","p"=>"V","q"=>"Y",
       "r"=>"=","s"=>"?","t"=>"U","u"=>"K","v"=>"l","w"=>"M","x"=>"$","y"=>"O","z"=>"3","0"=>"2","1"=>";","2"=>"C","3"=>"k","4"=>"n","5"=>"&","6"=>"L",
       "7"=>"1","8"=>"8","9"=>"3","$"=>"x","_"=>"J","%"=>"P","?"=>"T","&"=>"W","="=>"p",";"=>"4","#"=>"N","*"=>"H","!"=>"!");
       for($in=0; $in<strlen($passvalue); $in++){
        $encrypted_string = $encrypted_string. $PASSWORD_KEYS[$passvalue_array[$in]];
    }

    return $encrypted_string;
}

//decryption function implementation;
function decrypt_password($encrypted_password){
    $password_array = array();
    for($index=0; $index<strlen($encrypted_password); $index++){
        array_push($password_array,$encrypted_password[$index]);
    }
    $DECRYPTION_KEYS = array("0" => "A","a"=>"B","d"=>"C","A"=>"D" ,"F"=>"E","g"=>"F","i"=>"G","h"=>"H","b"=>"I","7"=>"J","o"=>"K","r"=>"L","E"=>"M","B"=>"N","q"=>"O","S"=>"P","R"=>"Q","w"=>"R","u"=>"S","t"=>"T","y"=>"U","f"=>"V","j"=>"W","c"=>"X","D"=>"Y","e"=>"Z","5"=>"a","9"=>"b",
    "m"=>"c","G"=>"d","6"=>"e","#"=>"f","%"=>"g","Q"=>"h","X"=>"i","I"=>"j","H"=>"k","*"=>"l","z"=>"m","Z"=>"n","v"=>"o","V"=>"p","Y"=>"q",
    "="=>"r","?"=>"s","U"=>"t","K"=>"u","l"=>"v","M"=>"W","$"=>"x","O"=>"y","3"=>"z",";"=>"1","C"=>"2","k"=>"3","n"=>"4","&"=>"5","L"=>"6",
    "1"=>"7","8"=>"8","3"=>"9","x"=>"$","J"=>"_","P"=>"%","T"=>"?","W"=>"&","p"=>"=","4"=>";","N"=>"#","H"=>"*","!"=>"!");

    $decrypted_string="";
    for($decrypt=0; $decrypt<count($password_array); $decrypt++){
        $decrypted_string = $decrypted_string.$DECRYPTION_KEYS[$password_array[$decrypt]];
    }
    
    return $decrypted_string;
    }

//generate api key function
function generateAPIKEY($length=10){
    $potential_letters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $generated_api="";
    for($index=0; $index<$length; $index++){
        $newIndex = rand(0,strlen($potential_letters));
        $generated_api .= $potential_letters[$newIndex];
    }
    return $generated_api;
}

//insert user into database; Gather required details
$pass1 = encrypt_password($_POST["password"]);
$pass2 = encrypt_password($_POST["password-confirm"]);
$apiKey = generateAPIKEY();

//make certain api keys are unique
$flag ="false";
while($flag!="true"){
$selectionQuery ="SELECT FullName FROM Users where APIKEY= ".$apiKey;
$selection_result = mysqli_query($connection,$selectionQuery);
if($connection->affected_rows>=1){
    echo ("duplicate API KEYS!");
    $apiKey = generateAPIKEY();
}
else{
    $flag="true";
}
}

//SQL QUERY
$INSERTuser = "
INSERT INTO Users(FullName, Username, EmailAddress, Telephone, Password, APIKEY) 
VALUES(" . "'" . $fullname . "','" .$username."','".$mail."','".$cellphone."','".$pass1."','".$apiKey."');";

$query_result = mysqli_query($connection,$INSERTuser);
if($connection->affected_rows==1){
    //create user session
    $_SESSION['username']= $username;
//create cookies for new user
if(isset($_POST['RememberMe'])){
    $cookiename="user";
$cookievalue=$_POST["username"];
$cookiename2 ="password";
$cookievalue2 = $_POST["password"];

    setcookie($cookiename,$cookievalue,time()+104800,"/",null,null,true);
	setcookie($cookiename2,$cookievalue2,time()+104800,"/",null,null,true);
}
else if(!isset($_POST["RememberMe"])){
    $cookiename="user";
$cookievalue=$_POST["username"];
$cookiename2 ="password";
$cookievalue2 = $_POST["password"];

    setcookie($cookiename,$cookievalue,time(),"/",null,null,true);
	setcookie($cookiename2,$cookievalue2,time(),"/",null,null,true);
}

 echo("User Account created.<br> Welcome $username ! <br>");
 echo("This is your apiKey: ". $apiKey."<br>");
 $data_proceedings = "<p><a href='home-page.php'>Click to  go to Home Page</a></p>";
 echo($data_proceedings);
 echo "<h3><a href='logout.php'>Log out</a></h3>";
}
else{
    echo"Couldn't register user into database.  ".mysqli_error($connection)."<br>";
}

//close connection
mysqli_close($connection);     
?>