<?php
$_POST = json_decode(file_get_contents('php://input'), true);
if (isset($_POST["email"]) && isset($_POST['text'])){
    require_once __DIR__ . './db_connect.php';
    $id= $_POST["email"];
    $tweet=$_POST['text'];
    //./db_connect file has class
    $db= new DB_CONNECT();
    $db_c= $db->connect();
    
    $qry= $db_c->prepare("INSERT INTO tweets(idtemail,tweet) VALUES (?,?)");
    // fist argument tells format of each parameter
    $qry->bind_param("ss",$id,$tweet);
    $qry->execute();
    $qry->close();
    
    $db_c->close();
}
else 
    echo "POST ELEMENTS NOT SET!";
?>