<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php";

	$bno = $_GET['idx'];
	$sql = mq("delete from board where idx='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");
location.href='/notice_board.php';</script>";</script>;