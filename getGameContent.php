<?php 
  //Open db and call query
    $sql = "SELECT * FROM reviews LEFT JOIN games ON games.GameID = reviews.GameID";
    $result= $db->prepare($sql);
    $result->execute();
  //Initiate 
     
    if($query->num_rows > 0){ 
        $cmsData = $query->fetch_assoc(); 
        echo '<h5>'.$cmsData['title'].'</h5>'; 
        echo '<p>'.$cmsData['content'].'</p>'; 
    }else{ 
        echo 'Content not found....'; 
    } 
}else{ 
    echo 'Content not found....'; 
 
?>
