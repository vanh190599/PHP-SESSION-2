<meta charset="utf-8">
<?php 
	$arr = array("Nokia","HTC","Samsung","IPhone",'LG');
	//ghep cac phan tu array thanh chuoi string
	$str = implode($arr, ",");
	echo "<h1>$str</h1>";
	//---------
	$word = "Xin chào các bạn lớp php41";
	//bien chuoi thanh array
	$arr_word = explode(" ", $word);
	echo "<pre>";
	print_r($arr_word);
	echo "</pre>";
 ?>