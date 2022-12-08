<?php require_once('./conn.php')?>
<?php $db = new PDO("mysql:dbname=example", "root", "");?> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title> Welcome t0 MY Page</title>
	<!-- <link rel="stylesheet" href="style.css"> -->
	<style>
	.container {
		width: 1024px;
		margin: 0 auto;
		text-align: center;
	}

	.job {
		border: 1px solid grey;
		padding: 10px;
		width: 600px;
		margin: 0 auto;
		text-align-last: left;
	}

	.job ~ .job { /* job 與 job 的距離 */
		margin-top: 20px;
	}
	</style>
</head>

<body>
	<div class="container">
		<h1> Welcome to My Page</h1>
		<a href="./add.php">Add new article</a>
			<?php
				$sql = "SELECT * FROM jobs ORDER BY id DESC";
				$result = $db->query($sql);
				//echo "result".$result;
				if ($result -> rowCount() > 0) { // num_rows 會告訴有幾筆資料。
					while($row = $result->fetch(PDO::FETCH_ASSOC)) {
					
						echo   '<div class="job">';
						echo   '<h2 class="job__title">' . $row['title'] . '</h2>';
						echo   '<p class="job__desc">' . $row['description'] . '</p>';
						echo   '<p class="job__category">Article Category:' . $row['category'] . '</p>';
						echo   '<a class="job__link" href="./update.php?id=' .	$row['id'] . '">Edit Article</a>';
						echo   ' <a class="job__link" href="./delete.php?id=' . $row['id']	. '">Delete Article</a>';
						echo "</div>";
					}
				}
				else{
					echo "nothing";
				}
				
				
			?>
		
	</div>
</body>

</html>
