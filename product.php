<?php 
	
	$con = mysqli_connect('localhost','root','','shop');

	$res = mysqli_query($con,"select * from products");

	$rescart = mysqli_query($con,"select * from cart inner join products on cart.prodID = products.pid");



 ?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Prodcuts</h1>

	<table cellspacing="0" cellpadding="20" border="1" style="width: 50%;text-align: center;">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<?php 
			while($prod = mysqli_fetch_assoc($res)){
				echo '<tr>
		 	<td>'.$prod['pid'].'</td>
		 	<td>'.$prod['name'].'</td>
		 	<td>'.$prod['price'].'</td>
		 	<td>
		 		<a href="addtocart.php?prodid='.$prod['pid'].'">
		 		<button>Add to Cart</button></a>
		 	</td>
		 </tr>';
			}

		 ?>
	</table>



<h1>Cart</h1>

	<table cellspacing="0" cellpadding="20" border="1" style="width: 50%;text-align: center;">
		<tr>
			<th>ID</th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Action</th>
		</tr>
		<?php 
			while($item = mysqli_fetch_assoc($rescart)){
				echo '<tr>
		 	<td>'.$item['cartID'].'</td>
		 	<td>'.$item['name'].'</td>
		 	<td>'.$item['prodPrice'].'</td>
		 	<td>'.$item['prodQty'].'</td>
		 	<td>
		 		<a href="removeprod.php?prodid='.$item['cartID'].'">
		 		<button>Remove</button></a>
		 	</td>
		 </tr>';
			}

		 ?>
	</table>	
	<br>

	<a href="buyprod.php">Buy now</a>
	<br>
	<br>
	<br>
</body>
</html>