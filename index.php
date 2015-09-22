<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ninja Gold Game</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div id="container">
		<div id="gold">
			<span>Your Gold:</span>
			<input type="text" name='gold' value="<?= isset($_SESSION['gold_count']) ? $_SESSION['gold_count'] : '' ?>">
		</div>

		<div class="restart">
			<form action="process.php" method="post">
				<input type="hidden" name="restart" value="restart">
				<input type="submit" value="Restart">
			</form>
		</div>

		<div class="building">
			<h2>Farm</h2>
			<p>(earns 10-20 gold)</p>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="farm">
				<input type="submit" value="Find Gold">
			</form>
		</div>
		
		<div class="building">
			<h2>Cave</h2>
			<p>(earns 5-10 gold)</p>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="cave">
				<input type="submit" value="Find Gold">
			</form>
		</div>

		<div class="building">
			<h2>House</h2>
			<p>(earns 2-5 gold)</p>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="house">
				<input type="submit" value="Find Gold">
			</form>
		</div>

		<div class="building">
			<h2>Casino</h2>
			<p>(earns 0-50 gold)</p>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="casino">
				<input type="submit" value="Find Gold">
			</form>
		</div>
		<span>Activities:</span>
		<div class="log">
			<?php 
				echo isset($_SESSION['activity']) ? implode('', array_reverse($_SESSION['activity'])) : "";
			?>
		</div>


	</div>
</body>
</html>