<?php 
  //Open db and call query
    $sql = "SELECT * FROM reviews LEFT JOIN games ON games.GameID = reviews.GameID";
    $result= $db->prepare($sql);
    $result->execute();
  //Initiate 
     
    if($query->num_rows > 0){ 
        $cmsData = $query->fetch(PDO::FETCH_ASSOC); 
        echo '<h5>'.$cmsData['gamename'].'</h5>'; 
        echo '<p>'.$cmsData['reviewtext'].'</p>';
        echo '<p>'.$cmsData['UserID'].'</p>'; 
        echo '<p>'.$cmsData['Date'].'</p>'; 
    }else{ 
        echo 'Content not found....'; 
    } 
}else{ 
    echo 'Content not found....'; 
 
?>
