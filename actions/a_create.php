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

$sql = "INSERT INTO `cr10_mohamad_eibou_biglibrary`.`mediaa` ( `Media_name`, `Meadia_type`, `ISBN_code`, `Author_name`, `description`, `image`, `publisher_name`, `publish_date`, `Status_S` ) VALUES ('$Mname','$MediaType','$ISBN','$AuthNAme','$desc','$img','$publiName','$publishDate','$sta')";

 if($connect->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

        echo "<a href='../create.php'><button type='button'>Back</button></a>";

        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $connect->connect_error;

    }

 

    $connect->close();

}


?>