<?php
//This updates the user Password.
$host ="localhost";
$user="root";
$password="";
$database ="NewsWebsite";

$db_connection =mysqli_connect($host,$user,$password,$database) OR die("Error connecting to database");

$sqlQuery = "Select * from Users where Password='';";
$password = encrypt_password("");
$results = mysqli_query($db_connection,$sqlQuery);

if($db_connection->affected_rows ==1){
    $statement =" UPDATE Users SET Password='".$password."' where Password='';";
    $results = mysqli_query($db_connection,$statement);
    if($results){ 
    }
    else{
        echo("Could not execute query.<br>");
    }
}

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

mysqli_close($db_connection);
?>