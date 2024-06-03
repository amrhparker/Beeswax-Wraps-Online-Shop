<?php 
	include '../../config/dbconn.php';
	session_start();
	## verify if the session user is admin
	if(isset($_SESSION['username']) && $_SESSION['username'] == "Administrator"){
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="update" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Hive4</title>
    <style>
        body{
            background-color: #E6DAD1;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0;
			padding: 0;
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
        /* #myButton{
            background-color: #8AB49C;
            border: 1px solid #8AB49C;
            color: #E6DAD1;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
            text-align: left;
        } */
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
<body>
	<table id=header  border="0">
		<tr>
			<th style="padding-left: 20px;">
				<a href="admin users list.php">
					USERS
				</a>
			</th>
			<th>
				<a href="admin product list.php">
					PRODUCTS
				</a>
			</th>
			<th>
				<a href="admin orders.php">
				ORDERS
				</a>
			</th>
			<td colspan=2><img src="design 1.png"  style="width:60px; height:60px;"></td>
			<th style="padding-left:60px;">
				<a href="admin dashboard.php">
					DASHBOARD
				</a>
			</th>
			<td>
				<a href="admin update account.php">
					<img src="user.png" style="width:71px; height:40px;" class="user">
				</a>
			</td>
		</tr>
	</table>

    <!--- SEARCH PRODUCT --->
    <h1 style="text-align: center; color: #8AB49C;">SEARCH PRODUCT</h1>
    <form action="search.php" method="POST">
        <table style="width: 800px; border-spacing: 5px;" border="0">
            <tr>
                <td>
                    <table id="bar" border="0">
                        <tr>
                            <td style="text-align: center;">
                                    <input type="text" name="query" placeholder="Insert product name" class="searchbar">
                            </td>
                            <td style="text-align: right;">
                                <button type="submit" name="submitProduct" class="sIcon" style="width: 22px; height: 22px; background: none; border: none; padding: 0; cursor: pointer;">
                                    <img src="search.png" alt="Submit" style="display: inline-block;">
                                </button>
                            </td>
                        </tr>
                    </table>
                </td>
    <!--- ADD PRODUCT --->
                <td style="width: 48px;">
                    <a href="add new product.php">
                        <img src="add new.png">
                    </a>
                </td>

            </tr>
        </table>
    </form>
    <!--- PRODUCT LIST --->
    <?php
        $result = getProduct();
        while ($row = mysqli_fetch_assoc($result)) {
        $resultStck = getProductStock($row['Product_ID']);
        $productStock = mysqli_fetch_array($resultStck);
        displayProduct($row['Product_Name'], $row['Product_Image'], $productStock[0], $row['Product_ID']);
        }
    ?>

    <!-- <table id="list"border="0">
        <tr >
            <td rowspan=2 style="width: 54px; padding-right: 10px;"><img src="set.png"></td>
            <td style="width: 150px;">product name</td>
            <td colspan="2">3-in-1 Beeswax Wraps</td>
            <td style="width: 120px; padding-left:10px;">
                <a href="admin update product.php">
                    <b>update</b>
                </a>
            </td>
        </tr>
        <tr>
            <td style="width: 150px;">stock available</td>
            <td style="width: 60px;">453</td>
            <td>units</td>
            <td><button id="myButton"><b>Out of stock</b></button></td>
        </tr>
    </table> -->
    <script>
        document.getElementById('myButton').addEventListener('click', function() {
        document.getElementById('myParagraph').style.display = 'block';
    });
    </script>
    <script>
        function handleSearch() {
            const query = document.getElementById('searchInput').value;
            const searchLink = document.getElementById('searchLink');
            searchLink.href = `search.php?query=${encodeURIComponent(query)}`;
        }
    </script>
</body>
</html>


<?php
} 
Else
{	## if the session username is no admin, redirect the page to the login page 
header("Location: admin login.php");
}

//get product from database
function getProductStock($productId){
    include '../../config/dbconn.php';
  
	$sql = "SELECT SUM(Size_Stock)
	FROM product_size
    WHERE Product_ID='$productId'";
	$result = mysqli_query($dbconn, $sql);
	return $result;
}

// get products from database
function getProduct(){
    include '../../config/dbconn.php';
  
	$sql = "SELECT *
	FROM product";
	$result = mysqli_query($dbconn, $sql);
	return $result;
}

// display product
function displayProduct($productName, $productPic, $productStock, $productId){
    $product = '
        <br>
        <form id="updateForm" action="" method="GET">
        <table id="list" border="0">
        <tr>
            <td colspan=5>
                <p id="myParagraph" style="display:none; color: red; font-size: 25px; text-align: center;">OUT OF STOCK</p>
            </td>
        </tr>
        <tr>
            <td rowspan=2 style="width: 54px; padding-right: 10px;"><img src="'.$productPic.'" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; overflow: hidden;"></td>
            <td style="width: 150px;">product name</td>
            <td colspan=2>'.$productName.'</td>
            <td style="width: 120px; padding-left:10px;">
                <!-- link to specific product details -->
                <a href="admin update product.php?productId='.$productId.'">
                    <b>update</b>
                </a>
                
            </td>
        </tr>
        <tr>
            <td style="width: 150px;">stock available</td>
            <td style="width: 60px;">'.$productStock.'</td>
            <td>units</td>
            <td><button id="myButton"><b>Out of stock</b></button></td>
        </tr>
        </table>
        </form>
    ';
    echo $product;
}

?>
