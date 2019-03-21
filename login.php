<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>
function ktlogin()
{
	var dem=0;
	var User=document.getElementById("txtUser").value;
	var errUser=document.getElementById("errUser");
	var regUser=/^[A-Za-z0-9]{3,16}$/;
	var kqUser=regUser.test(User);
	if(User.length==0)
	{
		errUser.innerHTML=" *Không được để trống";
	}
	else if(kqUser==false)
	{
		errUser.innerHTML=" *Không đúng định dạng";
	}
	else
	{
		errUser.innerHTML="";
		dem++;
	}
	var pass=document.getElementById("txtPass").value;
	var errpass=document.getElementById("errPass");
	var regPass=/^[A-Za-z0-9]+$/;
	var kqPass=regPass.test(pass);
	if(pass.length==0)
	{
		errpass.innerHTML=" *Không được để trống";
	}
	else if(kqPass==false)
	{
		errpass.innerHTML=" *Không đúng định dạng";
	}
	else
	{
		errpass.innerHTML="";
		dem++;
	}
	if(dem==2)
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
<?php	
	$User = "";
	$pass = "";
	if(isset($_SESSION["User"]))
	{
		$User = $_SESSION["User"];
			
	}

?>
<form action="login/loginXuLy.php" method="post">
	<table  cellspacing="0" align="center" style="position:absolute;top:100px;left:370px">
    	<tr>
            <h1><font color="#666666" size="+5">♛ Đăng Nhập Tài Khoản</font></h1>
        </tr>
    	<tr>
        	<td><h3><font color="#333333">Username:</font></h3></td>
            <td><font color="#333333"><input type="text" name="txtUser" value="<?php echo $User ?>" size="32" id="txtUser"/><span id="errUser"></span></font></td>
        </tr>
        <tr>
        	<td><h3><font color="#333333">Password:</font></h3></td>
            <td><font color="#333333"><input type="password" name="txtPass" size="32" id="txtPass"/><span id="errPass"></span></font></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Đăng nhập" onclick="return ktlogin()"/></td>
        </tr>
    </table>

</form>
</body>
</html>
