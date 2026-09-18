<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>	FOOD4THOUGHT</title>
<link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('/img/F4Ticon.png'); ?>">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Jura:wght@300..700&display=swap');
	</style>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

	<?php wp_head(); ?>

</head>

<body>

<header>

	<h1 class="logo">
		<a href="<?php echo home_url(); ?>">FOOD4THOUGHT</a>
	</h1>

	<ul class="globalNav">

	<li>
		<a 
			href="<?php echo get_post_type_archive_link('recipe'); ?>"
			<?php if(get_post_type() == 'recipe') echo 'class="active"'; ?>
		>
			Recipes
		</a>
	</li>

	<li>
		<a 
			href="<?php echo get_post_type_archive_link('tool'); ?>"
			<?php if(get_post_type() == 'tool') echo 'class="active"'; ?>
		>
			Tools & <br>
			Reviews
		</a>
	</li>

	<li>
		<a 
			href="<?php echo get_post_type_archive_link('story'); ?>"
			<?php if(get_post_type() == 'story') echo 'class="active"'; ?>
		>
			Foodstories <br>
			& Tips
		</a>
	</li>

</ul>

	<div class="loginSearchCircles">

		<a href="#">
			<div class="headerSearch">
				<i class="fa-solid fa-magnifying-glass"></i>
			</div>
		</a>

		<a href="#">
			<div class="login">
				<i class="fa-regular fa-user"></i>
			</div>
		</a>

	</div>

</header>