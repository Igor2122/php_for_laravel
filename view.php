<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
		<a href="blog-view.php">Blog</a>
		<h1>
			<?php 
			// here we are accessign the superglobal
				$name = $_GET['name'];
				echo "Hello $name";
			?>
		</h1>
	</header>	
	<div class="container">
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

<h2>Tasks with OOP</h2>

<ul>
	<?php foreach ($tasks as $task) :?>
		<li>
			<?php if($task->completed): ?>
			<strike><?= $task->descipiton; ?></strike>
			<?php else :?> 
				<?= $task->descipiton; ?>
			<?php endif ?>
		</li>
	<?php endforeach ?>
</ul>

<h2>Tasks with DB</h2>
<div class="container ">
<h3>Completed Tasks</h3>
	<div class="d-flex justify-content-between w-75 mt-5">
		<?php foreach ($results as $result) :?>
			<?php if($result->status) :?>
				<div class="card " style="width: 18rem;">
				  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
				  <div class="card-body">
				    <h5 class="card-title"><?= $result->task ?></h5>
				    <h6 class="card-subtitle mb-2 text-success">
				    	Completed &#9989
				    </h6>
				    <p class="card-text"><?= $result->description ?></p>
				    <a href="#" class="btn btn-primary">See the post</a>
				  </div>
				</div>
			<?php endif ?>
		<?php endforeach ?>
	</div>
	<h3 class="mt-5">Ongoing Tasks</h3>
	<div class="d-flex justify-content-between w-75 mt-5">
		<?php foreach ($results as $result) :?>
			<?php if(!$result->status) :?>
				<div class="card " style="width: 18rem;">
				  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
				  <div class="card-body">
				    <h5 class="card-title"><?= $result->task ?></h5>
				    <h6 class="card-subtitle mb-2 text-danger">
				    	Get to Work
				    </h6>
				    <p class="card-text"><?= $result->description ?></p>
				    <a href="#" class="btn btn-primary">See the post</a>
				  </div>
				</div>
			<?php endif ?>
		<?php endforeach ?>
	</div>














</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>






