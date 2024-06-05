<?php
include '../../config/dbconn.php';
session_start();

//to check make sure thats customer not admin 

if (isset ($_SESSION ['username']) && $_SESSION ['username'] == "Customer"){
?>

<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
	<title>Hive4 HOME</title>
	<head>
		<style>
			body{
				background-image: url(Untitled\ design\ \(1\).png);
            	background-repeat: no-repeat;
				background-size: cover;
				background-attachment: fixed;
				background-position: bottom;
			}
			#acc{
				margin-left: auto;
				margin-right: auto;
				background-color:#8AB49C;
				border-radius:10px;	
				padding:20px;
				font-size:20px;
			}
			table{
				font-family:calibri, sans-serif;
				color: #E6DAD1;
			}
            #header{
				width:100%;
				background-image: url('header bg pattern.png');
				background-repeat: repeat;
				background-size: contain;
				background-color: #846228;
				padding-left:10px;	
				font-size:30px;	
				color:#E6DAD1;
			}
			a{
				text-align: center;
				color: #E6DAD1;
				text-decoration: none;
			}
			a:hover{
				color: #DE8E04;
			}
			.user:hover {
				opacity: 0.8;
			}

			.user:hover + p {
				display: block;
			}
		</style>
	</head>
	<table id=header  border="0">
		<tr>
			<th style="padding-left: 20px;">
				<a href="HOME.html">
					HOME
				</a>
			</th>
			<th>
				<a href="search product.html">
					PRODUCTS
				</a>
			</th>
			<th>
				<a href=".html">
				ABOUT US
				</a>
			</th>
			<td colspan=2><img src="design 1.png"  style="width:80px; height:80px;"></td>
			<th style="padding-left:60px;">
				<a href="LOGIN.html">
					LOGIN
				</a>
			</th>
			<th>
				<a href="REGISTER.html">
					REGISTER
				</a>
			</th>
		</tr>
	</table>
	<br>
	<table style="color: black; width: 100%; margin: 0 auto; text-align: center;">
		<tr>
			<td style="font-size: 100px; font-family: 'Times New Roman';">
				BEESWAX<br>WRAPS<br>
			</td>
		</tr>
		<tr>
			<td style="font-size: 40px; font-family:Verdana;">
				Say goodbye to plastic and hello to
				<br>sustainable freshness of our beeswax
				<br>wrap, one wrap at a time.
			</td>
		</tr>
	</table>
</html>
<?php
}

else 
{
    //if the session is not username, redirect to the page (login)
    header ("Location: login.php");
}

