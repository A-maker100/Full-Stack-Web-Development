<?php
 class story{
private $connection;
private $table_name = "Stories";

//properties
public $id;
public $title;
public $author;
public $published_date;
public $rating;
public $category;

//constructor; para = database
public function __construct($db_connection){
    $this->connection = $db_connection;
}

public function read(){
    $query = "SELECT 
    title,author,published_date,rating,category,id

    from ".$this->table_name.";";

    //QUERY START
    $statement = $this->connection->prepare($query);
 
   $statement->execute();
return $statement;
}

function create(){
    $query = "INSERT INTO ".$this->table_name ."SET title=:title,author=:author,published_date=:published_date,rating=:rating,category=:category;";
    $statement = $this->connection->prepare($query);

    //clesn up the characters
    $this->title =htmlspecialchars(strip_tags($this->title));
    $this->author = htmlspecialchars(strip_tags($this->author));
    $this->published_date = htmlspecialchars(strip_tags($this->published_date));
    $this->rating = htmlspecialchars(strip_tags($this->rating));
    $this->category = htmlspecialchars(strip_tags($this->category));
    $this->id       = htmlspecialchars(strip_tags($this->id));

    //bind values
    $statement->bindParam(":title",$this->title);
    $statement->bindParam(":author",$this->author);
    $statement->bindParam(":published_date",$this->published_date);
    $statement->bindParam(":rating",$this->rating);
    $statement->bindParam(":category",$this->category);

    //execute query
    if($statement->execute()){
        return true;
    }
    printf("Error inserting data in to database.". $statement->error);
    return false;
}

public function readOne(){
$query = "SELECT title,author,published_date,rating,category,id FROM ".$this->table_name." WHERE title = '".$this->title."';";
$statement = $this->connection->prepare($query);
$statement->execute();

$row = $statement->fetch(PDO::FETCH_ASSOC);
if(!empty($row)){
$this->title = $row["title"];
$this->author = $row["author"];
$this->published_date = $row["published_date"];
$this->rating = $row["rating"];
$this->category = $row["category"];  
$this->id = $row["id"];
}
else{
    $this->title = null;
    $this->author = null;
    $this->published_date = null;
    $this->rating =null;
    $this->category =null;
    $this->id =null; 
}


}

public function readID(){
    $query = "SELECT title,author,published_date,rating,category,id FROM ".$this->table_name." WHERE id = '".$this->id."';";
    $statement = $this->connection->prepare($query);
    $statement->execute();
    
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    if(!empty($row)){
    $this->title = $row["title"];
    $this->author = $row["author"];
    $this->published_date = $row["published_date"];
    $this->rating = $row["rating"];
    $this->category = $row["category"];  
    $this->id = $row["id"];
    }
    else{
        $this->title = null;
    $this->author =null;
    $this->published_date =null;
    $this->rating = null;
    $this->category = null;  
    $this->id =null;
    }
       
} 
}
?>