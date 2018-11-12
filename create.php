<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
<fieldset>
<legend>Add New Media</legend>
<form action="actions/a_create.php" method="POST">
	<table cellspacing="10" cellpadding="0">

		<tr>

                <th>Media Name</th>

                <td><input type="text" name="Media_name" placeholder="name of media" /></td>

            </tr>     

		<tr>

                <th>image</th>

                <td><input type="text" name="image" placeholder="URL Image here" /></td>

            </tr>  
            <tr>   

                <th>publisher Name</th>

                <td><input type="text" name="publisher_name" placeholder="name of publisher" /></td>

            </tr>     
            <tr>   

                <th>Author Name</th>

                <td><input type="text" name="Author_name" placeholder="Name of Author" /></td>

            </tr>     
             <tr>   

                <th>Meadia type</th>

                <td><input type="text" name="Meadia_type" placeholder="type of media" /></td>

            </tr>     
             <tr>   

                <th>description</th>

                <td><input type="text" name="description" placeholder="description" /></td>

            </tr>     
            <tr>   

                <th>publish date</th>

                <td><input type="text" name="publish_date" placeholder="date here" /></td>

            </tr>     
             <tr>   

                <th>ISBN_code</th>

                <td><input type="text" name="ISBN_code" placeholder="code here" /></td>

            </tr>  
            <tr>   

                <th>Status_S</th>

                <td><input type="text" name="Status_S" placeholder="Stat" /></td>

            </tr>  
            <tr>

                <td><button type="submit">Insert Media</button></td>

                <td><a href="index.php"><button type="button">Back</button></a></td>

            </tr>


	</table>
	





</form>




</fieldset>
</body>
</html>