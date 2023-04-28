<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Content-Type:application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");

include_once ('initialise.php');
include_once("story.php");

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

$Story= new story($db_connection);
//Read data from db
$statement = $Story->read();
$num_rows = $statement->rowCount();
//retrieve table contents using fetch()
if($num_rows>0){
    $status ="successful";
    $timestamp =date("Y-M-D H:i");
    $story_array = array("status"=>$status,"timestamp"=>$timestamp);
    $story_array["data"]= array();

    while($row=$statement->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $a_story = array(
            "title"=> $title,
            "author"=>$author,
            "published_date"=>$published_date,
            "rating"=>$rating,
            "category"=>$category,
            "id"=>$id
        );

        array_push($story_array["data"],$a_story);
    }
    http_response_code(200);
    echo json_encode($story_array);
}

else{
    $timestamp = date("Y/M/d H:i");
    http_response_code(400);
    echo json_encode(
        array("status"=>"unsuccessful","timestamp"=>$timestamp,"message"=>"No stories found.")
    );
}

?>