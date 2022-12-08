<?php require_once('./conn.php')?>
<?php $db = new PDO("mysql:dbname=example", "root", "");?> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>/My Page</title>
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
		<h1> Job board 職缺報報 管理後台</h1>
		<a href="./add.php">新增職缺</a> 
		<div class="job">
				<h2 class="job__title">前端工程師</h2>
				<p class="job__desc">前端工程師的描述前端工程師的描述前端工程師的描述前端工程師的描述</p>
				<p class="job__category">薪資範圍：面議</p>
				<a href="http://www.google.com" class="job__link">編輯</a>
				<a href="./delete.php" class="job__link">刪除</a>
		</div>
		
		<div class="jobs">
			<?php
				$sql = "SELECT * FROM jobs ORDER BY id DESC";
				$result = $db->query($sql);
				if ($result !== false && $result->num_rows>0) { // num_rows 會告訴有幾筆資料。
					while($row = $result->fetch(PDO::FETCH_ASSOC)) {
						echo '<div class="job">';
						echo   '<h2 class="job__title">' . $row['title'] . '</h2>';
						echo   '<p class="job__desc">' . $row['description'] . '</p>';
						echo   '<p class="job__category">薪水範圍：' . $row['category'] . '</p>';
						echo   '<a class="job__link" href="' . $row['link'] .
							'">更多資訊</a>';
						echo   '<a class="job__link" href="./update.php?id=' .
							$row['id'] . '">Edit Article</a>';
						echo   ' <a class="job__link" href="./delete.php?id=' .
							$row['id']	. '">Delete Article</a>';
						echo "</div>";
					}
				}
			?>
		</div>
		<div class="job">
			<h2 class="job__title">前端工程師</h2>
			<p class="job__desc">前端工程師的描述前端工程師的描述前端工程師的描述前端工程師的描述</p>
			<p class="job__category">薪資範圍：面議</p>
				
			<a href="http://www.google.com" class="job__link">編輯</a>
			<a href="http://www.google.com" class="job__link">刪除</a>
		</div>
	</div>
</body>

</html>