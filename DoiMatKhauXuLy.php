<?php
	session_start();
	if(isset($_POST["txtPass"]) && ($_POST["txtPassMoi"]) && ($_POST["txtPassNhaplai"]))
	{
		$Pass=$_POST["txtPass"];
		$PassMoi=$_POST["txtPassNhaplai"];
		$User=$_SESSION["User"];
		include("../KetNoi/ketnoi.inc");
		$strSelect="select * from tbltaikhoan where User='$User' and pass='$Pass'";
		$result=mysqli_query($con,$strSelect);
		if(mysqli_num_rows($result)==0)
		{
			header("Location:AdminThuong.php");
		}
		else
		{
			mysqli_query($con,"update tbltaikhoan set pass='$PassMoi' where User='$User' ");
			unset($_SESSION["User"]);
			header("Location:AdminThuong.php");
		}
		include("../KetNoi/dongketnoi.inc");
	}
?>