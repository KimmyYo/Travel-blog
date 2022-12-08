<?php 
 require_once('./conn.php');
 $db = new PDO("mysql:dbname=example", "root", "");
 $id = $_GET['id'];
 $sql = "SELECT * FROM jobs WHERE id = ". $id;
 $result = $db->query($sql);
 $row = $result->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

	<title> Update Article</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
		<h1> Update My Article</h1>
		<a href="./admin.php">Back to My Page</a> 
		<form action="./handle_update.php" method="post">
			<!-- post id -->
			<input type="hidden" name="id" value="<?php echo $row['id']?>">
				Article Title:
				<input type="text" name="title" value="<?php echo $row['title']?>"/>
			</div>
			<div>
				Article:
				<textarea name="description" id="" cols="" rows="10">
					<?php echo $row['description']?>
				</textarea>
			</div>
			<div>Article Category:<input type="text" name="category" value="<?php
			  echo $row['category']?>"/></div>
			<div>Article Link:<input type="text" name="link" value="<?php
			  echo $row['link']?>"/></div>
			<input type="submit" value="送出" />
		</form>
	</div>
</body>

</html>


<script>
$(document).ready(function(){
 CKEDITOR.replace("description",{height:"150px"})});</script>