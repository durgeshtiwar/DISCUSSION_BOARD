<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discussion Board</title>
  <?php
  include_once("./client/commonFiles.php");
  ?>
</head>
<body>
  <?php
  session_start();
  include_once("./client/header.php");
  if (isset($_GET['signUp']) && !isset($_SESSION['user']['username']) ) 
  {
  include_once("./client/signUp.php");
  }elseif(isset($_GET['login']) && !isset($_SESSION['user']['username']) ) 
  {
    include_once("./client/login.php");
  }elseif(isset($_GET['ask']))
  {
    include_once("./client/ask.php");
  }else if(isset($_GET['q-id'])) 
  {
    $qid = $_GET['q-id'];
    include_once("./client/question_details.php");
 }
  else{
    include_once("./client/questions.php");
  }
  ?>
</body>
</html>