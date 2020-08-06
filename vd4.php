<meta charset="utf-8">
<?php 
	//dinh nghia array bang cach dat ten key
	$arr = array("hoten"=>"Nguyễn Văn A","email"=>"nva@mail.com");
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
 ?>
 <h1><?php echo $arr["hoten"]; ?></h1>
 <h1><?php echo $arr["email"]; ?></h1>