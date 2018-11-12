<?php

 

require_once 'actions/config.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM mediaa WHERE medai_id = {$id}";

    $result = $connect->query($sql);

 

    $data = $result->fetch_assoc();

 

    $connect->close();

 }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Media</title>
</head>
<body>
<fieldset>
	<legend>Update Media</legend>


<form action="actions/a_update.php" method = "POST">
	<table cellspacing="0" cellpadding="0">

            <tr>

                <th>Media Name</th>

                <td><input type="text" name="Media_name" placeholder="Media_name" value="<?php echo $data['Media_name'] ?>" /></td>

            </tr>     

		<tr>

                <th>image</th>

                <td><input type="text" name="image" placeholder="image" value="<?php echo $data['image'] ?>" /></td>

            </tr>     
<tr>

                <th>publisher Name</th>

                <td><input type="text" name="publisher_name" placeholder="publisher_name" value="<?php echo $data['publisher_name'] ?>" /></td>

            </tr>     

<tr>

                <th>Author Name</th>

                <td><input type="text" name="Author_name" placeholder="Author_name" value="<?php echo $data['Author_name'] ?>" /></td>

            </tr>     
<tr>

                <th>Meadia type</th>

                <td><input type="text" name="Meadia_type" placeholder="Meadia_type" value="<?php echo $data['Meadia_type'] ?>" /></td>

            </tr>    
<tr>

                <th>description</th>

                <td><input type="text" name="description" placeholder="description" value="<?php echo $data['description'] ?>" /></td>

            </tr>    
<tr>

                <th>publish date</th>

                <td><input type="text" name="publish_date" placeholder="publish_date" value="<?php echo $data['publish_date'] ?>" /></td>

            </tr>    

<tr>

                <th>ISBN_code</th>

                <td><input type="text" name="ISBN_code" placeholder="ISBN_code" value="<?php echo $data['ISBN_code'] ?>" /></td>

            </tr>

            <tr>

                <th>Status_S</th>

                <td><input type="text" name="Status_S" placeholder="Status_S" value="<?php echo $data['Status_S'] ?>" /></td>

            </tr>

             <tr>

                <input type="hidden" name="id" value="<?php echo $data['medai_id']?>" />

                <td><button type="submit">Save Changes</button></td>

                <td><a href="index.php"><button type="button">Back</button></a></td>

            </tr>
	</table>

</form>

</fieldset>
</body>
</html>