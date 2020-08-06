
<?php 
	$so1 = "";
	$so2 = "";
	$ketqua = "";
	//khi an nut submit thi trang thai cua trang se la POST
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$so1 = $_POST["so1"];
		$so2 = $_POST["so2"];
		$ketqua = $so1 + $so2;
	}
 ?>
<meta charset="utf-8">
<fieldset style="width: 350px; margin:auto;">
	<legend>Cộng 2 số</legend>
	<form id="frm" method="post" action="">
		<table cellpadding="5">
			<tr>
				<td>Số 1</td><td><input type="number" value="<?php echo $so1; ?>" required name="so1"></td>
			</tr>
			<tr>
				<td>Số 2</td><td><input type="number" value="<?php echo $so2; ?>" required name="so2"></td>
			</tr>
			<tr>
				<td>Kết quả</td><td><input type="text" value="<?php echo $ketqua; ?>" name="ketqua" disabled></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Thực hiện">&nbsp;&nbsp;
					<a onclick="submitForm();" href="#">Thực hiện</a>
				</td>
			</tr>
		</table>
	</form>
</fieldset>
<script type="text/javascript">
	function submitForm(){
		//tac dong vao the html co id=frm, thuc hien submit form
		document.getElementById("frm").submit();
	}
</script>