<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>
				Conceptual Model
			</title>
		</head>

		<h1>Conceptual Model</h1>
		<div><strong><em>Entities and Attributes</em></strong></div>
		<div><strong>Account</strong></div>
		<div>
			<ul>
				<li>accountId (Primary Key)</li>
				<li>accountEmail</li>
				<li>accountHash (for account password)</li>
			</ul>
		</div>
		<div><strong>Cart</strong></div>
		<div>
			<ul>
				<li>cartId (Primary Key)</li>
				<li>cartAccountId (Foreign Key)</li>
				<li>cartShippingOption</li>
				<li>cartTotalQuantity</li>
			</ul>
		</div>
		<div><strong>Cart Product</strong></div>
			<ul>
				<li>cartProductCartId (foreign key)</li>
				<li>cartProductProductId (foreign key)</li>
			</ul>
		<div><strong>Product</strong></div>
		<div>
			<ul>
				<li>productId (Primary Key)</li>
				<li>productPrice</li>
				<li>productDetails</li>
			</ul>
		</div>
			<div><strong><em>Relations</em></strong></div>
			<div>
				<ul>
					<li>One cart may only belong to one account.</li>
					<li>Many games can belong to many carts.</li>
				</ul>
			</div>
	<div><img src="ERD%20for%20Data%20Design%20Project%20V2%20Edit%20(1).jpg"></div>
	<div>
		<a href="index.php">Back to Index</a>
	</div>
	</html>