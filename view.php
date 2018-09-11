<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic Functionality</title>
	<style>
		header {
			background: grey;
			text-align: center;
			padding: 2em;
		}
	</style>
</head>
<body>
	<header>
		<h1>
			<?php 
			// here we are accessign the superglobal
				$name = $_GET['name'];
				echo "Hello $name";
			?>
		</h1>
	</header>	
		<h2>
			<?= $names ?>
		</h2>
		<ul> 
			<!-- option 1 -->
			<?php foreach ($names as $name) : ?>
			 <li> <?= $name ?> </li>
			<?php endforeach; ?>

			<!-- option 2 -->
			<?php 
				foreach ($names as $name) {
					echo "<li> $name </li>";
				};
			?>
		</ul>
    	
		<ul>
			<?php foreach ($animals as $animal) :?>
				<li>This animal is:<a href=""><strong> <?= $animal ?></a></strong></li>
			<?php endforeach ?>

		</ul>

<ul>
	<?php foreach ($person as $key => $value) : ?>
		<li><?= $key;  ?>:   <strong><a href=""><?= $value  ?></strong></a></li>
	<?php endforeach ?>
</ul>

<?php foreach ($todo as $key => $value) :?>
	<li>
		<?=  ucwords($key)?>: <strong><?= $value ?></strong>
	</li>
<?php endforeach ?>

<h3>Oher option with manual control</h3>
<ul>
	<li>Name: <strong><?= $todo['title']; ?></strong> </li>
	<li>Due date: <strong><?= $todo['due']; ?></strong> </li>
	<li>Assigned to: <strong><?= $todo['assigned']; ?></strong> </li>


	<!-- terinary operator .... ? 'do something' : 'do something else' -->
	<li>Status: <strong><?= $todo['completed']? 'Complete' : 'Incomplete' ?></strong> </li>
</ul>

<h2>Conditionals</h2>
<!-- long way -->
	<?php 
		if($todo['completed']) {
			echo 'Complete '. '&#9989';
		} else {
			echo '';
		};
	?>

	<br>
	<br>
	<br>
	<br>
<!-- terinary operator both will work the same way -->
<?= $todo['completed']? 'Complete' : 'Incomplete' ?>

<!-- Another option to do if statements -->
<?php if($todo['completed']) : ?>
	<h3>The task is completed &#9989</h3>
<?php else :?>
	<h3>You need to work on it</h3>
<?php endif ?>

<h2>Functions</h2>











































</body>
</html>






