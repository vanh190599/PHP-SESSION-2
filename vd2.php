<meta charset="utf-8">
<!-- 
	- Phuong thuc get:
		- thuoc tinh action cua the form se la: method="get" (hoac khong ghi method thi mac dinh phuong thuc cua form la get)
		- Khi truyen theo kieu GET thi tat ca cac bien se duoc truyen len url theo cau truc:
			tentrang.php?bien1=giatri1&bien2=giatri2...
			- Sau dau ? la danh sach cac bien
			- cac cap bien se cach nhau boi dau &
		- Truyen len url theo mot so cach sau:
			- Truyen tu form theo method="get"
			- Truyen tu the lien ket a
		- Lay gia tri theo phuong thuc GET: su dung doi tuong $_GET["tenbien"]
 -->
 <fieldset style="width: 300px; margin:auto;">
 	<legend>GET</legend>
 	<form action="" method="get">
 		<table cellpadding="5">
 			<tr>
 				<td>Value 1</td>
 				<td><input type="text" name="txt1" required></td>
 			</tr>
 			<tr>
 				<td>Value 2</td>
 				<td><input type="text" name="txt2" required></td>
 			</tr>
 			<tr>
 				<td></td>
 				<td><input type="submit" value="Thực hiện"></td>
 			</tr>
 		</table>
 	</form>
 	<h1><?php echo isset($_GET["txt1"]) ? $_GET["txt1"] : ""; ?></h1>
 </fieldset>
 <fieldset style="width: 500px; margin:20px auto;">
 	<legend>Truyền theo thẻ a</legend>
 	<a href="vd2.php?str=Hello world">Click here</a>
 	<h1><?php echo isset($_GET["str"]) ? $_GET["str"] : ""; ?></h1>
 </fieldset>