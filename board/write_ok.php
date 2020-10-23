<?php

include $_SERVER['DOCUMENT_ROOT']."/db.php";

//각 변수에 write.php에서 input name값들을 저장한다
$userteam = $_POST['team'];
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');

if(isset($_POST['lock_post'])){
	$lo_post = '1';
}else{
	$lo_post = '0';
}
  if($userteam && $username && $userpw && $title && $content){
      $sql = mq("insert into board(team,name,pw,title,content,date,lock_post) values('".$userteam."','".$username."','".$userpw."','".$title."','".$content."','".$date."','".$lo_post."')");
      echo "<script>
      alert('글쓰기 완료되었습니다.');
      location.href='/notice_board.php';</script>";
  }else{
      echo "<script>
      alert('글쓰기에 실패했습니다.');
      history.back();</script>";
  }

?>
