<?php
include 'con.php';
$message = "";
if (isset($_GET['success'])) {
    $message = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    ".$_GET['success']."
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                </div>";
}
elseif (isset($_GET['error'])) {
    $message = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    ".$_GET['error']."
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                </div>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seller Rocket</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-sm fixed-top" style="background-color: #1E2248 !important;color: #F5C518 !important;">
			<a class="navbar-brand" style="color: #F5C518;">Seller Rocket</a>
		</nav>
	</header>
	<main style="margin: 90px 30px;padding: 18px;">
		<?= $message; ?>
		<h1 style="color: #F5C518;">Admin</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Platform</th>
					<th>Message</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$select = $con->prepare("SELECT * FROM contact");
					$select->execute();
					$result = $select->get_result();
					while($row = $result->fetch_assoc()) {
				?>
				    <tr>
				        <td><?php echo $row['name']; ?></td>
				        <td><?php echo $row['email']; ?></td>
				        <td><?php echo $row['phone']; ?></td>
				        <td><?php echo $row['platform']; ?></td>
				        <td><?php echo $row['message']; ?></td>
				        <td><a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td>
				    </tr>
				<?php
					}
				?>
				</table>
			</tbody>
		</table>
	</main>
	<footer>
		<nav class="navbar fixed-bottom" style="background-color: #1E2248 !important;color: #F5C518 !important;">
			<h1>Seller Rocket</h1>
			<p>927, 2nd Floor, Parameshwari Complex, E Main St, next to Bank Of Baroda, above Manapuram Gold Finance Pvt Ltd, Someshwaram, Thanjavur, Tamil Nadu 613009</p>
			<h5 style="margin-top: 10px;">+91-9944331949</h5>
			<h5 style="margin-top: 10px;">ceo@sellerrocket.in</h5>
		</nav>
	</footer>
</body>
</html>