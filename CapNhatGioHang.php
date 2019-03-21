<?php
session_start();
if(isset($_POST["arrSoLuong"]))
{
	$arrSoLuong=array();
	$arrSoLuong=$_POST["arrSoLuong"];
	$dem=0;
	if(isset($_SESSION["GioHang"]))
	{
		$GioHang=$_SESSION["GioHang"];
		foreach($GioHang as $MaSP=>$SoLuong)
		{
			$_SESSION["GioHang"][$MaSP]=$arrSoLuong[$dem];
			$dem++;
			header("Location:XemGioHang.php");
		}
	}
}
else
{
	
}
?>