<?php include("sqlpassword.php");
//include 'index.php';
  //Open db and call query
    $db = new PDO('mysql:host=localhost;dbname=gamelogapp;', $sqluser, $sqlpassword);?
    $sql = "SELECT * FROM reviews LEFT JOIN games ON games.GameID = reviews.GameID";
    $result= $db->prepare($sql);
    $result->execute();
  //Initiate 
     
    if($result->rowCount() > 0){ 
        $cmsData = $result->fetch(PDO::FETCH_ASSOC); 
        echo '<h5>'.$cmsData['gamename'].'</h5>'; 
        echo '<p>'.$cmsData['reviewtext'].'</p>';
        echo '<p>'.$cmsData['UserID'].'</p>'; 
        echo '<p>'.$cmsData['Date'].'</p>';
        echo 'Test';
    }else{ 
        echo 'Content not found....'; 
    } 
?>
