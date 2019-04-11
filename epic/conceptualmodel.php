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
		<div><strong>Your Account</strong></div>
		<div>
			<ul>
				<li>accountDetails</li>
				<li>findPowerUpRewards</li>
				<li>orderHistory</li>
				<li>pickUpAtStoreOptionID</li>
			</ul>
		</div>
		<div><strong>Game Title</strong></div>
		<div>
			<ul>
				<li></li>
			</ul>
		</div>
		<div><strong><em>Relations</em></strong></div>
		<div>
			<ul>
				<li>One game order can only belong to one user. (1 to 1)</li>
				<li>One user can order many games. (1 to m)</li>
				<li>One game title can be ordered by many users. (1 to n)</li>
				<li>Many games can be on many user orders. (m to n)</li>
			</ul>
		</div>
	</html>