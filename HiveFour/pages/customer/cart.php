<!DOCTYPE html> 
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Hive4 Shopping Cart</title>
    <style>
        body{
            margin:0;
        }
        body{
            background-color: #E6DAD1;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        #bar{
            width: 100%;
            background-color: #C7D8CF;
            border-radius: 30px;
            color: #8AB49C;
            padding-left: 10px;
            padding-right: 10px;
        }
        table{
            margin-left: auto;
            margin-right: auto;
        }
        .searchbar{
            height: 20px;
            
        }  
        input[type="text"] {
            width: 100%;
            height: 40px;
            padding: 5px;
            border: 1px solid #C7D8CF;
            background-color: #C7D8CF;
            border-radius: 50px;
            box-sizing: border-box;
            margin-bottom: 5px;
            padding-left: 10px;
        } 
        .sIcon{
            background-color: #C7D8CF;
            border: 1px solid #C7D8CF;
        }
        .sIcon:hover {
            opacity: 0.8;
        }
        #list{
            margin-left: auto;
            margin-right: auto;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 50px;
            padding-left: 50px;
            background-color:#8AB49C;
            border-radius: 50px;   
            width: 800px;   
            text-align: left; 
            font-size: 20px;
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
        input{
				padding: 5px;
                border: 1px solid #E6DAD1;
                background-color: #E6DAD1;
                border-radius: 10px;
                box-sizing: border-box;
                margin-bottom: 10px;
		}
         /* Style the dropdown container */
        .custom-select {
            position: relative;
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
        }

        /* Style the dropdown menu */
        .custom-select select {
            display: block;
            width: 100%;
            font-size: 14px;
            line-height: 1.5;
            color: #555;
            background-color: #E6DAD1;
            border: 1px solid #E6DAD1;
            border-radius: 7px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        /* Style the dropdown arrow */
        .custom-select::after {
            content: "";
            position: absolute;
            top: 50%;
            right: 10px;
            width: 0;
            height: 0;
            border-top: 6px solid #555;
            border-right: 6px solid transparent;
            border-left: 6px solid transparent;
        }
        .checkout-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            color: #9D5A4D;
            background-color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }
        .checkout-button:hover{
            background-color: #8AB49C;
        }
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            color: #9D5A4D;
            background-color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }
        .back-button:hover{
            background-color: #8AB49C;
        }
    </style>
</head>
<body>
	<table id=header  border="0">
		<tr>
			<th style="padding-left: 20px;">
				<a href="HOME.php">
					HOME
				</a>
			</th>
			<th>
				<a href="search product.php">
					PRODUCTS
				</a>
			</th>
			<th>
				<a href="About Us.php">
				ABOUT US
				</a>
			</th>
			<td colspan=2><img src="design 1.png"  style="width:80px; height:80px; padding-right: 30px;"></td>
			<td>
				<a href="order.php">
					<img src="order.png" style="width: 50px;height: 50px;" class="user">
				</a>
			</td>
			<td>
				<a href="cart.php">
					<img src="cart.png" style="width: 50px;height: 50px;" class="user">
				</a>
			</td>
			<td>
				<a href="view account details.php">
					<img src="user.png" style="width:71px; height:40px;" class="user">
				</a>
			</td>
		</tr>
	</table>
    <h1 style="text-align: center; color: #8AB49C;">SHOPPING CART</h1>
    <br>
    <table>
        <tr>
            <td style="text-align: left; padding-right: 400px;">
                <input type="checkbox" id="myCheckbox" name="myCheckbox">
	            <label for="myCheckbox"><b style="color: #8AB49C; font-size: 25px;">Select all</b></label>
            </td>
            <td style="padding-left: 400px;">
            </td>
        </tr>
    </table>
    <table style="width: 60%;">
        <tr>
            <td>
    <input type="checkbox" id="myCheckbox" name="myCheckbox">
	<label for="myCheckbox">
    <table id="list" border="0">
        <tr >
            <td rowspan=2 style="width: 54px; padding-right: 10px;"><img src="earth.png"></td>
            <td style="width: 150px;">product name</td>
            <td colspan=2>Earth & Sun Beeswax Wraps</td>
        </tr>
        <tr>
            <td style="width: 150px;">Quantity <input type="number" name="quantity" min="1" max="10" value="1"></td>
            <td class="custom-select" style="width: 60px;"><label for="size">Size</label>
                <select id="size" name="size">
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
                </select></td>
            <td></td>
        </tr>
    </table>
    </label>
    <br>
    <input type="checkbox" id="myCheckbox" name="myCheckbox">
    <label for="myCheckbox">
    <table id="list"border="0">
        <tr >
            <td rowspan=2 style="width: 54px; padding-right: 10px;"><img src="gummy.png"></td>
            <td style="width: 150px;">product name</td>
            <td colspan="2">Gummy Bears Beeswax Wraps</td>
        </tr>
        <tr>
            <td style="width: 150px;">Quantity <input type="number" name="quantity" min="1" max="10" value="1"></td>
            <td class="custom-select" style="width: 60px;"><label for="size">Size</label>
                <select id="size" name="size">
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
                </select></td>
            <td></td>
        </tr>
    </table>
    </label>
    <br>
    <input type="checkbox" id="myCheckbox" name="myCheckbox">
    <label for="myCheckbox">
    <table id="list" border="0">
        <tr >
            <td rowspan=2 style="width: 54px; padding-right: 10px;"><img src="dried.png"></td>
            <td style="width: 150px;">product name</td>
            <td colspan="2">Dried Caesalpinia Flower Beeswax Wraps</td>
        </tr>
        <tr>
            <td style="width: 150px;">Quantity <input type="number" name="quantity" min="1" max="10" value="1"></td>
            <td class="custom-select" style="width: 60px;"><label for="size">Size</label>
                <select id="size" name="size">
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
                </select></td>
            <td></td>
        </tr>
    </table>
    </label>
    <br>
    <input type="checkbox" id="myCheckbox" name="myCheckbox">
    <label for="myCheckbox">
    <table id="list"border="0">
        <tr >
            <td rowspan=2 style="width: 54px; padding-right: 10px;"><img src="set.png"></td>
            <td style="width: 150px;">product name</td>
            <td colspan="2">3-in-1 Beeswax Wraps</td>
        </tr>
        <tr>
            <td style="width: 150px;">Quantity <input type="number" name="quantity" min="1" max="10" value="1"></td>
            <td class="custom-select" style="width: 60px;"><label for="size">Size</label>
                <select id="size" name="size">
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
                </select></td>
            <td></td>
        </tr>
    </table>
    </label>
    </td>
    </tr>
    </table>
    <br>
    <table>
        <tr>
            <td>
                <a href="checkout.php">
                <button type="button" class="checkout-button">Check Out</button></a>
                <a href="view product.php">
                <button type="button" class="back-button">Back</button></a>
            </td>
        </tr>
    </table>
</body>
</html>
