<?php 
  //Open db and call query

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
