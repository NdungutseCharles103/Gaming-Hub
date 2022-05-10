<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">

<head>
	<title>Image Upload Using PHP</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}

		.main {
			height: 600px;
		}
		.inla{
			width: 50%;
			display: flex;
			align-items: center;
		}
		.uplo{
			padding: 6px 10px;
			margin-left: 6px;
			cursor: pointer;
			background-color: blue;
			border-radius: 100%;
		}
	</style>
</head>

<body>
	<div class="main">
		<?php if (isset($_GET['error'])) : ?>
			<p><?php echo $_GET['error']; ?></p>
		<?php endif ?>
		<form action="signup.php" method="post" enctype="multipart/form-data">
			<h2>Create account</h2>
			<div class="inputs">
				<div class="inlab">
					<label for="firstname">Firstname</label>
					<input type="text" placeholder="Enter First Name" name="firstname">
				</div>
				<div class="inlab">
					<label for="lastname">Lastname</label>
					<input type="text" placeholder="Enter Last Name" name="lastname">
				</div>
				<div class="inlab">
					<label for="Email">Email</label>
					<input type="email" placeholder="Enter your email" name="email">
				</div>
				<div class="inlab">
					<label for="tel">Telephone</label>
					<input type="tel" placeholder="Enter your Number" name="tel" pattern="[0-9]{10,12}">
				</div>
				<div class="inlab">
					<label for="sex">Gender</label>
					<div class="rad">
						<input type="radio" id="sex" name="gender" value="Male"><label for="Male">Male</label>
						<input type="radio" id="sex1" name="gender" value="Female"><label for="Female">Female</label>
					</div>
				</div>
				<div class="inlab">
					<label for="nationality"> Nationality</label>
					<Select name="Nationality" id="nationality">
						<option value=""> --Select--</option>
						<option value="Rwanda"> Rwanda</option>
						<option value="Uganda">Uganda</option>
						<option value="Kenya"> Kenya</option>
					</Select>
				</div>
				<div class="inlab">
					<label for="username">Username</label>
					<input type="text" placeholder="Enter your username" name="username">
				</div>
				<div class="inlab">
					<label for="password">Password</label>
					<input type="password" placeholder="Enter your Password" name="password">
				</div>
				<div class="inlab">
					<label for="c-password">Confirm Passw</label>
					<input type="password" placeholder="Comfirn your Password" name="cpassword">
				</div>
				<div class="inla">
					<p class="lp">Add a Picture</p>
					<label for="upload" class="uplo">&#10010;</label>
					<input type="file" name="my_image" id="upload" hidden>
				</div>


				<input type="submit" name="submit" value="Register">

		</form>
	</div>
</body>

</html>