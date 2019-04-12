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
				<li>accountID (Primary Key)</li>
				<li>accountEmail</li>
				<li>accountPassword</li>
			</ul>
		</div>
		<div><strong>Cart</strong></div>
		<div>
			<ul>
				<li>cartID (Primary Key)</li>
				<li>cartShippingOption</li>
			</ul>
		</div>
		<div>cartProduct</div>

		<div><strong><em>Product</em></strong></div>
		<div>
			<ul>
				<li>productID (Primary Key)</li>
				<li>productPrice</li>
				<li>productDetails</li>
				<li>productQuantity</li>
				<li>productProtectionPlan</li>
			</ul>
			<div><strong><em>Relations</em></strong></div>
			<div>
				<ul>
					<li>One cart may only belong to one account.</li>
					<li>Many games can belong to many carts.</li>
				</ul>
			</div>
		</div>
	</html>