<?php

require_once 'actions/config.php';



if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM mediaa WHERE medai_id = {$id}";

    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

 

    $connect->close();


?>


<!DOCTYPE html>
<html>
<head>
	<title>Delete media</title>
</head>
<body>

<h3>Do you really want to delete this user?</h3>

<form action="actions/a_delete.php" method = "POST">
<input type="hidden" name="id" value="<?php echo $data['medai_id'] ?>" />

    <button type="submit">Yes, delete it!</button>

    <a href="index.php"><button type="button">No, go back!</button></a>


	



</form>	

</body>
</html>

<?php

}

?>