<?php 
	ob_start();
 ?>
<meta charset="utf-8">
<h1>Hello world</h1>
<h1>Xin chào các bạn lớp PHP41</h1>
<?php 
	$content = ob_get_clean();
	ob_flush();
	//---
	echo $content;
 ?>