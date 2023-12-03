<!DOCTYPE html>
<html>
<head>
	<title>Vendor Management System - Admin Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		/* CSS styling for the dashboard */
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		nav {
			background-color: #eee;
			padding: 10px;
		}
		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		nav li {
			display: inline-block;
			margin-right: 20px;
		}
		nav li a {
			color: #333;
			text-decoration: none;
		}
		nav li a:hover {
			color: #fff;
			background-color: #333;
			padding: 5px;
			border-radius: 5px;
		}
		main {
			padding: 20px;
		}
		h1 {
			font-size: 24px;
			margin-bottom: 20px;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #eee;
		}
		tr:hover {
			background-color: #f5f5f5;
		}
		.button {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 5px;
		}
		.button:hover {
			background-color: #3e8e41;
		}

        nav ul{

            width: 100%;
            display: inline-flex;
           justify-content: center;
           align-items: center;
            }
     
	</style>
</head>
<body>
	<header>
		<h1>Vendor Management System</h1>
	</header>
	<nav>
		<ul>
			<li><a href="#">Admin-Dashboard</a></li>
			<li><a href="#">Vendors</a></li>
			<li><a href="#">Products</a></li>
			<li><a href="#">Orders</a></li>
		</ul>
	</nav>
	<main>
		<h1>Vendor List</h1>
		<table>
			<thead>
				<tr>
					<th>Vendor ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>001</td>
					<td>Vendor 1</td>
					<td>vendor1@example.com</td>
					<td>9876543210</td>
					<td><button class="button">Edit</button><button class="button">Delete</button></td>
				</tr>
				<tr
