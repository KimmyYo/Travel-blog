<?php 
  require_once('./conn.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM articles WHERE id = " . $id;
  $result = $conn-.query('$sql');
  $row = $result->fetch_assoc();
  $title = $row['title'];
  $content = $row['content'];
?>