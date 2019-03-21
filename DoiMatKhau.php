<?php 
if(!isset($_SESSION["User"])||$_SESSION["role"]!=2)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>
function ktdoimk()
{
	var dem=0;
	var pass=document.getElementById("txtPass").value;
	var errPass=document.getElementById("errPass");
	if(pass.length==0)
	{
		errPass.innerHTML=" *Không được để trống";
	}
	else
	{
		errPass.innerHTML="";
		dem++;
	}
	var passmoi=document.getElementById("txtPassMoi").value;
	var errPassMoi=document.getElementById("errPassMoi");
	if(passmoi.length==0)
	{
		errPassMoi.innerHTML=" *Không được để trống";
	}
	else
	{
		errPassMoi.innerHTML="";
		dem++;
	}
	var passnhaplai=document.getElementById("txtPassNhaplai").value;
	var errPassNhapLai=document.getElementById("errPassNhapLai");
	if(passnhaplai.length==0)
	{
		errPassNhapLai.innerHTML=" *Không được để trống";
	}
	else
	{
		errPassNhapLai.innerHTML="";
		dem++;
	}
	if(dem==3)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>
<body>
<form method="post" action="DoiMatKhauXuLy.php">
   <table cellspacing="0" align="center" style="position:absolute;top:120px;left:430px">
    	<tr >
            <h1><font color="#666666" size="+5">♛ Thay Đổi Mật Khẩu</font></h1>
        </tr>
        <tr>
            <td><h3>Password:</h3></td>
            <td><input type="password" name="txtPass" id="txtPass"/><span id="errPass"></span></td>
        </tr>
        <tr>
            <td><h3>Password Mới:</h3></td>
            <td><input type="password" name="txtPassMoi" id="txtPassMoi"/><span id="errPassMoi"></span></td>
        </tr>
        <tr>
            <td><h3>Nhập lại Password:</h3></td>
            <td><input type="password" name="txtPassNhaplai" id="txtPassNhaplai"/><span id="errPassNhapLai"></span></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Đổi mật khẩu" onclick="return ktdoimk()"/></td>
        </tr>
    </table>
</form>
</body>
</html>