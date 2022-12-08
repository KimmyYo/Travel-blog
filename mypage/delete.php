<?php 
  require_once('./conn.php');
  $db = new PDO("mysql:dbname=example", "root", "");
  $id = $_GET['id'];
  $sql = "DELETE FROM jobs WHERE id = " . $id;
  echo $sql;
  if ($db->query($sql)) { // 直接把資料送上去，之後判斷回傳值。
    header('Location: ./admin.php');
  } else {
    echo "failed:" . $conn->error;
  }
?>