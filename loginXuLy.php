<?php 
session_start();
$User = $_POST["txtUser"];
$pass = $_POST["txtPass"];
include("../KetNoi/ketnoi.inc");
$strSelect = "select * from tbltaikhoan where User='$User' and pass='$pass'";
$result = mysqli_query($con,$strSelect);
$page = "";
if(mysqli_num_rows($result)>0)
{
	
	$_SESSION["User"] = $User;
	$row = mysqli_fetch_array($result);
	$role = $row["role"];
	$_SESSION["role"] = $role;
	if($role==1)
		$page = "AdminTong.php";
	else if ($role==2)
		$page = "AdminThuong.php";
	else 
		$page = "KhachHang.php";
		
	
}
else
	$page = "../index.php";
include("../KetNoi/dongketnoi.inc");
header("Location:$page");
?>