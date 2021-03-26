<?php
	// Ten file: day17_demo4.php
	
	include("index.php");
	
	// Ham truy van tu cau sql dau vao, can them connection de truyen vao qua $dbConn
	function truyVanDuLieu($dbConn, $cauTruyVan){
		$ketqua = $dbConn->prepare($cauTruyVan);
		$ketqua->execute();
		return $ketqua;
	}
	
	// Khai bao user se lay thong tin
	$userName = "tuankiet";
	$passWord = "12345678";
	$lenhTruyVan = "SELECT userprofile.fullname, userprofile.dob, userprofile.avatar 
					FROM user INNER JOIN userprofile
					ON user.username = userprofile.username
					WHERE user.username = '".$userName."' AND user.password = '".$passWord."'";
	
	// $conn lay tu demo3
	$userList = truyVanDuLieu($conn, $lenhTruyVan);
// Kiem tra danh sach co rong khong
if ($userList == null){
    echo "Khong co du lieu!";
} else {
    $user = $userList->fetch();
    echo "<h2 align=center>Thong tin nguoi dung</h2>";
    echo "<table border=10 align=center>";
    echo "<tr>";
    echo "<td>Anh dai dien:</td><td><img src='".$user[2]."'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Ho va ten:</td><td>".$user[0]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Ngay sinh:</td><td>".$user[1]."</td>";
    echo "</tr>";
    echo "</table>";
}
?>
