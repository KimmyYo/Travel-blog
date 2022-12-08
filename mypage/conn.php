<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = '';

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query('SET NAMES UTF8'); // 改變編碼
if ($conn->connect_error) { // 檢查有沒有錯誤
  die('connection failed:'. $conn->connect_error); // 有的話，停止執行並印出錯誤
}
?>