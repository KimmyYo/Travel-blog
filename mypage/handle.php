<?php
$title = $_POST['title'];
$desc = $_POST['description'];
$salary = $_POST['salary'];
$link = $_POST['link'];
echo $title . ' ' . $desc . ' ' . $salary . ' ' . $link;
if (empty($title) || empty($desc) || empty($salary) || empty($link)) {
    die('資料不能為空');
  }
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error){ // 檢查有沒有錯誤
    die('connection failed:'. $conn->connect_error);} // 有的話，停止執行並印出錯誤
    $sql = "INSERT INTO jobs(title, description, salary, link) 
    VALUES('$title', '$desc', '$salary', '$link')";
$result =$conn->query($sql); 
// 會回傳 true or false，就可以用來判斷有無成功。
if ($result) {
  echo 'success';
} else {
  echo 'failed, ' . $conn->error ; // 顯示錯誤並印出錯誤訊息。
}    
?>