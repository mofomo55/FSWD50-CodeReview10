<?php
require_once 'config.php';

if ($_POST) {
	$Mname =$_POST['Media_name'];

	$img = $_POST['image'];

	$publiName = $_POST['publisher_name'];

	$AuthNAme = $_POST['Author_name'];

	$MediaType = $_POST['Meadia_type'];

	$desc = $_POST['description'];

	$publishDate = $_POST['publish_date'];

	$ISBN = $_POST['ISBN_code'];

	$sta = $_POST['Status_S'];

	$M_id =$_POST['id'];

$sql ="UPDATE mediaa SET Media_name = '$Mname', image = '$img', publisher_name = '$publiName',Author_name = '$AuthNAme' ,Meadia_type='$MediaType', description = '$desc', publish_date = '$publishDate',ISBN_code = '$ISBN',Status_S = '$sta' WHERE medai_id = {$M_id}";



if($connect->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?id=".$M_id."'><button type='button'>Back</button></a>";

        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $connect->error;

    }

 

    $connect->close();

 

}

?>