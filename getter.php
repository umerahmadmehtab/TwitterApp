
<?php
 require_once __DIR__ . './db_connect.php';
    
    $db= new DB_CONNECT();
    $db_c= $db->connect();
    $response=array();
            $result = mysqli_query($db_c, "SELECT * FROM webex5.tweets ORDER BY tweetscnt DESC") ;
            if(mysqli_num_rows($result) > 0){
//                echo "ok";
    		
    		$response['results']=array();
    		while($row = mysqli_fetch_array($result)){
                $product=array();
    		$product['id']=$row['idtemail'];
    		$product['tweet']=$row['tweet'];
    		array_push($response['results'],$product);
            }
    		$response["success"]=1;
        }
    
//    db_c->close();
    echo json_encode($response);
?>
