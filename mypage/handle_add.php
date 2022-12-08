<?php
require_once('./conn.php');
$db = new PDO("mysql:dbname=example", "root", "");
$title = $_POST['title'];
$desc = $_POST['description'];
$category = $_POST['category'];
$link = $_POST['link'];

if (empty($title) || empty($desc) || empty($category) || empty($link)) {
  die('請檢查資料');
  
}

$sql = "INSERT INTO jobs(title, `description`, category, link) 
  VALUES('$title', '$desc', '$category', '$link')";
  
$result =$db->query($sql); // 會回傳 true or false，就可以用來判斷有無成功。

if ($result) {
  header('Location: ./admin.php'); 
  // 這裡的用意是給一個 header，告訴瀏覽去要去的位置，就會轉跳過去。
} else {
  echo 'failed, ' . $conn->error ; // 顯示錯誤並印出錯誤訊息。
}

?>
