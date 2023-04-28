<?php
session_start();
//connect to database
$server ="localhost";
$user="root";
$dbpassword = "";
$database = "NewsWebsite";

$connection = mysqli_connect($server,$user,$dbpassword,$database)
or die("Could not connect to database ". mysqli_connect_error($connection));

//GET VALUES FROM USER
$missing_data = array();
if(isset($_POST["username"])){
$username = $_POST["username"];
}
else{
$missing_data [] = "User Name";
}

if(isset($_POST["password"])){
    $password= $_POST["password"];
}
else{
    $missing_data[] = "Correct Password";
}
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

if(!empty($missing_data)){
    echo"Enter Empty values! ";
    foreach($missing_data as $empty_value){
        echo $empty_value."<br>";
    }
}

//verify details.

else{
$encrypted_Passkey = encrypt_password($password);
$selection_query = "SELECT * FROM Users where Password='".$encrypted_Passkey."' And UserName='".$username."';";
$query_result = mysqli_query($connection,$selection_query);
if($connection->affected_rows==0){
    echo("You are not registered. Please register.<br>");
}
else if($connection->affected_rows==1){
    $row = mysqli_fetch_assoc($query_result);
        echo("Welcome ".$username."<br>");
        $_SESSION["username"]=$_POST['username'];
        $_SESSION["password"] = $_POST["password"];
        echo $_SESSION["username"]."<br>";
        echo "Your API key is ".$row["API_KEY"];
        $htmldata = "<p><a href='home-page.php' class='home_button'> Go to Home </a></p>";
        echo($htmldata);
        echo "<h3><a href='logout.php'>Log out</a></h3>";
}
else{
    echo"What's going on?".$connection->affected_rows;
}
}

//ENCRYPTION METHODS
function encrypt_password($passvalue){
    //SET UP OASSWORD ARRAY   
       $passvalue_array = array();
       for($Index=0; $Index<strlen($passvalue); $Index++){
           array_push($passvalue_array,$passvalue[$Index]);
       }
       $encrypted_string= "";
   //ENCRYPTION_KEYS
   $PASSWORD_KEYS = array("A"=>"0","B"=>"a","C"=>"d","D"=>"A","E"=>"F","F"=>"g","G"=>"i","H"=>"h","I"=>"b","J"=>"7","K"=>"o","L"=>"r","M"=>"E","N"=>"B","O"=>"q","P"=>"S","Q"=>"R","R"=>"w","S"=>"u","T"=>"t","U"=>"y","V"=>"f","W"=>"j","X"=>"c","Y"=>"D","Z"=>"e","a"=>"5","b"=>"9",
   "c"=>"m","d"=>"G","e"=>"6","f"=>"#","g"=>"%","h"=>"Q","i"=>"X","j"=>"I","k"=>"H","l"=>"*","m"=>"z","n"=>"Z","o"=>"v","p"=>"V","q"=>"Y",
   "r"=>"=","s"=>"?","t"=>"U","u"=>"K","v"=>"l","w"=>"M","x"=>"$","y"=>"O","z"=>"3","1"=>";","2"=>"C","3"=>"k","4"=>"n","5"=>"&","6"=>"L",
   "7"=>"1","8"=>"8","9"=>"3","$"=>"x","_"=>"J","%"=>"P","?"=>"T","&"=>"W","="=>"p",";"=>"4","#"=>"N","*"=>"H","!"=>"!","0"=>"2");
   for($in=0; $in<strlen($passvalue); $in++){
       $encrypted_string = $encrypted_string. $PASSWORD_KEYS[$passvalue_array[$in]];
   }
   return $encrypted_string;
   };


   mysqli_close($connection);
?>
