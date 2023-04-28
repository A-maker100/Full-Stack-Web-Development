<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Acess-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type ,Access-Control-ALllow-Headers,Authorization, X-Requested-Width");

//get db connection
include_once ('initialise.php');
include_once ('story.php');



$new_story = new story($db_connection);
//get posted data
$data = json_decode(file_get_contents("php://input"));

//make certain its not empty
if(
    !empty($data->title)&&
    !empty($data->author)&&
    !empty($data->published_date)&&
    !empty($data->rating)&&
    !empty($data->category)
){
    $new_story->title = $data->title;
    $new_story->author = $data->author;
    $new_story ->published_date = $data->published_date;
    $new_story->rating = $data->rating;
    $new_story->category = $data->category;
    
    if($new_story->create()){
        http_response_code(201);
        echo json_encode(array("status"=>"successful","message"=>"Story has been created/<br>"));
    }
    else{
        http_response_code(503);
        echo json_encode(array("status"=>"unsuccessful","message"=>"unable to create story<br>"));
    }
}

else{
    http_response_code(400);//bad request
    echo json_encode(array("message"=>"Unable to create story.<br>"));
}
?>