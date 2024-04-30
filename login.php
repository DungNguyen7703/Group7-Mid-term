<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="login.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
	<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
						<form action="test.php" method="POST" onsubmit="return validateForm()">
							<div class="input-group">
								<i class="bx bxs-user"></i>
								<input id="username" type="text" placeholder="Username" name="username" required />
							</div>
							<div class="input-group">
								<i class="bx bx-mail-send"></i>
								<input id="email" type="email" placeholder="Email" name="email" required />
							</div>
							<div class="input-group">
								<i class="bx bxs-lock-alt"></i>
								<input id="password" type="password" placeholder="Password" name="password" required />
							</div>
							<div class="input-group">
								<i class="bx bxs-lock-alt"></i>
								<input id="confirm" type="password" placeholder="Confirm password" name="confirm"
									required />
								<p id="thong-bao" style="display:none; font-size: 0.8rem; color: red;">Passwords not
									matching!</p>
							</div>
							<div class="input-group">
								<p style="font-size: 1rem;">Authentication Questions</p>
								<p style="font-size: 0.8rem">This will be important
									when you need to reset your password!</p>
								<p style="font-size: 0.8rem">Choose, one below!
									&#128150;</p>
								<i class="bx bxs-lock-alt"></i>
								<select id="authen" style="appearance: none;" title="Choose a question!" name="authen">
									<?php
									$conn = mysqli_connect("localhost", "root", "", "exam2");
									if (!$conn) {
										die("Connection failed: " . mysqli_connect_error());
									}
									$sql_questions = "SELECT * FROM questions";
									$result = $conn->query($sql_questions);
									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {
											?>
											<option value="<?php echo $row["question_id"] ?>"><?php echo $row["question"] ?>
											</option>
											<?php
										}
									}
									?>
								</select>
							</div>
							<div class="input-group">
								<i class="bx bxs-lock-alt"></i>
								<input id="answer" type="answer" placeholder="Key answer" name="answer" required />
							</div>
							<button type="submit">Sign up</button>
						</form>
						<p>
							<span> Already have an account? </span>
							<b onclick="toggle()" class="pointer"> Sign in here </b>
						</p>
					</div>
				</div>
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
						<form action="control_login.php" method="POST">
							<div class="input-group">
								<i class="bx bxs-user"></i>
								<input type="text" placeholder="Username" name="user" />
							</div>
							<div class="input-group">
								<i class="bx bxs-lock-alt"></i>
								<input type="password" placeholder="Password" name="pass" />
							</div>
						</form>
						<button>Sign in</button>
						<p>
							<b> Forgot password? </b>
						</p>
						<p>
							<span> Don't have an account? </span>
							<b onclick="toggle()" class="pointer"> Sign up here </b>
						</p>
					</div>
				</div>
				<div class="form-wrapper"></div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>Welcome</h2>
				</div>
				<div class="img sign-in"></div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up"></div>
				<div class="text sign-up">
					<h2>Join with us</h2>
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>
	<script>
		let container = document.getElementById("container");

		toggle = () => {
			container.classList.toggle("sign-in");
			container.classList.toggle("sign-up");
		};

		setTimeout(() => {
			container.classList.add("sign-in");
		}, 200);

		function validateForm() {
			var username = document.getElementById("username").value;
			var email = document.getElementById("email").value;
			var password = document.getElementById("password").value;
			var confirm = document.getElementById("confirm").value;
			var answer = document.getElementById("answer").value;

			if (password !== confirm) {
				document.getElementById("thong-bao").style.display = "block";
				setTimeout(function () {
					document.getElementById("thong-bao").style.display = "none";
				}, 2000);
				return false;
			}
			return true;
		};

	</script>
</body>

</html>