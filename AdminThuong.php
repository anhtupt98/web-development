<?php
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
	#tong{width:100%;height:1100px}
	#header{width:100%;height:330px}
	#top{width:101.22%;height:40px;background:#333}
	#banner{width:101.22%;height:270px;background:url(../../img/banneradmin2.jpg)}
	.menu{width:101.22%;height:50px;background:#333;display: inline-block;}
	#main{width:100%;height:740px;background:#999;margin:auto;position:absolute;top:368px}
	#hinhanh{width:90%;height:640px; background:#FFF;position:relative;left:65px;top:40px}
	a{text-decoration:none;}
	a:hover{color:#0F0}
	
	.drop1{background-color: #FFF;color: white;padding: 16px;font-size: 16px;border: none;cursor: pointer;}
	.menu1 {position: relative;display: inline-block;}
	.dropdown1 {display: none;position: absolute; background-color: #f9f9f9;min-width: 160p;z-index: 1;}
	.dropdown1 a {color: black;padding: 12px 16px;text-decoration: none;display: block;}
	.dropdown1 a:hover {background-color: #1B1B1B}
	.menu1:hover .dropdown1 {display: block;}
	.menu1:hover .drop1 {background-color: #333;}
	
	.drop2{background-color: #333;color: white;padding: 16px;font-size: 16px;border: none;cursor: pointer;}
	.menu2 {position: relative;display: inline-block;}
	.dropdown2 {display: none;position: absolute; background-color: #f9f9f9;min-width: 10px;z-index: 1;left:90px}
	.dropdown2 a {color: black;padding: 12px 16px;text-decoration: none;display: block;}
	.dropdown2 a:hover {background-color: #f1f1f1}
	.menu2:hover .dropdown2 {display: block;}
	.menu2:hover .drop2 {background-color: #333;}
	
	.drop3{background-color: #333;color: white;padding: 16px;font-size: 16px;border: none;cursor: pointer;}
	.menu3 {position: relative;display: inline-block;}
	.dropdown3 {display: none;position: absolute; background-color: #f9f9f9;min-width: 160p;z-index: 1;left:10px}
	.dropdown3 a {color: black;padding: 12px 16px;text-decoration: none;display: block;}
	.dropdown3 a:hover {background-color: #f1f1f1}
	.menu3:hover .dropdown3 {display: block;}
	.menu3:hover .drop3 {background-color: #333;}
	
	.drop4{background-color: #333;color: white;padding: 16px;font-size: 16px;border: none;cursor: pointer;}
	.menu4 {position: relative;display: inline-block;}
	.dropdown4 {display: none;position: absolute; background-color: #f9f9f9;min-width: 160p;z-index: 1;left:10px}
	.dropdown4 a {color: black;padding: 12px 16px;text-decoration: none;display: block;}
	.dropdown4 a:hover {background-color: #f1f1f1}
	.menu4:hover .dropdown4 {display: block;}
	.menu4:hover .drop4 {background-color: #333;}
	
	.drop5{background-color: #333;color: white;padding: 16px;font-size: 16px;border: none;cursor: pointer;}
	.menu5 {position: relative;display: inline-block;}
	.dropdown5 {display: none;position: absolute; background-color: #f9f9f9;min-width: 160p;z-index: 1;left:25px}
	.dropdown5 a {color: black;padding: 12px 16px;text-decoration: none;display: block;}
	.dropdown5 a:hover {background-color: #f1f1f1}
	.menu5:hover .dropdown5 {display: block;}
	.menu5:hover .drop5 {background-color: #333;}
	
	.drop6{background-color: #333;color: white;padding: 16px;font-size: 16px;border: none;cursor: pointer;}
	.menu6 {position: relative;display: inline-block;}
	.dropdown6 {display: none;position: absolute; background-color: #f9f9f9;min-width: 160p;z-index: 1;left:10px}
	.dropdown6 a {color: black;padding: 12px 16px;text-decoration: none;display: block;}
	.dropdown6 a:hover {background-color: #f1f1f1}
	.menu6:hover .dropdown6 {display: block;}
	.menu6:hover .drop6 {background-color: #333;}
	
	.danhsachsanpham{width:100%;height:100%;}
	
	.phantrang{text-align:center;width:770px;height:20px;border:1px solid #FFF;overflow: auto;position:absolute;left:200px;bottom:0px;}
	
</style>

<body>
	<div id="tong">
    	<div id="header">
        	<div id="top">
            		<table cellpadding="2" align="right">
                	<tr valign="middle">
                    	<td>
                			<a href="logout.php?cat=1"><font color="#FFFFFF">ĐĂNG XUẤT</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                		</td>
                        <td>
                			<a href="?cat=2"><font color="#FFFFFF">ĐỔI MẬT KHẨU</font></a> &nbsp;&nbsp;&nbsp;
                        </td>
                       	
                	</tr>
                    
                </table>
            </div>
        	<div id="banner">
         
            </div>
            <div class="menu">
            	
                    <div class="menu2">
            			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="drop2">QUẢN LÝ NHÀ SẢN XUẤT </button>
                            	<div class="dropdown2">
                        				<a href="?cat=3">Danh Sách Nhà Sản Xuất</a>
                                        <a href="?cat=4">Thêm Nhà Sản Xuất</a>
                   				 </div>
                      </div>
                     <div class="menu3">
            				<button class="drop3">QUẢN LÝ SẢN PHẨM </button>
                            	<div class="dropdown3">
                        				<a href="?cat=5">Danh Sách Sản Phẩm</a>
                                        <a href="?cat=6">Thêm Sản Phẩm</a>
                   				 </div>
                      </div>
                       <div class="menu4">
            				<button class="drop4">QUẢN LÝ HÓA ĐƠN</button>
                            	<div class="dropdown4">
                        				<a href="?cat=7">Danh Sách Hóa Đơn</a>
                                      </div>
                           </div>
                       <div class="menu5">
            				<button class="drop5">QUẢN LÝ THÔNG TIN KHÁCH HÀNG</button>
                            		<div class="dropdown5">
                        				<a href="?cat=8">Danh Sách Thông Tin Khách Hàng</a>
                                      </div>
           				</div>
                        <div class="menu6">
            				<button class="drop6">QUẢN LÝ TIN TỨC && SỰ KIỆN</button>
                            		<div class="dropdown6">
                        				<a href="?cat=9">Danh Sách Tin Tức && Sự Kiện</a>
                                        <a href="?cat=10">Thêm Tin Tức && Sự Kiện </a>
                                      </div>
           				</div>
            </div>	
        </div>
        <div id="main">
                <div id="hinhanh">
                	<?php
						if(isset($_GET["cat"]))
						{
							$cat=$_GET["cat"];
							switch($cat)
							{
								case 1:
									include("logout.php");
									break;
								case 2:
									include("DoiMatKhau.php");
									break;
								case 3:
									include("../QLNhaSanXuat/hienQLNSX.php");
									break;
								case 301:
									include("../QLNhaSanXuat/suaQLNSX.php");
									break;
								case 302:
									include("../QLNhaSanXuat/xoaQLNSX.php");
									break;
								case 4:
									include("../QLNhaSanXuat/themQLNSX.php");
									break;
								case 5:
									include("../QLSanPham/hienQLSP.php");
									break;
								case 501:
									include("../QLSanPham/suaQLSP.php");
									break;
								case 502:
									include("../QLSanPham/xoaQLSP.php");
									break;
								case 503:
									include("../QLSanPham/TimKiemTenSP.php");
									break;
								case 6:
									include("../QLSanPham/themQLSP.php");
									break;
								case 7:
									include("../QLHoaDon/hienQLHD.php");
									break;
								case 701:
									include("../QLHoaDon/XemChiTietHoaDon.php");
									break;
								case 702:
									include("../QLHoaDon/xoaQLHD.php");
									break;
								case 703:
									include("../QLHoaDon/suaQLHD.php");
									break;
								case 8:
									include("../QLThongTinKhachHang/hienThongTinKhachHang.php");
									break;
								case 801:
									include("../QLThongTinKhachHang/suaThongTinKhachHang.php");
									break;
								case 802:
									include("../QLThongTinKhachHang/xoaThongTinKhachHang.php");
									break;
							}
						}
						else
						{
							include("../QLSanPham/hienQLSP.php");	
						}
					?>
                </div>
        </div>
    </div>
   
</body>
</html>
<?php
ob_end_flush();
?>
