<?php
require_once('./conn.php');

function connect($root, $pass) {
  try {
    $conn = new PDO('mysql:host=localhost; dbname=example',$root, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  } catch(Exception $e) {
    return false;
  }
}
$sql_link = connect("root", "");
if(!$sql_link){
  echo error;
}



$db = new PDO("mysql:dbname=example", "root", "");
$title = $_POST['title'];
$desc = $_POST['description'];
$category = $_POST['category'];
$link = $_POST['link'];
// echo $title . ' ' . $desc . ' ' . $category . ' ' . $link;
if (empty($title) || empty($desc) || empty($category) || empty($link)) {
  die('請檢查資料');
  
}


$id = $_POST['id'];

$sql = "UPDATE jobs SET title='$title', `description`='$desc', category='$category', link='$link' WHERE id = '$id' "  ;


  
$result =$db->exec($sql); // 會回傳 true or false，就可以用來判斷有無成功。

if ($result) {
  header('Location: ./admin.php');
  // 這裡的用意是給一個 header，告訴瀏覽去要去的位置，就會轉跳過去。
} 
else {
  echo 'failed, ' . $conn->error ;// 顯示錯誤並印出錯誤訊息。
}

?>
