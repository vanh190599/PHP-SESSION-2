<meta charset="utf-8">
<?php 
	//dinh nghia array
	$arr1 = array();
	//gan gia tri vao bien array
	$arr1[] = "Nokia";//key tu tang
	$arr1[] = "HTC";
	$arr1[] = "Apple";
	$arr1[] = "Nokia";
	$arr1[] = "LG";
	//lenh print_r se hien thi cau truc cua array
	echo "<pre>";
	print_r($arr1);
	echo "</pre>";
 ?>
 <!-- cach 1 -->
 <?php 
 	foreach ($arr1 as $key => $value) {
 		echo "<p>Key: $key - Value: $value</p>";
 	}
  ?>
<!-- cach 2 -->
  <table cellpadding="5" border="1" style="border-collapse: collapse; width: 300px;">
  	<?php foreach($arr1 as $key=>$value): ?>
  	<tr>
  		<td><?php echo $value; ?></td>
  	</tr>
   <?php endforeach; ?>
  </table>
<!-- cach 3 -->
  <table cellpadding="5" border="1" style="border-collapse: collapse; width: 300px;">
  	<?php foreach($arr1 as $value): ?>
  	<tr>
  		<td><?php echo $value; ?></td>
  	</tr>
   <?php endforeach; ?>
  </table>  