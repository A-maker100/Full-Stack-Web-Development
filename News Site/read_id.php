<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header("Content-type:application/json");
//includes database and story .php files
include_once ("initialise.php");
include_once ("story.php");

if(empty($_GET["apikey"])){
    die("Provide your valid API key to make API requests.");
}
//validate apikey
else{
    $result = $db_connection->prepare("SELECT * FROM Users where APIKEY='".$_GET['apikey']."';");
    $result->execute();
    $query_table = $result->setFetchMode(PDO::FETCH_ASSOC);
    if(!$query_table){
        echo("Provide your valid API key to make API requests. No matching API found.");
        die();
    }
}

$story_1= new story($db_connection);
$story_1->id = isset($_GET['id'])? $_GET["id"]: die();
$story_1->readID();//implementation needs to be in story.php

$timestamp=date("Y-D-M h:i");
if($story_1->title !=null){
    $response_array = array("status"=>"successful","timestamp"=>$timestamp);
    $response_array["data"]=array();
    $story_array = array(
        "title"=>$story_1->title,
        "author"=>$story_1->author,
        "published_date"=>$story_1->published_date,
        "rating"=> $story_1->rating,
        "category"=>$story_1->category,
        "id"=>$story_1->id
    );
    array_push($response_array["data"],$story_array);
    http_response_code(200);
    echo json_encode($response_array);
}
else{
    http_response_code(404);
    echo json_encode(array("status"=>"unsuccessful","timestamp"=>$timestamp,"message"=>"story does not exist.<br>"));
}

?>