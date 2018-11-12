<?php require_once 'actions/config.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="indexstyle.css" />
	<title>Library</title>
  <div class="headimg"><img src="header.png"></div>
</head>
<body>
<div class="Medialibrary">
  <a href="create.php"><button type="button" class="Addbutton">Add New Media</button></a>

<?php
$sql = "SELECT * FROM mediaa WHERE Active = 0";

$result = $connect->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()) {

	echo 
  "
<div Class='LibraryM'>
    
        
          <div class= 'title1'><h2>Media Name:</h2> <div class='MediaN'>
          ".$row['Media_name']." 
          </div></div>

          
           <div class= 'title2'><h2>publisher Name:</h2><div class='publisher'>
         ".$row['publisher_name']." 
         </div></div>

           <div class= 'title3'><h2>Author Name:</h2><div class='Author'>
          ".$row['Author_name']."
           </div> </div>

          <div class= 'title4'><h2>Meadia type:</h2><div class='MediaT'>
          ".$row['Meadia_type']." 
          </div></div>

          <div class= 'title5'><h2>description:</h2><div class='desc'>
          ".$row['description']." 
          </div></div>

          <div class= 'title6'><h2>publish date:</h2><div class='publishD'>
          ".$row['publish_date']." 
          </div></div>

         <div class= 'title7'><h2> ISBN code:</h2> <div class='ISBN'>
          ".$row['ISBN_code']." 
          </div></div>

          <div class= 'title8'><h2>Status S:</h2><div class='StatusS'>
          ".$row['Status_S']."
          </div> </div>
       
     
          <div class='MediaImg'><img src=".$row['image']." alt = 'Girl in a jacket'></div>
          
         
  
          <div class='ButtonsED'>
           <a href='update.php?id=".$row['medai_id']."'><button type='button'>Edit</button></a> 
           <a href='delete.php?id=".$row['medai_id']."'><button type='button'>Delete</button></a>
           </div>
	     
</div>
       <br> ";

}

}else{

 echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

}






?>







</div> 
</body>
</html>

