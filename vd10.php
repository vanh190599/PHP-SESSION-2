<meta charset="utf-8">
<fieldset style="width: 400px; margin:auto;">
	<legend>Đọc nội dung file</legend>
	<form method="post" action="">
		Chọn file để hiển thị nội dung
		<select name="tenfile">
			<option value="vd1.php">vd1.php</option>
			<option value="vd2.php">vd2.php</option>
			<option value="vd3.php">vd3.php</option>
			<option value="vd4.php">vd4.php</option>
			<option value="vd5.php">vd5.php</option>
			<option value="vd6.php">vd6.php</option>
			<option value="vd7.php">vd7.php</option>
			<option value="vd8.php">vd8.php</option>
			<option value="vd9.php">vd9.php</option>
		</select> 
		<input type="submit" value="Đọc nội dung">
	</form>
</fieldset>
<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//lay value cua form control co name=tenfile
		$tenfile = $_POST["tenfile"];
		//goi ham doc noi dung file va tra ve ket qua
		$content = loadfile($tenfile);
		//hien thi noi dung
		echo $content;
	}
	function loadfile($tenfile){
		//ham file_exists(ten) se tra ve true neu file ton tai, nguoc lai se tra ve false
		if(file_exists($tenfile)){
			ob_start();
			include $tenfile;
			//doc noi dung file va gan vao bien $content
			$content = ob_get_clean();
			//clear bo nho dem
			ob_flush();
			//ham tra ve gia tri
			return $content;
		}
	}
 ?>