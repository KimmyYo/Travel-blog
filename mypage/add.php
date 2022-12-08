<?php require_once('./conn.php')?>
<!doctype html>
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
		<h1>My Articles</h1>
        <a href="./admin.php">回到管理頁</a>
		<form action="./handle_add.php" method="post">
            <div>Article Title:<input type="text" name="title" /></div>
            <div>Articl:<textarea name="description" id="" cols="" rows="10"></textarea></div>
            <div>Article Category:<input type="text" name="category" /></div>
            <div>Article Link:<input type="text" name="link" /></div> 
			<!-- 上船多個圖片 -->
            <input type="submit" value="送出" />
        </form>
	</div>
 
</body>
</html>



