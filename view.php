<?php require 'layout/header.php' ?>
	
<body>
	<header>
		<a href="/render_with_classes/opttwo.php">Blog</a>
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

<h1>Submit Your Name</h1>

<form method="GET" action="/names">
	<input  name="name">
	<button type="submit">Submit</button>
</form>

<?php require 'functionality/forms.php' ?>





<?php require 'layout/footer.php' ?>















