<?php
class FlashMessage{

    const created="Your product added successfully";
    const deleted="Your product deleted successfully";
    const edited="Your product updated successfully";
    const error="Something went wrong";

public function productCreated(){
    echo self::created;
}
public function productDeleted(){
    echo self::deleted;
}
public function productEdited(){
    echo self::edited;
}
public function productError(){
    echo self::error;
}

}

$tigger="deleted";
$message=new FlashMessage();
switch($tigger){
    case "created":
    $message->productCreated();
    break;
    case "edited":
       $message->productEdited();
       break;
    case  "deleted":
        $message->productDeleted();
        break;
    case "error":
        $message->productError();
        break;
    default:
    echo "Unknown action happened";

}




?>