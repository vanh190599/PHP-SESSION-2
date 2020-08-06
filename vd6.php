<meta charset="utf-8">
<?php 
	$sv1 = array("hoten"=>"Nguyễn Văn A","email"=>"nva@mail.com");
	$sv2 = array("hoten"=>"Nguyễn Văn B","email"=>"nvb@mail.com");
	$sv3 = array("hoten"=>"Nguyễn Văn C","email"=>"nvc@mail.com");
	$sv4 = array("hoten"=>"Nguyễn Văn D","email"=>"nvd@mail.com");
	$sv5 = array("hoten"=>"Nguyễn Văn E","email"=>"nve@mail.com");
	$sinhvien = array($sv1,$sv2,$sv3,$sv4,$sv5);
	echo "<pre>";
	print_r($sinhvien);
	echo "</pre>";
 ?>
 <fieldset style="width: 400px;">
 	<legend>Danh sách sinh viên</legend>
 	<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
 		<tr>
 			<th>Họ tên</th><th>Email</th>
 		</tr>
 		<?php foreach($sinhvien as $rows): ?>
 		<tr>
 			<td><?php echo $rows["hoten"]; ?></td>
 			<td><?php echo $rows["email"]; ?></td>
 		</tr>
 		<?php endforeach; ?>
 	</table>
 </fieldset>