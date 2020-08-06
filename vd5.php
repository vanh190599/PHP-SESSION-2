<meta charset="utf-8">
<?php 
	$arr = array("hoten"=>"Nguyễn Văn A","email"=>"nva@mail.com");
	//ham extract se bien key thanh ten bien
	extract($arr);
 ?>
 <h1><?php echo $hoten; ?></h1>
 <h1><?php echo $email; ?></h1>